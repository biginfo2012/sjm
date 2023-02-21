<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Get_result extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		$this->worker_name = null;
	}

	/**
	 * 訪問結果集計を取得します。
	 *
	 * ディストリクトまたは営業マンID、訪問先ID、対象期間で絞り込み、
	 * 可視範囲内のスケジュールを取得します。
	 */
	public function execute($value='')
	{
		$this->db->from('schedules, facilities, accounts');
		$this->db->select('schedules.id');
		$this->db->select('schedules.account_id');
		$this->db->select('schedules.visit_schedule');
		$this->db->select('schedules.report_type');
		$this->db->select('schedules.report_date');
		$this->db->select('schedules.remarks');
		$this->db->select('schedules.visit_comment');
		$this->db->select('schedules.ope_support_remarks');
		$this->db->select('accounts.name as worker_name');
		$this->db->select('facilities.name as facility_name');
		$this->db->select('navx_report.remarks as navx_report_remarks');

		$this->db->where('schedules.account_id = accounts.id');
		$this->db->where('facilities.id = schedules.facility_id');

		$this->db->where('schedules.report_date is not null', '', false);

		$this->db->join('navx_report', 'schedules.navx_report_id = navx_report.id', 'left');
		$this->db->order_by('schedules.visit_schedule', 'desc');

		if(!is_null($value['employee_number'])){
			$this->db->where('accounts.employee_number', $value['employee_number'] );
		}

		if($value['district_id'] != '' ){
			$this->db->where('schedules.district_id', $value['district_id']  );
		}

		if($value['facility_id'] != '' ){
			$this->db->where('schedules.facility_id', $value['facility_id']  );
		}

		switch ($value['mode']) {
			case 'day':
				$this->db->where('schedules.visit_schedule', $value['date']);

				break;

			case 'all':
				// $this->db->where('schedules.visit_schedule', $value['date']);

				break;

            case 'search':
			case 'week':
				$this->db->where('schedules.visit_schedule >= ', $value['span_from']);
				$this->db->where('schedules.visit_schedule <= ', $value['span_to']);
				break;

            case 'year':
			case 'month':
				$this->db->like('schedules.visit_schedule', $value['span'], 'both');

				break;

			default:
				# code...
				break;
		}

		$this->db->where('schedules.active', '1', FALSE);
		$query = $this->db->get();
		$schedules = $query->result_array();


		if (isset($value['employee_number']) && $value['employee_number'] != '') {
			$this->db->from('accounts');
			$this->db->select('accounts.name');
			$this->db->where('accounts.employee_number', $value['employee_number']);
			$query     = $this->db->get();
			$account = $query->row_array();

			$this->worker_name = $account['name'];
		}else{

			// $value['district_id']
			$this->db->select('districts.name');
			$this->db->from('districts');
			$this->db->where('districts.district_id', $value['district_id']);

			$query     = $this->db->get();
			$account = $query->row_array();

			$this->worker_name = $account['name'];
		}

		return $schedules;
	}

}

/* End of file get_result.php */
/* Location: ./application/models/get_result.php */