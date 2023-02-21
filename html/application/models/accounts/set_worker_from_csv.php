<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Set_worker_from_csv extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();

	}

	/**
	 * CSVファイルより営業マンのログイン情報を読み込みます。
	 *
	 * あらかじめ所定の位置に配置したCSVファイルより
	 * 営業マンの所属情報、社員番号、氏名、メルアドを取得。
	 * パスワードをここで生成し、暗号化してテーブルに保持します。
	 *
	 */
	public function execute($csv_file_name)
	{

		if(file_exists($csv_file_name)){
			// echo exec('more '. $csv_file_name);

			$file = new SplFileObject($csv_file_name);

			$file->setFlags(SplFileObject::READ_CSV);

			$districts = array();
			$records   = array();

			$password_hash    = $this->config->item('password_hash');
			$password_iv      = $this->config->item('password_iv');
			$password_options = $this->config->item('password_options');
			$password_method  = $this->config->item('password_method');

			foreach ($file as $line) {
				//終端の空行を除く処理 空行の場合に取れる値は後述
				if(!is_null($line[0]) && strlen($line[0]) == 1){

				// 0,  事業部番号（AF事業部＝0、CRM事業部＝1）,
				// 1,  事業部名称,
				// 2,  Region番号（東日本＝0、西日本＝1、FCEグループ＝2）,
				// 3,  Region名称,
				// 4,  District番号,
				// 5,  District名称,
				// 6,  NavXレポート（非対称＝0、対象＝1）,
				// 7,  担当者番号（社員番号）,
				// 8,  担当者氏名（山田太郎）*スペースなしで記載,
				// 9,  担当者所属（Sales=0, FCE=1）,
				// 10, 担当者メールアドレス

					// region_id が null なデータが入るようになったので9でも入れておく
					if (is_null($line[2]) || $line[2] == '') {
						$line[2] = 9;
					}

					if(!isset($districts[$line[4]]) && $line[5] != ''){
						$districts[$line[4]] = array(
							'district_id' => $line[4],
							'name'        => $line[5],
							'division_id' => $line[0],
							'region_id'   => $line[2],
						);
					}

					$role_code = 0;
					if($line[0] == 0){
						// AF division
						if($line[9] == 0){
							// sales
							$role_code = 0;
						}else{
							//fce
							$role_code = 1;
						}

						// fce manager
						if($line[4] == ''){
							$role_code = 6;
						}

					}else if($line[0] == 1){
						// CRM division
						if($line[9] == 0){
							// sales
							$role_code = 2;
						}else{
							//fce
							$role_code = 3;
						}

						// crm manager
						if($line[4] == ''){
							$role_code = 5;
						}

					}

					if($line[7] == $this->config->item('crm_nsd_id')){
						$role_code = 4;
					}
					if(in_array($line[7], $this->config->item('fce_manager_id'))){
						$role_code = 6;
					}

					$records[$line[7]] = array(
						'division_id'     => $line[0],
						'region_id'       => $line[2],
						'district_id'     => $line[4],
						'role_code'       => $role_code,
						'employee_number' => $line[7],
						'name'            => $line[8],
						'mailaddress'     => strtolower($line[10]),
					);
				}
			}

			echo count($records)." lines\n";

			//workerを登録します
			foreach ($records as $key => $value) {

				$this->db->select('id');
				$this->db->select('password');
				$this->db->where('employee_number', $key);
				$this->db->from('accounts');
				$query    = $this->db->get();
				$is_exist = $query->num_rows();

				$this->db->set('region_id',   $value['region_id']);
				$this->db->set('district_id', $value['district_id']);
				$this->db->set('role_code',   $value['role_code']);
				$this->db->set('name',        $value['name']);
				$this->db->set('mailaddress', $value['mailaddress']);
				$this->db->set('active',      1);

				if (!$is_exist) {

					$this->db->set('employee_number', $value['employee_number']);
					$length = 8;
					$password = substr(str_shuffle('1234567890abcdefghijklmnopqrstuvwxyz'), 0, $length);

					$encrypt_password = openssl_encrypt($password, $password_method, $password_hash, $password_options, $password_iv);

					$encrypt_password = str_replace(array('+', '/', '='), array('_', '-', '.'), $encrypt_password);
					$encrypt_password = urlencode($encrypt_password);

					$this->db->set('password', $encrypt_password);
					$this->db->from('accounts');
					$this->db->insert();

					$records[$key]['password'] = $password;

				}else{

					$encrypt_password = $query->row_array()['password'];

					$encrypt_password = urldecode($encrypt_password);
					$encrypt_password = str_replace(array('_','-', '.'), array('+', '/', '='), $encrypt_password);
					$password = openssl_decrypt($encrypt_password, $password_method, $password_hash, $password_options, $password_iv);

					$this->db->where('employee_number', $value['employee_number']);
					$this->db->from('accounts');
					$this->db->update();

					$records[$key]['password'] = $password;
				}
			}

			$accounts_csv_file_name = FCPATH.'csv/worker_accounts_'.date('Ymd').'.csv';
			$file_handler = fopen($accounts_csv_file_name, 'w');
			foreach ($records as $key => $value) {
				fputcsv($file_handler, $value);
			}
			fclose($file_handler);

			$districts_csv_file_name = FCPATH.'csv/districts_'.date('Ymd').'.csv';
			$file_handler = fopen($districts_csv_file_name, 'w');
			foreach ($districts as $key => $value) {
				fputcsv($file_handler, $value);
			}
			fclose($file_handler);

			echo 'アカウントCSVファイル : '.$accounts_csv_file_name . "\n";
			echo 'ディストリクト一覧CSVファイル : '.$districts_csv_file_name . "\n";

		}

	}

	public function getpwd($data) {
		$password_hash    = $this->config->item('password_hash');
		$password_iv      = $this->config->item('password_iv');
		$password_options = $this->config->item('password_options');
		$password_method  = $this->config->item('password_method');

		$this->db->select('password');
		$this->db->from('accounts');
		$this->db->where('employee_number', $data);
		$query = $this->db->get();
		$result = $query->result();

		if(count($result) == 0) {
			return "no";
		}

		$encrypt_password = $result[0]->password;

		$encrypt_password = urldecode($encrypt_password);
		$encrypt_password = str_replace(array('_','-', '.'), array('+', '/', '='), $encrypt_password);
		$password = openssl_decrypt($encrypt_password, $password_method, $password_hash, $password_options, $password_iv);
		if($password == false) 
			return $encrypt_password;
		return $password;
	}

}

/* End of file set_worker_from_csv.php */
/* Location: ./application/models/set_worker_from_csv.php */