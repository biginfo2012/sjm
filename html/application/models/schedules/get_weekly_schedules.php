<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Get_weekly_schedules extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		$this->worker_name = null;
		$this->next_page = 0;

	}


	/**
	 * 特定の週のスケジュールを参照します。
	 *
	 * ディストリクトまたは営業マンIDで絞り込み、
	 * 可視範囲内のスケジュールを取得します。
	 */
	public function getList($value='')
	{

		$this->db->select('accounts.id');
		$this->db->select('accounts.region_id');
		$this->db->select('accounts.district_id');
		$this->db->select('accounts.role_code');
		$this->db->select('accounts.name');
		$this->db->select('accounts.employee_number');
		$this->db->from('accounts');
		$this->db->where('accounts.active',      1);

		if(isset($value['role_code'])){
			$this->db->where('accounts.role_code', $value['role_code']);
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

		$this->db->order_by('accounts.employee_number', 'asc');

		if (isset($value['employee_number'])) {
			$this->db->where('accounts.employee_number', $value['employee_number']);
		}else{
			$this->db->limit($value['limit']+1, $value['page'] * $value['limit']);
			$this->db->where('accounts.district_id', $value['district_id']);
		}

		$query = $this->db->get();

		if($query->num_rows() == 0){
			return null;
		}

		$accounts                = $query->result_array();
		$schedule_get_account_id = array();

		$return = array();
		// foreach ($accounts as $key => $val) {
		// 	$val['schedules']          = array();
		// 	$return[$val['id']]        = $val;
		// 	$schedule_get_account_id[] = $val['id'];
		// }

		if(isset($value['employee_number'])){
			$val = $accounts[0];
			$val['schedules']          = array();
			$return        = $val;
			$schedule_get_account_id[] = $val['id'];
			$this->worker_name = $val['name'];
			$this->district_id = $val['district_id'];
		}else{

			if($query->num_rows() == $value['limit']+1){
				unset($accounts[$value['limit']]);
				$this->next_page = 1;
			}

			foreach ($accounts as $key => $val) {
				$val['schedules']          = array();
				$return[$val['id']]        = $val;
				$schedule_get_account_id[] = $val['id'];
			}
		}

		// 今日の予定を取得してきます
		$this->db->from('schedules');
		$this->db->select('schedules.id');
		$this->db->select('schedules.role_code');
		$this->db->select('schedules.title');
		$this->db->select('schedules.account_id');
		$this->db->select('schedules.visit_schedule');
		$this->db->select('schedules.visit_time_from');
		$this->db->select('schedules.visit_time_to');
		$this->db->select('schedules.report_date');
		$this->db->where_in('schedules.account_id',      $schedule_get_account_id);
		$this->db->where('schedules.visit_schedule >= ', $value['span_from']);
		$this->db->where('schedules.visit_schedule <= ', $value['span_to']);
		$this->db->where('schedules.active', '1', FALSE);

		$this->db->order_by('schedules.visit_schedule', 'asc');
		$this->db->order_by('schedules.visit_time_from', 'asc');
		$this->db->order_by('schedules.account_id',      'asc');
		$query     = $this->db->get();
		$schedules = $query->result_array();

		if(isset($value['employee_number'])){
			foreach ($schedules as $key => $val) {
				$val['visit_date'] = date('Ymd',strtotime($val['visit_schedule']));

				$past_time = (substr($val['visit_time_to'], 0,2) - substr($val['visit_time_from'], 0,2)) * 60 -
					((60- substr($val['visit_time_to'], 2,2)) - (60 - substr($val['visit_time_from'], 2,2)));
				$height_mergin = (substr($val['visit_time_from'], 0,2) * 60 + substr($val['visit_time_from'], 2,2)) - 420;

				$notyet_reported = 0;
				$expire_datetime = $val['visit_schedule']. sprintf('%d:%02d', substr($val['visit_time_to'], 0,2), substr($val['visit_time_to'], 2,2));
				if(date('YmdHi', strtotime($expire_datetime)) < date('YmdHi') && is_null($val['report_date'])){
					$notyet_reported = 1;
				}

				$return['schedules'][$val['visit_date']]['date'][] = array(
					'schedule_id'     => $val['id'],
					'role_code'       => $val['role_code'],
					'title'           => $val['title'],
					'visit_time_from' => sprintf('%d:%02d', substr($val['visit_time_from'], 0,2), substr($val['visit_time_from'], 2,2)),
					'visit_time_to'   => sprintf('%d:%02d', substr($val['visit_time_to'], 0,2),   substr($val['visit_time_to'], 2,2)),
					'visit_span'      => $val['visit_time_to'] - $val['visit_time_from'],
					'notyet_reported' => $notyet_reported,
					'visit_span'      => $past_time * 2.5,
					'height_mergin'   => $height_mergin * 2.5,
				);
			}

		}else{
			foreach ($schedules as $key => $val) {
				$val['visit_date'] = date('Ymd',strtotime($val['visit_schedule']));

				$notyet_reported = 0;
				if(date('Ymd', strtotime($val['visit_schedule'])) == date('Ymd')){
					if(date('Hi') > $val['visit_time_to'] && is_null($val['report_date'])){
						$notyet_reported = 1;
					}
				}

				$notyet_reported = 0;
				$expire_datetime = $val['visit_schedule']. sprintf('%d:%02d', substr($val['visit_time_to'], 0,2), substr($val['visit_time_to'], 2,2));
				if(date('YmdHi', strtotime($expire_datetime)) < date('YmdHi') && is_null($val['report_date'])){
					$notyet_reported = 1;
				}

				$return[$val['account_id']]['schedules'][$val['visit_date']]['date'][] = array(
					'schedule_id'     => $val['id'],
					'role_code'       => $val['role_code'],
					'title'           => $val['title'],
					'visit_time_from' => sprintf('%d:%02d', substr($val['visit_time_from'], 0,2), substr($val['visit_time_from'], 2,2)),
					'visit_time_to'   => sprintf('%d:%02d', substr($val['visit_time_to'], 0,2),   substr($val['visit_time_to'], 2,2)),
					'visit_span'      => $val['visit_time_to'] - $val['visit_time_from'],
					'notyet_reported' => $notyet_reported,
				);
			}
		}

		return $return;

	}

}

/* End of file get_schedules.php */
/* Location: ./application/models/get_schedules.php */