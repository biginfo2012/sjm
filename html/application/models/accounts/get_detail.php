<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Get_detail extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();

	}

	/**
	 * 営業マンの個人情報を取得します。
	 * 主に訪問予定のモーダル展開用に使います。
	 *
	 */
	public function execute($value='')
	{
		$this->db->select('accounts.id');
		$this->db->select('accounts.id as account_id');
		$this->db->select('accounts.region_id');
		$this->db->select('accounts.district_id');
		$this->db->select('accounts.role_code');
		$this->db->select('accounts.employee_number');
		$this->db->select('accounts.name');
		$this->db->select('accounts.mailaddress');
		$this->db->from('accounts');

		$this->db->where('employee_number', $value['employee_number']);

		$query = $this->db->get();
		return $query->row_array();

	}

}

/* End of file get_detail.php */
/* Location: ./application/models/get_detail.php */