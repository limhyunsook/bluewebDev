<?php  
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require realpath(FCPATH) . '/vendor/whois/src/Whois/autoload.php';

class WhoisApiSample extends CI_Controller
{
	/**
	 * 객체 호출 방법 
	 * 
	 * old style
	 * $api = new WhoisDomainClient();
	 * 
	 * new style
	 * $whois = new Whois\WhoisDomainClient();	
	 * $api = $whois->getWhoisHeandler();
	 */
	public function __construct()	
	{
		parent::__construct();
	}

	

	 /**
	  * 
	  */
	function info()
	{		
		// 등록 신청 파라미터

		$params = array();

		$params["arr_domain_name"] = array("testdomain00013");				// 조회할 도메인명 배열 (여러개 입력 가능)	: 필수
		$params["arr_domain_type"] = array(".com");						// 조회할 도메인 tld (여러개 입력 가능) : 필수

		//print_r($params);

		$whois = new Whois\WhoisDomainClient();	
		$api = $whois->getWhoisHeandler();

		$result = $api->infoDomain($params);
		
		//var_export($result);

		$main_code = $result["code"];	// 전체 처리 결과 code
		$main_msg = $result["msg"];		// 메시지
		if(isset($result["value"])) {
			$main_value = $result["value"];	// 오류일 경우 상세 내용
		} else {
			$main_value = "";	// 오류일 경우 상세 내용
		}

		// main_code 가 1000 또는 1001 이 아니면 오류
		if($main_code != 1000 && $main_code != 1001) {
			echo "조회 실패 : code [".$main_code."] message [".$main_msg."] value [".$main_value."]<br>\r\n";
		} else {
			echo "조회 성공 : code [".$main_code."] message [".$main_msg."]<br>\r\n";
		}


		// 조회시도시 넘겼던 도메인 갯수별 개별 처리 결과
		if(isset($result["result"])) {
			$sub_result = $result["result"];
			
			for($i=0;$i<count($sub_result);$i++) {
				$m_code = $sub_result[$i]["code"];	//결과 코드 1000, 1001 : 성공 , 그외 실패
				$m_msg = $sub_result[$i]["msg"];	// 결과 메시지
				$m_value = $sub_result[$i]["value"];	// 결과 메시지 상세 , 값이 없을수도 있음
				$m_domain = $sub_result[$i]["domain"];	// 등록신청한 도메인명
				$m_create_dt = $sub_result[$i]["create_dt"];	// 등록일
				$m_valid_dt = $sub_result[$i]["valid_dt"];	// 만료일
				$m_update_dt = $sub_result[$i]["update_dt"];	// 최종 수정일
				
				$m_member = $sub_result[$i]["member"];	// 등록시 입력하였던 회원아이디
				$m_status = $sub_result[$i]["status"];	// 도메인 STATUS
				$m_reg_email = $sub_result[$i]["reg_email"];	// 등록자 이메일
				$m_reg_name_loc = $sub_result[$i]["reg_name_loc"];	// 등록자 한글 이름 (kr 도메인 이외에는 영문으로 대체됨)
				$m_reg_name_eng = $sub_result[$i]["reg_name_eng"];	// 등록자 영문 이름
				$m_reg_nation = $sub_result[$i]["reg_nation"];	// 등록자 국가
				$m_reg_address_loc1 = $sub_result[$i]["reg_address_loc1"];	// 등록자 한글 주소(kr 도메인 이외에는 영문주소로 대체됨) 
				$m_reg_address_loc2 = $sub_result[$i]["reg_address_loc2"];	// 등록자 한글 주소(kr 도메인 이외에는 영문주소로 대체됨) 
				$m_reg_address_eng1 = $sub_result[$i]["reg_address_eng1"];	// 등록자 영문 주소
				$m_reg_address_eng2 = $sub_result[$i]["reg_address_eng2"];	// 등록자 영문 주소
				$m_reg_zipcode = $sub_result[$i]["reg_zipcode"];	// 우편번호
				$m_reg_telephone = $sub_result[$i]["reg_telephone"];	// 등록자 전화번호
				$m_reg_fax = $sub_result[$i]["reg_fax"];	// 등록자 팩스
				
				$m_arr_host_name = $sub_result[$i]["arr_host_name"];	// 네임서버 호스트명
				$m_arr_host_ip = $sub_result[$i]["arr_host_ip"];	// 네임서버 아이피(tld 가 다르면 아이피가 저장되지 않음)
				
				echo "[".$i."] " . $m_domain . " 등록 신청 결과<br>\r\n";
				echo "\tcode (결과코드) : " . $m_code . "<br>\r\n";
				echo "\tmsg (결과메시지): " . $m_msg . "<br>\r\n";
				echo "\tvalue (상세 메시지) : " . $m_value . "<br>\r\n";
				echo "\tdomain (도메인명) : " . $m_domain . "<br>\r\n";
				echo "\tcreate_dt (등록일) : " . $m_create_dt . "<br>\r\n";
				echo "\tvalid_dt (만료일) : " . $m_valid_dt . "<br>\r\n";
				echo "\tupdate_dt (수정일) : " . $m_update_dt . "<br>\r\n";
				
				echo "\tmember (회원 아이디) : " . $m_member . "<br>\r\n";
				echo "\tstatus (status) : " . var_export($m_status, true) . "<br>\r\n";
				echo "\treg_email (등록자 이메일) : " . $m_reg_email . "<br>\r\n";
				echo "\treg_name_loc (등록자 한글 이름) : " . $m_reg_name_loc . "<br>\r\n";
				echo "\treg_name_eng (등록자 영문이름) : " . $m_reg_name_eng . "<br>\r\n";
				echo "\treg_nation (등록자 국가) : " . $m_reg_nation . "<br>\r\n";
				echo "\treg_address_loc1 (등록자 한글 주소) : " . $m_reg_address_loc1 . "<br>\r\n";
				echo "\treg_address_loc2 (등록자 한글 주소) : " . $m_reg_address_loc2 . "<br>\r\n";
				echo "\treg_address_eng1 (등록자 영문 주소) : " . $m_reg_address_eng1 . "<br>\r\n";
				echo "\treg_address_eng2 (등록자 영문 주소) : " . $m_reg_address_eng2 . "<br>\r\n";
				echo "\treg_zipcode (우편번호) : " . $m_reg_zipcode . "<br>\r\n";
				echo "\treg_telephone (등록자 전화번호) : " . $m_reg_telephone . "<br>\r\n";
				echo "\treg_fax (등록자 팩스) : " . $m_reg_fax . "<br>\r\n";
				echo "\tarr_host_name (네임서버 호스트명) : " . var_export($m_arr_host_name, true) . "<br>\r\n";
				echo "\tarr_host_ip (네임서버 아이피) : " . var_export($m_arr_host_ip, true) . "<br>\r\n";
				
			}
		}


		/*
		* 정상 조회 결과
		* 
		* array (
		'code' => 1000,
		'msg' => 'Command completed successfully',
		'value' => NULL,
		'result' => 
		array (
			0 => 
			array (
			'code' => 1000,
			'msg' => 'Command completed successfully',
			'value' => '[testdomain00006.com] Command completed successfully',
			'domain' => 'testdomain00006.com',
			'create_dt' => '2018-10-01',
			'valid_dt' => '2019-10-01',
			'update_dt' => '2018-10-01',
			'member' => NULL,
			'status' => 
			array (
				0 => 'ok',
			),
			'reg_email' => 'trombon@whois.co.kr',
			'reg_name_loc' => '홍길동',
			'reg_name_eng' => 'GilDong,Hong',
			'reg_nation' => 'KR',
			'reg_address_loc1' => '서울시 구로구 구로3동 대륭포스트타워3차 1101',
			'reg_address_loc2' => NULL,
			'reg_address_eng1' => '1101 Daeryung post tower guro3-dong gurogu seoul',
			'reg_address_eng2' => NULL,
			'reg_zipcode' => '12345',
			'reg_telephone' => '02-555-5555',
			'reg_fax' => '02-111-1234',
			'ctfy_code' => NULL,
			'ctfy_no' => NULL,
			'openinfo_yn' => NULL,
			'mobile' => NULL,
			'sms_yn' => NULL,
			'arr_host_name' => 
			array (
				0 => 'ns1.whoisdomain.kr',
				1 => 'ns2.whoisdomain.kr',
				2 => 'ns3.whoisdomain.kr',
				3 => 'ns4.whoisdomain.kr',
			),
			'arr_host_ip' => 
			array (
				0 => '',
				1 => '',
				2 => '',
				3 => '',
			),
			),
		),
		)
		*/
	}	


