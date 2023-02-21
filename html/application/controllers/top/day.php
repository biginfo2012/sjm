<?php defined('BASEPATH') OR exit('No direct script access allowed');

/* 日 */

class Day extends CI_Controller {

	/**
	 * ディストリクトまで絞り込み単一日付の訪問予定一覧をページングしながら表示します。
	 *
	 * 検索ワードが入っている場合は該当のもので検索を行います。
	 * ページングは営業マン単位で行います。
	 *
	 */
	public function index()
	{

		// var_dump($this->session->all_userdata());

		$schedules      = array();
		$limit          = 5;
		$has_next       = false;

		$this->load->helper('check_session');
		executeCheckSession(true);

		$this->load->helper('schedule_form');
		setScheduleForm();


		$this->load->helper('calc_span');
		$date_ary = calc_show_span_day();

		$this->smarty->assign('date', $date_ary['date']);

		$this->smarty->assign('date_next', $date_ary['date_next']);
		$this->smarty->assign('date_prev', $date_ary['date_prev']);

		$this->load->model('schedules/Get_oneday_schedules');
		$schedules_status                  = array();
		$schedules_status['district_id']   = $this->session->userdata('district_id');
		$schedules_status['division_type'] = $this->session->userdata('division_type');
		$schedules_status['date']          = $date_ary['date_unformat'];

		$schedules_status['page']  = $this->input->get('page');
		$schedules_status['limit'] = $limit;

		if($this->input->get('search')){
			unset($schedules_status['date']);
			$schedules_status['district_id']   = $this->input->get('district_id');
			$schedules_status['facility_id']   = $this->input->get('facility_id');
			$schedules_status['search']        = $this->input->get('search');
		}
		// 1ページ内の件数を設定します

		$schedules = $this->Get_oneday_schedules->getList($schedules_status);
		$has_next  = $this->Get_oneday_schedules->next_page;

		$this->load->helper('get_district_info');
		execute_get_district_info();

		$this->load->helper('get_today_appoints');
		get_today_appoints_amount();

		$search_term = '';
		if($this->input->get('search')){
			$search_term = 'district_id='.$this->input->get('district_id') .
				'&facility_id='.$this->input->get('facility_id').
				'&search=search';
		}
		$this->smarty->assign('search_term', $search_term);

		$this->smarty->assign('page',           intval($this->input->get('page')));
		$this->smarty->assign('limit',          $limit);
		$this->smarty->assign('schedules',      $schedules);
		$this->smarty->assign('has_next',       $has_next);
		// $this->smarty->assign('district',       $district_info);
		$this->smarty->assign('get_date',       $date_ary['date_get_param']);

		$this->smarty->assign('add_schedule_button', 'off');

		$this->smarty->assign('id',    'top');
		$this->smarty->assign('class', 'sc day');

		setScheduleFormParts();

		$this->smarty->display('top/header.tpl');
		$this->smarty->display('top/day.tpl');
		$this->smarty->display('top/footer.tpl');
	}
}
