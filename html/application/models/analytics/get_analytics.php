<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Get_analytics extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();

	}

	/**
	 * ディストリクトID、もしくはリージョンIDで絞り込んで解析情報を取得します。
	 *
	 *
	 *
	 */
	public function getData($value='')
	{

		$this->db->from('schedules, accounts, facilities');
		$this->db->where('schedules.account_id  = accounts.id');
		$this->db->where('schedules.facility_id = facilities.id');
		$this->db->where('schedules.active',  1);
		$this->db->where('accounts.active',   1);
		$this->db->where('facilities.active', 1);
		$this->db->select('schedules.id');
		$this->db->select('schedules.account_id');
		$this->db->select('schedules.region_id');
		$this->db->select('schedules.district_id');
		$this->db->select('schedules.facility_id');
		$this->db->select('schedules.visit_schedule');
		$this->db->select('schedules.visit_time_from');
		$this->db->select('schedules.visit_time_to');
		$this->db->select('schedules.visit_to');
		$this->db->select('schedules.sales_type');
		$this->db->select('schedules.report_type');
		$this->db->select('schedules.report_date');
		$this->db->select('schedules.navx_report_id');
		$this->db->select('schedules.case_name');
		$this->db->select('schedules.capital');
		$this->db->select('schedules.witness_content');
		$this->db->select('schedules.ope_support_remarks');
		$this->db->select('schedules.remarks');
		$this->db->select('schedules.accuracy');
		$this->db->select('schedules.sales_status');
		$this->db->select('schedules.status_report');
		$this->db->select('accounts.region_id');
		$this->db->select('accounts.district_id');
		$this->db->select('accounts.role_code');
		$this->db->select('accounts.employee_number');
		$this->db->select('accounts.name');
		$this->db->select('facilities.area_code');
		$this->db->select('facilities.pref_code');
		$this->db->select('facilities.address');
		$this->db->select('facilities.name');

		if($value['district_id'] != ''){
			$this->db->where('schedules.district_id', $value['district_id']);
		}

		if($value['region_id'] != ''){
			$this->db->where('schedules.region_id', $value['region_id']);
		}

		# TODO : ページング

		$query  = $this->db->get();
		$result = $query->result_array();

		return $result;
	}
}

/* End of file get_analytics.php */
/* Location: ./application/models/get_analytics.php */