<?php  
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//core 에서 MY 상속하고 있음 -- MY_ 는 고정 픽스. 변경시에는 config.php 에서 변경 해야한다
class Upload extends MY_Controller 
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
		//$this->segs = $this->uri->segment_array();
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

	/** ck edit upload */
	public function ckedit()
	{	
		if($_FILES) {
			if ($_FILES["upload"]["size"] > 0 ){
			
				// 현재시간 추출
				$current_time = time();
				$time_info	 = getdate($current_time);
				$date_filedir	 = date("YmdHis");
			
				//오리지널 파일 이름.확장자
				$ext = substr(strrchr($_FILES["upload"]["name"],"."),1);
				$ext = strtolower($ext);
				$savefilename = $date_filedir."_".str_replace(" ", "_", $_FILES["upload"]["name"]);
			
				$uploadpath	 = $_SERVER['DOCUMENT_ROOT']."/uploads/ckedit";
				$uploadsrc = $_SERVER['HTTP_HOST']."/uploads/ckedit/";
				$http = 'http' . ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']=='on') ? 's' : '') . '://';
			
				//php 파일업로드하는 부분
				if($ext=="jpg" or $ext=="gif" or $ext =="png"){
					if(move_uploaded_file($_FILES['upload']['tmp_name'],$uploadpath."/".iconv("UTF-8","EUC-KR",$savefilename))){
						$uploadfile = $savefilename;
						echo "<script type='text/javascript'>alert('업로드성공: ".$savefilename."');</script>;";
					}
				}else{
					echo "<script type='text/javascript'>alert('jpg,gif,png파일만 업로드가능합니다.');</script>;";
				}
			
			}else{
				exit;
			
			}
			
			echo "<script type='text/javascript'> window.parent.CKEDITOR.tools.callFunction({$_GET['CKEditorFuncNum']}, '".$http.$uploadsrc."$uploadfile');</script>;";


		}
	}

	
	
}