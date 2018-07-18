<?php  
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//core 에서 MY 상속하고 있음 -- MY_ 는 고정 픽스. 변경시에는 config.php 에서 변경 해야한다
class Page extends MY_Controller 
{

	//생성자 구성
	function __construct()	
	{
		parent::__construct();		
		
		$this->load->helper('url'); //url 관련 거의 사용됨
		$this->load->helper('form'); //form 관련 유틸. 거의 사용됨

		$this->load->library('session');//세션 라이드러리 로드
		
		//$this->output->enable_profiler(true); //프로파일 확인 디버깅 용도로 좋음  사용하지 않는다면 false 혹은 주석
	}


	//컨트롤러 시작시에 무조건 참고 한다. 생성자 호출 이후 호출됨
	public function _remap($method)
	{
		$this->segs = $this->uri->segment_array();
		$location = $this->session->userdata('location'); //세션을 검색해서 넣음
		if(!$location) $location = "kr"; //없으면 kr 기준으로 불러온다
		

		//파일 기준으로 view를 가져온다 
		//주소는 가짜 주소이며, 파일명 기준으로 주소를 불러온다
		//echo $method;
		
		//$php = str_replace(".php", "", $method);
		//$file = $method = str_replace(".html", "", $method);

		//echo $method;
		$filepath = APPPATH."/views/page/".$method;
		//var_dump(file_exists($filepath));		
        
		if(file_exists($filepath)){
			$main_data = array();			
			$this->_header($location); //내부함수 해더 호출
			$this->load->view("/page/$method",$main_data);
			$this->_footer($location); //내부함수 푸터 호출
		}else{
			echo "404 ERROR";
		}
		
	}

	
	public function index()
	{
		echo "디폴트 함수. 만들지 않아도 디폴트로 생성 된다";
	}

	public function test(){
		$this->mytest(); //core 에서 불러옴
	}

	//내부에서만 사용 되는 헤더 함수
	function _header($location){
		$data = array("location"=>$location);
		$this->load->view("/$location/common/header",$data);
	}

	//내부에서만 사용 되는 푸터 함수
	function _footer($location){
		$data = array("location"=>$location);
		$this->load->view("/$location/common/footer",$data);
	}
	
	
}