<?php
namespace Whois\Domain;
use Whois\Domain\WhoisTrait;


//실제 작동할 핸들러
class WhoisHandler implements WhoisInterface
{		    
	public function __construct($config)
    {
        new WhoisTrait();//init trait
    }

    public function send($methodName, $params) {
		$this->L("send","params"); $this->L("send",$params);

		$http = new http(__WA_API_SERVER__, __WA_API_SERVER_URI__);		
		
        $request = $this->commonArray($methodName, $params);
        $http->json = json_encode($request);
		$result = $http->getBody("post");

		$this->L("send","send-data"); $this->L("send",$http->send_data);
		$this->L("send","receive-data"); $this->L("send",$http->received_data);

		return json_decode(trim($result),true);
	}

	private function commonArray($methodName, $params) {

		$inputTable = array(
				"reseller"=>__WA_RESELLER__,
				"reseller_pwd"=>__WA_RESELLER_PWD__,
				"PayMethod"=>__WA_RESELLER_PAYMETHOD__,
				"flag"=>__WA_PORTALFLAG__
			);

		$inputTable = array_merge($inputTable, $params);

		$request = array(
			"operationMode"=>__WA_API_MODE__,
			"methodName"=>$methodName,
			"inputTable"=>$inputTable
			);
		if(isset($params["methodName_sub"])) {
			$request["methodName_sub"] = $params["methodName_sub"];
		}
		return $request;
    }    
	
	/**
	* 도메인 등록가능 여부 체크
	*
	* 
	*/
	public function checkDomain($domain) {
		$result = $this->send("checkDomain", array("domain"=>array(trim($domain))));

		return $result;
	}
	
	/**
	 * 
	 * @param array $params
	 * 				$params["arr_domain_name"] = array("testdomain1");				// 등록할 도메인명 배열 (여러개 입력 가능)	: 필수
	 *				$params["arr_domain_type"] = array(".com");						// 등록할 도메인 tld (여러개 입력 가능) : 필수
	 *				$params["arr_term"] = array(1);								// 등록 기간 (여러개 입력 가능) : 필수
	 *				$params["reg_name_loc"] = "홍길동";							// 등록자명 한글 : 필수
	 *				$params["reg_name_eng"] = "GilDong,Hong";					// 등록자명 영문 : 필수
	 *				$params["reg_email"] = "trombon@whois.co.kr";				// 등록자 이메일 : 필수
	 *				$params["reg_zipcode"] = "12345";							// 등록자 우편번호 : 필수
	 *				$params["reg_address_loc1"] = "서울시 구로구 구로3동";			// 등록자 한글주소1 : 필수
	 *				$params["reg_address_loc2"] = "대륭포스트타워3차 1101";			// 등록자 한글주소2 : 필수
	 *				$params["reg_address_eng1"] = "1101 Daeryung post tower";	// 등록자 영문주소1 : 필수
	 *				$params["reg_address_eng2"] = "guro3-dong gurogu seoul";	// 등록자 영문주소2 : 필수
	 *				$params["reg_telephone"] = "02-555-5555";					// 전화번호 : 필수
	 *				$params["reg_fax"] = "02-111-1234";							// 팩스 : 옵션 
     *				$params["reg_nation"] = "KR";								// 국가 : 필수
	 *				$params["member"] = "";			// 회원 아이디 존재시 입력 : 옵션
     *
	 *				$params["arr_host_name"] = array("ns1.whoisdomain.kr", "ns2.whoisdomain.kr", "ns3.whoisdomain.kr", "ns4.whoisdomain.kr");	// 네임서버 호스트명
	 *				$params["arr_host_ip"] = array("211.206.125.156", "222.122.218.45", "110.45.166.139", "219.251.156.134");	// 네임서버 호스트명
     *
	 * @return array $result
	 * * 상태별 리턴값 print_r
 	 * 
 	 * 
 	 * input error 일경우
 	 * Array(
     * [code] => 2306
     * [msg] => Parameter value policy error
     * [value] => arr_domain_name is null or not array or size is zero
	 * )
     *
 	 * 등록 실패
 	 * Array (
     * [code] => 2400
     * [msg] => Command failed
     * [value] => All regist is fail
     * [result] => Array (
     *         [0] => Array (
     *                 [code] => 2302
     *                 [msg] => Object exists
     *                 [value] => [testdomain1.com] Object exists
     *                 [domain] => testdomain1.com
     *                 [create_dt] => 
     *                 [valid_dt] => 
     *                 [db] => 2400
     *             )
     *     )
     * [pay_result] => Array (
     *         [code] => 
     *         [msg] => 
     *        [gtid] => 
     *         [current_deposit] => 
     *     )
	 * )
	 * 
	 * 
 	 * 등록 성공
 	 * Array (
     * [code] => 1000
     * [msg] => Command completed successfully
     * [value] => All regist success
     * [result] => Array (
     *         [0] => Array (
     *                 [code] => 1000
     *                 [msg] => Command completed successfully
     *                 [value] => [testdomain00006.com] Command completed successfully
     *                 [domain] => testdomain00006.com
     *                 [create_dt] => 2018-10-01
     *                 [valid_dt] => 2019-10-01
     *                 [db] => 1000
     *             )
     *     )
	 * 
     * [pay_result] => Array (
     *         [code] => Array ([0] => 00)
     *         [msg] => Array ( [0] => Deposit Payment Ok )
     *         [gtid] => Array ( [0] => 2018100136623)
	 * 		  [current_deposit] => Array ( [0] => 95855200 )
     * 
     *     )
     */
	public function addDomain($params) {
		$result = $this->send("registDomain", $params);
		
		return $result;
	}
	
