<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Get_navx_last_result extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();

	}

	/**
	 * NaxXレポートの前回の入力内容を取得します。
	 *
	 * NavXレポートは訪問先、症例、営業マンIDごとに入力内容がほぼ同じなので
	 * 前回の入力内容を取得してプリセット用に取得します。
	 *
	 */
	public function execute($value='')
	{
		$this->db->from('schedules, navx_report, accounts');
		$this->db->where('accounts.employee_number', $value['schedule_worker_id']);
		$this->db->where('schedules.account_id = accounts.id');
		$this->db->where('schedules.facility_id', $value['facility_id']);
		$this->db->where('navx_report.case_type', $value['navx_case_type']);
		$this->db->where('navx_report.id = schedules.navx_report_id');
		$this->db->order_by('schedules.report_date', 'desc');

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
		$schedule_detail = $query->row_array();

		if(empty($schedule_detail)){

			$schedule_detail = array();

			$schedule_detail['navx_report_id'] = 0;
			$schedule_detail['navx_case_type'] = 0;
			$schedule_detail['system_in_case'] = 0;
			$schedule_detail['ablation_catheter_combination'] = 0;
			$schedule_detail['ablation_catheter_type_sjm'] = 0;
			$schedule_detail['ablation_catheter_type_jnj'] = 0;
			$schedule_detail['ablation_catheter_type_bsx'] = 0;
			$schedule_detail['ablation_catheter_type_jll'] = 0;
			$schedule_detail['ablation_catheter_type_mdt'] = 0;
			$schedule_detail['electronic_catheter_hra_3_5'] = 0;
			$schedule_detail['electronic_catheter_hra_6_19'] = 0;
			$schedule_detail['electronic_catheter_hra_20_24'] = 0;
			$schedule_detail['electronic_catheter_hra_25'] = 0;
			$schedule_detail['electronic_catheter_his_3_5'] = 0;
			$schedule_detail['electronic_catheter_his_6_19'] = 0;
			$schedule_detail['electronic_catheter_his_20_24'] = 0;
			$schedule_detail['electronic_catheter_his_25'] = 0;
			$schedule_detail['electronic_catheter_ra_3_5'] = 0;
			$schedule_detail['electronic_catheter_ra_6_19'] = 0;
			$schedule_detail['electronic_catheter_ra_20_24'] = 0;
			$schedule_detail['electronic_catheter_ra_25'] = 0;
			$schedule_detail['electronic_catheter_cs_3_5'] = 0;
			$schedule_detail['electronic_catheter_cs_6_19'] = 0;
			$schedule_detail['electronic_catheter_cs_20_24'] = 0;
			$schedule_detail['electronic_catheter_cs_25'] = 0;
			$schedule_detail['electronic_catheter_hrs_cs_3_5'] = 0;
			$schedule_detail['electronic_catheter_hrs_cs_6_19'] = 0;
			$schedule_detail['electronic_catheter_hrs_cs_20_24'] = 0;
			$schedule_detail['electronic_catheter_hrs_cs_25'] = 0;
			$schedule_detail['electronic_catheter_his_rv_3_5'] = 0;
			$schedule_detail['electronic_catheter_his_rv_6_19'] = 0;
			$schedule_detail['electronic_catheter_his_rv_20_24'] = 0;
			$schedule_detail['electronic_catheter_his_rv_25'] = 0;
			$schedule_detail['electronic_catheter_t_value_3_5'] = 0;
			$schedule_detail['electronic_catheter_t_value_6_19'] = 0;
			$schedule_detail['electronic_catheter_t_value_20_24'] = 0;
			$schedule_detail['electronic_catheter_t_value_25'] = 0;
			$schedule_detail['electronic_catheter_pv1_3_5'] = 0;
			$schedule_detail['electronic_catheter_pv1_6_19'] = 0;
			$schedule_detail['electronic_catheter_pv1_20_24'] = 0;
			$schedule_detail['electronic_catheter_pv1_25'] = 0;
			$schedule_detail['electronic_catheter_pv2_3_5'] = 0;
			$schedule_detail['electronic_catheter_pv2_6_19'] = 0;
			$schedule_detail['electronic_catheter_pv2_20_24'] = 0;
			$schedule_detail['electronic_catheter_pv2_25'] = 0;
			$schedule_detail['electronic_catheter_pv3_3_5'] = 0;
			$schedule_detail['electronic_catheter_pv3_6_19'] = 0;
			$schedule_detail['electronic_catheter_pv3_20_24'] = 0;
			$schedule_detail['electronic_catheter_pv3_25'] = 0;
			$schedule_detail['electronic_catheter_mapping_3_5'] = 0;
			$schedule_detail['electronic_catheter_mapping_6_19'] = 0;
			$schedule_detail['electronic_catheter_mapping_20_24'] = 0;
			$schedule_detail['electronic_catheter_mapping_25'] = 0;
			$schedule_detail['ice_status'] = 0;
			$schedule_detail['sensiterm_status'] = 0;
			$schedule_detail['remarks as navx_remarks'] = 0;
			$schedule_detail['case_amounts'] = 0;
			$schedule_detail['active'] = 0;

		}

		return $schedule_detail;
	}

}

/* End of file get_navx_last_result.php */
/* Location: ./application/models/get_navx_last_result.php */