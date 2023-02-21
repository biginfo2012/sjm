<?php defined('BASEPATH') OR exit('No direct script access allowed');

/* 週（個人） */

class WeekUser extends CI_Controller {

	/**
	 * 営業マンまで絞り込み単一週の訪問予定一覧を表示します。
	 *
	 * 検索ワードが入っている場合は該当のもので検索を行います。
	 *
	 */
	public function index()
	{
		$schedules      = array();

		$this->load->helper('check_session');
		executeCheckSession(false);

		$this->load->helper('schedule_form');
		setScheduleForm();


		$this->load->helper('calc_span');
		$date_ary = calc_show_span_week();

		$this->smarty->assign('date', $date_ary['date']);
		$this->smarty->assign('span_ary', $date_ary['span_ary']);

		$this->load->model('schedules/Get_weekly_schedules');
		$schedules_status                = array();
		$schedules_status['limit']       = 4;
		$schedules_status['district_id'] = $this->session->userdata('district_id');

		$schedules_status['span_from'] = $date_ary['span_from'];
		$schedules_status['span_to']   = $date_ary['span_to'];

		$schedules_status['employee_number']  = $this->session->userdata('worker_id');

		$this->smarty->assign('worker_id', '');
		if($this->input->get('worker_id')){
			$schedules_status['employee_number'] = $this->input->get('worker_id');
			$this->smarty->assign('worker_id', $this->input->get('worker_id'));
		}else if($this->session->userdata('worker_id')){
			$this->smarty->assign('worker_id', $this->session->userdata('worker_id'));
		}

		$schedules = $this->Get_weekly_schedules->getList($schedules_status);

		$this->smarty->assign('worker_name', $this->Get_weekly_schedules->worker_name);

		$this->load->helper('get_district_info');
		execute_get_district_info($this->Get_weekly_schedules->district_id);

		$this->load->helper('get_today_appoints');
		get_today_appoints_amount();

		$search_term = '';
		if($this->input->get('search')){
			$search_term = 'district_id='.$this->input->get('district_id') .
				'&facility_id='.$this->input->get('facility_id').
				'&search=search';
		}
		$this->smarty->assign('search_term', $search_term);

		$this->smarty->assign('date_next', $date_ary['date_next']);
		$this->smarty->assign('date_prev', $date_ary['date_prev']);

		$this->smarty->assign('schedules', $schedules);
		$this->smarty->assign('get_date',  $date_ary['date_get_param']);

		$this->smarty->assign('add_schedule_button', 'on');

		$this->smarty->assign('id', 'top');
		$this->smarty->assign('class', 'sc week');

		setScheduleFormParts();

		$this->smarty->display('top/header.tpl');
		$this->smarty->display('top/weekUser.tpl');
		$this->smarty->display('top/footer.tpl');
	}
}
