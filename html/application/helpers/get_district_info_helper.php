<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function execute_get_district_info($district_id='')
{
	$CI =& get_instance();

	$CI->load->model('districts/Get_districts');
	$district_setting['suggest_word']  = '';

	if($CI->input->get('search')){
		$district_setting['district_id']   = $CI->session->userdata('district_id');
		if($CI->input->get('district_id') != ''){
			$district_setting['district_id']   = $CI->input->get('district_id');
		}

		$district_setting['facility_id']   = $CI->input->get('facility_id');
	}else if($CI->session->userdata('account_type') == 'headquarters' && $CI->session->userdata('district_id') != ''){
		// $district_setting['region_id']     = $CI->session->userdata('region_id');
		$district_setting['division_type'] = $CI->session->userdata('division_type');
		$district_setting['district_id']   = $CI->session->userdata('district_id');
	}else{
		$district_setting['region_id']     = $CI->session->userdata('region_id');
		$district_setting['division_type'] = $CI->session->userdata('division_type');
		$district_setting['district_id']   = $CI->session->userdata('district_id');

		if($district_id != ''){
			$district_setting['district_id']   = $district_id;
		}

	}

	$district_info = $CI->Get_districts->getList($district_setting);

	$CI->smarty->assign('district',       $district_info);

}