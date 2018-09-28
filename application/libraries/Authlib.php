<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');


class Authlib {	
	//protected  $realFilePath =  FCPATH.'resources/uploads/product/temp/';
	
	public function logined()
	{
		$CI =& get_instance();
		$CI->load->library('session');
		$nickname = $CI->session->userdata('nickname');

		if($CI->session->userdata('logged_in')){
			echo '<li>안녕하세요! '.$nickname.' 님</li>';
			echo '<li><a href="/api/logoutDirect">로그아웃</a></li>';
		}else{
			echo '<li><a href="/page/member/login.php">로그인</a></li>';
		}
		
	
	}
}