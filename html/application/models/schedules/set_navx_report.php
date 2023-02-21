<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Set_navx_report extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();

	}

	/**
	 * 既に登録されている訪問予定に対しNavXレポートを登録します。
	 *
	 * まず元の訪問予定に既にNavXレポートがついていないか検索。
	 * 次にNavXレポート本体を反映。
	 * レポートが既についているらしい場合には更新、
	 * ついていない場合は追加した上で、元の訪問予定の
	 * NavXレポートテーブルのIDを更新します。
	 *
	 */
	public function execute($value='')
	{
		// まずnavx_reportのつくスケジュールを取得します
		$this->db->select('navx_report_id');
		$this->db->from('schedules');
		$this->db->where('schedules.id', $value['id']);
		$query           = $this->db->get();
		$schedule_detail = $query->row_array();

		$this->db->trans_start();

		// 本体を反映します
		$this->db->set('case_type',                         $value['case_type']);
		$this->db->set('system_in_case',                    $value['system_in_case']);
		$this->db->set('ablation_catheter_combination',     $value['ablation_catheter_combination']);
		$this->db->set('ablation_catheter_type_sjm',        $value['ablation_catheter_type_sjm']);
		$this->db->set('ablation_catheter_type_jnj',        $value['ablation_catheter_type_jnj']);
		$this->db->set('ablation_catheter_type_bsx',        $value['ablation_catheter_type_bsx']);
		$this->db->set('ablation_catheter_type_jll',        $value['ablation_catheter_type_jll']);
		$this->db->set('ablation_catheter_type_mdt',        $value['ablation_catheter_type_mdt']);
		$this->db->set('electronic_catheter_hra_3_5',       $value['electronic_catheter_hra_3_5']);
		$this->db->set('electronic_catheter_hra_6_19',      $value['electronic_catheter_hra_6_19']);
		$this->db->set('electronic_catheter_hra_20_24',     $value['electronic_catheter_hra_20_24']);
		$this->db->set('electronic_catheter_hra_25',        $value['electronic_catheter_hra_25']);
		$this->db->set('electronic_catheter_his_3_5',       $value['electronic_catheter_his_3_5']);
		$this->db->set('electronic_catheter_his_6_19',      $value['electronic_catheter_his_6_19']);
		$this->db->set('electronic_catheter_his_20_24',     $value['electronic_catheter_his_20_24']);
		$this->db->set('electronic_catheter_his_25',        $value['electronic_catheter_his_25']);
		$this->db->set('electronic_catheter_ra_3_5',        $value['electronic_catheter_ra_3_5']);
		$this->db->set('electronic_catheter_ra_6_19',       $value['electronic_catheter_ra_6_19']);
		$this->db->set('electronic_catheter_ra_20_24',      $value['electronic_catheter_ra_20_24']);
		$this->db->set('electronic_catheter_ra_25',         $value['electronic_catheter_ra_25']);
		$this->db->set('electronic_catheter_cs_3_5',        $value['electronic_catheter_cs_3_5']);
		$this->db->set('electronic_catheter_cs_6_19',       $value['electronic_catheter_cs_6_19']);
		$this->db->set('electronic_catheter_cs_20_24',      $value['electronic_catheter_cs_20_24']);
		$this->db->set('electronic_catheter_cs_25',         $value['electronic_catheter_cs_25']);
		$this->db->set('electronic_catheter_hrs_cs_3_5',    $value['electronic_catheter_hrs_cs_3_5']);
		$this->db->set('electronic_catheter_hrs_cs_6_19',   $value['electronic_catheter_hrs_cs_6_19']);
		$this->db->set('electronic_catheter_hrs_cs_20_24',  $value['electronic_catheter_hrs_cs_20_24']);
		$this->db->set('electronic_catheter_hrs_cs_25',     $value['electronic_catheter_hrs_cs_25']);
		$this->db->set('electronic_catheter_his_rv_3_5',    $value['electronic_catheter_his_rv_3_5']);
		$this->db->set('electronic_catheter_his_rv_6_19',   $value['electronic_catheter_his_rv_6_19']);
		$this->db->set('electronic_catheter_his_rv_20_24',  $value['electronic_catheter_his_rv_20_24']);
		$this->db->set('electronic_catheter_his_rv_25',     $value['electronic_catheter_his_rv_25']);
		$this->db->set('electronic_catheter_t_value_3_5',   $value['electronic_catheter_t_value_3_5']);
		$this->db->set('electronic_catheter_t_value_6_19',  $value['electronic_catheter_t_value_6_19']);
		$this->db->set('electronic_catheter_t_value_20_24', $value['electronic_catheter_t_value_20_24']);
		$this->db->set('electronic_catheter_t_value_25',    $value['electronic_catheter_t_value_25']);
		$this->db->set('electronic_catheter_pv1_3_5',       $value['electronic_catheter_pv1_3_5']);
		$this->db->set('electronic_catheter_pv1_6_19',      $value['electronic_catheter_pv1_6_19']);
		$this->db->set('electronic_catheter_pv1_20_24',     $value['electronic_catheter_pv1_20_24']);
		$this->db->set('electronic_catheter_pv1_25',        $value['electronic_catheter_pv1_25']);
		$this->db->set('electronic_catheter_pv2_3_5',       $value['electronic_catheter_pv2_3_5']);
		$this->db->set('electronic_catheter_pv2_6_19',      $value['electronic_catheter_pv2_6_19']);
		$this->db->set('electronic_catheter_pv2_20_24',     $value['electronic_catheter_pv2_20_24']);
		$this->db->set('electronic_catheter_pv2_25',        $value['electronic_catheter_pv2_25']);
		$this->db->set('electronic_catheter_pv3_3_5',       $value['electronic_catheter_pv3_3_5']);
		$this->db->set('electronic_catheter_pv3_6_19',      $value['electronic_catheter_pv3_6_19']);
		$this->db->set('electronic_catheter_pv3_20_24',     $value['electronic_catheter_pv3_20_24']);
		$this->db->set('electronic_catheter_pv3_25',        $value['electronic_catheter_pv3_25']);
		$this->db->set('electronic_catheter_mapping_3_5',   $value['electronic_catheter_mapping_3_5']);
		$this->db->set('electronic_catheter_mapping_6_19',  $value['electronic_catheter_mapping_6_19']);
		$this->db->set('electronic_catheter_mapping_20_24', $value['electronic_catheter_mapping_20_24']);
		$this->db->set('electronic_catheter_mapping_25',    $value['electronic_catheter_mapping_25']);
		$this->db->set('ice_status',                        $value['ice_status']);
		$this->db->set('sensiterm_status',                  $value['sensiterm_status']);
		$this->db->set('remarks',                           $value['remarks']);
		$this->db->set('case_amounts',                      $value['case_amounts']);

		// 最後に、navx_report が上書きなのか新規登録なのか判別
		if($schedule_detail['navx_report_id'] != 0){
			$this->db->where('id', $schedule_detail['navx_report_id']);
			$this->db->update('navx_report');
		}else{
			$this->db->insert('navx_report');

			$navx_report_id = $this->db->insert_id();

			// 新規登録の場合は元のスケジュールに反映します

			$this->db->set('report_date',    'curdate()', false);
			$this->db->set('navx_report_id', $navx_report_id);
			$this->db->set('status_report', 1);
			$this->db->from('schedules');
			$this->db->where('schedules.id', $value['id']);
			$this->db->update();

		}

		$this->db->trans_complete();
		return $this->db->trans_status();


	}

}

/* End of file set_navx_report.php */
/* Location: ./application/models/set_navx_report.php */