	public function check()
	{

		$whois = new Whois\WhoisDomainClient();	
		$api = $whois->getWhoisHeandler();
		$domain = "checkdomain.com";	// 검색하려는 도메인명		
		$result = $api->checkDomain($domain);

		/**
		 * 리턴값
		*	Array
		*	(
		*		[code] => 1000
		*		[available] => true
		*		[msg] => Domain name not available
		*		[domain] => checkdomain.com
		*		[domain_type] => com
		*	)
		*/
		if($result["code"] != 1000) {
			echo "error";
			print_r($result);
			exit;
		}
		
		if($result["available"] == "true") {
			echo "도메인 등록 불가능(이미 등록되어있음).";
		} else {
			echo "도메인 등록 가능";
		}

	}

	public function host_info() 
	{
		// 조회 파라미터

		$params = array();

		$params["arr_domain_name"] = array("testdomain00013.com");				// 조회할 도메인명 배열 (여러개 입력 가능)	: 필수
		$params["arr_host_name"] = array("ns1");						// 조회할 호스트명 (여러개 입력 가능) : 필수
		// => ns1.testdomain00013.com

		//print_r($params);

		$whois = new Whois\WhoisDomainClient();
		$api = $whois->getWhoisHeandler();
		$result = $api->infoHost($params);
		var_export($result);

		$main_code = $result["code"];	// 전체 처리 결과 code
		$main_msg = $result["msg"];		// 메시지
		if(isset($result["value"])) {
			$main_value = $result["value"];	// 오류일 경우 상세 내용
		} else {
			$main_value = "";	// 오류일 경우 상세 내용
		}

		// main_code 가 1000 또는 1001 이 아니면 오류
		if($main_code != 1000 && $main_code != 1001) {
			echo "조회 실패 : code [".$main_code."] message [".$main_msg."] value [".$main_value."]<br>\r\n";
		} else {
			echo "조회 성공 : code [".$main_code."] message [".$main_msg."]<br>\r\n";
		}


		// 조회시도시 넘겼던 도메인 갯수별 개별 처리 결과
		if(isset($result["result"])) {
			$sub_result = $result["result"];
			
			for($i=0;$i<count($sub_result);$i++) {
				$m_code = $sub_result[$i]["code"];	//결과 코드 1000 : 호스트가 존재한다, 2303 : 호스트가 존재하지 않는다.
				$m_msg = $sub_result[$i]["msg"];	// 결과 메시지
				$m_host = $sub_result[$i]["host"];	// 호스트명
				$m_create_dt = $sub_result[$i]["create_dt"];	// 등록일
				$m_update_dt = $sub_result[$i]["update_dt"];	// 최종 수정일	
				$m_updated_by = $sub_result[$i]["updated_by"];	// 최종 수정한 registrar
				$m_created_by = $sub_result[$i]["created_by"];	// 최초 등록한 registrar

				echo "[" . $i . "] " . $m_host . " 조회 결과" + "<br>\r\n";
				echo "\tcode (결과코드) : " . $m_code . "<br>\r\n";
				echo "\tmsg (결과메시지): " . $m_msg . "<br>\r\n";
				echo "\thost (호스트명): " . $m_host . "<br>\r\n";
				echo "\tcreate_dt (등록일) : " . $m_create_dt . "<br>\r\n";
				echo "\tupdate_dt (만료일) : " . $m_update_dt . "<br>\r\n";
				echo "\tupdated_by (수정일) : " . $m_updated_by . "<br>\r\n";	
				echo "\tcreated_by (회원 아이디) : " . $m_created_by . "<br>\r\n";			
			}
		}


		/*
		* 
		Array
		(
			[arr_domain_name] => Array
				(
					[0] => testdomain00013.com
				)

			[arr_host_name] => Array
				(
					[0] => ns1
				)

		)
		array (
		'ext' => 
		array (
			'result' => 
			array (
			0 => 
			array (
				'code' => '2303',
				'msg' => 'Object does not exist',
				'host' => 'ns1.testdomain00013.com',
				'updated_by' => NULL,
				'created_by' => NULL,
				'create_dt' => NULL,
				'update_dt' => NULL,
				'client_id' => NULL,
			),
			),
		),
		)
		*/
	}

