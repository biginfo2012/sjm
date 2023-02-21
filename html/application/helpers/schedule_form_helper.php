<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function setScheduleFormParts($value='')
{

	$CI =& get_instance();

	// year pulldown
	// 年プルダウンは過去日を遡及した場合のみ過去年を表示。デフォルトでは今年以降で多分下半期に入ってから来年を表示。
	$year_pulldown = array();
	$year_pulldown[date('Y')] = date('Y年');

	if(date('n') > 5){
		$next_year = date('Y', strtotime('+1 year'));
		$year_pulldown[$next_year] = $next_year.'年';
	}
	$CI->smarty->assign('schedule_form_year', $year_pulldown);

	// 時間プルダウン
	$hour_pulldown = array();
	for ($i=7; $i < 25; $i++) {
		$hour_pulldown[$i] = sprintf('%02d', $i);
	}
	$CI->smarty->assign('schedule_form_hour', $hour_pulldown);

	// 分プルダウン
	$minute_pulldown = array();
	for ($i=0; $i < 6; $i++) {
		$minute_pulldown[$i] = sprintf('%02d', $i*10);
	}
	$CI->smarty->assign('schedule_form_minute', $minute_pulldown);

}

function setScheduleForm($value='')
{
	$CI =& get_instance();

	logd($CI->input->post('set_schedule'));

	if($CI->input->post('set_schedule')){

		$report_type = $CI->input->post('fce_report_type');
		if($CI->input->post('role_code') == 0){
			$report_type = $CI->input->post('sales_report_type');
		}

		$CI->load->model('schedules/Set_schedule');
		$set_schedule_ary                = array();
		$set_schedule_ary['account_id']  = $CI->input->post('account_id');
		$set_schedule_ary['region_id']   = $CI->session->userdata('region_id');
		$set_schedule_ary['district_id'] = $CI->session->userdata('district_id');
		$set_schedule_ary['facility_id'] = $CI->input->post('facility_id');
		$set_schedule_ary['role_code']   = $CI->input->post('role_code');
		$set_schedule_ary['title']       = $CI->input->post('title');
		$set_schedule_ary['send_report'] = $CI->input->post('send_report');

		$set_schedule_ary['visit_to']    = implode(',', $CI->input->post('visit_to'));
		if(is_array($CI->input->post('visit_type'))){
			$set_schedule_ary['visit_type']  = implode(',', $CI->input->post('visit_type'));
		}else{
			$set_schedule_ary['visit_type']  = 0;
		}
		$set_schedule_ary['visit_valid_type'] = $CI->input->post('visit_valid_type');
		$set_schedule_ary['visit_comment'] = $CI->input->post('visit_comment');

		// $set_schedule_ary[''] = $CI->input->post();
		$visit_schedule = sprintf('%04d-%02d-%02d',
			$CI->input->post('visit_schedule_year'), $CI->input->post('visit_schedule_month'), $CI->input->post('visit_schedule_day'));
		$set_schedule_ary['visit_schedule'] = $visit_schedule;

		$visit_time_from = sprintf('%02d%02d', $CI->input->post('visit_schedule_start_hour'), $CI->input->post('visit_schedule_start_min'));
		$set_schedule_ary['visit_time_from'] = $visit_time_from;

		$visit_time_to = sprintf('%02d%02d', $CI->input->post('visit_schedule_expire_hour'), $CI->input->post('visit_schedule_expire_min'));
		$set_schedule_ary['visit_time_to'] = $visit_time_to;

		$set_schedule_ary['id'] = $CI->input->post('schedule_id');
		$set_schedule_ary['report_type'] = $report_type;

		$set_schedule_ary['role_code'] = $CI->input->post('role_code');

		$set_schedule_ary['inactive'] = $CI->input->post('schedule_inactivate');

		$schedule_id = $CI->Set_schedule->execute($set_schedule_ary);

		if($set_schedule_ary['inactive'] == 1){
			return true;
		}

		if($report_type == 1 or $report_type == 2){
			$set_report                        = array();
			$set_report['id']                  = $schedule_id;
			$set_report['report_date']         = date('Y-m-d');

			if(is_array($CI->input->post('sales_type'))){
				$set_report['sales_type']        = implode(',', $CI->input->post('sales_type'));
			}else{
				$set_report['sales_type']        = 0;
			}

			$set_report['remarks']             = $CI->input->post('remarks');

			$set_report['case_name']           = $CI->input->post('case_name');
			$set_report['capital']             = $CI->input->post('capital');
			$set_report['witness_content']     = $CI->input->post('witness_content');
			$set_report['ope_support_remarks'] = $CI->input->post('ope_support_remarks');
			$set_report['status_report']       = 1;

			$CI->load->model('schedules/Set_report');
			$CI->Set_report->execute($set_report);

		}else if($report_type == 3){
			$navx_report = array();
			$navx_report['id'] = $schedule_id;
			$navx_report['case_type'] = $CI->input->post('navx_case_type');
			$navx_report['system_in_case'] = $CI->input->post('system_in_case');
			$navx_report['ablation_catheter_combination'] = $CI->input->post('ablation_catheter_combination');
			$navx_report['ablation_catheter_type_sjm'] = $CI->input->post('ablation_catheter_type_sjm');
			$navx_report['ablation_catheter_type_jnj'] = $CI->input->post('ablation_catheter_type_jnj');
			$navx_report['ablation_catheter_type_bsx'] = $CI->input->post('ablation_catheter_type_bsx');
			$navx_report['ablation_catheter_type_jll'] = $CI->input->post('ablation_catheter_type_jll');
			$navx_report['ablation_catheter_type_mdt'] = $CI->input->post('ablation_catheter_type_mdt');
			$navx_report['electronic_catheter_hra_3_5'] = $CI->input->post('electronic_catheter_hra_3_5');
			$navx_report['electronic_catheter_hra_6_19'] = $CI->input->post('electronic_catheter_hra_6_19');
			$navx_report['electronic_catheter_hra_20_24'] = $CI->input->post('electronic_catheter_hra_20_24');
			$navx_report['electronic_catheter_hra_25'] = $CI->input->post('electronic_catheter_hra_25');
			$navx_report['electronic_catheter_his_3_5'] = $CI->input->post('electronic_catheter_his_3_5');
			$navx_report['electronic_catheter_his_6_19'] = $CI->input->post('electronic_catheter_his_6_19');
			$navx_report['electronic_catheter_his_20_24'] = $CI->input->post('electronic_catheter_his_20_24');
			$navx_report['electronic_catheter_his_25'] = $CI->input->post('electronic_catheter_his_25');
			$navx_report['electronic_catheter_ra_3_5'] = $CI->input->post('electronic_catheter_ra_3_5');
			$navx_report['electronic_catheter_ra_6_19'] = $CI->input->post('electronic_catheter_ra_6_19');
			$navx_report['electronic_catheter_ra_20_24'] = $CI->input->post('electronic_catheter_ra_20_24');
			$navx_report['electronic_catheter_ra_25'] = $CI->input->post('electronic_catheter_ra_25');
			$navx_report['electronic_catheter_cs_3_5'] = $CI->input->post('electronic_catheter_cs_3_5');
			$navx_report['electronic_catheter_cs_6_19'] = $CI->input->post('electronic_catheter_cs_6_19');
			$navx_report['electronic_catheter_cs_20_24'] = $CI->input->post('electronic_catheter_cs_20_24');
			$navx_report['electronic_catheter_cs_25'] = $CI->input->post('electronic_catheter_cs_25');
			$navx_report['electronic_catheter_hrs_cs_3_5'] = $CI->input->post('electronic_catheter_hrs_cs_3_5');
			$navx_report['electronic_catheter_hrs_cs_6_19'] = $CI->input->post('electronic_catheter_hrs_cs_6_19');
			$navx_report['electronic_catheter_hrs_cs_20_24'] = $CI->input->post('electronic_catheter_hrs_cs_20_24');
			$navx_report['electronic_catheter_hrs_cs_25'] = $CI->input->post('electronic_catheter_hrs_cs_25');
			$navx_report['electronic_catheter_his_rv_3_5'] = $CI->input->post('electronic_catheter_his_rv_3_5');
			$navx_report['electronic_catheter_his_rv_6_19'] = $CI->input->post('electronic_catheter_his_rv_6_19');
			$navx_report['electronic_catheter_his_rv_20_24'] = $CI->input->post('electronic_catheter_his_rv_20_24');
			$navx_report['electronic_catheter_his_rv_25'] = $CI->input->post('electronic_catheter_his_rv_25');
			$navx_report['electronic_catheter_t_value_3_5'] = $CI->input->post('electronic_catheter_t_value_3_5');
			$navx_report['electronic_catheter_t_value_6_19'] = $CI->input->post('electronic_catheter_t_value_6_19');
			$navx_report['electronic_catheter_t_value_20_24'] = $CI->input->post('electronic_catheter_t_value_20_24');
			$navx_report['electronic_catheter_t_value_25'] = $CI->input->post('electronic_catheter_t_value_25');
			$navx_report['electronic_catheter_pv1_3_5'] = $CI->input->post('electronic_catheter_pv1_3_5');
			$navx_report['electronic_catheter_pv1_6_19'] = $CI->input->post('electronic_catheter_pv1_6_19');
			$navx_report['electronic_catheter_pv1_20_24'] = $CI->input->post('electronic_catheter_pv1_20_24');
			$navx_report['electronic_catheter_pv1_25'] = $CI->input->post('electronic_catheter_pv1_25');
			$navx_report['electronic_catheter_pv2_3_5'] = $CI->input->post('electronic_catheter_pv2_3_5');
			$navx_report['electronic_catheter_pv2_6_19'] = $CI->input->post('electronic_catheter_pv2_6_19');
			$navx_report['electronic_catheter_pv2_20_24'] = $CI->input->post('electronic_catheter_pv2_20_24');
			$navx_report['electronic_catheter_pv2_25'] = $CI->input->post('electronic_catheter_pv2_25');
			$navx_report['electronic_catheter_pv3_3_5'] = $CI->input->post('electronic_catheter_pv3_3_5');
			$navx_report['electronic_catheter_pv3_6_19'] = $CI->input->post('electronic_catheter_pv3_6_19');
			$navx_report['electronic_catheter_pv3_20_24'] = $CI->input->post('electronic_catheter_pv3_20_24');
			$navx_report['electronic_catheter_pv3_25'] = $CI->input->post('electronic_catheter_pv3_25');
			$navx_report['electronic_catheter_mapping_3_5'] = $CI->input->post('electronic_catheter_mapping_3_5');
			$navx_report['electronic_catheter_mapping_6_19'] = $CI->input->post('electronic_catheter_mapping_6_19');
			$navx_report['electronic_catheter_mapping_20_24'] = $CI->input->post('electronic_catheter_mapping_20_24');
			$navx_report['electronic_catheter_mapping_25'] = $CI->input->post('electronic_catheter_mapping_25');
			$navx_report['ice_status'] = $CI->input->post('ice_status');
			$navx_report['sensiterm_status'] = $CI->input->post('sensiterm_status');
			$navx_report['remarks'] = $CI->input->post('navx_remarks');
			$navx_report['case_amounts'] = $CI->input->post('case_amounts');

			$CI->load->model('schedules/Set_navx_report');
			$CI->Set_navx_report->execute($navx_report);

			// var_dump($navx_report);
			redirect($_SERVER['REQUEST_URI'], 'refresh');
		}


	}

}
