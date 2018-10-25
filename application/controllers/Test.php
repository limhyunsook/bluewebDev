<?php  
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require realpath(FCPATH) . '/vendor/whois/src/Whois/autoload.php';
//core 에서 MY 상속하고 있음 -- MY_ 는 고정 픽스. 변경시에는 config.php 에서 변경 해야한다
class Test extends MY_Controller 
{

	//생성자 구성
	public function __construct()	
	{
		parent::__construct();		
		$this->load->helper("url");
	}

	function tt()
	{
		foreach($this->input->get(NULL, TRUE) as $key => $val) $request["{$key}"]  = $val;
		foreach($this->input->post(NULL, TRUE) as $key => $val) $request["{$key}"]  = $val;

		$request['txt'] = $request['txt'] ?? '';
		print_r($request['txt']);

		$arr = array('1','2','3');
		print_r($arr);


		$data = $request;
		$this->load->view('test/test', $data);
	}

	function who()
	{
		
		//$api = new WhoisDomainClient();
		//$result = $api->infoDomain($params);

		$whois = new Whois\WhoisDomainClient();	
		$api = $whois->getWhoisHeandler();		
		var_dump($api);		
	}	

	function w2()
	{
		$whois = new Whois\WhoisDomainClient();	
		$api = $whois->getWhoisHeandler();
		$http = new http('','');
	}

	
	function index()
	{
		$this->load->view('boot_test');
	}

	function info()
	{
		phpinfo();
	}

	public function sns_login()
	{
		
		$this->load->view('sns_login');
	}

	public function hash()
	{
		$options = [
			'cost' => 12,
		];
		echo password_hash("rasmuslerdorf", PASSWORD_BCRYPT, $options)."\n";
	}

	public function db_test()
	{
		echo '<hr>';


		$host = '211.202.2.5';
		$user = 'root';
		$pass = 'endrmffp^qmffndnpq#!..';
		
		if (!$link = mysql_connect($host, $user, $pass)) {
			echo 'Could not connect to mysql';
			exit;
		}

		var_dump($link);
		

	}
}