	public function host_manage() 
	{
		// 파라미터

		$params = array();

		$params["arr_domain_name"] = array("testdomain00013.com", "testdomain00013.com");			// 도메인명 배열 (여러개 입력 가능)	: 필수
		$params["arr_host_name"] = array("ns1", "ns2");												// 호스트명 (여러개 입력 가능) : 필수
		$params["arr_host_ip"] = array("58.151.236.81","58.151.236.81");							// 아이피 (여러개 입력 가능) : 필수
		$params["operation"] = "regist";															// 등록 [regist], 수정 [modify], 삭제 [delete]

		//print_r($params);

		$whois = new Whois\WhoisDomainClient();
		$api = $whois->getWhoisHeandler();
		$result = $api->manageHost($params);

		//var_export($result);

		$main_code = $result["code"];	// 전체 처리 결과 code
		$main_msg = $result["msg"];		// 메시지
		if(isset($result["value"])) {
			$main_value = $result["value"];	// 오류일 경우 상세 내용
		} else {
			$main_value = "";	// 오류일 경우 상세 내용
		}

		// main_code 가 1000 또는 1001 이 아니면 오류
		if($main_code != 1000 && $main_code != 1001) {
			echo "실패 : code [".$main_code."] message [".$main_msg."] value [".$main_value."]<br>\r\n";
		} else {
			echo "성공 : code [".$main_code."] message [".$main_msg."]<br>\r\n";
		}


		// 넘겼던 갯수별 개별 처리 결과
		if(isset($result["result"])) {
			$sub_result = $result["result"];
			
			for($i=0;$i<count($sub_result);$i++) {
				$m_code = $sub_result[$i]["code"];	//결과 코드 1000 : 성공, 그외 실패
				$m_msg = $sub_result[$i]["msg"];	// 결과 메시지
				$m_host = $sub_result[$i]["host"];	// 호스트명

				echo "[" . $i . "] " . $m_host . " 결과" + "<br>\r\n";
				echo "\tcode (결과코드) : " . $m_code . "<br>\r\n";
				echo "\tmsg (결과메시지): " . $m_msg . "<br>\r\n";
				echo "\thost (호스트명): " . $m_host . "<br>\r\n";
			}
		}


		/*
		* 
		Array
		(
			[arr_domain_name] => Array
				(
					[0] => testdomain00013.com
					[1] => testdomain00013.com
				)

			[arr_host_name] => Array
				(
					[0] => ns3
					[1] => ns4
				)

			[arr_host_ip] => Array
				(
					[0] => 58.151.236.84
					[1] => 58.151.236.84
				)

			[operation] => regist
		)
		array (
		'code' => '1000',
		'msg' => 'Command completed successfully',
		'result' => 
		array (
			0 => 
			array (
			'code' => '2302',
			'msg' => 'Object exists',
			'host' => 'ns3.testdomain00013.com',
			),
			1 => 
			array (
			'code' => '1000',
			'msg' => 'Command completed successfully',
			'host' => 'ns4.testdomain00013.com',
			),
		),
		'ext' => 
		array (
		),
		)
		*/
	}


