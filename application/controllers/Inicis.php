<?php  
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//core 에서 MY 상속하고 있음 -- MY_ 는 고정 픽스. 변경시에는 config.php 에서 변경 해야한다
class Inicis extends MY_Controller 
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


	function INIStdPayRequest(){
		//require_once('../libs/INIStdPayUtil.php');==>
		$this->load->library('INIStdPayUtil');

		$SignatureUtil = new INIStdPayUtil();
		/*
		//*** 위변조 방지체크를 signature 생성 ***

		oid, price, timestamp 3개의 키와 값을

		key=value 형식으로 하여 '&'로 연결한 하여 SHA-256 Hash로 생성 된값

		ex) oid=INIpayTest_1432813606995&price=819000&timestamp=2012-02-01 09:19:04.004


		* key기준 알파벳 정렬

		* timestamp는 반드시 signature생성에 사용한 timestamp 값을 timestamp input에 그대로 사용하여야함
		*/

		//############################################
		// 1.전문 필드 값 설정(***가맹점 개발수정***)
		//############################################
		// 여기에 설정된 값은 Form 필드에 동일한 값으로 설정
		$mid = "INIpayTest";  // 가맹점 ID(가맹점 수정후 고정)					
		//인증
		$signKey = "SU5JTElURV9UUklQTEVERVNfS0VZU1RS"; // 가맹점에 제공된 웹 표준 사인키(가맹점 수정후 고정)
		$timestamp = $SignatureUtil->getTimestamp();   // util에 의해서 자동생성

		$orderNumber = $mid . "_" . $SignatureUtil->getTimestamp(); // 가맹점 주문번호(가맹점에서 직접 설정)
		$price = "1000";        // 상품가격(특수기호 제외, 가맹점에서 직접 설정)

		$cardNoInterestQuota = "11-2:3:,34-5:12,14-6:12:24,12-12:36,06-9:12,01-3:4";  // 카드 무이자 여부 설정(가맹점에서 직접 설정)
		$cardQuotaBase = "2:3:4:5:6:11:12:24:36";  // 가맹점에서 사용할 할부 개월수 설정
		//###################################
		// 2. 가맹점 확인을 위한 signKey를 해시값으로 변경 (SHA-256방식 사용)
		//###################################
		$mKey = $SignatureUtil->makeHash($signKey, "sha256");

		$params = array(
			"oid" => $orderNumber,
			"price" => $price,
			"timestamp" => $timestamp
		);
		$sign = $SignatureUtil->makeSignature($params, "sha256");

		/* 기타 */
		$siteDomain = "http://127.0.0.1/stdpay/INIStdPaySample"; //가맹점 도메인 입력
		// 페이지 URL에서 고정된 부분을 적는다. 
		// Ex) returnURL이 http://localhost:8082/demo/INIpayStdSample/INIStdPayReturn.jsp 라면
		//                 http://localhost:8082/demo/INIpayStdSample 까지만 기입한다.

		$data['mid'] = $mid;
		$data['signKey'] = $signKey;
		$data['timestamp'] = $timestamp;
		$data['orderNumber']= $orderNumber;
		$data['price'] = $price;
		$data['cardNoInterestQuota'] = $cardNoInterestQuota;
		$data['cardQuotaBase'] = $cardQuotaBase;
		$data['mKey'] = $mKey;
		$data['params'] = $params;
		$data['sign'] = $sign;
		$data['$siteDomain'] = $siteDomain;
		$this->load->view('INIStdPayRequest',$data);
		}


			

}