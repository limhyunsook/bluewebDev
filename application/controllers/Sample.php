<?php  
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//core 에서 MY 상속하고 있음 -- MY_ 는 고정 픽스. 변경시에는 config.php 에서 변경 해야한다
class Sample extends MY_Controller 
{

	//생성자 구성
	function __construct()	
	{
		parent::__construct();		
		
		$this->load->helper('url'); //url 관련 거의 사용됨
		$this->load->helper('form'); //form 관련 유틸. 거의 사용됨

		$this->load->library('session');//세션 라이드러리 로드
		
		$this->output->enable_profiler(true); //프로파일 확인 디버깅 용도로 좋음  사용하지 않는다면 false 혹은 주석
	}


	//컨트롤러 시작시에 무조건 참고 한다. 생성자 호출 이후 호출됨
	public function _remap($method)
	{
		$this->segs = $this->uri->segment_array();
		$location = $this->session->userdata('location'); //세션을 검색해서 넣음
		if(!$location) $location = "jp"; //없으면 jp 기준으로 불러온다


		//2번째 파라메터 값으로 해당하는 함수가 있는지 확인
		if( method_exists($this, $method) ){
			$this->{"{$method}"}($location);
		}else{
			echo "404 ERROR";
		}
		
	}

	

	public function index()
	{
		echo "디폴트 함수. 만들지 않아도 디폴트로 생성 된다";
	}

	public function call_model_view()
	{
		$stx = $this->input->get("stx",true); //get 의 반대로 post 도 가능하며, 2번째 인자가 true이면 XSS 필터가 적용됩니다
		$this->load->database(); //데이터베이스 호출
		$this->load->model('test_model'); //모델호출
		$db  = $this->test_model->member_list($stx); //모델 함수 호출 , 함수 호출 하듯 파라메터 전달이 가능 합니다.

		$data = array();
		$data['db'] = $db;
		$data['func_name'] = 'call_model_view'; //view로 전달하면 0번째 배열 인덱스 key값은 자동으로 $func_name 으로 바뀝니다.
		$this->load->view("/test/call_model_view_v",$data); 
		//  /views 폴더를 기준으로 내려갑니다. 
		//파일명은 함수명과 동일 하지 않아도 상관없지만, 가급적 동일 하게 적으면 유지보수시에 찾기가 편해집니다.


	}

	public function test(){
		$this->mytest(); //core 에서 불러옴
	}

	function coupon(){	
    
    	echo $this->_genRandom(16);
	}

	function _genRandom($length = 16) {
        $char = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';        
        $char .= '0123456789';
        $result = '';
        for($i = 0; $i <= $length; $i++) {			
            $result .= $char[mt_rand(0, strlen($char)-1)];
        }
        return($result);
    }

	
	
}