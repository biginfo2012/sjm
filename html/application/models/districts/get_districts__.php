<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Get_districts extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();

	}

	/**
	 * ログイン先検索用にディストリクトの一覧あるいはディストリクト単体を取得します。
	 *
	 * ログイン権限によりスコープを絞り込みます。
	 * 名称が指定されている場合は部分一致をかけます。
	 *
	 */
	public function getList($value='')
	{
		logd($value);

		$this->db->select('id');
		$this->db->select('name');
		$this->db->select('division_id');
		$this->db->select('region_id');
		$this->db->select('district_id');
		$this->db->from('districts');

		if(isset($value['region_id']) ){
			// $this->db->where('region_id ', $value['region_id']);
		}
		if(isset($value['division_id'])){
			$this->db->where('division_id', $value['division_id']);
		}
		$this->db->where('active',      1);


		if($value['suggest_word'] != ''){
			$this->db->like('name', $value['suggest_word'], 'both');
		}
		if(isset($value['district_id'])){
			$this->db->where('district_id', $value['district_id']);
			$query  = $this->db->get();
			$return = $query->row_array();
			logd($return);

			$return['division_name'] = '';
			$return['region_name']   = '';

			switch ($return['region_id']) {
				case '1':
					$return['region_name'] = '東日本リージョン';
					break;

				case '2':
					$return['region_name'] = '西日本リージョン';
					break;              

                case '5':
                    $return['region_name'] = 'FCEフィールドトレーナーグループ';
                    break;               

				default:
					# code...
					break;
			}
			if(isset($value['division_type']) && $value['division_type'] != ''){
				$return['division_name'] = strtoupper($value['division_type']);
			}

			// $return['division_type'] = $value['division_type'];

			return $return;

		}else{
			// 支店以下でログインしている場合scopeを観にいきます
			if($this->session->userdata('account_type') != 'headquarters' && $this->session->userdata('account_type') != 'crm_nsd'){
				$this->db->where_in('district_id', $this->session->userdata('scope_districts'));
			}

			$this->db->order_by('division_id', 'asc');
			$query = $this->db->get();
			logd($query->result_array());

			return $query->result_array();
		}


	}

}

/* End of file get_districts.php */
/* Location: ./application/models/get_districts.php */