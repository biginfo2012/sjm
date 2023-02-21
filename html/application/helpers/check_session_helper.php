<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function executeCheckSession($unsetWorkerID = false)
{
	$CI =& get_instance();
    print_r($CI->session);die();

	if(!$CI->session->userdata('account_type')){
		$CI->session->sess_destroy();
		redirect('/login','refresh');
	}

	// if($CI->session->userdata('account_type') == 'headquarters' && !$CI->session->userdata('district_id')){
	// 	redirect('/search');
	// }

	if($unsetWorkerID && $CI->session->userdata('account_type') != 'worker'){
		$CI->session->unset_userdata('worker_id');
	}

	$report_btn_default_show = 'false';

	$add_schedule_button = 'on';

	if($CI->session->userdata('account_type') == 'worker'){
		$CI->smarty->assign('backto_button_url', '/day/user');
		$CI->smarty->assign('schedule_button_url', '/day/user');

		if($CI->session->userdata('division_id') == 1){
			$report_btn_default_show = 'true';
		}

		if($CI->input->get('worker_id') && $CI->input->get('worker_id') != $CI->session->userdata('worker_id')){
			$add_schedule_button = 'off';
		}

	}else if($CI->session->userdata('account_type') == 'district' ){
		$CI->smarty->assign('backto_button_url', '/day');
		$CI->smarty->assign('schedule_button_url', '/day');
		$add_schedule_button = 'off';

		if($CI->input->get('worker_id')){
			$add_schedule_button = 'on';
		}

		if($CI->session->userdata('division_id') == 1){
			$report_btn_default_show = 'true';
		}

	}else if($CI->session->userdata('account_type') == 'headquarters' ||
		$CI->session->userdata('account_type') == 'crm_nsd' ||
		$CI->session->userdata('account_type') == 'crm_manager' ||
		$CI->session->userdata('account_type') == 'fce_manager'){

		if($CI->session->userdata('district_id') == 'J2CP'){
			if($CI->session->userdata('account_type') == 'headquarters'){
				$CI->smarty->assign('backto_button_url', '/search');
			}else{
				$CI->smarty->assign('backto_button_url', '/day');
			}

		}else{
			$CI->smarty->assign('backto_button_url', '/search');
		}

		$CI->smarty->assign('schedule_button_url', '/day');
		$add_schedule_button = 'on';

	}

	$CI->smarty->assign('add_schedule_button', $add_schedule_button);
	$CI->smarty->assign('report_btn_default_show', $report_btn_default_show);
	$CI->smarty->assign('login_account_type', $CI->session->userdata('account_type'));


}