	public function register() 
	{
		// 등록 신청 파라미터

		$params = array();

		$params["arr_domain_name"] = array("testdomain00013");				// 등록할 도메인명 배열 (여러개 입력 가능)	: 필수
		$params["arr_domain_type"] = array(".com");						// 등록할 도메인 tld (여러개 입력 가능) : 필수
		$params["arr_term"] = array(1);								// 등록 기간 (여러개 입력 가능) : 필수

		$params["reg_name_loc"] = "홍길동";							// 등록자명 한글 : 필수
		$params["reg_name_eng"] = "GilDong,Hong";					// 등록자명 영문 : 필수
		$params["reg_email"] = "trombon@whois.co.kr";				// 등록자 이메일 : 필수
		$params["reg_zipcode"] = "12345";							// 등록자 우편번호 : 필수
		$params["reg_address_loc1"] = "서울시 구로구 구로3동";			// 등록자 한글주소1 : 필수
		$params["reg_address_loc2"] = " 대륭포스트타워3차 1101";			// 등록자 한글주소2 : 필수
		$params["reg_address_eng1"] = "1101 Daeryung post tower";	// 등록자 영문주소1 : 필수
		$params["reg_address_eng2"] = " guro3-dong gurogu seoul";	// 등록자 영문주소2 : 필수
		$params["reg_telephone"] = "02-555-5555";					// 전화번호 : 필수
		$params["reg_fax"] = "02-111-1234";							// 팩스 : 옵션
		$params["reg_nation"] = "KR";								// 국가 : 필수

		$params["member"] = "";			// 회원 아이디 존재시 입력 : 옵션

		$params["arr_host_name"] = array("ns1.whoisdomain.kr", "ns2.whoisdomain.kr", "ns3.whoisdomain.kr", "ns4.whoisdomain.kr");	// 네임서버 호스트명
		$params["arr_host_ip"] = array("211.206.125.156", "222.122.218.45", "110.45.166.139", "219.251.156.134");	// 네임서버 호스트명

		//print_r($params);

		$whois = new Whois\WhoisDomainClient();
		$api = $whois->getWhoisHeandler();
		$result = $api->addDomain($params);

		//print_r($result);

		$main_code = $result["code"];	// 전체 처리 결과 code
		$main_msg = $result["msg"];		// 메시지
		if(isset($result["value"])) {
			$main_value = $result["value"];	// 오류일 경우 상세 내용
		} else {
			$main_value = "";	// 오류일 경우 상세 내용
		}

		// main_code 가 1000 또는 1001 이 아니면 오류
		if($main_code != 1000 && $main_code != 1001) {
			echo "등록 실패 : code [".$main_code."] message [".$main_msg."] value [".$main_value."]<br>\r\n"; 
		} else {
			echo "등록 성공 : code [".$main_code."] message [".$main_msg."]<br>\r\n"; 
		}


		// 등록시 넘겼던 도메인 갯수별 개별 처리 결과
		if(isset($result["result"])) {
			$sub_result = $result["result"];
			
			for($i=0;$i<count($sub_result);$i++) {
				$m_code = $sub_result[$i]["code"];	//결과 코드 1000, 1001 : 성공 , 그외 실패
				$m_msg = $sub_result[$i]["msg"];	// 결과 메시지
				$m_value = $sub_result[$i]["value"];	// 결과 메시지 상세 , 값이 없을수도 있음
				$m_domain = $sub_result[$i]["domain"];	// 등록신청한 도메인명
				$m_create_dt = $sub_result[$i]["create_dt"];	// 등록일
				$m_valid_dt = $sub_result[$i]["valid_dt"];	// 만료일
				$m_db_result = $sub_result[$i]["db"];	// DB 처리 결과, 1000 : 성공, 그외 실패
				
				echo "[" . $i . "] " . $m_domain . " 등록 신청 결과" + "<br>\r\n";
				echo "\tcode (결과코드) : " . $m_code . "<br>\r\n";
				echo "\tmsg (결과메시지): " . $m_msg . "<br>\r\n";
				echo "\tvalue (상세 메시지) : " . $m_value . "<br>\r\n";
				echo "\tdomain (도메인명) : " . $m_domain . "<br>\r\n";
				echo "\tcreate_dt (등록일) : " . $m_create_dt . "<br>\r\n";
				echo "\tvalid_dt (만료일) : " . $m_valid_dt . "<br>\r\n";
				echo "\tdb_result (디비처리결과) : " . $m_db_result . "<br>\r\n";
			}
		}

		// 예치금 처리 결과
		if(isset($result["pay_result"])) {
			echo "예치금 결제 결과 코드 (00 : 성공, 그외 실패) : " . $result["pay_result"]["code"][0] . "<br>\r\n";
			echo "예치금 결제 결과 메시지 : " . $result["pay_result"]["msg"][0] . "<br>\r\n";
			echo "예치금 결제 결제 ID : " . $result["pay_result"]["gtid"][0] . "<br>\r\n";
			echo "현재 예치금 : " . $result["pay_result"]["current_deposit"][0] . "<br>\r\n";
		}

		/*
		* 상태별 리턴값 print_r
		* 
		* 
		* input error 일경우
		* Array(
			[code] => 2306
			[msg] => Parameter value policy error
			[value] => arr_domain_name is null or not array or size is zero
			)

		* 등록 실패
		* Array (
			[code] => 2400
			[msg] => Command failed
			[value] => All regist is fail
			[result] => Array
				(
					[0] => Array
						(
							[code] => 2302
							[msg] => Object exists
							[value] => [testdomain1.com] Object exists
							[domain] => testdomain1.com
							[create_dt] => 
							[valid_dt] => 
							[db] => 2400
						)

				)

			[pay_result] => Array
				(
					[code] => 
					[msg] => 
					[gtid] => 
					[current_deposit] => 
				)

			[ext] => Array
				(
				)

		)


		* 등록 성공
		* Array (
			[code] => 1000
			[msg] => Command completed successfully
			[value] => All regist success
			[result] => Array
				(
					[0] => Array
						(
							[code] => 1000
							[msg] => Command completed successfully
							[value] => [testdomain00006.com] Command completed successfully
							[domain] => testdomain00006.com
							[create_dt] => 2018-10-01
							[valid_dt] => 2019-10-01
							[db] => 1000
						)

				)

			[pay_result] => Array
				(
					[code] => Array
						(
							[0] => 00
						)

					[msg] => Array
						(
							[0] => Deposit Payment Ok
						)

					[gtid] => Array
						(
							[0] => 2018100136623
						)

					[current_deposit] => Array
						(
							[0] => 95855200
						)

				)

			[ext] => Array
				(
				)
		*/
	}