	/**
	 * 도메인 정보 조회
	 * 
	 * @param array $params
	 * 
	 * 			Array (
	 *     				[arr_domain_name] => Array
	 *         			(
	 *             			[0] => testdomain00013
	 *         			)
	 * 
	 *     				[arr_domain_type] => Array
	 *         			(
	 *             			[0] => .com
	 *         			)
	 * 
	 * 			)
	 * 
	 * 
	 * @return mixed
	 * 
	 *	array (
	 *   'code' => 1000,
	 *   'msg' => 'Command completed successfully',
	 *   'value' => NULL,
	 *   'result' => 
	 *   array (
	 *     0 => 
	 *     array (
	 *       'code' => 1000,
	 *       'msg' => 'Command completed successfully',
	 *       'value' => '[testdomain00013.com] Command completed successfully',
	 *       'domain' => 'testdomain00013.com',
	 *       'create_dt' => '2018-10-02',
	 *       'valid_dt' => '2021-10-02',
	 *       'update_dt' => '2018-10-02',
	 *       'member' => NULL,
	 *       'status' => 
	 *       array (
	 *         0 => 'ok',
	 *       ),
	 *       'reg_email' => 'trombon@whois.co.kr',
	 *       'reg_name_loc' => '홍길동',
	 *       'reg_name_eng' => 'GilDong,Hong',
	 *       'reg_nation' => 'KR',
	 *       'reg_address_loc1' => '서울시 구로구 구로3동1 대륭포스트타워3차 11011',
	 *       'reg_address_loc2' => NULL,
	 *       'reg_address_eng1' => '1101 Daeryung post tower1 guro3-dong gurogu seoul1',
	 *       'reg_address_eng2' => NULL,
	 *       'reg_zipcode' => '123451',
	 *       'reg_telephone' => '02-555-55551',
	 *       'reg_fax' => '02-111-12341',
	 *       'ctfy_code' => NULL,
	 *       'ctfy_no' => NULL,
	 *       'openinfo_yn' => NULL,
	 *       'mobile' => NULL,
	 *       'sms_yn' => NULL,
	 *       'arr_host_name' => 
	 *       array (
	 *         0 => 'ns1.whoisdomain.kr',
	 *         1 => 'ns2.whoisdomain.kr',
	 *         2 => 'ns3.whoisdomain.kr',
	 *         3 => 'ns4.whoisdomain.kr',
	 *       ),
	 *       'arr_host_ip' => 
	 *       array (
	 *         0 => '',
	 *         1 => '',
	 *         2 => '',
	 *         3 => '',
	 *       ),
	 *     ),
	 *   ),
	 * )
	 */
	public function infoDomain($params) {
		$result = $this->send("queryDomain",$params);
		
		return $result;
	}
	
	/**
	 * 도메인 등록정보 수정
	 * 
	 * @param array $params
	 * 
	 * Array (
	 *     [arr_domain_name] => Array ( [0] => testdomain00013 )
	 *     [arr_domain_type] => Array ( [0] => .com )
	 *     [arr_reg_name_loc] => Array ( [0] => 홍길동 )
	 *     [arr_reg_name_eng] => Array ( [0] => GilDong,Hong )
	 *     [arr_reg_email] => Array ( [0] => trombon@whois.co.kr )
	 *     [arr_reg_zipcode] => Array ( [0] => 123451 )
	 *     [arr_reg_address_loc1] => Array ( [0] => 서울시 구로구 구로3동1 )
	 *     [arr_reg_address_loc2] => Array ( [0] =>  대륭포스트타워3차 11011 )
	 *     [arr_reg_address_eng1] => Array ( [0] => 1101 Daeryung post tower1 )
	 *     [arr_reg_address_eng2] => Array ( [0] =>  guro3-dong gurogu seoul1 )
	 *     [arr_reg_telephone] => Array ( [0] => 02-555-55551 )
	 *     [arr_reg_fax] => Array ( [0] => 02-111-12341 )
	 *     [arr_reg_nation] => Array ( [0] => KR )
	 *     [member] => 
	 * 	)
	 * @return mixed
	 * 
	 * array (
	 *   'code' => '1000',
	 *   'msg' => 'Command completed successfully',
	 *   'value' => 'See detail response',
	 *   'result' => 
	 *   array (
	 *     0 => 
	 *     array (
	 *       'code' => 1000,
	 *       'msg' => 'Command completed successfully',
	 *       'value' => NULL,
	 *       'domain' => 'testdomain00013.com',
	 *     ),
	 *   ),
	 * )
	 */
	public function updateDomain($params) {
		$result = $this->send("modifyDomain",$params);
		
		return $result;
	}
	
