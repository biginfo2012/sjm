<?php defined('BASEPATH') OR exit('No direct script access allowed');

/* 日（個別） */

class DayUser extends CI_Controller {

	/**
	 * 営業マンまで絞り込み単一日付の訪問予定一覧を表示します。
	 *
	 * 検索ワードが入っている場合は該当のもので検索を行います。
	 *
	 */
	public function index()
	{

		// var_dump($this->session->all_userdata());

		$schedules      = array();
		$limit          = 5;
		$has_next       = false;

		$this->load->helper('calc_span');
		$date_ary = calc_show_span_day();

		$this->smarty->assign('date', $date_ary['date']);


		$this->load->helper('check_session');
		executeCheckSession(false);
        print_r('dayUser');
        die();
		$this->load->helper('schedule_form');
		setScheduleForm();


		$this->load->model('schedules/Get_oneday_schedules');
		$schedules_status                    = array();
		$schedules_status['limit']           = 4;
		$schedules_status['district_id']     = $this->session->userdata('district_id');
		$schedules_status['division']        = $this->session->userdata('division');
		$schedules_status['employee_number'] = $this->session->userdata('worker_id');
		$schedules_status['date']            = $date_ary['date_unformat'];

		$this->smarty->assign('worker_id', '');
		if($this->input->get('worker_id')){
			$schedules_status['employee_number'] = $this->input->get('worker_id');
			$this->smarty->assign('worker_id', $this->input->get('worker_id'));
		}

		$schedules = $this->Get_oneday_schedules->getList($schedules_status);

		$this->smarty->assign('worker_name', $this->Get_oneday_schedules->worker_name);

		$this->load->helper('get_district_info');
		execute_get_district_info($this->Get_oneday_schedules->district_id);

		$search_term = '';
		if($this->input->get('search')){
			$search_term = 'district_id='.$this->input->get('district_id') .
				'&facility_id='.$this->input->get('facility_id').
				'&search=search';
		}
		$this->smarty->assign('search_term', $search_term);

		$this->smarty->assign('date_next', $date_ary['date_next']);
		$this->smarty->assign('date_prev', $date_ary['date_prev']);

		$this->smarty->assign('schedules',      $schedules);

		$this->load->helper('get_today_appoints');
		get_today_appoints_amount();

		$this->smarty->assign('get_date', $date_ary['date_get_param']);
		// $this->smarty->assign('add_schedule_button', 'on');

		$this->smarty->assign('id',    'top');
		$this->smarty->assign('class', 'sc day-user');

		setScheduleFormParts();
        print_r('dayUser');
        die();

		$this->smarty->display('top/header.tpl');
		$this->smarty->display('top/dayUser.tpl');
		$this->smarty->display('top/footer.tpl');
	}
}
