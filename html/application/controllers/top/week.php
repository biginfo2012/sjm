<?php defined('BASEPATH') OR exit('No direct script access allowed');

/* 週 */

class Week extends CI_Controller {

	/**
	 * ディストリクトまで絞り込み単一週の訪問予定一覧をページングしながら表示します。
	 *
	 * 検索ワードが入っている場合は該当のもので検索を行います。
	 * ページングは営業マン単位で行います。
	 *
	 */
	public function index()
	{
		$district_info  = array();
		$schedules      = array();
		$today_appoints = array();
		$limit          = 5;
		$has_next       = false;


		$this->load->helper('check_session');
		executeCheckSession(true);

		$this->load->helper('schedule_form');
		setScheduleForm();

		$this->load->helper('calc_span');
		$date_ary = calc_show_span_week();

		$this->smarty->assign('date', $date_ary['date']);
		$this->smarty->assign('span_ary', $date_ary['span_ary']);

		$this->load->model('schedules/Get_weekly_schedules');
		$schedules_status                  = array();
		$schedules_status['district_id']   = $this->session->userdata('district_id');
		$schedules_status['division_type'] = $this->session->userdata('division_type');

		$schedules_status['span_from'] = $date_ary['span_from'];
		$schedules_status['span_to']   = $date_ary['span_to'];

		$schedules_status['page']  = $this->input->get('page');
		$schedules_status['limit'] = $limit;

		if($this->input->get('search')){
			$schedules_status['district_id']   = $this->input->get('district_id');
			$schedules_status['facility_id']   = $this->input->get('facility_id');
		}

		$schedules = $this->Get_weekly_schedules->getList($schedules_status);
		$has_next  = $this->Get_weekly_schedules->next_page;

		// $this->smarty->assign('date_next', date('Ymd', strtotime($this->input->get('date'). ' +7 day')));
		// $this->smarty->assign('date_prev', date('Ymd', strtotime($this->input->get('date'). ' -7 day')));

		$search_term = '';
		if($this->input->get('search')){
			$search_term = 'district_id='.$this->input->get('district_id') .
				'&facility_id='.$this->input->get('facility_id').
				'&search=search';
		}
		$this->smarty->assign('search_term', $search_term);

		$this->smarty->assign('page',      intval($this->input->get('page')));

		$this->load->helper('get_district_info');
		execute_get_district_info();

		$this->load->helper('get_today_appoints');
		get_today_appoints_amount();

		$this->smarty->assign('date_next', $date_ary['date_next']);
		$this->smarty->assign('date_prev', $date_ary['date_prev']);

		$this->smarty->assign('add_schedule_button', 'off');

		$this->smarty->assign('schedules', $schedules);

		$this->smarty->assign('get_date',  $date_ary['date_get_param']);
		$this->smarty->assign('has_next',  $has_next);
		$this->smarty->assign('limit',     $limit);

		$this->smarty->assign('id', 'top');
		$this->smarty->assign('class', 'sc week');

		$this->load->helper('schedule_form');
		setScheduleFormParts();

		$this->smarty->display('top/header.tpl');
		$this->smarty->display('top/week.tpl');
		$this->smarty->display('top/footer.tpl');
	}
}
