<?php defined('BASEPATH') OR exit('No direct script access allowed');

/* 集計結果 */

class Result extends CI_Controller {

	/**
	 * 検索条件を指定して集計結果を取得します。
	 *
	 * 訪問先、ディストリクトID、営業マンID、表示期間を指定可能。
	 * get引数にget_csvがあったら同一条件で集計CSVファイルを取得します。
	 *
	 */
	public function index()
	{

		$this->load->helper('check_session');
		executeCheckSession(false);

		$this->load->helper('calc_span');
		$date_ary = calc_show_span_day();

		$this->smarty->assign('date', $date_ary['date']);

		$this->smarty->assign('date_next', $date_ary['date_next']);
		$this->smarty->assign('date_prev', $date_ary['date_prev']);

		$schedules_status                    = array();
		$schedules_status['limit']           = 4;
		$schedules_status['district_id']     = $this->session->userdata('district_id');
		$schedules_status['division']        = $this->session->userdata('division');
		$schedules_status['employee_number'] = $this->session->userdata('worker_id');
		$schedules_status['facility_id']     = '';

		if($this->input->get('facility_id') != ''){
			$schedules_status['facility_id'] = $this->input->get('facility_id');
		}

		if($this->input->get('district_id') != ''){
			$schedules_status['district_id'] = $this->input->get('district_id');
			$schedules_status['employee_number'] = null;
		}

		if($this->input->get('worker_id') != ''){
			$schedules_status['employee_number'] = $this->input->get('worker_id');
		}

		if($this->input->get('mode') == 'week'){
			$schedules_status['mode'] = 'week';

			$date_ary = calc_show_span_week();

			$schedules_status['span_from'] = $date_ary['span_from'];
			$schedules_status['span_to']   = $date_ary['span_to'];

		}else if($this->input->get('mode') == 'month'){
			$schedules_status['mode'] = 'month';

			$date_ary = calc_show_span_month();
			$schedules_status['span'] = $date_ary['search_span'];

		}
        else if($this->input->get('mode') == 'year'){
            $schedules_status['mode'] = 'year';

            $date_ary = calc_show_span_year();
            $schedules_status['span'] = $date_ary['search_span'];

        } else if($this->input->get('mode') == 'search'){
            $schedules_status['mode'] = 'search';

            $date_ary = calc_show_span_search();
            $schedules_status['span_from'] = $date_ary['span_from'];
            $schedules_status['span_to']   = $date_ary['span_to'];
            $this->smarty->assign('start_month', $date_ary['date_get_start']);
            $this->smarty->assign('end_month', $date_ary['date_get_end']);
        }
        else{

			$schedules_status['mode'] = 'all';
			$schedules_status['date'] = $date_ary['date_unformat'];
		}

		$this->smarty->assign('worker_id', '');
		if($this->input->get('worker_id')){
			$schedules_status['employee_number'] = $this->input->get('worker_id');
			$this->smarty->assign('worker_id', $this->input->get('worker_id'));
		}

		if($this->input->get('get_csv')){
			$this->load->model('result/Get_csv_files');
			$this->Get_csv_files->execute($schedules_status);
			return null;
		}

		$this->load->model('result/Get_result');
		$schedules = $this->Get_result->execute($schedules_status);

		$this->smarty->assign('schedules', $schedules);

		$this->smarty->assign('worker_name', $this->Get_result->worker_name);


		$this->load->helper('get_district_info');
		execute_get_district_info();

		$this->load->helper('get_today_appoints');
		get_today_appoints_amount();

		$this->load->helper('schedule_form');
		setScheduleFormParts();

		$this->smarty->assign('get_date', $date_ary['date_get_param']);

		$this->smarty->assign('id', 'top');
		$this->smarty->assign('class', 'result');

		$this->smarty->display('top/header.tpl');
		$this->smarty->display('top/result.tpl');
		$this->smarty->display('top/footer.tpl');
	}
}