	/**
	 * 도메인 네임서버 정보 수정
	 * 
	 * @param array $params
	 * 
	 * 	Array ( 
	 * 		[arr_domain_name] => Array ( [0] => testdomain00013 )
	 * 
	 *     	[arr_domain_type] => Array ( [0] => .com )
	 * 
	 *     	[arr_host_name] => Array (
	 *             [0] => ns1.whoisdomain.kr
	 *             [1] => ns2.whoisdomain.kr
	 *             [2] => ns3.whoisdomain.kr
	 *         )
	 * 
	 *     	[arr_host_ip] => Array (
	 *             [0] => 211.206.125.156
	 *             [1] => 222.122.218.45
	 *             [2] => 110.45.166.139
	 *         )
	 *     	[member] => 
	 * )
	 * 
	 * @return mixed
	 * 
	 * array (
	 *   'code' => '1000',
	 *   'msg' => 'Command completed successfully',
	 *   'value' => 'See detail response',
	 *   'result' => 
	 *   array (
	 *     0 => 
	 *     array (
	 *       'code' => '1000',
	 *       'msg' => 'Command completed successfully',
	 *       'value' => NULL,
	 *       'domain' => 'testdomain00013.com',
	 *     ),
	 *   ),
	 * )
	 * 
	 */
	public function updateDomainNs($params) {
		$result = $this->send("modifyDomainNS",$params);
		
		return $result;
	}
	
	/**
	 * 도메인 연장 조회
	 * 
	 * @param array $params
	 * 
	 * Array (
	 *     	[domain] => testdomain00013.com 
	 *     	)
	 * @return mixed
	 * 
	 * 
	 * array (
	 *   'code' => 1000,
	 *   'msg' => 'Command completed successfully',
	 *   'value' => 'Command completed successfully',
	 *   'type' => 'chk-renew',
	 *   'cur_valid_dt' => '2021-10-02',
	 *   'renew_code' => '3100',
	 *   'renew_msg' => 'renew check ok',
	 *   'cur_period' => 3,
	 *   'max_period' => 7,
	 *   'max_valid_dt' => '2028-10-2',
	 *   'remain_day' => 1096,
	 *   'domain' => 'testdomain00013.com',
	 * )
	 */
	public function renewCheck($params) {
		$result = $this->send("docheck",$params);
		
		return $result;
	}
	
	/**
	 * 도메인 연장
	 * 
	 * @param array $params
	 * 
	 * Array (
	 *     [arr_domain_name] => Array ( [0] => testdomain00013 )
	 * 
	 *     [arr_domain_type] => Array ( [0] => .com )
	 * 
	 *     [arr_term] => Array ( [0] => 1 )
	 * 
	 *     [req_name] => 홍길동
	 *     [req_telephone] => 010-111-1111
 	 *     [req_email] => trombon@whois.co.kr
	 *     [member] => 
	 * )
	 *
	 * @return mixed
	 * 
	 * array (
	 *   'code' => 1000,
	 *   'msg' => 'Command completed successfully',
	 *   'value' => 'All renew success',
	 *   'result' => 
	 *   array (
	 *     0 => 
	 *     array (
	 *       'code' => 1000,
	 *       'msg' => 'Command completed successfully',
	 *       'value' => '[testdomain00013.com] Command completed successfully',
	 *       'domain' => 'testdomain00013.com',
	 *       'valid_dt' => '2021-10-02',
	 *     ),
	 *   ),
	 *   'pay_result' => 
	 *   array (
	 *     'code' => 
	 *     array (
	 *       0 => '00',
	 *     ),
	 *     'msg' => 
	 *     array (
	 *       0 => 'Deposit Payment Ok',
	 *     ),
	 *     'gtid' => 
	 *     array (
	 *       0 => '2018100236723',
	 *     ),
	 *     'current_deposit' => 
	 *     array (
	 *       0 => 95840900,
	 *     ),
	 *   ),
	 *   'ext' => 
	 *   array (
	 *   ),
	 * )
	 */
	public function renewDomain($params) {
		$result = $this->send("renewDomain",$params);
		
		return $result;
	}
	
