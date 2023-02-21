<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Set_schedule extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();

	}

	/**
	 * 訪問予定スケジュールを登録・更新します。
	 *
	 * リージョンID、ディストリクトIDなど必要な引数が渡っていない場合は別途取得して補完します。
	 * 訪問予定スケジュールの基本情報に加え、登録と同時にレポートを付ける場合はレポート登録日を追加します。
	 * 予定IDが渡っている場合は更新します。
	 * ただし削除フラグがついている場合は論理削除します。
	 * 予定IDが渡っていない場合は登録を行い、
	 * いま手を入れた予定IDを返します。
	 */
	public function execute($value='')
	{
		$return_id = null;

		if(is_null($value['region_id'])){
			$this->db->select('region_id');
			$this->db->where('accounts.id', $value['account_id']);
			$this->db->from('accounts');
			$query = $this->db->get();
			$value['region_id'] = $query->row_array()['region_id'];
		}

		if (is_null($value['district_id'])) {
			$this->db->select('district_id');
			$this->db->where('accounts.id', $value['account_id']);
			$this->db->from('accounts');
			$query = $this->db->get();
			$value['district_id'] = $query->row_array()['district_id'];
		}

		$this->db->trans_start();

		$this->db->set('account_id',      $value['account_id']);
		$this->db->set('region_id',       $value['region_id']);
		$this->db->set('district_id',     $value['district_id']);
		$this->db->set('facility_id',     $value['facility_id']);
		$this->db->set('role_code',       $value['role_code']);
		$this->db->set('visit_schedule',  $value['visit_schedule']);
		$this->db->set('visit_time_from', $value['visit_time_from']);
		$this->db->set('visit_time_to',   $value['visit_time_to']);
		$this->db->set('visit_to',        $value['visit_to']);
		$this->db->set('title',           $value['title']);
		$this->db->set('visit_type',      $value['visit_type']);
		$this->db->set('visit_comment',   $value['visit_comment']);
		$this->db->set('report_type',     intval($value['report_type']));
		$this->db->set('active',          1);
		$this->db->from('schedules');

		if(isset($value['send_report']) && $value['send_report'] == 'true'){
			$this->db->set('report_date', 'curdate()', FALSE);
		}

		if($value['id'] != ''){
			if($value['inactive'] == 1){
				$this->db->set('active', 0);
			}

			$this->db->where('id', $value['id']);
			$this->db->update();

			$return_id = $value['id'];

		}else{
			$this->db->insert();

			$return_id = $this->db->insert_id();
		}

		$this->db->trans_complete();

		return $return_id;

	}


}

/* End of file set_schedule.php */
/* Location: ./application/models/set_schedule.php */