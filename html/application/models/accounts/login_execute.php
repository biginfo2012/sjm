<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_execute extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();

	}

	/**
	 * 各アカウントでログインします。
	 *
	 * 本店、ディストリクト、営業マンすべて共通。
	 *
	 * パスワードはデータベース内で暗号化して持っているので、
	 * フォームから平文で受け取ったのを暗号化して照合します。
	 * マスター→ディストリクト→営業マンと照合し、
	 * 見つからない場合はnullを返します。
	 *
	 */
	public function execute($value='')
	{
		// $this->load->helper('security');

		// パスワードはどっちみちエンコードして判別する
		$password_hash    = $this->config->item('password_hash');
		$password_iv      = $this->config->item('password_iv');
		$password_options = $this->config->item('password_options');
		$password_method  = $this->config->item('password_method');
		$encrypt_password = openssl_encrypt($value['password'], $password_method, $password_hash, $password_options, $password_iv);
		$encrypt_password = str_replace(array('+', '/', '='), array('_', '-', '.'), $encrypt_password);
		$encrypt_password = urlencode($encrypt_password);

		$master_password = '%D0%99%E7%09%BF%BB%0BB%E7%C3+%92_%92%0D%06';
		// DKN4kwfFELwb を暗号化したもの

		$this->db->select('district_id');
		$this->db->from('accounts');
		$this->db->where('password',$encrypt_password);
		$query = $this->db->get();
		if($query->num_rows() == 1){
			$return = $query->row_array();
			if($return['district_id'] == "") {
				$return = array();
				$return['account_type'] = 'headquarters';
				return $return;					
			}
			// return $return;
		}


		if($value['login_id'] == 'master' && $encrypt_password == $master_password ){

			$return = array();
			$return['account_type'] = 'headquarters';
			return $return;

		}

		// districtでログインを試みます
		$this->db->select('districts.id');
		$this->db->select('districts.name');
		$this->db->select('districts.district_id');
		$this->db->select('districts.division_id');
		$this->db->select('districts.region_id');
		$this->db->select('scopes.scopes_data as scope_districts');
		$this->db->from('districts, scopes');
		$this->db->where('districts.login_id', $value['login_id']);
		$this->db->where('districts.password', $encrypt_password);
		$this->db->where('districts.active',   1);
		$this->db->where('districts.scopes_id = scopes.id');
		$query = $this->db->get();

		if($query->num_rows() == 1){
			$return = $query->row_array();
			$return['account_type'] = 'district';
			return $return;
		}

		$this->db->select('accounts.id');
		$this->db->select('accounts.region_id');
		$this->db->select('accounts.district_id');
		$this->db->select('accounts.role_code');
		$this->db->select('accounts.employee_number');
		$this->db->select('accounts.mailaddress');
		// $this->db->from('accounts, districts, scopes');
		$this->db->from('accounts');

		# TODO 社員番号かメルアドか未決。データを見てから考える。
		$this->db->where('accounts.employee_number', $value['login_id']);
		$this->db->where('accounts.password',        $encrypt_password);

		$this->db->where('accounts.active',   1);
		$query = $this->db->get();



		if($query->num_rows() == 1){
			$return = $query->row_array();

			if($return['district_id'] != ''){
				$this->db->from('districts, scopes');
				$this->db->where('districts.scopes_id = scopes.id');
				$this->db->where('districts.district_id', $return['district_id']);
				$this->db->select('scopes.scopes_data as scope_districts');
				$query = $this->db->get();
				$return['scope_districts'] = $query->row_array()['scope_districts'];
			}

			switch ($return['role_code']) {
				case '4':
					$return['district_id']  = 'J2';
					$return['account_type'] = 'crm_nsd';

					$this->db->from('scopes');
					$this->db->where('scopes.id', 8);
					$this->db->select('scopes.scopes_data as scope_districts');
					$query = $this->db->get();
					$return['scope_districts'] = $query->row_array()['scope_districts'];

					break;

				case '5':
					$return['district_id']  = 'J2';
					$return['account_type'] = 'crm_manager';

					$this->db->from('scopes');
					$this->db->where('scopes.id', 8);
					$this->db->select('scopes.scopes_data as scope_districts');
					$query = $this->db->get();
					$return['scope_districts'] = $query->row_array()['scope_districts'];

					break;

				case '6':
					if(in_array($return['employee_number'], $this->config->item('fce_manager_id'))){
						$return['district_id']  = 'J2';
						$return['account_type'] = 'crm_manager';

						$this->db->from('scopes');
						$this->db->where('scopes.id', 8);
						$this->db->select('scopes.scopes_data as scope_districts');
						$query = $this->db->get();
						$return['scope_districts'] = $query->row_array()['scope_districts'];


					}else{
						$return['district_id']  = 'J2';
						$return['account_type'] = 'fce_manager';
					}

					break;

				case '7':
					$return['district_id']  = 'J2';
					$return['account_type'] = 'fce_manager';
					break;

				default:
					if($return['region_id'] == 9){
						// $return['district_id']  = 'J2';
						$return['account_type'] = 'fce_manager';
					}else{
						$return['account_type'] = 'worker';
					}

					break;

			}


			// if(in_array($return['employee_number'], $this->config->item('crm_nsd_id'))){

			// 	$return['district_id'] = 'J1';
			// 	$return['account_type'] = 'crm_nsd';

			// }else if(in_array($return['employee_number'], $this->config->item('crm_manager_id'))){
			// 	$return['district_id'] = 'J1';
			// 	$return['account_type'] = 'crm_manager';

			// // }else if($return['employee_number'] == '' || $return['employee_number'] == ''){
			// // 	$return['account_type'] = 'fce_manager';

			// }else{
			// 	$return['account_type'] = 'worker';

			// }

			return $return;
		}

		return null;

	}

}

/* End of file login.php */
/* Location: ./application/models/login.php */