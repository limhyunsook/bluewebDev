<?php  
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//core 에서 MY 상속하고 있음 -- MY_ 는 고정 픽스. 변경시에는 config.php 에서 변경 해야한다
class Api extends MY_Controller 
{

	//생성자 구성
	function __construct()	
	{
		parent::__construct();		
		$this->load->helper("url");
		
	}	
	
	//컨트롤러 시작시에 무조건 참고 한다. 생성자 호출 이후 호출됨
	

	
	public function index()
	{
		
	}

	public function one_one_api()
	{

		$parameter = $this->input->post(null,true);
		print_r($parameter);
	}

	
}