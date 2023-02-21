<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Suggest extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * 検索条件に合致するディストリクト名称とIDを、ajaxで解釈できるよう返します。
	 *
	 * ログイン中のアカウントでの可視範囲を指定した上で、
	 * 検索語が入っていたらサジェストとして取得。
	 * 名称とディストリクトIDを返します。
	 *
	 */
	public function district()
	{
		$status = array();

		$status['suggest_word'] = $this->input->get('suggest_word');
		if($this->session->userdata('region_id')){
			$status['region_id'] = $this->session->userdata('region_id');
		}
		if(!is_null($this->session->userdata('division_id'))){
			$status['division_id'] = $this->session->userdata('division_id');
		}

		switch ($this->session->userdata('account_type')) {
			case 'crm_nsd':
			case 'crm_manager':
				$status['division_id'] = 0;
				break;

			case 'fcm_manager':
				$status['division_id'] = 1;
				break;

			case 'crm_nsd':
				$status['region_id'] = $this->session->userdata('region_id');
				$status['division_id'] = 1;
				break;

			case 'worker':
				$status['region_id'] = $this->session->userdata('region_id');

			default:
				# code...
				break;
		}

		// if($this->session->userdata('account_type') == 'crm_nsd'){
		// 	$status['division_id'] = 1;
		// }else if($this->session->userdata('account_type') == 'crm_manager'){
		// 	$status['region_id'] = $this->session->userdata('region_id');
		// 	$status['division_id'] = 1;
		// }else{

		// }

		$this->load->model('districts/Get_districts');

		$result = array();
		$words  = $this->Get_districts->getList($status);
		foreach ($words as $key => $value) {
			// if($value['region_id'] == 0){
			// 	$region_name = '東日本';
			// }else{
			// 	$region_name = '西日本';
			// }

			// $value['district_id'] .= '_'.$value['region_id'];
			// $result[] = array('value' => $value['name'].'（'.$region_name.'）', 'labels' => $value['district_id']);
			$result[] = array('value' => $value['name'], 'labels' => $value['district_id']);
		}
		echo json_encode($result);
		return false;
	}

	/**
	 * 検索条件に合致する訪問先名称とID、NavXレポートの有無をajaxで解釈できるよう返します。
	 *
	 * 予約登録モーダル向けに使うので、NavXレポートの有無も返してやります。
	 *
	 */
	public function facility()
	{
		$status = array();
		$status['district_id']  = $this->session->userdata('district_id');
		$status['suggest_word'] = $this->input->get('suggest_word');

		$this->load->model('facilities/Get_facilities');

		$result = array();
		$words  = $this->Get_facilities->getList($status);
		// var_dump($words);
		foreach ($words as $key => $value) {
			$result[] = array('value' => $value['name'], 'labels' => $value['id'].'_'.$value['require_navx_report']);
		}
		echo json_encode($result);
		return false;
	}

}

/* End of file suggest.php */
/* Location: ./application/controllers/suggest.php */