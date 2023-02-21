<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Get_facility extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();

	}

	/**
	 * 設備IDを取得して設備の情報を取得します。
	 *
	 *
	 */
	public function getData($value='')
	{
		// naxv_report がrequireかどうかなど取得します

		$this->db->select('facilities.id');
		$this->db->select('facilities.area_code');
		$this->db->select('facilities.pref_code');
		$this->db->select('facilities.address');
		$this->db->select('facilities.name');
		$this->db->select('facilities.require_navx_report');

		$this->db->from('facilities');

		$this->db->where('facilities.id',     $value['id']);
		$this->db->where('facilities.active', 1);

		$query = $this->db->get();
		return $query->row_array();

	}

}

/* End of file get_facility.php */
/* Location: ./application/models/get_facility.php */