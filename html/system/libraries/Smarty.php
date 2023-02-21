<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

// Smarty.class.php へのパス
require_once(BASEPATH.'libraries/Smarty/SmartyBC.class.php');

class CI_Smarty extends Smarty
{
//    private $tpl_path;

	// function CI_Smarty()
	// {
	// 	parent::Smarty();
	// 	$this->compile_dir = "/var/www/template_c/";
	// 	$this->template_dir = APPPATH . "views";
	// 	$this->assign( 'APPPATH', APPPATH );
	// 	$this->assign( 'BASEPATH', BASEPATH );
	// 	$this->caching = 0;
	// }

	function __construct()
	{
		parent::__construct();

		$this->compile_dir = APPPATH ."views/template_c/";

		$this->template_dir = APPPATH . "views";

		$this->assign( 'APPPATH', APPPATH );
		$this->assign( 'BASEPATH', BASEPATH );

		log_message('debug', "Smarty Class Initialized");

		// Assign CodeIgniter object by reference to CI
		if ( method_exists( $this, 'assignByRef') )
		{
			$ci =& get_instance();
			$this->assignByRef("ci", $ci);
		}

		log_message('debug', "Smarty Class Initialized");
	}

	public function view($template)
	{
		$this->compile_dir = "views/template_c/";
		$CI =& get_instance();
		$CI->output->set_output($this->fetch($template));
	}


}
?>
