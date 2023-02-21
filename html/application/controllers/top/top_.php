<?php defined('BASEPATH') OR exit('No direct script access allowed');

/* トップ */

class Top extends CI_Controller {

	/**
	 * ディストリクトを跨って参照できる権限向けに、検索画面を表示します。
	 *
	 * サジェストは別途ajaxで行い、
	 * 選択したディストリクトに降りる旨postされたら
	 * sessionにディストリクトIDを追加し、リダイレクトします。
	 *
	 */
	public function index()
	{
		if($this->input->post()){
			// sessionにdistrictを追加
			list($district_id, $region_id) = explode('_', $this->input->post('district_id'));

			$array = array(
				'district_id'   => $district_id,
				'region_id'     => $region_id
			);

			$this->session->set_userdata( $array );
			redirect('/day');
		}

		$this->load->helper('check_session');
		executeCheckSession(true);

		$this->smarty->assign('id', 'top');
		$this->smarty->assign('class', 'top');

		$this->smarty->display('top/header.tpl');
	

		$type = $this->session->userdata( 'account_type' );
		if ($type == 'headquarters') {
			$this->smarty->display('top/dbform.tpl');
		}	
		else 
		{
			$this->smarty->display('top/top.tpl');
		}

		$this->smarty->display('top/footer.tpl');
	}

	public function xlsx_import() {

		$save_dir = "./csv/";
		if(is_uploaded_file($_FILES["csvfile"]["tmp_name"])){
			echo $_FILES["csvfile"]["name"];
		
			$dest = $save_dir . $_FILES["csvfile"]["name"];
			
			if(move_uploaded_file($_FILES["csvfile"]["tmp_name"], $dest))
				echo "success";
			else
				die("fail2");
		} 
		else {
			echo "fail1";
		}

		// $csvfile = $_FILES["csvfile"];

		// $config['upload_path'] = './csv/';
	    // $config['allowed_types'] = "xlsx|xls";
	    // $config['max_size']= 10000;

		// // var_dump($csvfile);

	    // $this->load->library('upload', $config);
		$this->load->model('operation_xls');
		$this->load->model('accounts/set_worker_from_csv');
		$this->load->helper('download');

	    // $this->upload->initialize($config); 
	    // if (!$this->upload->do_upload('csvfile')) {
	    //   $error = array('error' => $this->upload->display_errors());
	    //   var_dump($error);
	  	// }
	    // else {
	    //   $data = array('upload_data' => $this->upload->data());
	    // }

		$file = $dest;
		//load the excel library
		$this->load->library('PHPExcelRead');
		 
		//read file from path
		$objPHPExcel = PHPExcel_IOFactory::load($file);

		if($this->input->post('sheet') != false)
		{
			$sheet_name = $this->input->post('sheet');
		}
		else {
			echo 'シート名を正しく入力してください.';
			return;
		}
		 
		//get only the Cell Collection
		$cell_collection = $objPHPExcel->getSheetByName($sheet_name)->getCellCollection();

		$update_rows = array();
		$insert_rows = array();
		//extract to a PHP readable array format
		foreach ($cell_collection as $cell) {
		    $column = $objPHPExcel->getSheetByName($sheet_name)->getCell($cell)->getColumn();
		    $row = $objPHPExcel->getSheetByName($sheet_name)->getCell($cell)->getRow();

		    $data_value = $objPHPExcel->getSheetByName($sheet_name)->getCell($cell)->getValue();
		    $color = '#'.$objPHPExcel->getSheetByName($sheet_name)->getStyle($cell)->getFill()->getStartColor()->getRGB();
		 
			if($row>4 && $column=="A") {
				$pwd = $this->set_worker_from_csv->getpwd($data_value);
				// if($pwd == "") {
				if($row == 6) {
					$a = 0;
				}

				if(!in_array($row, $insert_rows) && $pwd == "no") {
			    	array_push($insert_rows, $row);
		 		}
		 		else {
					if($pwd != false) {
						$objPHPExcel->getSheetByName($sheet_name)->setCellValue('T'.$row, $pwd);
					}
				}
			}
		 	if($row>4 && $column=="A" && $color=="#FF0000") {
		 		// delete operation
				$this->operation_xls->delete($data_value);
		 	}
		 	if($row>4 && $color=="#FFFF00") {
		 		if(!in_array($row, $update_rows)) {
			    	array_push($update_rows, $row);
		 		}
		 	}

		    //The header will/should be in row 1 only. of course, this can be modified to suit your need.
		    if ($row == 1) {
				$header[$row][$column] = $data_value;
		    } else {
				$arr_data[$row][$column] = $data_value;
				$color_data[$row][$column] = $color;
		    }
		}

		foreach ($insert_rows as $row) {
			$data2 = $arr_data[$row];
			$pwd = $this->operation_xls->insert($data2);
			$objPHPExcel->getSheetByName($sheet_name)->setCellValue('T'.$row, $pwd);
		}
		$objPHPExcel->getSheetByName($sheet_name)->setCellValue('T1', count($insert_rows));

		foreach ($update_rows as $row) {
			$data2 = $arr_data[$row];
			$this->operation_xls->update($data2);

		}
		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
		$objWriter->save("./csv/data.xlsx");
		force_download("./csv/data.xlsx", NULL);
		
		echo "success";

	}
}
