<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Get_facilities extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();

	}

	/**
	 * 予定登録用に設備の一覧を取得します。
	 *
	 * 設備の名称の一部が指定されている場合は部分一致で取得します。
	 *
	 *
	 */
	public function getList($value='')
	{
		// naxv_report がrequireかどうかなど取得します

		$this->db->select('facilities.id');
		$this->db->select('facilities.area_code');
		$this->db->select('facilities.pref_code');
		$this->db->select('facilities.address');
		$this->db->select('facilities.name');
		$this->db->select('facilities.require_navx_report');

		$this->db->from('facilities');

		if($value['suggest_word'] != ''){
			// 多分名称の前方一致
			// $this->db->where('facilities.district_id', $value['district_id']);
			$this->db->like('facilities.name', $value['suggest_word'], 'both');
		}

		$this->db->where('facilities.active', 1);

		$query = $this->db->get();
		return $query->result_array();

	}

}

/* End of file get_facility.php */
/* Location: ./application/models/get_facility.php */