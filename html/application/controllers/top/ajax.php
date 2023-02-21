<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * 予定登録モーダルの中身の情報を取得しajaxで解釈できるよう返します。
	 *
	 * 予定IDが渡されていない場合は追加先の営業マン情報のみ取得。
	 * 予定IDが渡されている場合は該当の予定データを取得します。
	 * 権限によっては編集ボタンを表示してはならないので判別を行います。
	 *
	 */
	public function get_account_detail()
	{

		$this->load->model('accounts/Get_detail');

		if($this->input->post('employee_number')){
			$worker_detail_setting['employee_number'] = $this->input->post('employee_number');
		}else{
			$worker_detail_setting['employee_number'] = $this->session->userdata('worker_id');
		}

		$result = $this->Get_detail->execute($worker_detail_setting);

		if($this->input->post('schedule_id')){
			$this->load->model('schedules/Get_schedule_detail');
			$detail = $this->Get_schedule_detail->execute($this->input->post());

			if(!empty($detail)){
				$result += $detail;

			}
		}

		$role_title = array(
			0 => 'AF事業部（Sales）',
			1 => 'AF事業部（FCE）',
			2 => 'CRM事業部（Sales）',
			3 => 'CRM事業部（FCE）',);

		$result['role_title'] = $role_title[$result['role_code']];

		if(isset($result['visit_schedule'])){
			list($result['visit_schedule_year'], $result['visit_schedule_month'], $result['visit_schedule_day']) =
				explode('-', $result['visit_schedule']);

			$result['visit_schedule_year']  = intval($result['visit_schedule_year']);
			$result['visit_schedule_month'] = intval($result['visit_schedule_month']);
			$result['visit_schedule_day']   = intval($result['visit_schedule_day']);

			$result['visit_schedule_start_hour']  = intval(substr($result['visit_time_from'], 0,2));
			$result['visit_schedule_start_min']   = substr($result['visit_time_from'],        2,2);
			$result['visit_schedule_expire_hour'] = intval(substr($result['visit_time_to'],   0,2));
			$result['visit_schedule_expire_min']  = substr($result['visit_time_to'],          2,2);

			$result['visit_schedule_text'] = date('Y年n月j日',strtotime($result['visit_schedule']));

			$result['visit_time_text'] = sprintf('%2d:%02d - %2d:%02d', $result['visit_schedule_start_hour'],
				$result['visit_schedule_start_min'], $result['visit_schedule_expire_hour'], $result['visit_schedule_expire_min']);

			$schedule_visit_facility_worker = $this->config->item('schedule_visit_facility_worker');
			$visit_to_text_ary = array();
			foreach ($result['visit_to'] as $k => $v) {
				if($v == 1){
					$visit_to_text_ary[] = $schedule_visit_facility_worker[$k];
				}
			}
			$result['visit_to_text'] = implode(',', $visit_to_text_ary);

			$schedule_visit_type = $this->config->item('schedule_visit_type');
			$visit_type_text_ary = array();
			foreach ($result['visit_type'] as $k => $v) {
				if($v == 1 && $k !=''){
					$visit_type_text_ary[] = $schedule_visit_type[$k];
				}
			}
			$result['visit_type_text'] = implode(',', $visit_type_text_ary);

			// var_dump($result);
			$result['editable'] = false;

			if($this->session->userdata('account_type') == 'worker' && $result['employee_number'] == $this->session->userdata('worker_id')){
				$result['editable'] = true;
			}

			if($this->session->userdata('account_type') == 'district' && $result['district_id'] == $this->session->userdata('district_id')){
				$result['editable'] = true;
			}

			if($this->session->userdata('account_type') == 'fce_manager' && $result['district_id'] == 'J2CP'){
				$result['editable'] = true;
			}

			if($this->session->userdata('account_type') == 'headquarters'){
				$result['editable'] = true;
			}

			switch ($result['report_type']) {
				case '1':
					$schedule_sales_type = $this->config->item('schedule_sales_type');
					$sales_type_text_ary = array();
					foreach ($result['sales_type'] as $k => $v) {
						if($v == 1){
							$sales_type_text_ary[] = $schedule_sales_type[$k];
						}
					}
					$result['report_sales_type_text'] = implode(',', $sales_type_text_ary);

					break;

				case '2':
					$result['ope_support_case_name_text'] = $this->config->item('schedule_case_name')[$result['case_name']];
					$result['ope_support_capital_text'] = $this->config->item('schedule_capital')[$result['capital']];
					$result['ope_support_witness_content_text'] = $this->config->item('schedule_witness_content')[$result['witness_content']];

					break;

				case '3':
					if($result['navx_case_type'] == 0){
						$result['navx_case_type'] = 1;
					}

					$result['navx_case_type_text'] = $this->config->item('navx_case_type')[$result['navx_case_type']];

					if($result['system_in_case'] == 0){
						$result['system_in_case'] = 1;
					}
					$result['system_in_case_text'] = $this->config->item('navx_system_in_case')[$result['system_in_case']];

					if($result['ablation_catheter_combination'] == 0){
						$result['ablation_catheter_combination'] = 1;
					}
					$result['ablation_catheter_combination_text'] = $this->config->item('navx_ablation_catheter_combination')[$result['ablation_catheter_combination']];

					$ablation_catheter_type_text_maker_ary = array();
					$ablation_catheter_type = array('sjm', 'jnj', 'bsx', 'jll', 'mdt');
					foreach ($ablation_catheter_type as $k => $v) {
						$param = $result['ablation_catheter_type_'.$v];
						$values = $this->config->item('navx_ablation_catheter_type_'.$v);

						if($param > 0){
							$ablation_catheter_type_text_maker_ary[] = strtoupper($v).' ： ' . $values[$param];
						}
					}

					$result['ablation_catheter_type_maker_text'] = implode('<br>', $ablation_catheter_type_text_maker_ary);

					$electric_catheter_type_text_ary = array();
					$electric_catheter_maker = array(
						'hra'     => 'HRA',
						'his'     => 'HIS',
						'ra'      => 'RA',
						'cs'      => 'CS',
						'hrs_cs'  => 'HRS-CS',
						'his_rv'  => 'HIS-RV',
						't_value' => 'T-Valve',
						'pv1'     => 'PV1',
						'pv2'     => 'PV2',
						'pv3'     => 'PV3',
						'mapping' => 'Mapping',
						);

					$electronic_catheter_size = array(
						'3_5'   => '3〜5極',
						'6_19'  => '6〜19極',
						'20_24' => '20〜24極',
						'25'    => '25極〜',
						);

					$navx_electric_catheter_maker_params = $this->config->item('navx_electric_catheter_maker');

					$ablation_catheter_type_text_ary = array();
					foreach ($electric_catheter_maker as $maker_k => $maker_v) {
						$maker_ary = array();

						foreach ($electronic_catheter_size as $size_k => $size_m) {
							$param = $result['electronic_catheter_'.$maker_k.'_'.$size_k];

							if($param > 0){
								$maker_ary[] = $size_m . ' = ' .$navx_electric_catheter_maker_params[$param];
							}
						}

						if(!empty($maker_ary)){
							$ablation_catheter_type_text_ary[] = $maker_v . ' ： ' .implode('、 ', $maker_ary);
						}
					}

					$result['ablation_catheter_type_text'] = implode('<br>', $ablation_catheter_type_text_ary);

					if($result['ice_status'] == 0){
						$result['ice_status'] = 1;
					}

					$result['ice_status_text'] = $this->config->item('navx_ice_status')[$result['ice_status']];

					if($result['sensiterm_status'] == 0){
						$result['sensiterm_status'] = 1;
					}

					$result['sensiterm_status_text'] = $this->config->item('navx_sensiterm_status')[$result['sensiterm_status']];

					break;

				default:
					break;
			}

		}

		echo json_encode($result);
	}

	/**
	 * NaxXレポートの前回の入力内容を取得し、ajaxで解釈できるよう返します。
	 *
	 */
	public function get_navx_last()
	{
		$this->load->model('schedules/Get_navx_last_result');
		$result = $this->Get_navx_last_result->execute($this->input->post());
		echo json_encode($result);
	}

	/**
	 * 現在ログインしている支店の情報を取得し、ajaxで解釈できるよう返します。
	 *
	 *
	 */
	public function login_district()
	{
		$this->load->model('districts/Get_districts');
		$status = array();
		$status['suggest_word'] = '';
		$status['district_id'] = $this->session->userdata('district_id');
		$district = $this->Get_districts->getList($status);

		echo json_encode($district);

	}

	/**
	 * 現在の検索条件に合致する本日の訪問予定の件数を取得し、ajaxで解釈できるよう返します。
	 *
	 */
	public function get_search_amount()
	{
		$this->load->model('schedules/Get_oneday_schedules');
		$schedules_status                  = array();
		$schedules_status['division_type'] = $this->session->userdata('division_type');
		$schedules_status['page']  = $this->input->get('page');
		$schedules_status['limit'] = 5;

		$schedules_status['district_id']   = $this->input->post('district_id');
		$schedules_status['facility_id']   = $this->input->post('facility_id');
		// 1ページ内の件数を設定します

		$schedules = $this->Get_oneday_schedules->getList($schedules_status);
		echo json_encode(array('amount' => count($schedules)));
	}

}

/* End of file ajax.php */
/* Location: ./application/controllers/ajax.php */