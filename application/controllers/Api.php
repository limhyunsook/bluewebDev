<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//core 에서 MY 상속하고 있음 -- MY_ 는 고정 픽스. 변경시에는 config.php 에서 변경 해야한다
class Api extends MY_Controller 
{
	//생성자 구성
	function __construct()	
	{
		parent::__construct();		
		$this->load->helper("url");
		$this->load->helper("alert");
		//$this->load->model("api_model"); //database는 model 안에서 불러오자...
		// $this->load->model("member_model");
		$this->load->library('session');
	}	
	

	//비회원 가입 API
	public function simple_bemember_join()
	{
		
		$input = $this->input->post(null,true);		
		$db = $this->api_model->simple_bemember_join($input);

		if($db['status']){
			$newdata = array(
				'memberId'  => $db ['memberId'],
				'email'     => $db ['email'],
				'logged_in' => TRUE
			);	
			$this->session->set_userdata($newdata);
		}
		$this->_write($db);
	}

	public function _write($data)
	{
		

		$test = $this->input->get("test",true);
		if($test){
			print_r($data);
			exit;
		}
		
		if($this->input->is_ajax_request()){
			//ajax call			
			print_r(json_encode($data));
		}else{
			//controller return			
			return $data;
		}
		
	}

	/** CURL 타입 외부용 API */
	public function _curl_write($data)
	{
		
		$test = $this->input->post_get("test",true);

		//var_dump($test);
		if($test){
			print_r($data);
			exit;
		}			
		
		print_r(json_encode($data));
		//print_r($data);
		
	}


	function admin_auth() {
		$this->load->library('session');
		$this->load->library('user_agent');
		$this->load->library('form_validation');
		$admin =  $this->input->post('admin',true);

		if(!$this->input->post('useremail')){
			alert_only("이메일이 없습니다");
			exit;
		}
		if(!$this->input->post('userpassword')){
			alert_only("패스워드가 없습니다");
			exit;
		}

		$auth_data = array(
			'useremail'=>$this->input->post('useremail'),
			'userpassword'=>$this->input->post('userpassword')
		);

		$result = $this->api_model->member_login($auth_data);

		if($result) {
			$newdata = array(
				'useremail' => $result['email'],
				'username' => $result['memberId'],
				'userlevel' => $result['auth_lv'],
				'mid' => $result['mid'],
				'logged_in' => TRUE
			);
			$this->session->set_userdata($newdata);
			alert("login!","/admin/index");			
			exit;
		} else {
			alert_only("일치하는 아이디가 없습니다.");
			exit;
		}		
		print_r(json_encode($result));
	}
	
	function ajax_post_controller() {
		$this->load->library('session');
		$this->load->library('user_agent');
		$this->load->library('form_validation');
		
		$auth_data = array(
			'useremail'=>$this->input->post('useremail'),
			'userpassword'=>$this->input->post('userpassword'),
			'usertype' => $this->input->post('usertype')
		);

		$result = $this->api_model->member_login($auth_data);
		// echo "<script>console.log('result ".$result -> email."');</script>";
		$returResult = array();

		if($result['status'] == "success") {
			$newdata = array(
				'useremail' => $result['email'],
				// 'username' => $result['memberId'],
				'userlevel' => $result['auth_lv'],
				'mid' => $result['mid'],
				'logged_in' => TRUE
			);
			$this->session->set_userdata($newdata);		
		}		
		
		$returResult['status'] = $result['status'];
		$returResult['message'] = $result['message'];
		
		print_r(json_encode($result));
		exit;
	}

	function logout() {
		$this->load->library('session');
		$this->load->helper('url');
		$this->session->sess_destroy();		
		$result["status"] = "success";
		print_r(json_encode($result));		
		exit;
	}

	function logoutDirect() {
		$this->load->library('session');
		$this->load->helper('url');
		$this->session->sess_destroy();
		redirect('/');		
	}

	function singup_controller() {
		$this->load->helper("date");
		$this->load->library('session');
		$this->load->library("Secretlib");

		$input = $this->input->post(null, true);
		$result = $this->api_model->singup($input);

		print_r(json_encode($result));
		exit;
	}

	function email_check() {
		$input = $this->input->get_post(null, true);
		$result = $this->api_model->mailOverlapCheck($input);

		print_r(json_encode($result));
		exit;
	}


	function reviewWrite() {
		$input = $this->input->post(NULL, TRUE);
		$result = array();		
	}
	
