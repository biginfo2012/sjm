<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Set_report extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();

	}

	/**
	 * 訪問予定に結果レポートをつけて更新します。
	 *
	 *
	 *
	 */
	public function execute($value='')
	{
		// 結果レポートをつけるべきスケジュールは決まっているのでschedules.id は取れます

		$this->db->trans_start();

		$this->db->set('report_date',         $value['report_date']);
		$this->db->set('sales_type',          $value['sales_type']);
		$this->db->set('case_name',           $value['case_name']);
		$this->db->set('capital',             $value['capital']);
		$this->db->set('witness_content',     $value['witness_content']);
		$this->db->set('ope_support_remarks', $value['ope_support_remarks']);
		$this->db->set('remarks',             $value['remarks']);
		// $this->db->set('accuracy',            $value['accuracy']);
		// $this->db->set('sales_status',        $value['sales_status']);
		$this->db->set('status_report',       $value['status_report']);

		$this->db->from('schedules');
		$this->db->where('id', $value['id']);
		$this->db->update();

		$this->db->trans_complete();
		return $this->db->trans_status();

	}

}

/* End of file set_report.php */
/* Location: ./application/models/set_report.php */