	public function renew()
	{

		$params = array();

		$params["arr_domain_name"] = array("testdomain00013");				// 등록할 도메인명 배열 (여러개 입력 가능)	: 필수
		$params["arr_domain_type"] = array(".com");						// 등록할 도메인 tld (여러개 입력 가능) : 필수
		$params["arr_term"] = array(1);								// 등록 기간 (여러개 입력 가능) : 필수
		
		$params["req_name"] = "홍길동";							// 결제자 한글 : 필수
		$params["req_telephone"] = "010-111-1111";					// 결제자 전화번호 : 필수
		$params["req_email"] = "trombon@whois.co.kr";				// 결제자 이메일 : 필수
		
		$params["member"] = "";				// 회원 아이디 존재시 입력 : 옵션
		
		
		//print_r($params);
		
		$whois = new Whois\WhoisDomainClient();
		$api = $whois->getWhoisHeandler();
		$result = $api->renewDomain($params);
		
		var_export($result);
		
		$main_code = $result["code"];	// 전체 처리 결과 code
		$main_msg = $result["msg"];		// 메시지
		if(isset($result["value"])) {
			$main_value = $result["value"];	// 오류일 경우 상세 내용
		} else {
			$main_value = "";	// 오류일 경우 상세 내용
		}
		
		// main_code 가 1000 또는 1001 이 아니면 오류
		if($main_code != 1000 && $main_code != 1001) {
			echo "연장 실패 : code [".$main_code."] message [".$main_msg."] value [".$main_value."]<br>\r\n";
		} else {
			echo "연장 성공 : code [".$main_code."] message [".$main_msg."]<br>\r\n";
		}
		
		// 등록시 넘겼던 도메인 갯수별 개별 처리 결과
		if(isset($result["result"])) {
			$sub_result = $result["result"];
			
			for($i=0;$i<count($sub_result);$i++) {
				$m_code = $sub_result[$i]["code"];	//결과 코드 1000, 1001 : 성공 , 그외 실패
				$m_msg = $sub_result[$i]["msg"];	// 결과 메시지
				$m_value = $sub_result[$i]["value"];	// 결과 메시지 상세 , 값이 없을수도 있음
				$m_domain = $sub_result[$i]["domain"];	// 등록신청한 도메인명
				$m_valid_dt = $sub_result[$i]["valid_dt"];	// 만료일
				
				echo "[" . $i . "] " . $m_domain . " 등록 신청 결과" + "<br>\r\n";
				echo "\tcode (결과코드) : " . $m_code . "<br>\r\n";
				echo "\tmsg (결과메시지): " . $m_msg . "<br>\r\n";
				echo "\tvalue (상세 메시지) : " . $m_value . "<br>\r\n";
				echo "\tdomain (도메인명) : " . $m_domain . "<br>\r\n";
				echo "\tvalid_dt (만료일) : " . $m_valid_dt . "<br>\r\n";
			}
		}
		
		// 예치금 처리 결과
		if(isset($result["pay_result"])) {
			echo "예치금 결제 결과 코드 (00 : 성공, 그외 실패) : " . $result["pay_result"]["code"][0] . "<br>\r\n";
			echo "예치금 결제 결과 메시지 : " . $result["pay_result"]["msg"][0] . "<br>\r\n";
			echo "예치금 결제 결제 ID : " . $result["pay_result"]["gtid"][0] . "<br>\r\n";
			echo "현재 예치금 : " . $result["pay_result"]["current_deposit"][0] . "<br>\r\n";
		}
		
		
		
		/*
		* 연장성공 리턴
		*
		array (
		'code' => 1000,
		'msg' => 'Command completed successfully',
		'value' => 'All renew success',
		'result' => 
		array (
			0 => 
			array (
			'code' => 1000,
			'msg' => 'Command completed successfully',
			'value' => '[testdomain00013.com] Command completed successfully',
			'domain' => 'testdomain00013.com',
			'valid_dt' => '2020-10-02',
			),
		),
		'pay_result' => 
		array (
			'code' => 
			array (
			0 => '00',
			),
			'msg' => 
			array (
			0 => 'Deposit Payment Ok',
			),
			'gtid' => 
			array (
			0 => '2018100236721',
			),
			'current_deposit' => 
			array (
			0 => 95840900,
			),
		),
		'ext' => 
		array (
		),
		)
		*/
	}

