<?php defined('BASEPATH') OR exit('No direct script access allowed');

/* ログイン */

class Login extends CI_Controller {

	/**
	 * ログイン情報、パスワードを取得しログインを行います。
	 *
	 * マスター、ディストリクト、営業マン全て共通
	 * 上記の順で称号を行い、
	 * アカウントタイプを判別してセッションにログイン情報を保持。
	 *
	 * 営業マンは自身の本日の訪問予定参照
	 * ディストリクトは自ディストリクトの本日の訪問予定参照
	 * CRM事業部、マスター、FCEマネージャーは
	 * 参照先のディストリクトを検索する画面へ飛びます。
	 *
	 */
	public function index()
	{

		$this->session->unset_userdata('district_id');


		if($this->input->post()){

			$this->load->model('accounts/Login_execute');
			$result = $this->Login_execute->execute($this->input->post());

			if(!is_null($result)){

				if($result['account_type'] == 'headquarters'){
					$array = array(
						'account_type'  => $result['account_type']
					);

					$this->session->set_userdata( $array );

					redirect('/search');

				}else{

					$division = 0; // AF事業部
					if(substr($result['district_id'], 0,2) == 'J1'){
						$division = 1;
					}

					logd($division);

					$array = array(
						'division_id'     => $division,
						'district_id'     => $result['district_id'],
						'region_id'       => $result['region_id'],
						'account_type'    => $result['account_type'],
						'scope_districts' => explode(',', $result['scope_districts'])
					);

					if($result['account_type']!== 'district'){
						$array['worker_id'] = $result['employee_number'];
					}

					$this->session->set_userdata( $array );

					logd($array);

					if($result['account_type'] == 'worker'){
						redirect('/day/user');
					}else if($result['account_type'] == 'district'){
						redirect('/day');
					}else if($result['account_type'] == 'crm_nsd'){
						redirect('/search');
					}else if($result['account_type'] == 'fce_manager'){
						if($result['district_id'] == ''){
							redirect('/search');
						}else{
							redirect('/day');
						}
					}else if($result['account_type'] == 'crm_manager'){
						redirect('/search');
					}
				}
			}
		}

		$this->smarty->assign('id', 'top');
		$this->smarty->assign('class', 'top');
		$this->smarty->assign('login_account_type', '');
		$this->smarty->assign('backto_button_url', '');


		$this->smarty->display('top/header.tpl');
		$this->smarty->display('top/login.tpl');
		$this->smarty->display('top/footer.tpl');
	}

	/**
	 * セッションを削除し、ログアウトします。
	 *
	 *
	 *
	 */
	public function logout($value='')
	{
		$this->session->sess_destroy();
		redirect('/login','refresh');

	}

}
