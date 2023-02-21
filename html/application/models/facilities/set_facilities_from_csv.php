<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Set_facilities_from_csv extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();

	}

	/**
	 * CSVファイルより訪問先設備の情報を読み込みます。
	 *
	 * あらかじめ所定の位置に配置したCSVファイルより
	 * 訪問先設備の名称、ID、NavXレポートの有無を取得。
	 * テーブルに保持します。
	 *
	 */
	public function execute($csv_file_name)
	{
		if(file_exists($csv_file_name)){
			// echo exec('more '. $csv_file_name);

			$file = new SplFileObject($csv_file_name);

			$file->setFlags(SplFileObject::READ_CSV);

			$records = array();

			foreach ($file as $line) {
				//終端の空行を除く処理 空行の場合に取れる値は後述
				if(!is_null($line[0]) && strlen($line[2]) == 1){
					$this->db->select('sap_no');
					$this->db->from('facilities');
					$this->db->where('sap_no', $line[1]);
					$query    = $this->db->get();
					$is_exist = $query->num_rows();

					$this->db->set('name', $line[0]);
					$this->db->set('sap_no', $line[1]);
					$this->db->set('require_navx_report', $line[2]);
					$this->db->from('facilities');

					if(!$is_exist){
						$this->db->insert();

					}else{
						$this->db->where('sap_no', $line[1]);
						$this->db->update();
					}
				}
			}
		}

	}

}

/* End of file set_facilities_from_csv.php */
/* Location: ./application/models/set_facilities_from_csv.php */