	public function renew_check() 
	{
		$params = array();

		$params["domain"] = "testdomain00013.com";				// 조회할 도메인명 (배열아님)

		//print_r($params);

		$whois = new Whois\WhoisDomainClient();
		$api = $whois->getWhoisHeandler();
		$result = $api->renewCheck($params);

		var_export($result);

		$main_code = $result["code"];	// 전체 처리 결과 code
		$main_msg = $result["msg"];		// 메시지
		if(isset($result["value"])) {
			$main_value = $result["value"];	// 오류일 경우 상세 내용
		} else {
			$main_value = "";	// 오류일 경우 상세 내용
		}

		// main_code 가 1000 또는 1001 이 아니면 오류
		if($main_code != 1000 && $main_code != 1001) {
			echo "조회 실패 : code [".$main_code."] message [".$main_msg."] value [".$main_value."]<br>\r\n";
		} else {
			echo "조회 성공 : code [".$main_code."] message [".$main_msg."]<br>\r\n";
		}

		$m_domain = $result["domain"];		//  도메인명
		$m_type = $result["type"];		//  연장 타입
		$m_cur_valid_dt = $result["cur_valid_dt"];		//  현재 만료일
		$m_renew_code = $result["renew_code"];		//  연장 검색 결과 코드
		$m_renew_msg = $result["renew_msg"];		//  연장 검색 결과 메시지
		$m_cur_period = $result["cur_period"];		//  지금 등록 기간
		$m_max_period = $result["max_period"];		//  지금 등록 기간
		$m_max_valid_dt = $result["max_valid_dt"];		//  최대 예상 만료일
		$m_remain_day = $result["remain_day"];		//  만료일까지 남은기간

				
		echo "\tdomain (도메인명) : " . $m_domain . "<br>\r\n";
		echo "\t연장 타입 : type : " . $m_type . "<br>\r\n";
		echo "\t현재 만료일 : cur_valid_dt : " . $m_cur_valid_dt . "<br>\r\n";
		echo "\t연장 검색 결과 코드 : renew_code : " . $m_renew_code . "<br>\r\n";
		echo "\t연장 검색 결과 메시지 : renew_msg : : " . $m_renew_msg . "<br>\r\n";
		echo "\t지금 등록 기간 : cur_period : : " . $m_cur_period . "<br>\r\n";
		echo "\t최대 예상 만료일 : max_valid_dt : : " . $m_max_period . "<br>\r\n";
		echo "\t오늘부터 최대 등록 가능기간 : max_period : : " . $m_max_valid_dt . "<br>\r\n";
		echo "\t만료일까지 남은기간 : remain_day : : " . $m_remain_day . "<br>\r\n";

		// type , renew_code 별 처리 예시
		if($m_type == "chk-regist") {
			echo "<strong>등록되지 않은 도메인입니다. 연장 불가능<strong></br>";
		} else if($m_type == "chk-renew") {
			
			if($m_renew_code == "3100") {
				echo "<strong>만료일 이전이므로 연장 가능합니다. (최대 ".$m_max_period."년 까지 연장 가능) <strong></br>";
			} else if($m_renew_code == "3112") {
				echo "<strong>만료일 이전이지만 최대 연장 가능기간을 초과 하였습니다. - 연장 불가능<strong></br>";
			}
			
		} else if($m_type == "chk-renew-exp") {
			echo "<strong>만료일 이후이나 연장 가능합니다.(연장이 불가능하거나, 별도의 수수료가 발생할 수 있습니다.) (최대 ".$m_max_period."년 까지 연장 가능) <strong></br>";
		} else if($m_type == "chk-restore") {
			
			if($m_renew_code == "1000") {
				echo "<strong>도메인이 삭제 되어 복구를 하셔야 됩니다. - 연장 불가능, 복구 가능(비용추가됨)<strong></br>";
			} else {
				echo "<strong>도메인이 삭제 되었으나 복구가 불가능한 도메인입니다. - 연장 불가능, 복구 불가능<strong></br>";
			}
			
		} else if($m_type == "chk-none") {
			echo "<strong>조회 오류입니다. - 연장 불가능<strong></br>";
		} else {
			echo "<strong>오류입니다.<strong></br>";
		}



		/*
		* 조회성공 리턴
		* 
		* array (
		*   'code' => 1000,
		*   'msg' => 'Command completed successfully',
		*   'value' => 'Command completed successfully',
		*   'type' => 'chk-renew',
		*   'cur_valid_dt' => '2019-10-02',
		*   'renew_code' => '3100',
		*   'renew_msg' => 'renew check ok',
		*   'cur_period' => 1,
		*   'max_period' => 9,
		*   'max_valid_dt' => '2028-10-2',
		*   'remain_day' => 365,
		*   'domain' => 'testdomain00013.com',
		* )
		*/
	}

	public function reseller_info() 
	{
		$whois = new Whois\WhoisDomainClient();
		$api = $whois->getWhoisHeandler();
		$result = $api->queryReseller();

		//var_export($result);

		echo "code : " .$result["code"]."<br>\r\n";
		echo "msg : " .$result["msg"]."<br>\r\n";
		echo "email : " .$result["result"]["email"]."<br>\r\n";
		echo "이름 : " .$result["result"]["name"]."<br>\r\n";
		echo "예치금(KRW) : " .$result["result"]["deposit"]."<br>\r\n";
	}

