<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Get_today_appoints extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();

	}

	/**
	 * システム全体での今日の訪問予定数を取得します。
	 *
	 */
	public function execute($value='')
	{
		$return = array();
		$return['date'] = date('Y年n月j日');

		$this->db->select('id');
		$this->db->from('schedules');
		$this->db->where('visit_schedule', 'curdate()', FALSE);
		$this->db->where('report_date is not null', '', FALSE);
		$this->db->where('schedules.active', '1', FALSE);
		$query = $this->db->get();
		$return['amount'] = $query->num_rows();

		return $return;

	}

}

/* End of file get_today_appoints.php */
/* Location: ./application/models/get_today_appoints.php */