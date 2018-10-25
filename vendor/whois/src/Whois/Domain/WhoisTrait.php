<?php
namespace Whois\Domain;

ini_set('display_errors', 'On');
error_reporting(E_ALL);

class WhoisTrait {
	//default
	function __construct(){		
		/**
		*	Whois reseller api config file
		*/

		////////////////////////////////////////////
		//
		// define
		//
		///////////////////////////////////////////


		/**
		* 이 변수는 수정 하지 마십시오.
		* 리셀러가 접속하는 후이즈 서버 주소
		*/
		define("__WA_API_SERVER__","api1.whois.co.kr");
		define("__WA_API_SERVER_URI__","/ws/ws.WhoisAPIVer1.JSON.php");

		/**
		* 리셀러 아이디
		* 부여 받은 리셀러 아이디를 입력 하여 주십시오.
		*/
		define("__WA_RESELLER__","testreseller");

		/**
		* 리셀러 비밀번호
		* 부여 받은 리셀러 비밀번호를 입력하여 주십시오.
		*/
		define("__WA_RESELLER_PWD__", hash("sha256","testreseller"));

		/**
		* 테스트가 완료되면 모드를 REAL로 변경 하십시오.
		*/
		define("__WA_API_MODE__","TEST");

		/**
		* 결제
		*
		* !Deposit; -> 리셀러 자체 결제 시스템을 구축하여 후이즈와의 결제는 예치금으로 이루어짐
		*/
		define("__WA_RESELLER_PAYMETHOD__","!Deposit;");

		/**
		* 메일
		*
		* P -> 등록완료/연장완료 등의 메일을 후이즈가 전송하지 않고, 자체에서 전송
		* 공백 또는 NULL(string NULL이 아님) -> 등록완료/연장완료 등의 메일을 후이즈가 전송
		*/
		define("__WA_PORTALFLAG__","");


		define("__DEBUG__",true);	// true : 아래에 지정한 경로에 Y-M-D.txt 형식으로 api input , output 을 기록
		//define("__DEBUG__FILE_PATH","./");	// debug 로그가 쌓일 경로
		define("__DEBUG__FILE_PATH","./vendor/whois/log");	// debug 로그가 쌓일 경로


		define("__LIB_PATH__",dirname(__FILE__));		

		error_reporting(E_ALL & ~ (E_NOTICE | E_STRICT));
		ini_set('display_errors', true);
	}
} 

//make trait
trait httpTrait {
	var $fp;
	var $host;
	var $port = 80;
	var $path;
	var $variable = null;
	var $errMsg = "Not yet processed";
	var $send_data = "";
	var $received_data = "";
	var $timeout = 5;
	var $json = null;

	function __construct($host, $path , $port=null)
	{	
		//통신 디폴트 셋
		//클래스명과 메소드명이 동일하면 생성자 역할을 하는 경우는 php5.3 이하 버전... 아마도?
		$this->host = (isset($host))? $host : __WA_API_SERVER__;
		$this->path = (isset($path))? $path : __WA_API_SERVER_URI__;
		$this->port = (isset($port))? $port : 80;
	}

	function http($v_host="", $v_path="/", $v_port=80) {
		$this->port = $v_port;
		$this->path = $v_path;
		$this->host = $v_host;		
	}

    function setHost( $v_host ) {
		if ( $v_host == "" ) {
			$this->host = "localhost";
        } else {
            $this->host = $v_host;
        }
    }

    function setPort( $v_port ) {
		if ( $v_port == "" ) {
			$this->port = "80";
        } else {
            $this->port = $v_port;
        }
    }

    function setPath( $v_path ) {
        if ( $v_path == "" ) {
                $this->path = "/";
        } else {
                $this->path = $v_path;
        }
    }

    function setValue( $a_value ) {
        if ( $a_value == "" ) {
                $this->variable = array();
        } else {
                $this->variable = $a_value;
        }
    }

