<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Set_districts_from_csv extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();

	}

	/**
	 * CSVファイルよりディストリクトの情報を読み込みます。
	 *
	 * あらかじめ所定の位置に配置したCSVファイルより
	 * ディストリクトの所属情報、名称を取得。
	 * パスワードをここで生成し、暗号化してテーブルに保持します。
	 *
	 */
	public function execute($csv_file_name)
	{
		if(file_exists($csv_file_name)){
			// echo exec('more '. $csv_file_name);

			$file = new SplFileObject($csv_file_name);

			$file->setFlags(SplFileObject::READ_CSV);

			$records = array();

			$password_hash    = $this->config->item('password_hash');
			$password_iv      = $this->config->item('password_iv');
			$password_options = $this->config->item('password_options');
			$password_method  = $this->config->item('password_method');

			foreach ($file as $line) {
				//終端の空行を除く処理 空行の場合に取れる値は後述
				if(!is_null($line[0]) && strlen($line[0]) == 4){

					$records[$line[0]] = array(
						'district_id' => $line[0],
						'name'        => $line[1],
						'division_id' => $line[2],
						'region_id'   => $line[3],
					);
				}
			}

			//district を登録します
			foreach ($records as $key => $value) {

				$this->db->select('id');
				$this->db->select('password');
				$this->db->where('district_id', $key);
				$this->db->from('districts');
				$query    = $this->db->get();
				$is_exist = $query->num_rows();

				$this->db->set('region_id',   $value['region_id']);
				$this->db->set('district_id', $value['district_id']);
				$this->db->set('name',        $value['name']);
				$this->db->set('login_id',    $key);
				$this->db->set('active',      1);

				$scope = 0;
				switch ($value['district_id']) {
					case 'J2O1':
					case 'J2O2':
					case 'J2O3':
						$scope = 1;
						break;

					case 'J2P1':
					case 'J2P2':
					case 'J2P3':
					case 'J2P4':
						$scope = 2;
						break;

					case 'J2Q1':
					case 'J2Q2':
						$scope = 3;
						break;

					case 'J2Q3':
					case 'J2Q4':
					case 'J2Q5':
					case 'J2Q6':
						$scope = 4;
						break;

					case 'J1M1':
					case 'J1M2':
					case 'J1M3':
					case 'J1M4':
					case 'J1M5':
					case 'J1M6':
					case 'J1M7':
					case 'J1M8':
						$scope = 5;
						break;

					case 'J1N1':
					case 'J1N2':
					case 'J1N3':
					case 'J1N4':
					case 'J1N5':
					case 'J1N8':
						$scope = 6;
						break;

					case 'J2CP':
					case 'J2NT':
						$scope = 7;
						break;

					default:
						# code...
						break;
				}

				$this->db->set('scopes_id',    $scope);

				if (!$is_exist) {

					// $this->db->set('employee_number', $value['employee_number']);
					$length = 8;
					$password = substr(str_shuffle('1234567890abcdefghijklmnopqrstuvwxyz'), 0, $length);

					$encrypt_password = openssl_encrypt($password, $password_method, $password_hash, $password_options, $password_iv);

					$encrypt_password = str_replace(array('+', '/', '='), array('_', '-', '.'), $encrypt_password);
					$encrypt_password = urlencode($encrypt_password);

					$this->db->set('password', $encrypt_password);
					$this->db->from('districts');
					$this->db->insert();

					$records[$key]['password'] = $password;

				}else{
					$encrypt_password = $query->row_array()['password'];

					$encrypt_password = urldecode($encrypt_password);
					$encrypt_password = str_replace(array('_','-', '.'), array('+', '/', '='), $encrypt_password);
					$password = openssl_decrypt($encrypt_password, $password_method, $password_hash, $password_options, $password_iv);

					$this->db->where('district_id', $key);
					$this->db->from('districts');
					$this->db->update();

					$records[$key]['password'] = $password;
				}
			}

			// $accounts_csv_file_name = FCPATH.'csv/worker_accounts_'.date('Ymd').'.csv';
			// $file_handler = fopen($accounts_csv_file_name, 'w');
			// foreach ($records as $key => $value) {
			// 	fputcsv($file_handler, $value);
			// }
			// fclose($file_handler);

			$districts_csv_file_name = FCPATH.'csv/districts_password_'.date('Ymd').'.csv';
			$file_handler = fopen($districts_csv_file_name, 'w');
			foreach ($records as $key => $value) {
				fputcsv($file_handler, $value);
			}
			fclose($file_handler);
		}

		// echo 'アカウントCSVファイル : '.$accounts_csv_file_name . "\n";
		echo 'ディストリクト一覧CSVファイル : '.$districts_csv_file_name . "\n";

	}

}

/* End of file set_districts_from_csv.php */
/* Location: ./application/models/set_districts_from_csv.php */