	/** 리뷰글쓰기 */
	function review_proc() {
		$action = $this->uri->segment(3);
		$method = $this->uri->segment(4);
		$input = $this->input->post(NULL, TRUE);
		$this->load->library('session');
		if($action){
			if($action == "insert"){
				
				//print_r($input);

				if(!isset($input["productId"]) || !$input["productId"]) {
					$result["message"] = "productId 가 없습니다";
					$this->_write($result);
					exit;
				}
				if(!isset($input["memberName"]) || !$input["memberName"]) {
					$result["message"] = "memberName 가 없습니다";
					$this->_write($result);
					exit;
				}

				if(!isset($input["memberEmail"]) || !$input["memberEmail"]) {
					$result["message"] = "id 가 없습니다";
					$this->_write($result);
					exit;
				}
				if(!isset($input["content"]) || !$input["content"]) {
					$result["message"] = "content 가 없습니다";
					$this->_write($result);
					exit;
				}

				$input['memberId'] = $this->session->userdata("mid"); //아이디셋팅

				$result = $this->api_model->review_write($input);
				$this->_write($result);
				exit;

			}

			if($action == "list"){
				//입력 없으면 페이지 출력은 3개로 고정. 있으면 있는 숫자만큼 출력
				if(!isset($input["pagelist"]) || !$input["pagelist"]) $input["pagelist"] = 3 ;
				
				$result = $this->api_model->review_list($input);
				$this->_write($result);
				exit;
			}
		}else{
			$result["message"] = "잘못된 접근입니다.";
			$this->_write($result);
			exit;

		}

	}

	/** 이건 파일 업로드가 들어가 있음 */
	function one_one_proc()
	{
		//$this->output->enable_profiler(true); 

		$input = array();
		$input = $this->input->post(NULL, TRUE);

		$action = $this->uri->segment(3);
		//$method = $this->uri->segment(4);
		
		$this->load->library('session');
		$prev = $this->input->get("p");
		//print_r($input);

		if($action){
			if($action == "insert"){				

				$input["memberId"] = $this->session->userdata("mid");
				$input["memberMobile"] = "";
				$member = $this->api_model->member_info($this->session->userdata("mid")); //id 로 조회
				
				if($member){
					$input["memberMobile"] = $member["mobile"];
				}

				
				$insert_id = $this->api_model->one_one_insert($input); //성공이면 insert id 하나 리턴 받음



				
				if($_FILES ){

					//print_r($_FILES );
					$this->load->library('upload');
					$this->load-> library('aws');
					$files = $_FILES;
					$s3 = null;
					$config = array();
					$config['upload_path']   = FCPATH . 'uploads/one_one/temp/';
					$config['allowed_types'] = '*';
					$config['max_size']      = '204800';
					$config['overwrite']     = false;
					$config['encrypt_name'] = true;
					$this->upload->initialize($config);
	
					$target_file = "userfile";
				
					if ( !$this->upload->do_upload($target_file)) {
						$error = array('error' => $this->upload->display_errors());
						print_r($error);
					
					
					} else {		
						$data = array('upload_data' => $this->upload->data());
						//echo "<pre>";print_r($data);				
						$s3path = 'uploads/one_one/';	
									
			
						$s3 = $this->aws->s3_upload($data["upload_data"]["file_name"],$s3path,$data["upload_data"]["file_path"]); //field name, s3path, filepath
						//unlink("/uploads/files/temp/" .$data['upload_data']['file_name']); //file delete
						//echo $s3["ObjectURL"]; //실제 저장된 주소
						//echo $config['upload_path'] .$data['upload_data']['file_name'];
	
						$this->load->helper('file');
						delete_files($config['upload_path'], false);							
					}
				
					//print_r($s3);
					if(isset($s3["status"]) && $s3["status"] ){
						$data = array('upload_data' => $this->upload->data());
						$input['insert_id'] = $insert_id;
						$input['fileName'] = $data["upload_data"]["file_name"];
						$this->api_model->one_one_file_update($input);
						
					}
				}
				redirect("/board/oneone?type=list&p=".$prev);	
			}
		}else{
			$result["message"] = "잘못된 접근입니다.";
			$this->_write($result);
			exit;
		}
	}


