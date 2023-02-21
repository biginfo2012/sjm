<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Get_schedule_detail extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();

	}

	/**
	 * 特定のスケジュール詳細を参照します。
	 *
	 * NavXレポートがある場合は併せて取得します。
	 *
	 */
	public function execute($value='')
	{

		$this->db->from('schedules');
		$this->db->from('facilities');
		$this->db->select('schedules.id as schedule_id');
		$this->db->select('schedules.account_id');
		$this->db->select('schedules.region_id');
		$this->db->select('schedules.district_id');
		$this->db->select('schedules.facility_id');
		$this->db->select('schedules.role_code');
		$this->db->select('schedules.title');
		$this->db->select('schedules.visit_schedule');
		$this->db->select('schedules.visit_time_from');
		$this->db->select('schedules.visit_time_to');
		$this->db->select('schedules.visit_to as visit_to_str');
		$this->db->select('schedules.visit_type as visit_type_str');
		$this->db->select('schedules.visit_valid_type');
		$this->db->select('schedules.visit_comment');
		$this->db->select('schedules.sales_type as sales_type_str');
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
		$this->db->select('schedules.active');
		$this->db->select('facilities.name as facility_name');
		$this->db->select('facilities.require_navx_report');
		$this->db->where('schedules.id', $value['schedule_id']);
		$this->db->where('facilities.id = schedules.facility_id');
		$query = $this->db->get();
		$schedule_detail = $query->row_array();


		$schedule_detail['visit_to'] = array(1 => 0, 2 => 0, 3 => 0, );
		$schedule_detail['visit_type'] = array(1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0);
		$schedule_detail['sales_type'] = array(1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0, 6 => 0, 7 => 0, 8 => 0,);

		foreach (explode(',', $schedule_detail['visit_to_str']) as $key => $val) {
			$schedule_detail['visit_to'][$val] = 1;
		}

		foreach (explode(',', $schedule_detail['visit_type_str']) as $key => $val) {
			$schedule_detail['visit_type'][$val] = 1;
		}

		foreach (explode(',', $schedule_detail['sales_type_str']) as $key => $val) {
			$schedule_detail['sales_type'][$val] = 1;
		}

		// foreach ($schedule_detail['sales_type'] as $key => $val) {
		// 	if(strpos($schedule_detail['sales_type_str'], $key)){
		// 		$schedule_detail['sales_type'][$key] = $key;
		// 	}
		// }

		if ($schedule_detail['report_type'] == 3 && $schedule_detail['navx_report_id']) {
			// navx_report
			$this->db->from('navx_report');
			$this->db->where('navx_report.id', $schedule_detail['navx_report_id']);
			$this->db->select('navx_report.id as navx_report_id');
			$this->db->select('navx_report.case_type as navx_case_type');
			$this->db->select('navx_report.system_in_case');
			$this->db->select('navx_report.ablation_catheter_combination');
			$this->db->select('navx_report.ablation_catheter_type_sjm');
			$this->db->select('navx_report.ablation_catheter_type_jnj');
			$this->db->select('navx_report.ablation_catheter_type_bsx');
			$this->db->select('navx_report.ablation_catheter_type_jll');
			$this->db->select('navx_report.ablation_catheter_type_mdt');
			$this->db->select('navx_report.electronic_catheter_hra_3_5');
			$this->db->select('navx_report.electronic_catheter_hra_6_19');
			$this->db->select('navx_report.electronic_catheter_hra_20_24');
			$this->db->select('navx_report.electronic_catheter_hra_25');
			$this->db->select('navx_report.electronic_catheter_his_3_5');
			$this->db->select('navx_report.electronic_catheter_his_6_19');
			$this->db->select('navx_report.electronic_catheter_his_20_24');
			$this->db->select('navx_report.electronic_catheter_his_25');
			$this->db->select('navx_report.electronic_catheter_ra_3_5');
			$this->db->select('navx_report.electronic_catheter_ra_6_19');
			$this->db->select('navx_report.electronic_catheter_ra_20_24');
			$this->db->select('navx_report.electronic_catheter_ra_25');
			$this->db->select('navx_report.electronic_catheter_cs_3_5');
			$this->db->select('navx_report.electronic_catheter_cs_6_19');
			$this->db->select('navx_report.electronic_catheter_cs_20_24');
			$this->db->select('navx_report.electronic_catheter_cs_25');
			$this->db->select('navx_report.electronic_catheter_hrs_cs_3_5');
			$this->db->select('navx_report.electronic_catheter_hrs_cs_6_19');
			$this->db->select('navx_report.electronic_catheter_hrs_cs_20_24');
			$this->db->select('navx_report.electronic_catheter_hrs_cs_25');
			$this->db->select('navx_report.electronic_catheter_his_rv_3_5');
			$this->db->select('navx_report.electronic_catheter_his_rv_6_19');
			$this->db->select('navx_report.electronic_catheter_his_rv_20_24');
			$this->db->select('navx_report.electronic_catheter_his_rv_25');
			$this->db->select('navx_report.electronic_catheter_t_value_3_5');
			$this->db->select('navx_report.electronic_catheter_t_value_6_19');
			$this->db->select('navx_report.electronic_catheter_t_value_20_24');
			$this->db->select('navx_report.electronic_catheter_t_value_25');
			$this->db->select('navx_report.electronic_catheter_pv1_3_5');
			$this->db->select('navx_report.electronic_catheter_pv1_6_19');
			$this->db->select('navx_report.electronic_catheter_pv1_20_24');
			$this->db->select('navx_report.electronic_catheter_pv1_25');
			$this->db->select('navx_report.electronic_catheter_pv2_3_5');
			$this->db->select('navx_report.electronic_catheter_pv2_6_19');
			$this->db->select('navx_report.electronic_catheter_pv2_20_24');
			$this->db->select('navx_report.electronic_catheter_pv2_25');
			$this->db->select('navx_report.electronic_catheter_pv3_3_5');
			$this->db->select('navx_report.electronic_catheter_pv3_6_19');
			$this->db->select('navx_report.electronic_catheter_pv3_20_24');
			$this->db->select('navx_report.electronic_catheter_pv3_25');
			$this->db->select('navx_report.electronic_catheter_mapping_3_5');
			$this->db->select('navx_report.electronic_catheter_mapping_6_19');
			$this->db->select('navx_report.electronic_catheter_mapping_20_24');
			$this->db->select('navx_report.electronic_catheter_mapping_25');
			$this->db->select('navx_report.ice_status');
			$this->db->select('navx_report.sensiterm_status');
			$this->db->select('navx_report.remarks as navx_remarks');
			$this->db->select('navx_report.case_amounts');
			$this->db->select('navx_report.active');
			$query = $this->db->get();
			$schedule_detail += $query->row_array();

		}

		return $schedule_detail;
	}

}

/* End of file get_schedule_detail.php */
/* Location: ./application/models/get_schedule_detail.php */