<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Get_month_schedules extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		$this->worker_name = null;

	}

	/**
	 * 特定の月のスケジュールを参照します。
	 *
	 * ディストリクトまたは営業マンIDで絞り込み、
	 * 可視範囲内のスケジュールを取得します。
	 *
	 */
	public function getList($value='')
	{

		$days = array();
		// 何週間あるのか割り出す
		$start_date    = $value['span'].'-01';
		$start_week    = date('W',      strtotime($start_date));
		$start_weekday = date('w',      strtotime($start_date));

		$last_date  = date('Y-m-t', strtotime($start_date));
		$last_week  = date('W',     strtotime($last_date));
		$month_days = date('t',     strtotime($start_date));

		$calendar_start_date = date('Y-m-d', strtotime($start_date.' -'.($start_weekday-1).' days'));

		// 1ヶ月分の枠を作ります
		$frame = array(
			'show'   => 0,
			'label'  => 0,
			'sales'  => 0,
			'fce'    => 0,
			'notyet' => 0,
			'style'  => 0,
		);

		// 今日の予定を取得してきます
		$this->db->from('schedules');
		$this->db->select('schedules.title');
		$this->db->select('schedules.district_id');
		$this->db->select('schedules.account_id');
		$this->db->select('schedules.role_code');
		$this->db->select('schedules.visit_schedule');
		$this->db->select('schedules.visit_time_from');
		$this->db->select('schedules.visit_time_to');
		$this->db->select('schedules.report_date');
		$this->db->like('schedules.visit_schedule', $value['span'], 'both');

		$this->db->from('accounts');
		$this->db->where('schedules.account_id = accounts.id');
		$this->db->where('schedules.active', '1', FALSE);

		if (isset($value['employee_number'])) {
			$this->db->select('accounts.name');
			$this->db->where('accounts.employee_number', $value['employee_number']);
		}else{
			$this->db->where('schedules.district_id',   $value['district_id']);
		}

		if(isset($value['division_type'])){
			switch ($value['division_type']) {
				case 'crm':
					$this->db->where('accounts.role_code >', '1', FALSE);
					break;

				case 'af':
					$this->db->where('accounts.role_code <', '2', FALSE);
					break;
			}
		}

		$this->db->order_by('schedules.visit_schedule',  'asc');
		$this->db->order_by('schedules.visit_time_from', 'asc');
		$this->db->order_by('schedules.account_id',      'asc');
		$query     = $this->db->get();
		$schedules = $query->result_array();

		if(empty($schedules)){

			if (isset($value['employee_number'])) {
				$this->db->from('accounts');
				$this->db->select('accounts.name');
				$this->db->select('accounts.district_id');
				$this->db->select('accounts.role_code');
				$this->db->where('accounts.employee_number', $value['employee_number']);
				$query   = $this->db->get();
				$account = $query->row_array();

				$this->worker_name = $account['name'];
				$this->district_id = $account['district_id'];

				if($account['role_code'] == 0 or $account['role_code'] == 2){
					unset($frame['fce']);
				}else if($account['role_code'] == 1 or $account['role_code'] == 3){
					unset($frame['sales']);
				}

			}else{

				// $value['district_id']
				$this->db->select('districts.name');
				$this->db->from('districts');
				$this->db->where('districts.district_id', $value['district_id']);

				$query   = $this->db->get();
				$account = $query->row_array();

				$this->worker_name = $account['name'];
			}

		}

		$schedules_tmp = array();
		foreach ($schedules as $key => $val) {
			if (isset($value['employee_number']) && $this->worker_name == '') {
				$this->worker_name = $val['name'];
				$this->district_id = $val['district_id'];

				if($val['role_code'] == 0 or $val['role_code'] == 2){
					unset($frame['fce']);
				}else if($val['role_code'] == 1 or $val['role_code'] == 3){
					unset($frame['sales']);
				}

			}

			$val['visit_date'] = date('Ymd',strtotime($val['visit_schedule']));

			if(!isset($schedules_tmp[$val['visit_date']])){
				$schedules_tmp[$val['visit_date']]          = $frame;
				$schedules_tmp[$val['visit_date']]['show']  = 1;
				$schedules_tmp[$val['visit_date']]['label'] = date('j',strtotime($val['visit_schedule']));
			}

			if($val['role_code'] == 0 or $val['role_code'] == 2){
				$schedules_tmp[$val['visit_date']]['sales']++;
			}else if($val['role_code'] == 1 or $val['role_code'] == 3){
				$schedules_tmp[$val['visit_date']]['fce']++;
			}

			$notyet_reported = 0;
			$expire_datetime = $val['visit_schedule']. sprintf('%d:%02d', substr($val['visit_time_to'], 0,2), substr($val['visit_time_to'], 2,2));
			if(date('YmdHi', strtotime($expire_datetime)) < date('YmdHi') && is_null($val['report_date'])){
				$notyet_reported = 1;
			}

			$schedules_tmp[$val['visit_date']]['notyet'] += $notyet_reported;
		}


		$weeks = $last_week - $start_week + 1;

		for ($i=0; $i < $weeks * 7; $i++) {
			$date    = date('Ymd', strtotime($calendar_start_date .' +'.$i.' days'));
			$label   = date('j',   strtotime($calendar_start_date .' +'.$i.' days'));
			$week_no = date('W',   strtotime($calendar_start_date .' +'.$i.' days')) - $start_week;

			$days[$week_no][$date]          = $frame;
			$days[$week_no][$date]['show']  = 0;
			$days[$week_no][$date]['label'] = $label;

			if(isset($schedules_tmp[$date])){
				$days[$week_no][$date] = $schedules_tmp[$date];
			}

			$days[$week_no][$date]['style'] = 'default';
			if(date('Y-m', strtotime($calendar_start_date .' +'.$i.' days')) != $value['span']){
				$days[$week_no][$date]['style'] = 'unfocus';
			}

		}

		return $days;

	}

}

/* End of file get_schedules.php */
/* Location: ./application/models/get_schedules.php */