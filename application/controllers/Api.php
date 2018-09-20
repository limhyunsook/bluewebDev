<?php  
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//core 에서 MY 상속하고 있음 -- MY_ 는 고정 픽스. 변경시에는 config.php 에서 변경 해야한다
class Api extends MY_Controller 
{

	//생성자 구성
	public function __construct()	
	{
		parent::__construct();		
		
		$this->load->helper('url'); //url 관련 거의 사용됨
		$this->load->helper('form'); //form 관련 유틸. 거의 사용됨

		$this->load->library('session');//세션 라이드러리 로드
		
		//$this->output->enable_profiler(true); //프로파일 확인 디버깅 용도로 좋음  사용하지 않는다면 false 혹은 주석
	}
	

	public function whois()
	{
		$domain = $this->input->post('domain');
		$email = null;
		if($domain) $email = "blueweb@blueweb.co.kr";
		$data = array("domain"=>$domain, "email"=>$email);
		print_r(json_encode($data));
	}

	
	public function index()
	{
		echo "디폴트 함수. 만들지 않아도 디폴트로 생성 된다";
	}

	public function test(){
		$this->mytest(); //core 에서 불러옴
	}




	//내부에서만 사용 되는 헤더 함수
	public function _header($location){
		$data = array("location"=>$location);
		$this->load->view("/$location/common/header",$data);
	}

	//내부에서만 사용 되는 푸터 함수
	public function _footer($location){
		$data = array("location"=>$location);
		$this->load->view("/$location/common/footer",$data);
	}
	
	
}