<?php  
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//core 에서 MY 상속하고 있음 -- MY_ 는 고정 픽스. 변경시에는 config.php 에서 변경 해야한다
class Test extends MY_Controller 
{

	//생성자 구성
	public function __construct()	
	{
		parent::__construct();		
		$this->load->helper("url");
		
	}	
	
	function index()
	{
		$this->load->view('boot_test');
	}
}