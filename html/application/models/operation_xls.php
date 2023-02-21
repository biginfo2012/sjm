<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Operation_xls extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
        $this->load->database();
	}

	/**
	 * CSVファイルより営業マンのログイン情報を読み込みます。
	 *
	 * あらかじめ所定の位置に配置したCSVファイルより
	 * 営業マンの所属情報、社員番号、氏名、メルアドを取得。
	 * パスワードをここで生成し、暗号化してテーブルに保持します。
	 *
	 */
	public function delete($person)
	{
		$this->db->where('employee_number', $person);
		$this->db->delete('accounts');
	}

	public function insert($data) {
		$name = $data['B'].$data['C'];
		$division = $data['D'];
		$mail = $data['S'];		
		if($division = "AF事業部") {
			$division = '0'; 
		}
		else if($division = "CRM事業部") {
			$division = '1';
		}
		else {
			$division = '';
		}
		if(isset($data['E']))
			$region = $data['E'];
		else $region = "";

		switch($region) {
			case "東日本リージョン": {
				$region = '1';
				break;
			}
			case "西日本リージョン": {
				$region = '2';
				break;
			}
			
			case "FCEフィールドトレーナーグループ": {
				$region = '5';
				break;
			}
			
		}

		if(isset($data['F']))
			$district = $this->getdistrict($data['F']);
		else {
			$district = "";
		}

		if(!isset($data['G'])) {
			$sales = '';
		}
		else {
			$sales = $data['G'];
			if(strpos($sales, "AF FCE") !== false) {
				$sales = '1';
			} 
			else if(strpos($sales, "AF Sales") !== false) {
				$sales = '0';
			}
			else if(strpos($sales, "CRM Sales") !== false) {
				$sales = '2';
			}
			else if(strpos($sales, "CRM NSD") !== false) {
				$sales = '4';
			}
			else if(strpos($sales, "CRM FCE") !== false) {
				$sales = '3';
			}		
			else {
				$sales = '';
			}

		}

		while(1) {
			$length = 8;
			$password = substr(str_shuffle('1234567890abcdefghijklmnopqrstuvwxyz'), 0, $length);
	
			$password_hash    = $this->config->item('password_hash');
			$password_iv      = $this->config->item('password_iv');
			$password_options = $this->config->item('password_options');
			$password_method  = $this->config->item('password_method');
			$encrypt_password = openssl_encrypt($password, $password_method, $password_hash, $password_options, $password_iv);
			$encrypt_password = str_replace(array('+', '/', '='), array('_', '-', '.'), $encrypt_password);
			$encrypt_password = urlencode($encrypt_password);	
			$result_pass = $encrypt_password;

			$encrypt_password = urldecode($encrypt_password);
			$encrypt_password = str_replace(array('_','-', '.'), array('+', '/', '='), $encrypt_password);
			$password = openssl_decrypt($encrypt_password, $password_method, $password_hash, $password_options, $password_iv);
			if($password != false) {
				break;
			}
		}


		$updateData = array(
			'employee_number' => $data['A'],
			'name' => $name,
			'division_id' => $division,
			'region_id' => $region,
			'district_id' => $district,
			'mailaddress' => $mail,			
			'password' => $result_pass,
			'role_code' => $sales,
		);

		$this->db->insert('accounts', $updateData);

		return $password;
	}

	public function update($data)
	{
		$name = $data['B'].$data['C'];
		$division = $data['D'];
		if($division = "AF事業部") {
			$division = '0'; 
		}
		else if($division = "CRM事業部") {
			$division = '1';
		}
		else {
			$division = '';
		}
		$region = $data['E'];

		switch($region) {
			case "東日本リージョン": {
				$region = '1';
				break;
			}
			case "西日本リージョン": {
				$region = '2';
				break;
			}
			
			case "FCEフィールドトレーナーグループ": {
				$region = '5';
				break;
			}			
		}

		if(isset($data['F']))
			$district = $this->getdistrict($data['F']);
		else {
			$district = "";
		}
		if(!isset($data['G'])) {
			$sales = '';
		}
		else {
			$sales = $data['G'];
			if(strpos($sales, "AF FCE") !== false) {
				$sales = '1';
			} 
			else if(strpos($sales, "AF Sales") !== false) {
				$sales = '0';
			}
			else if(strpos($sales, "CRM Sales") !== false) {
				$sales = '2';
			}
			else if(strpos($sales, "CRM NSD") !== false) {
				$sales = '4';
			}
			else if(strpos($sales, "CRM FCE") !== false) {
				$sales = '3';
			}		
			else {
				$sales = '';
			}
		}
		$updateData = array(
			'name' => $name,
			'division_id' => $division,
			'region_id' => $region,
			'district_id' => $district,
			'role_code' => $sales,
		);

		$this->db->where('employee_number', $data['A']);
		$this->db->update('accounts', $updateData);
	}

	public function getdistrict($data) {
		$this->db->select('district_id');
		$this->db->where('name', $data);
		$this->db->from('districts');
		$query = $this->db->get();
		$result = $query->result();

		if($result) 
			return $result[0]->district_id;
		else 
			return "";
	}

}

/* End of file set_worker_from_csv.php */
/* Location: ./application/models/set_worker_from_csv.php */