<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function get_today_appoints_amount($value='')
{
	$CI =& get_instance();
	$today_appoints = array();

	if($CI->session->userdata('account_type') != 'headquarters'){

		$CI->load->model('schedules/Get_today_appoints');
		$today_appoints_status = array();
		$today_appoints        = $CI->Get_today_appoints->execute($today_appoints_status);
	}

	$CI->smarty->assign('today_appoints', $today_appoints);

}