	public function transfer() 
	{
		$params = array();

		$params["arr_domain_name"] = array("gabia");				// 등록할 도메인명 배열 (여러개 입력 가능)	: 필수
		$params["arr_domain_type"] = array(".com");						// 등록할 도메인 tld (여러개 입력 가능) : 필수
		$params["arr_term"] = array(1);								// 등록 기간 (여러개 입력 가능) : 필수, 1년 고정
		$params["arr_authInfo"] = array("auth-password");			// 인증키

		$params["req_name"] = "홍길동";							// 결제자 한글 : 필수
		$params["req_telephone"] = "010-111-1111";					// 결제자 전화번호 : 필수
		$params["req_email"] = "trombon@whois.co.kr";				// 결제자 이메일 : 필수

		$params["member"] = "";				// 회원 아이디 존재시 입력 : 옵션


		//print_r($params);

		$whois = new Whois\WhoisDomainClient();
		$api = $whois->getWhoisHeandler();
		$result = $api->transferDomain($params);

		var_export($result);

		$main_code = $result["code"];	// 전체 처리 결과 code
		$main_msg = $result["msg"];		// 메시지
		if(isset($result["value"])) {
			$main_value = $result["value"];	// 오류일 경우 상세 내용
		} else {
			$main_value = "";	// 오류일 경우 상세 내용
		}

		// main_code 가 1000 또는 1001 이 아니면 오류
		if($main_code != 1000 && $main_code != 1001) {
			echo "기관이전 신청 실패 : code [".$main_code."] message [".$main_msg."] value [".$main_value."]<br>\r\n";
		} else {
			echo "기관이전 신청 성공 : code [".$main_code."] message [".$main_msg."]<br>\r\n";
		}

		// 등록시 넘겼던 도메인 갯수별 개별 처리 결과
		if(isset($result["result"])) {
			$sub_result = $result["result"];
			
			for($i=0;$i<count($sub_result);$i++) {
				$m_code = $sub_result[$i]["code"];	//결과 코드 1000, 1001 : 성공 , 그외 실패
				$m_msg = $sub_result[$i]["msg"];	// 결과 메시지
				$m_value = $sub_result[$i]["value"];	// 결과 메시지 상세 , 값이 없을수도 있음
				$m_domain = $sub_result[$i]["domain"];	// 도메인명
				
				echo "[" . $i . "] " . $m_domain . " 이전 신청 결과" + "<br>\r\n";
				echo "\tcode (결과코드) : " . $m_code . "<br>\r\n";
				echo "\tmsg (결과메시지): " . $m_msg . "<br>\r\n";
				echo "\tvalue (상세 메시지) : " . $m_value . "<br>\r\n";
				echo "\tdomain (도메인명) : " . $m_domain . "<br>\r\n";
			}
		}

		// 예치금 처리 결과
		if(isset($result["pay_result"])) {
			echo "예치금 결제 결과 코드 (00 : 성공, 그외 실패) : " . $result["pay_result"]["code"][0] . "<br>\r\n";
			echo "예치금 결제 결과 메시지 : " . $result["pay_result"]["msg"][0] . "<br>\r\n";
			echo "예치금 결제 결제 ID : " . $result["pay_result"]["gtid"][0] . "<br>\r\n";
			echo "현재 예치금 : " . $result["pay_result"]["current_deposit"][0] . "<br>\r\n";
		}



		/*
		* params
		* Array (
			[arr_domain_name] => Array
				(
					[0] => testdomain00000
				)

			[arr_domain_type] => Array
				(
					[0] => .com
				)

			[arr_term] => Array
				(
					[0] => 1
				)

			[arr_authInfo] => Array
				(
					[0] => auth-password
				)

			[req_name] => 홍길동
			[req_telephone] => 010-111-1111
			[req_email] => trombon@whois.co.kr
			[member] => 
		)

		return

		array (
		'code' => 1000,
		'msg' => 'Command completed successfully',
		'value' => 'All transfer request is success',
		'result' => 
		array (
			0 => 
			array (
			'code' => 1000,
			'msg' => 'Command completed successfully',
			'domain' => testdomain00000.com,
			),
		),
		'pay_result' => 
		array (
			'code' => NULL,
			'msg' => NULL,
			'gtid' => NULL,
			'current_deposit' => NULL,
		),
		'ext' => 
		array (
		),
		*/
	}
	public function update_info() 
	{

		// 수정 신청 파라미터

		$params = array();

		$params["arr_domain_name"] = array("testdomain00013");				// 수정할 도메인명 배열 (여러개 입력 가능)	: 필수
		$params["arr_domain_type"] = array(".com");						// 수정할 도메인 tld (여러개 입력 가능) : 필수

		$params["arr_reg_name_loc"] = array("홍길동");							// 등록자명 한글 : 소유권 이전을 통해서만 변경 가능
		$params["arr_reg_name_eng"] = array("GilDong,Hong");					// 등록자명 영문 : 소유권 이전을 통해서만 변경 가능
		$params["arr_reg_email"] = array("trombon@whois.co.kr");				// 등록자 이메일 : 소유권 이전을 통해서만 변경 가능
		$params["arr_reg_zipcode"] = array("123451");							// 등록자 우편번호 : 필수
		$params["arr_reg_address_loc1"] = array("서울시 구로구 구로3동1");			// 등록자 한글주소1 : 필수
		$params["arr_reg_address_loc2"] = array(" 대륭포스트타워3차 11011");			// 등록자 한글주소2 : 필수
		$params["arr_reg_address_eng1"] = array("1101 Daeryung post tower1");	// 등록자 영문주소1 : 필수
		$params["arr_reg_address_eng2"] = array(" guro3-dong gurogu seoul1");	// 등록자 영문주소2 : 필수
		$params["arr_reg_telephone"] = array("02-555-55551");					// 전화번호 : 필수
		$params["arr_reg_fax"] = array("02-111-12341");							// 팩스 : 옵션
		$params["arr_reg_nation"] = array("KR");							// 국가 : 필수

		$params["member"] = "";			// 회원 아이디 존재시 입력 : 옵션

		//print_r($params);

		$whois = new Whois\WhoisDomainClient();
		$api = $whois->getWhoisHeandler();
		$result = $api->updateDomain($params);

		//var_export($result);

		$main_code = $result["code"];	// 전체 처리 결과 code
		$main_msg = $result["msg"];		// 메시지
		if(isset($result["value"])) {
			$main_value = $result["value"];	// 오류일 경우 상세 내용
		} else {
			$main_value = "";	// 오류일 경우 상세 내용
		}

		// main_code 가 1000 또는 1001 이 아니면 오류
		if($main_code != 1000 && $main_code != 1001) {
			echo "update 실패 : code [".$main_code."] message [".$main_msg."] value [".$main_value."]<br>\r\n";
		} else {
			echo "update 성공 : code [".$main_code."] message [".$main_msg."]<br>\r\n";
		}


		if(isset($result["result"])) {
			$sub_result = $result["result"];
			
			for($i=0;$i<count($sub_result);$i++) {
				$m_code = $sub_result[$i]["code"];	//결과 코드 1000, 1001 : 성공 , 그외 실패
				$m_msg = $sub_result[$i]["msg"];	// 결과 메시지
				$m_value = $sub_result[$i]["value"];	// 결과 메시지 상세 , 값이 없을수도 있음
				$m_domain = $sub_result[$i]["domain"];	// 도메인명
				
				echo "[" . $i . "] " . $m_domain . " update 신청 결과" + "<br>\r\n";
				echo "\tcode (결과코드) : " . $m_code . "<br>\r\n";
				echo "\tmsg (결과메시지): " . $m_msg . "<br>\r\n";
				echo "\tvalue (상세 메시지) : " . $m_value . "<br>\r\n";
				echo "\tdomain (도메인명) : " . $m_domain . "<br>\r\n";
				
			}
		}


		/*
		결과 값
		array (
		'code' => '1000',
		'msg' => 'Command completed successfully',
		'value' => 'See detail response',
		'result' => 
		array (
			0 => 
			array (
			'code' => 1000,
			'msg' => 'Command completed successfully',
			'value' => NULL,
			'domain' => 'testdomain00013.com',
			),
		),
		)
		*/
	}

