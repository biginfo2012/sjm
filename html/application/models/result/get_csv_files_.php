<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Get_csv_files extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();

	}

	/**
	 * 集計CSVファイルを取得します。
	 *
	 * 営業マンの所属により必要なCSVファイルが変わるので、
	 * 必要なメソッドへ投げてCSVファイルを生成します。
	 *
	 * このメソッドは生成されたファイル群を
	 * ダウンロード用にアーカイブします。
	 *
	 */
	public function execute($value='')
	{
		
		// 自身の必要なCSVを探します

		$this->csv_type = array(
			'af_sales'       => 1,
			'af_navx_report' => 1,
			'af_ope_support' => 1,
			'crm'            => 1,
			);

		if($value['employee_number'] != ''){
			$this->db->from('accounts');
			$this->db->select('accounts.role_code');
			$this->db->where('accounts.employee_number', $value['employee_number']);
			$query = $this->db->get();
			$result = $query->row_array();

			$this->csv_type = array(
				'af_sales'       => 0,
				'af_navx_report' => 0,
				'af_ope_support' => 0,
				'crm'            => 0,
				);

			// var_dump($result);

			switch ($result['role_code']) {
				case '0':
					$this->csv_type['af_sales']       = 1;
					$this->csv_type['af_navx_report'] = 1;
					break;

				case '1':
					$this->csv_type['af_ope_support'] = 1;
					$this->csv_type['af_navx_report'] = 1;
					break;

				case '2':
				case '3':
					$this->csv_type['crm'] = 1;
					break;

				default:
					# code...
					break;
			}
		}

		$file_name_ary = array();
		$print_af_sales_csv_file_name = $this->print_af_sales_csv($value);
		if(!is_null($print_af_sales_csv_file_name)){
			$file_name_ary[] = $print_af_sales_csv_file_name;
		}

		$print_af_ope_support_csv_file_name = $this->print_af_ope_support($value);
		if(!is_null($print_af_ope_support_csv_file_name)){
			$file_name_ary[] = $print_af_ope_support_csv_file_name;
		}

		$print_af_navx_report_csv_file_name = $this->print_af_navx_report($value);
		if(!is_null($print_af_navx_report_csv_file_name)){
			$file_name_ary[] = $print_af_navx_report_csv_file_name;
		}

		$print_crm_file_name = $this->print_crm($value);
		if(!is_null($print_crm_file_name)){
			$file_name_ary[] = $print_crm_file_name;
		}

		// zipのインスタンス作成
		$objzip = new zipArchive($file_name_ary);

		// 一時ファイル（zip）の名前とPath
		$zipName = "csv_archives_" . date("Ymd") .'.zip';
		$zipPath = FCPATH.'report_csv_tmp/' . $zipName;

		// 一時ファイル（zipファイル）を作成
		$result = $objzip->open($zipPath, ZIPARCHIVE::CREATE | ZIPARCHIVE::OVERWRITE);
		if ($result !== true) {
			echo "err - open zip-file";
			exit;
		}

		set_time_limit(0);

		// zipに追加
		foreach ($file_name_ary as $filepath) {
			$filename = basename($filepath);
			$objzip->addFromString($filename, file_get_contents($filepath));
		}
		$objzip->close();

		// 出力（ダウンロード）
		header('Content-Type: application/zip; name="' . $zipName . '"');
		header('Content-Disposition: attachment; filename="' . $zipName . '"');
		header('Content-Length: '.filesize($zipPath));
		echo file_get_contents($zipPath);

		// 一時ファイル（zipファイル）の削除
		unlink($zipPath);

		foreach ($file_name_ary as $key => $value) {
			unlink($value);
		}
		exit();
		// var_dump($file_name_ary);

	}

	/**
	 * AF Sales事業部所属向けの実績CSVファイルを生成します。
	 *
	 * アーカイブ向けに実ファイルのパスを返します。
	 *
	 */
	public function print_af_sales_csv($value='')
	{

		if($this->csv_type['af_sales'] == 1){

			$this->db->from('schedules, facilities, accounts, districts');
			$this->db->select('schedules.id');
			$this->db->select('districts.district_id');
			$this->db->select('districts.name as district_name');
			$this->db->select('accounts.employee_number');
			$this->db->select('accounts.name as worker_name');
			$this->db->select('schedules.visit_schedule');
			$this->db->select('schedules.report_date');
			$this->db->select('facilities.sap_no');
			$this->db->select('facilities.name as facility_name');
			$this->db->select('schedules.title');
			$this->db->select('schedules.visit_to');
			$this->db->select('schedules.visit_type');
			$this->db->select('schedules.sales_type');
			$this->db->select('schedules.remarks as visit_comment');

			$this->db->where('schedules.account_id = accounts.id');
			$this->db->where('facilities.id = schedules.facility_id');
			$this->db->where('districts.district_id = schedules.district_id');

			$this->db->where('schedules.report_date is not null', '', false);
			$this->db->where('schedules.report_type', '1');

			if($value['employee_number'] != ''){
				$this->db->where('accounts.employee_number', $value['employee_number'] );
			}

			if($value['district_id'] != '' ){
				$this->db->where('schedules.district_id', $value['district_id']  );
			}

			switch ($value['mode']) {
				case 'day':
					$this->db->where('schedules.visit_schedule', $value['date']);

					break;

				case 'week':
					$this->db->where('schedules.visit_schedule >= ', $value['span_from']);
					$this->db->where('schedules.visit_schedule <= ', $value['span_to']);

					break;

				case 'month':
					$this->db->like('schedules.visit_schedule', $value['span'], 'both');

					break;

				default:
					# code...
					break;
			}

			$this->db->where('schedules.active', '1', FALSE);

			$query = $this->db->get();
			$schedules = $query->result_array();

			$schedule_visit_facility_worker = $this->config->item('schedule_visit_facility_worker');
			$schedule_visit_type = $this->config->item('schedule_visit_type');
			$schedule_sales_type = $this->config->item('schedule_sales_type');

			$csv_data = array(); 
			
			if(count($schedules) == 0)
				return null;
			foreach ($schedules as $key => $val) {
			// Districtコード	District名称	営業員コード	営業員氏名	訪問日時	病院コード	病院名称	タスクタイトル	訪問相手	訪問内容（複数列方向に出てくるはずです）	立会い内容	その他（フリーコメント)
				$line = array();

				$line[] = $val['district_id'];
				$line[] = $val['district_name'];
				$line[] = $val['employee_number'];
				$line[] = $val['worker_name'];
				$line[] = $val['visit_schedule'];
				$line[] = $val['sap_no'];
				$line[] = $val['facility_name'];
				$line[] = $val['title'];

				$visit_to_ary = explode(',', $val['visit_to']);
				$visit_to = array();
				foreach ($visit_to_ary as $k => $v) {
					if(isset($schedule_visit_facility_worker[$v])){
						$visit_to[] = $schedule_visit_facility_worker[$v];
					}
				}
				$line[] = implode(' ', $visit_to);

				$visit_type_ary = explode(',', $val['visit_type']);
				$visit_type = array();

				foreach ($visit_type_ary as $k => $v) {
					if(isset($schedule_visit_type[$v])){
						$visit_type[] = $schedule_visit_type[$v];
					}

				}
				$line[] = implode(' ', $visit_type);

				$sales_type_ary = explode(',', $val['sales_type']);
				$sales_type = array();

				foreach ($sales_type_ary as $k => $v) {
					if(isset($schedule_sales_type[$v])){
						$sales_type[] = $schedule_sales_type[$v];
					}

				}
				$line[] = implode(' ', $sales_type);
				$line[] = $val['visit_comment'];

				$csv_data[] = $line;
			}

			// CSV出力
			if($value['employee_number'] != ''){
				$csv_file_name = FCPATH.'report_csv_tmp/af_sales_'.$value['employee_number'].'_'.date('Ymd').'.csv';
			}else{
				$csv_file_name = FCPATH.'report_csv_tmp/af_sales_'.$value['district_id'].'_'.date('Ymd').'.csv';
			}

			$file_handler = fopen($csv_file_name, 'w');
			// foreach ($csv_data as $key => $value) {
			// 	fputcsv($file_handler, $value);
			// }

			fwrite($file_handler, $this->arr2csv($csv_data));

			fclose($file_handler);

			return $csv_file_name;
		}

		return null;

	}

	/**
	 * AFオペサポート事業部所属向けの実績CSVファイルを生成します。
	 *
	 * アーカイブ向けに実ファイルのパスを返します。
	 *
	 */
	public function print_af_ope_support($value='')
	{
		if($this->csv_type['af_ope_support'] == 1){

			$this->db->from('schedules, facilities, accounts, districts');
			$this->db->select('schedules.id');
			$this->db->select('districts.district_id');
			$this->db->select('districts.name as district_name');
			$this->db->select('accounts.employee_number');
			$this->db->select('accounts.name as worker_name');
			$this->db->select('schedules.visit_schedule');
			$this->db->select('schedules.report_date');
			$this->db->select('facilities.sap_no');
			$this->db->select('facilities.name as facility_name');
			$this->db->select('schedules.title');

			$this->db->select('schedules.case_name');
			$this->db->select('schedules.capital');
			$this->db->select('schedules.witness_content');
			$this->db->select('schedules.ope_support_remarks');

			$this->db->where('schedules.account_id = accounts.id');
			$this->db->where('facilities.id = schedules.facility_id');
			$this->db->where('districts.district_id = schedules.district_id');

			$this->db->where('schedules.report_date is not null', '', false);
			$this->db->where('schedules.report_type', '2');

			if($value['employee_number'] != ''){
				$this->db->where('accounts.employee_number', $value['employee_number'] );
			}

			if($value['district_id'] != '' ){
				$this->db->where('schedules.district_id', $value['district_id']  );
			}

			switch ($value['mode']) {
				case 'day':
					$this->db->where('schedules.visit_schedule', $value['date']);

					break;

				case 'week':
					$this->db->where('schedules.visit_schedule >= ', $value['span_from']);
					$this->db->where('schedules.visit_schedule <= ', $value['span_to']);

					break;

				case 'month':
					$this->db->like('schedules.visit_schedule', $value['span'], 'both');

					break;

				default:
					# code...
					break;
			}

			$this->db->where('schedules.active', '1', FALSE);

			$query = $this->db->get();
			$schedules = $query->result_array();

			$schedule_case_name = $this->config->item('schedule_case_name');
			$schedule_capital = $this->config->item('schedule_capital');
			$schedule_witness_content = $this->config->item('schedule_witness_content');

			$csv_data = array();
			foreach ($schedules as $key => $val) {
			// Districtコード	District名称	営業員コード	営業員氏名	訪問日時	病院コード	病院名称	タスクタイトル	症例名	キャピタル	立会い内容	その他（フリーコメント)
				$line = array();

				$line[] = $val['district_id'];
				$line[] = $val['district_name'];
				$line[] = $val['employee_number'];
				$line[] = $val['worker_name'];
				$line[] = $val['visit_schedule'];
				$line[] = $val['sap_no'];
				$line[] = $val['facility_name'];
				$line[] = $val['title'];

				$line[] = $schedule_case_name[$val['case_name']];
				$line[] = $schedule_capital[$val['capital']];
				$line[] = $schedule_witness_content[$val['witness_content']];

				$line[] = $val['ope_support_remarks'];

				$csv_data[] = $line;
			}

			// CSV出力
			if($value['employee_number'] != ''){
				$csv_file_name = FCPATH.'report_csv_tmp/af_ope_support_'.$value['employee_number'].'_'.date('Ymd').'.csv';
			}else{
				$csv_file_name = FCPATH.'report_csv_tmp/af_ope_support_'.$value['district_id'].'_'.date('Ymd').'.csv';
			}

			$file_handler = fopen($csv_file_name, 'w');
			// foreach ($csv_data as $key => $value) {
			// 	fputcsv($file_handler, $value);
			// }
			fwrite($file_handler, $this->arr2csv($csv_data));

			fclose($file_handler);

			return $csv_file_name;
		}

		return null;

	}

	/**
	 * NavXレポート向けの実績CSVファイルを生成します。
	 *
	 * アーカイブ向けに実ファイルのパスを返します。
	 *
	 */
	public function print_af_navx_report($value='')
	{

		if($this->csv_type['af_navx_report'] == 1){

			$this->db->from('schedules, facilities, accounts, districts, navx_report');
			$this->db->select('schedules.id');
			$this->db->select('districts.district_id');
			$this->db->select('districts.name as district_name');
			$this->db->select('accounts.employee_number');
			$this->db->select('accounts.name as worker_name');
			$this->db->select('schedules.visit_schedule');
			$this->db->select('schedules.report_date');
			$this->db->select('facilities.sap_no');
			$this->db->select('facilities.name as facility_name');
			$this->db->select('schedules.title');

			$this->db->select('navx_report.case_type as navx_case_type');
			$this->db->select('navx_report.system_in_case');
			$this->db->select('navx_report.ablation_catheter_combination');

			$this->db->select('navx_report.ablation_catheter_type_sjm');
			$this->db->select('navx_report.ablation_catheter_type_jnj');
			$this->db->select('navx_report.ablation_catheter_type_bsx');
			$this->db->select('navx_report.ablation_catheter_type_jll');
			$this->db->select('navx_report.ablation_catheter_type_mdt');
			$this->db->select('navx_report.electronic_catheter_hra_3_5');
			$this->db->select('navx_report.electronic_catheter_hra_6_19');
			$this->db->select('navx_report.electronic_catheter_hra_20_24');
			$this->db->select('navx_report.electronic_catheter_hra_25');
			$this->db->select('navx_report.electronic_catheter_his_3_5');
			$this->db->select('navx_report.electronic_catheter_his_6_19');
			$this->db->select('navx_report.electronic_catheter_his_20_24');
			$this->db->select('navx_report.electronic_catheter_his_25');
			$this->db->select('navx_report.electronic_catheter_ra_3_5');
			$this->db->select('navx_report.electronic_catheter_ra_6_19');
			$this->db->select('navx_report.electronic_catheter_ra_20_24');
			$this->db->select('navx_report.electronic_catheter_ra_25');
			$this->db->select('navx_report.electronic_catheter_cs_3_5');
			$this->db->select('navx_report.electronic_catheter_cs_6_19');
			$this->db->select('navx_report.electronic_catheter_cs_20_24');
			$this->db->select('navx_report.electronic_catheter_cs_25');
			$this->db->select('navx_report.electronic_catheter_hrs_cs_3_5');
			$this->db->select('navx_report.electronic_catheter_hrs_cs_6_19');
			$this->db->select('navx_report.electronic_catheter_hrs_cs_20_24');
			$this->db->select('navx_report.electronic_catheter_hrs_cs_25');
			$this->db->select('navx_report.electronic_catheter_his_rv_3_5');
			$this->db->select('navx_report.electronic_catheter_his_rv_6_19');
			$this->db->select('navx_report.electronic_catheter_his_rv_20_24');
			$this->db->select('navx_report.electronic_catheter_his_rv_25');
			$this->db->select('navx_report.electronic_catheter_t_value_3_5');
			$this->db->select('navx_report.electronic_catheter_t_value_6_19');
			$this->db->select('navx_report.electronic_catheter_t_value_20_24');
			$this->db->select('navx_report.electronic_catheter_t_value_25');
			$this->db->select('navx_report.electronic_catheter_pv1_3_5');
			$this->db->select('navx_report.electronic_catheter_pv1_6_19');
			$this->db->select('navx_report.electronic_catheter_pv1_20_24');
			$this->db->select('navx_report.electronic_catheter_pv1_25');
			$this->db->select('navx_report.electronic_catheter_pv2_3_5');
			$this->db->select('navx_report.electronic_catheter_pv2_6_19');
			$this->db->select('navx_report.electronic_catheter_pv2_20_24');
			$this->db->select('navx_report.electronic_catheter_pv2_25');
			$this->db->select('navx_report.electronic_catheter_pv3_3_5');
			$this->db->select('navx_report.electronic_catheter_pv3_6_19');
			$this->db->select('navx_report.electronic_catheter_pv3_20_24');
			$this->db->select('navx_report.electronic_catheter_pv3_25');
			$this->db->select('navx_report.electronic_catheter_mapping_3_5');
			$this->db->select('navx_report.electronic_catheter_mapping_6_19');
			$this->db->select('navx_report.electronic_catheter_mapping_20_24');
			$this->db->select('navx_report.electronic_catheter_mapping_25');
			$this->db->select('navx_report.ice_status');
			$this->db->select('navx_report.sensiterm_status');
			$this->db->select('navx_report.remarks as navx_remarks');
			$this->db->select('navx_report.case_amounts');

			$this->db->where('schedules.account_id = accounts.id');
			$this->db->where('facilities.id = schedules.facility_id');
			$this->db->where('districts.district_id = schedules.district_id');
			$this->db->where('schedules.navx_report_id = navx_report.id');

			$this->db->where('schedules.report_date is not null', '', false);
			$this->db->where('schedules.report_type', '3');

			if($value['employee_number'] != ''){
				$this->db->where('accounts.employee_number', $value['employee_number'] );
			}

			if($value['district_id'] != '' ){
				$this->db->where('schedules.district_id', $value['district_id']  );
			}

			switch ($value['mode']) {
				case 'day':
					$this->db->where('schedules.visit_schedule', $value['date']);

					break;

				case 'week':
					$this->db->where('schedules.visit_schedule >= ', $value['span_from']);
					$this->db->where('schedules.visit_schedule <= ', $value['span_to']);

					break;

				case 'month':
					$this->db->like('schedules.visit_schedule', $value['span'], 'both');

					break;

				default:
					# code...
					break;
			}

			$this->db->where('schedules.active', '1', FALSE);

			$query = $this->db->get();
			$schedules = $query->result_array();

			$navx_case_type_name_ary = $this->config->item('navx_case_type');
			$navx_system_in_case_name_ary = $this->config->item('navx_system_in_case');
			$navx_ablation_catheter_combination_name_ary = $this->config->item('navx_ablation_catheter_combination');

			$ablation_catheter_type = array('sjm', 'jnj', 'bsx', 'jll', 'mdt');

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


			$csv_data = array();
			foreach ($schedules as $key => $val) {
			// Districtコード	District名称	営業員コード	営業員氏名	訪問日時	病院コード	病院名称	タスクタイトル	症例の種類	症例で使用したシステム	使用したアブカテの組み合わせ	SJM	JNJ	BSX	JLL	MDT	HRA（3~5極）	HRA（6~19極）	HRA（20~24極）	HRA（25極~）	→以後それぞれの種類別に横並び				ICE	Sensithermo	フリーコメント	この結果が該当する症例数
				$line = array();

				$line[] = $val['district_id'];
				$line[] = $val['district_name'];
				$line[] = $val['employee_number'];
				$line[] = $val['worker_name'];
				$line[] = $val['visit_schedule'];
				$line[] = $val['sap_no'];
				$line[] = $val['facility_name'];
				$line[] = $val['title'];

				$navx_case_type = '';
				if(isset($navx_case_type_name_ary[$val['navx_case_type']])){
					$navx_case_type = $navx_case_type_name_ary[$val['navx_case_type']];
				}
				$line[] = $navx_case_type;

				foreach ($ablation_catheter_type as $k => $v) {
					$param = $val['ablation_catheter_type_'.$v];
					$values = $this->config->item('navx_ablation_catheter_type_'.$v);

					if($param > 0){
						$line[] = $values[$param];
					}else{
						$line[] = '';
					}
				}


				$navx_electric_catheter_maker_params = $this->config->item('navx_electric_catheter_maker');

				foreach ($electric_catheter_maker as $maker_k => $maker_v) {
					foreach ($electronic_catheter_size as $size_k => $size_m) {
						$param = $val['electronic_catheter_'.$maker_k.'_'.$size_k];

						if($param > 0){
							$line[] = $navx_electric_catheter_maker_params[$param];
						}else{
							$line[] = '';
						}
					}
				}

				$ice_status = '';
				if(isset($this->config->item('navx_ice_status')[$val['ice_status']])){
					$ice_status = $this->config->item('navx_ice_status')[$val['ice_status']];
				}
				$line[] = $ice_status;

				$sensiterm_status = '';
				if(isset($this->config->item('navx_sensiterm_status')[$val['sensiterm_status']])){
					$sensiterm_status = $this->config->item('navx_sensiterm_status')[$val['sensiterm_status']];
				}
				$line[] = $sensiterm_status;

				// $line[] = $this->config->item('navx_sensiterm_status')[$val['sensiterm_status']];

				$line[] = $val['navx_remarks'];
				$line[] = $val['case_amounts'];

				$csv_data[] = $line;
			}

			// CSV出力
			if($value['employee_number'] != ''){
				$csv_file_name = FCPATH.'report_csv_tmp/af_navx_report_'.$value['employee_number'].'_'.date('Ymd').'.csv';
			}else{
				$csv_file_name = FCPATH.'report_csv_tmp/af_navx_report_'.$value['district_id'].'_'.date('Ymd').'.csv';
			}

			$file_handler = fopen($csv_file_name, 'w');
			// foreach ($csv_data as $key => $value) {
			// 	fputcsv($file_handler, $value);
			// }

			fwrite($file_handler, $this->arr2csv($csv_data));
			fclose($file_handler);

			return $csv_file_name;
		}

		return null;

	}

	/**
	 * CRM事業部所属向けの実績CSVファイルを生成します。
	 *
	 * アーカイブ向けに実ファイルのパスを返します。
	 *
	 */
	public function print_crm($value='')
	{
		if($this->csv_type['crm'] == 1){

			// Districtコード	District名称	営業員コード	営業員氏名	訪問日時	病院コード	病院名称	タスクタイトル	訪問相手	訪問内容	面談の結果	コメント

			$this->db->from('schedules, facilities, accounts, districts');
			$this->db->select('schedules.id');
			$this->db->select('districts.district_id');
			$this->db->select('districts.name as district_name');
			$this->db->select('accounts.employee_number');
			$this->db->select('accounts.name as worker_name');
			$this->db->select('schedules.visit_schedule');
			$this->db->select('schedules.report_date');
			$this->db->select('facilities.sap_no');
			$this->db->select('facilities.name as facility_name');
			$this->db->select('schedules.title');
			$this->db->select('schedules.visit_to');
			$this->db->select('schedules.visit_type');
			$this->db->select('schedules.sales_type');
			$this->db->select('schedules.visit_comment');

			$this->db->where('schedules.account_id = accounts.id');
			$this->db->where('facilities.id = schedules.facility_id');
			$this->db->where('districts.district_id = schedules.district_id');

			$this->db->where('schedules.report_date is not null', '', false);
			$this->db->where('schedules.report_type', '0');

			if($value['employee_number'] != ''){
				$this->db->where('accounts.employee_number', $value['employee_number'] );
			}

			if($value['district_id'] != '' ){
				$this->db->where('schedules.district_id', $value['district_id']  );
			}

			switch ($value['mode']) {
				case 'day':
					$this->db->where('schedules.visit_schedule', $value['date']);

					break;

				case 'week':
					$this->db->where('schedules.visit_schedule >= ', $value['span_from']);
					$this->db->where('schedules.visit_schedule <= ', $value['span_to']);

					break;

				case 'month':
					$this->db->like('schedules.visit_schedule', $value['span'], 'both');

					break;

				default:
					# code...
					break;
			}


			$query = $this->db->get();
			$schedules = $query->result_array();

			$schedule_visit_facility_worker = $this->config->item('schedule_visit_facility_worker');
			$schedule_visit_type = $this->config->item('schedule_visit_type');
			$schedule_sales_type = $this->config->item('schedule_sales_type');

			$csv_data = array();
			foreach ($schedules as $key => $val) {
			// Districtコード	District名称	営業員コード	営業員氏名	訪問日時	病院コード	病院名称	タスクタイトル	訪問相手	訪問内容（複数列方向に出てくるはずです）	立会い内容	その他（フリーコメント)
				$line = array();

				$line[] = $val['district_id'];
				$line[] = $val['district_name'];
				$line[] = $val['employee_number'];
				$line[] = $val['worker_name'];
				$line[] = $val['visit_schedule'];
				$line[] = $val['sap_no'];
				$line[] = $val['facility_name'];
				$line[] = $val['title'];

				$visit_to_ary = explode(',', $val['visit_to']);
				$visit_to = '';
				foreach ($visit_to_ary as $k => $v) {
					$visit_to .= $schedule_visit_facility_worker[$v];
				}
				$line[] = $visit_to;

				$visit_type_ary = explode(',', $val['visit_type']);
				$visit_type = '';
				foreach ($visit_type_ary as $k => $v) {
					$visit_type .= $schedule_visit_type[$v];
				}
				$line[] = $visit_type;

				// $sales_type_ary = explode(',', $val['sales_type']);
				// $sales_type = '';
				// foreach ($sales_type_ary as $k => $v) {
				// 	if(isset($schedule_sales_type[intval($v)])){
				// 		$sales_type .= $schedule_sales_type[intval($v)];
				// 	}

				// }
				// $line[] = $sales_type;

				$line[] = $val['visit_comment'];

				$csv_data[] = $line;
			}

			// CSV出力
			if($value['employee_number'] != ''){
				$csv_file_name = FCPATH.'report_csv_tmp/crm_'.$value['employee_number'].'_'.date('Ymd').'.csv';
			}else{
				$csv_file_name = FCPATH.'report_csv_tmp/crm_'.$value['district_id'].'_'.date('Ymd').'.csv';
			}

			$file_handler = fopen($csv_file_name, 'w');

			// foreach ($csv_data as $key => $value) {
			// 	fputcsv($file_handler, $value);
			// }
			fwrite($file_handler, $this->arr2csv($csv_data));

			fclose($file_handler);

			return $csv_file_name;
		}

		return null;

	}

	public function arr2csv($fields) {
		$fp = fopen('php://temp', 'r+b');
		foreach($fields as $field) {
			fputcsv($fp, $field);
		}
		rewind($fp);
		$tmp = str_replace(PHP_EOL, "\r\n", stream_get_contents($fp));
		return mb_convert_encoding($tmp, 'SJIS-win', 'UTF-8');
	}

}

/* End of file get_csv_files.php */
/* Location: ./application/models/get_csv_files.php */