	//트위터 로그인 관련
	// for twitter auth.
	function buildBaseString($baseURI, $params){
	
		$r = array();
		ksort($params);
		foreach($params as $key=>$value){
			$r[] = "$key=" . rawurlencode($value);
		}//end foreach
	
		return "POST&" . rawurlencode($baseURI) . '&' . rawurlencode(implode('&', $r));
	}
	
	
	// for twitter auth.
	function getCompositeKey($consumerSecret, $requestToken){
		return rawurlencode($consumerSecret) . '&' . rawurlencode($requestToken);
	}
	
	
	// for twitter auth.
	function buildAuthorizationHeader($oauth){
		$r = 'Authorization: OAuth ';
	
		$values = array();
		foreach($oauth as $key=>$value)
			$values[] = "$key=\"" . rawurlencode($value) . "\"";
	
		$r .= implode(', ', $values);
		return $r;
	}
	
	
	// SNS를 이용한 로그인
	//상수는 contents.php 파일에 설정되어있음
	//로그인 요청
	// function sns_login($location) {
		
	function sns_login() {
		$type=$this->input->get("type", TRUE);
		
	    $mt = microtime();
    	$rand = mt_rand();
    	$state=md5($mt . $rand);
    	
    	$this->session->set_userdata('state', $state);
		
		if($type==TWITTER_CODE) {
			$url="https://twitter.com/oauth/request_token";
			$timestamp=time();
			$oauth_nonce=$timestamp;
				
			$oauth = array('oauth_callback' => Base_url('/auth/callback?type='.TWITTER_CODE),
					'oauth_consumer_key' => TW_CLIENT_ID,
					'oauth_nonce' => $timestamp,
					'oauth_signature_method' => 'HMAC-SHA1',
					'oauth_timestamp' => $timestamp,
					'oauth_version' => '1.0');
			$baseString = $this->buildBaseString($url, $oauth);
			
			$compositeKey = $this->getCompositeKey(TW_CLIENT_SECRET, null);
			$oauth_signature = base64_encode(hash_hmac('sha1', $baseString, $compositeKey, true));
			
			$oauth['oauth_signature'] = $oauth_signature;
			
			$ch=curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
			curl_setopt($ch, CURLOPT_POST, 1);
			
			$header=$this->buildAuthorizationHeader($oauth);
			curl_setopt($ch, CURLOPT_HTTPHEADER, array($header));
			$result=curl_exec($ch);
			
			$url="https://api.twitter.com/oauth/authorize?".$result;
			curl_close($ch);
			redirect($url);
		} else if($type==FACEBOOK_CODE) {
			$url="https://www.facebook.com/dialog/oauth?client_id=".FB_CLIENT_ID."&redirect_uri=".urlencode(FACEBOOK_REDIRECT_URI)."&scope=email,publish_actions";
			redirect($url);			
		} else if($type==KAKAO_CODE) {			
			  $url="https://kauth.kakao.com/oauth/authorize?client_id=".KAKAO_CLIENT_ID."&redirect_uri=".urlencode(API_KAKAO_REDIRECT_URI)."&response_type=code";			
			redirect($url);
		} else if($type==NAVER_CODE) {
			$url="https://nid.naver.com/oauth2.0/authorize?client_id=".NV_CLIENT_ID."&redirect_uri=".urlencode(NAVER_REDIRECT_URI)."&response_type=code&state=".$state;
			redirect($url);
		} else if($type==GOOGLE_CODE) {
			$url="https://accounts.google.com/o/oauth2/auth?scope=email%20profile&redirect_uri=".urlencode(GOOGLE_REDIRECT_URI)."&response_type=code&client_id=".GP_CLIENT_ID;
			redirect($url);
		} else if($type==DAUM_CODE) {
			$url="https://apis.daum.net/oauth2/authorize?client_id=".DM_CLIENT_ID."&redirect_uri=".urlencode(DAUM_REDIRECT_URI)."&response_type=code";
			redirect($url);
		} else if($type == YAHOO_CODE) {
			$url = "https://auth.login.yahoo.co.jp/yconnect/v2/consent?session=".YH_CLIENT_ID."&redirect_url=".urlencode(YAHOO_REDIRECT_URI)."&scope=openid";
			// $url="https://auth.login.yahoo.co.jp/yconnect/v2/consent?session=27Y7z5qf&display=popup&bcrumb=dD0vTlFqYUImc2s9YlZBRWNDU2RiMmhpa3gxcVJhd2U1d3pzZGZFLQ%3D%3D&redirect_url=".urlencode(YAHOO_REDIRECT_URI);
			redirect($url);
		}
	}
	
	
	// SNS callback	
	//리다이렉트로 날아오는곳
	//상수는 contents.php 파일에 설정되어있음
	function callback() {
		$type=$this->input->get("type", TRUE);
		$access_token=$this->input->get("access_token", TRUE);
		$code=$this->input->get("code", TRUE);
		$state=$this->input->get("state", TRUE);
		$orig_state=$this->session->userdata("state");
		$oauth_token=$this->input->get("oauth_token", TRUE);
		$oauth_verifier=$this->input->get("oauth_verifier", TRUE);
		
		$data = array();
		
		//yahoo
		//https://developer.yahoo.com/oauth2/guide/openid_connect/getting_started.html

		if($type==TWITTER_CODE) {
			// email 없음
		} else if($type==FACEBOOK_CODE) {
			$url="https://graph.facebook.com/v2.3/oauth/access_token?client_id=".FB_CLIENT_ID."&redirect_uri=".urlencode(FACEBOOK_REDIRECT_URI)."&client_secret=".FB_CLIENT_SECRET."&code=".$code;
			$ch=curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
			curl_setopt($ch, CURLOPT_POST, 0);
			$result=curl_exec($ch);
			$json=json_decode($result);			
			
			if(!empty($json->{'error'}->{'code'})) alert('페이스북 통신 에러. 다시 시도해 주십시오.');
			//if($json->{'error'}->{'code'} == '100') alert('에러');

			$url="https://graph.facebook.com/me?fields=email,name&access_token=".$json->{'access_token'};
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
			curl_setopt($ch, CURLOPT_POST, 0);
			$result=curl_exec($ch);
			$json=json_decode($result);
			curl_close($ch);
			$email=$json->{'email'};
			$name=$json->{'name'};
			$snstype = "FB";
			
			$this->_sns_pro($snstype, $email, $name);
						
			
		} else if($type==NAVER_CODE) {
			if($state!=$orig_state) {
				// TODO : redirect error
			}
			$url="https://nid.naver.com/oauth2.0/token?client_id=".NV_CLIENT_ID."&client_secret=".NV_CLIENT_SECRET."&grant_type=authorization_code&state=".$state."&code=".$code;
			$ch=curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
			$result=curl_exec($ch);
			if($errno = curl_errno($ch)) {
    			$error_message = curl_strerror($errno);
			} else {
				$json=json_decode($result);
				$url="https://openapi.naver.com/v1/nid/getUserProfile.xml";
				$header=array("Authorization: ".$json->{'token_type'}." ".$json->{'access_token'});
				curl_setopt($ch, CURLOPT_URL, $url);
				curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
				$result=curl_exec($ch);
				$xml = simplexml_load_string($result);
				
				
				if($xml!==FALSE) {
					$userInfo = array(
						'email' => (string)$xml->response->email,
						'nickname' => (string)$xml->response->nickname,
						'age' => (string)$xml->response->age,
						'birth' => (string)$xml->response->birthday,
						'gender' => (string)$xml->response->gender,
						'name' => (string)$xml->response->name,
						'profImg' => (string)$xml->response->profile_image
					);
					$email = $userInfo['email'];
					$name = $userInfo['name'];					
					$snstype= "NV";
					
					$this->_sns_pro($snstype, $email, $name);
					 
				}
			}
			curl_close($ch);
		} else if($type==GOOGLE_CODE) {
			$url="https://www.googleapis.com/oauth2/v3/token";
			$ch=curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
			curl_setopt($ch, CURLOPT_POST, 1);
			$postdata="code=".$code."&client_secret=".GP_CLIENT_SECRET."&client_id=".GP_CLIENT_ID."&redirect_uri=".urlencode(GOOGLE_REDIRECT_URI)."&grant_type=authorization_code";
			curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
			$result=curl_exec($ch);
			$json=json_decode($result);
			
			
			if(!empty($json->{'error'})) alert("인증 절차가 잘못 되었습니다.  다시 시도해 주십시오.");
			
			$url="https://www.googleapis.com/oauth2/v2/userinfo";
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
			curl_setopt($ch, CURLOPT_POST, 0);
			$header=array("Authorization: ".$json->{'token_type'}." ".$json->{'access_token'});
			curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
			$result=curl_exec($ch);
			$json=json_decode($result);
			$email=$json->{'email'};
			$name = $json->{'name'};
			$snstype = "GP";
			curl_close($ch);
			
			$this->_sns_pro($snstype, $email, $name);

					
		}else if($type==KAKAO_CODE) {
			//token
			$url="https://kauth.kakao.com/oauth/token";
			$ch=curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
			curl_setopt($ch, CURLOPT_POST, 1);
			$postdata="code=".$code."&client_id=".KAKAO_CLIENT_ID."&redirect_uri=".urlencode(API_KAKAO_REDIRECT_URI)."&grant_type=authorization_code";
			curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
			$result=curl_exec($ch);
			$json=json_decode($result);

			if(isset($json->{'error'})){
				echo 'error'; exit;
			}

			//data
			$url="https://kapi.kakao.com/v1/user/me";
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
			curl_setopt($ch, CURLOPT_POST, 0);
			$header=array("Authorization: ".$json->{'token_type'}." ".$json->{'access_token'});
			curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
			$result=curl_exec($ch);			
			curl_close($ch);
			$json=json_decode($result);

			//print_r($json);
			$this->_sns_login($type, $json->{'uuid'}, 			$json->{'properties'}->{'nickname'});

			



			/* simple
			 * stdClass Object
					(
						[access_token] => -aiu3wzsLMs48LTC_K19b1n8tB2w9R7j2ea9dwoqAucAAAFmHulmxQ
						[token_type] => bearer
						[refresh_token] => fgwiTQ8buYVeUWFg5QCvhkQ9EA2dz9ekO_vrxgoqAucAAAFmHulmww
						[expires_in] => 21599
						[scope] => profile
						[refresh_token_expires_in] => 2591999
					)
			*
			string(309) "
				{"id":926616158,"
					uuid":"3Ovf7Nzv2OvY9MXzxP3K_MTzxurY69rr0-Zj",
					"properties":{"profile_image":"http://k.kakaocdn.net/dn/BhJBM/btqpceIcNxc/8YuerhQkWCavlGqC9zkUc1/profile_640x640s.jpg",
					"nickname":"성현","thumbnail_image":"http://k.kakaocdn.net/dn/BhJBM/btqpceIcNxc/8YuerhQkWCavlGqC9zkUc1/profile_110x110c.jpg"}
				}"
			 */

		
			
		// 	$url="https://kapi.kakao.com/v1/user/me";
		// 	curl_setopt($ch, CURLOPT_URL, $url);
		// 	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		// 	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		// 	curl_setopt($ch, CURLOPT_POST, 0);
		// 	$header=array("Authorization: ".$json->{'token_type'}." ".$json->{'access_token'});
		// 	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
		// 	$result=curl_exec($ch);
		// 	// echo $result;
		// 	// email 없음
		// 	curl_close($ch);
		// }else if($type==DAUM_CODE) {
		// 	$url="https://apis.daum.net/oauth2/token";
			
		// 	$ch=curl_init();
		// 	curl_setopt($ch, CURLOPT_URL, $url);
		// 	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		// 	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		// 	curl_setopt($ch, CURLOPT_POST, 1);
		// 	$postdata="code=".$code."&client_id=".DM_CLIENT_ID."&client_secret=".DM_CLIENT_SECRET."&redirect_uri=".urlencode(DAUM_REDIRECT_URI)."&grant_type=authorization_code";
		// 	curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
		// 	$result=curl_exec($ch);
		// 	$json=json_decode($result);
			
		// 	$url="https://apis.daum.net/user/v1/show.json?access_token=".$json->{'access_token'};
		// 	curl_setopt($ch, CURLOPT_URL, $url);
		// 	curl_setopt($ch, CURLOPT_POST, 0);
		// 	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		// 	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		// 	$result=curl_exec($ch);
		// 	$json=json_decode($result);
		// 	// email 없음
				
		// 	curl_close($ch);
		}
	}

	function _sns_login($sns_type, $uid, $name = null)
	{

		$newdata = array(
			'nickname'  => $name,
			'uid'     => $uid,
			'logged_in' => TRUE
		);
		$this->session->set_userdata($newdata);
		gotohome();
		close_popup();
		
		//alert_parent('로그인완료!','/');		
		//redirect('/');
		
	}

	//로그인 처리 프로세스 진행
	function _sns_pro($sns_type, $email, $name = null){
		// signup 
		$input = array("email" => $email
						, "name" => $name
						, "sns_type" => $sns_type);

		$signup_result = $this->api_model->sns_signup($input);

		if($signup_result['status'] == "failed") {
			if($signup_result['message'] = "email overlap") {
				
			}
		} else {
			// login
		}
	}
	
	
}