	public function update_ns() 
	{
		// 수정 신청 파라미터

		$params = array();

		$params["arr_domain_name"] = array("testdomain00013");				// 수정할 도메인명 배열 (여러개 입력 가능)	: 필수
		$params["arr_domain_type"] = array(".com");						// 수정할 도메인 tld (여러개 입력 가능) : 필수

		//수정할 네임서버 정보
		$params["arr_host_name"] = array("ns1.whoisdomain.kr", "ns2.whoisdomain.kr", "ns3.whoisdomain.kr");	// 네임서버 호스트명
		$params["arr_host_ip"] = array("211.206.125.156", "222.122.218.45", "110.45.166.139");	// 네임서버 호스트명

		$params["member"] = "";			// 회원 아이디 존재시 입력 : 옵션

		//print_r($params);

		$whois = new Whois\WhoisDomainClient();
		$api = $whois->getWhoisHeandler();
		$result = $api->updateDomainNs($params);

		//var_export($result);

		$main_code = $result["code"];	// 전체 처리 결과 code
		$main_msg = $result["msg"];		// 메시지
		if(isset($result["value"])) {
			$main_value = $result["value"];	// 오류일 경우 상세 내용
		} else {
			$main_value = "";	// 오류일 경우 상세 내용
		}

		// main_code 가 1000 또는 1001 이 아니면 오류
		if($main_code != 1000 && $main_code != 1001) {
			echo "update 실패 : code [".$main_code."] message [".$main_msg."] value [".$main_value."]<br>\r\n";
		} else {
			echo "update 성공 : code [".$main_code."] message [".$main_msg."]<br>\r\n";
		}


		if(isset($result["result"])) {
			$sub_result = $result["result"];
			
			for($i=0;$i<count($sub_result);$i++) {
				$m_code = $sub_result[$i]["code"];	//결과 코드 1000, 1001 : 성공 , 그외 실패
				$m_msg = $sub_result[$i]["msg"];	// 결과 메시지
				$m_value = $sub_result[$i]["value"];	// 결과 메시지 상세 , 값이 없을수도 있음
				$m_domain = $sub_result[$i]["domain"];	// 도메인명
				
				echo "[" . $i . "] " . $m_domain . " update 신청 결과" + "<br>\r\n";
				echo "\tcode (결과코드) : " . $m_code . "<br>\r\n";
				echo "\tmsg (결과메시지): " . $m_msg . "<br>\r\n";
				echo "\tvalue (상세 메시지) : " . $m_value . "<br>\r\n";
				echo "\tdomain (도메인명) : " . $m_domain . "<br>\r\n";
				
			}
		}


		/*
		결과 값
		array (
		'code' => '1000',
		'msg' => 'Command completed successfully',
		'value' => 'See detail response',
		'result' => 
		array (
			0 => 
			array (
			'code' => '1000',
			'msg' => 'Command completed successfully',
			'value' => NULL,
			'domain' => 'testdomain00013.com',
			),
		),
		)
		*/
	}

}