	function open() {
		$errno = $errstr = '';		
		$this->fp = fsockopen($this->host,$this->port, $errno, $errstr, $this->timeout);
		if(!$this->fp) {
			$this->errMsg = "Connection Error";
			return FALSE;
		}
		return TRUE;
	}

	function close() {
		fclose($this->fp);
	}

	function getMethod() {
		if($this->open() != TRUE) return FALSE;
		if($this->variable) {

			if(is_array($this->variable)) {
				$parameter = "?";
				while (list($key, $val) = each($this->variable)) {
					$parameter .= $key."=".urlencode($val)."&";
				}
				$parameter = substr($parameter,0,-1);
			} else {
				$parameter = $this->variable;
			}
		}
		$query = "GET $this->path$parameter HTTP/1.0\r\n";
		$query .= "Host: $this->host:$this->port\r\n";
		$query .= "User-agent: PHP/class http 0.1\r\n";
		$query .= "\r\n";

		$this->send_data = $query;

		fputs($this->fp,$query);
		return true;
	}

	function postMethod() {
		if($this->open() != TRUE) return FALSE;
		if($this->variable) {
			$parameter = "\r\n";
			while (list($key, $val) = each($this->variable)) {
					$parameter .= $key."=".urlencode($val)."&";
			}
			//$parameter = substr($parameter,0,-1);
			$parameter .= "\r\n";
		}

		if($this->json) {
			$parameter = "\r\n".$this->json."\r\n";
		}

		$query .= "POST $this->path HTTP/1.0\r\n";
		$query .= "Host: $this->host:$this->port\r\n";
		$query .= "Content-type: application/x-www-form-urlencoded\r\n";
		$query .= "Content-length: ".strlen($parameter)."\r\n";
		if($parameter) $query .= $parameter;
		$query .= "\r\n";

		$this->send_data = $query;

		fputs($this->fp,$query);
		return true;
	}

	function getHeader($method) {
		if($method == "get") $ret = $this->getMethod();
		else if($method == "post") $ret = $this->postMethod();

		if( $ret != TRUE ) return "";

		while(trim(fgets($this->fp,1024)) != "") {
			$buffer .= fgets($this->fp,1024);
		}
		$this->close();
		return $buffer;
	}

	function getHeaderWithCode($method) {
		if($method == "get") $ret = $this->getMethod();
		else if($method == "post") $ret = $this->postMethod();

		if( $ret != TRUE ) return "";

		$buffer = fgets($this->fp,1024);
		while(!feof($this->fp)) {
			$buffer .= fgets($this->fp,1024);
		}
		$this->close();
		return $buffer;
	}

	function getBody($method) {
		if($method == "get") $ret = $this->getMethod();
		else if($method == "post") $ret = $this->postMethod();

		if( $ret != TRUE ) return "";		

		while(trim(fgets($this->fp,1024)) != "");
		while(!feof($this->fp)) {
			$buffer .= fgets($this->fp,1024);
		}
		$this->close();

		$this->received_data = $buffer;

		return $buffer;
	}

	function doGet() {
		$ret = $this->getMethod();
		if( $ret != TRUE ) return "";

		while(trim(fgets($this->fp,1024)) != "");
		while(!feof($this->fp)) {
			$buffer .= fgets($this->fp,1024);
		}
		$this->close();
		return $buffer;
	}

	function doPost() {
		$ret = $this->postMethod();
		if( $ret != TRUE ) return "";

		while(trim(fgets($this->fp,1024)) != "");
		while(!feof($this->fp)) {
			$buffer .= fgets($this->fp,1024);
		}
		$this->close();
		return $buffer;
	}
}

// use class http
// 클래스명 규칙이 안맞아서 trait로 빼서 사용함
// class 형태로 사용도 가능하나, 접근성과 확장성을 고려해서 tarit로 빼서 받아옴
class http{
	use httpTrait;
}