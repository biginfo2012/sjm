<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cmd extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * コマンドラインから呼び出され、営業マンの取り込みを行います。
	 *
	 */
	public function set_worker($csv_file_name)
	{

		$this->load->model('accounts/Set_worker_from_csv');
		$this->Set_worker_from_csv->execute(FCPATH.'csv/'.$csv_file_name);

	}

	/**
	 * コマンドラインから呼び出され、ディストリクトの取り込みを行います。
	 *
	 */
	public function set_districts($csv_file_name)
	{

		$this->load->model('districts/Set_districts_from_csv');
		$this->Set_districts_from_csv->execute(FCPATH.'csv/'.$csv_file_name);

	}

	/**
	 * コマンドラインから呼び出され、訪問先の取り込みを行います。
	 *
	 */
	public function set_facilities($csv_file_name)
	{

		$this->load->model('facilities/Set_facilities_from_csv');
		$this->Set_facilities_from_csv->execute(FCPATH.'csv/'.$csv_file_name);

	}

}

/* End of file cmd.php */
/* Location: ./application/controllers/cmd.php */