	/**
	 * 도메인 기관이전 신청
	 * 
	 * @param array $params
	 * 
	 *  Array (
	 *     [arr_domain_name] => Array ( [0] => testdomain00000 )
	 *     [arr_domain_type] => Array ( [0] => .com )
	 *     [arr_term] => Array ( [0] => 1 )
	 *     [arr_authInfo] => Array ( [0] => auth-password )
	 *     [req_name] => 홍길동
	 *     [req_telephone] => 010-111-1111
	 *     [req_email] => trombon@whois.co.kr
	 *     [member] => 
	 * )
	 * 
	 * @return mixed
	 * 
	 * array (
	 *   'code' => 1000,
	 *   'msg' => 'Command completed successfully',
	 *   'value' => 'All transfer request is success',
	 *   'result' => 
	 *   array (
	 *     0 => 
	 *     array (
	 *       'code' => 1000,
	 *       'msg' => 'Command completed successfully',
	 *       'domain' => testdomain00000.com,
	 *     ),
	 *   ),
	 *   'pay_result' => 
	 *   array (
	 *     'code' => 
	 *     array (
	 *       0 => '00',
	 *     ),
	 *     'msg' => 
	 *     array (
	 *       0 => 'Deposit Payment Ok',
	 *     ),
	 *     'gtid' => 
	 *     array (
	 *       0 => '2018100236723',
	 *     ),
	 *     'current_deposit' => 
	 *     array (
	 *       0 => 95840900,
	 *     ),
	 *   ),
	 *   'ext' => 
	 *   array (
	 *   ),
	 */
	public function transferDomain($params) {
		$result = $this->send("transferDomain",$params);
		
		return $result;
	}
	
	/**
	 * 
	 * @param array $params
	 * 
	 * Array (
	 *     [arr_domain_name] => Array ( [0] => testdomain00013.com )
	 *     [arr_host_name] => Array ( [0] => ns1 )
	 * )
	 * 
	 * @return mixed
	 * 
	 * array (
	 *   'code' => '1000',
	 *   'msg' => 'Command completed successfully',
	 *   'result' => 
	 *   array (
	 *     0 => 
	 *     array (
	 *       'code' => '1000',
	 *       'msg' => 'Command completed successfully',
	 *       'host' => 'ns1.testdomain00013.com',
	 *       'updated_by' => 'whoisc1',
	 *       'created_by' => 'whoisc1',
	 *       'client_id' => '203',
	 *       'create_dt' => '2018-10-08',
 	 *      'update_dt' => '2018-10-08',
	 *     ),
	 *   ),
	 *   'ext' => 
	 *   array (
	 *   ),
	 * )
	 */
	public function infoHost($params) {
		$params["methodName_sub"] = "queryHost";
		$result = $this->send("HOST",$params);
		
		return $result;
	}
	
	/**
	 * 
	 * @param array $params
	 * 
	 * Array (
	 *     [arr_domain_name] => Array (
	 *             [0] => testdomain00013.com
	 *             [1] => testdomain00013.com
	 *         )
	 *     [arr_host_name] => Array (
	 *             [0] => ns3
	 *             [1] => ns4
	 *         )
	 *     [arr_host_ip] => Array (
	 *             [0] => 58.151.236.84
	 *             [1] => 58.151.236.84
	 *         )
	 * 
	 *     [operation] => regist
	 * )
	 * @return mixed
	 * 
	 * array (
	 *   'code' => '1000',
	 *   'msg' => 'Command completed successfully',
	 *   'result' => 
	 *   array (
	 *     0 => 
	 *     array (
	 *       'code' => '2302',
	 *       'msg' => 'Object exists',
	 *       'host' => 'ns3.testdomain00013.com',
	 *     ),
	 *     1 => 
	 *     array (
	 *       'code' => '1000',
	 *       'msg' => 'Command completed successfully',
	 *       'host' => 'ns4.testdomain00013.com',
	 *     ),
	 *   ),
	 *   'ext' => 
	 *   array (
	 *   ),
	 * )
	 */
	public function manageHost($params) {
		$params["methodName_sub"] = "manageHost";
		$result = $this->send("HOST",$params);
		
		return $result;
	}
	
	/**
	 * 
	 * @return mixed
	 */
	public function queryReseller() {
		$result = $this->send("queryReseller",array("userid"=>__WA_RESELLER__));
		
		return $result;
	}
		
	/**
	*
	*/
	public function L($methodName, $msg) {
		
		if(__DEBUG__ == false) return;

        $path = __DEBUG__FILE_PATH."/".date("Y-m-d").".txt";

		if(is_array($msg) || is_object($msg)) {
			$msg = print_r($msg,true);
		}

		$msg = "[".date("H:i:s")."]  ".$msg."\r\n";

        @error_log($msg,3,$path);        
	}
	
}
