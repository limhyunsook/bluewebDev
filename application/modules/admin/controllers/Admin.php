<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends MY_Controller 
{
	function __construct()	{
		parent::__construct();

		$this->load-> library('session'); //세선사용
		$this->load-> library('pagination_custom_v3');
		//$this->load->model('common_model');
		$this->segs = $this->uri->segment_array();
		//$this->output->enable_profiler(true);
	}
	public function _remap($method){

		$this->segs = $this->uri->segment_array();			
		// $location = $this->session->userdata('location');		
		// $auth_lv = $this->session->userdata('auth_lv');

		// $this->load->view("/admin/common/header_admin");			
		if( method_exists($this, $method) ){
			$this->{"{$method}"}();
		}else{
			$this->err_404();
		}
		// $this->load->view("/admin/common/footer_admin");
	}
	
	function err_404(){$this->load->view('/admin/common/not_found');}//404
	function index()
	{
		$data = array();
		echo 'index admin';

		//$data = $this->common_model->analytics();
		//print_r($data['db']);
		//$this->load->view("/admin/index_v",$data);		
	 }//end index 	
	 
	 	//호스팅 계산용
		 function sum_query($date, $arr = array(), $f_db){
			$arr = "'".implode("','", $arr)."'";
			$sql = '
			SELECT  SUM(a.cost) AS host_pay
			FROM main AS a
			LEFT JOIN hosting AS h  ON a.mid = h.mid
			WHERE pay_use = "H" AND
			DATE_FORMAT(a.pay_date, "%Y-%m") >= "'.$date.'" AND DATE_FORMAT(a.pay_date, "%Y-%m") <= "'.$date.'"
			AND h.package IN('.$arr.')';
			// $result = mysql_query($sql, $db_con);
			// return mysql_fetch_row($result);
			
			 $result = $f_db->query($sql);
			 return $result->row();
		}
		//echo "<br>";

		function service_name($str){
			$name = '';
			if($str == 'lix') $name = '리눅스호스팅';
			else if($str == 'win') $name = '윈도우호스팅';
			else if($str == 'img') $name = '이미지호스팅';
			else if($str == 'stm') $name = '스트리밍호스팅';
			else if($str == 'ezi') $name = '이비지로';
			else if($str == 'lr') $name = '리셀러호스팅';
			else if($str == 'server') $name = '서버호스팅';
			else if($str == 'domain') $name = '도메인';
			else if($str == 'etc') $name = '기타';
			else if($str == 'sms') $name = 'SMS';
			else if($str == 'cloud') $name = '클라우드';
			else if($str == 'home') $name = '홈페이지';
			else if($str == 'cgi') $name = 'CGI';
			return $name;
		}

	 public function company_sum()
	 {
		 
		//리눅스 호스팅 구분
		$arr_host = array("LBas","LPow","LMax","LEcBas","LEcPow","LEcMax","Talent","LBasSub","LPowSub","LMaxSub","HLBas","HLBus","HLGol","BlmSBas","BlmSPow","BlmSMax","BlmPBas","BlmPPow","BlmPMax","JspBas","JspPow",
		"JspMax","JspPowSub","JspMaxSub","letsmall_free","LmRentBasic","LmRentPremium","blogbasic","blogpower","blogmax","zeroxebasic","zeroxepower","zeroxereseller","zeroxemax","ZeroResSub","ZeroPowSub",
		"ZeroMaxSub","BlogPowSub","BlogMaxSub","openmall_basic","openmall_power","openmall_max","LBlue","LPowPlus","sunjin_basic","mplus_basic","mplus_standard","mplus_power","mplus_max",
		"zeroxeblue","zeroxepowerplus","mplus_store","anymoa_basic","anymoa_power","anymoa_max","anymoa_blue","anymoa_powerplu","mplus_free","mplus_shop","mplus_spread","mplus_dlv","o2o_basic",
		"o2o_business","o2o_spread","o2o_spread2","o2o_basic_1","o2o_blue_1","o2o_power_1","o2o_powerplus_1","LPop");
		//윈도우 호스팅
		$arr_win_host = array("WBas", "WPow", "WMax", "WEcBas", "WEcPow", "WEcMax", "WPowSub", "HWBas", "HWBus", "HWGol", "NetBas", "NetPow", "NetMax", "NetPowSub", "NetMaxSub", "WMaxSub", "WSpr", "WBasSub", "NetSpr");
		//이미지 호스팅
		$arr_img_host = array("ImageGig","ImageMax","ImageBas","ImagePow");
		//스트리밍
		$arr_stm_host = array("StBas","StPow","StGig","StMax","StEtp");
		//이비지로
		$arr_ezi_host = array("ezis_spread","ezis_basic","ezis_power","ezis_max","ezis_economy","ezis_normal");
		//리셀러
		$arr_lr_host = array("LRes","LResSub","Ttr","THr");
		//서버
		$arr_server_host = array("Fwd","Sv","Odr","NoSelect");

		//// 실제쿼리
		//$f_dbconn	= f_dbconn(); //입금디비 finance
		//$h_dbconn	= h_dbconn(); //호스팅디비
		$f_dbconn = null;
		$f_db = $this->load->database('Finance',true);
		$date =date('Y-m');

		// $sql = '
		// SELECT SUM( a.cost ) AS domain_pay
		// FROM main AS a
		// WHERE pay_use = "D"
		// AND DATE_FORMAT( a.pay_date, "%Y-%m" ) >= "'.$date.'"
		// AND DATE_FORMAT( a.pay_date, "%Y-%m" ) <= "'.$date.'"
		// ';

		// $result = $f_db->query($sql);
		// $db['domain'] = $result->row();
		// print_r($db['domain']);
		// exit;

		$date =date('Y-m');
		//$date =date('Y');
		$monDate = $this->input->get('monDate',true);

		if($monDate) {
			$date = date($monDate,'Y-m');
		//$date = date("Y", strtotime($monDate));
		}

	


		$db['lix'] = $this->sum_query($date, $arr_host, $f_db);
		// $db['win'] = $this->sum_query($date, $arr_win_host, $f_db);
		// $db['img'] = $this->sum_query($date, $arr_img_host, $f_db);
		// $db['stm'] = $this->sum_query($date, $arr_stm_host, $f_db);
		// $db['ezi'] = $this->sum_query($date, $arr_ezi_host, $f_db);
		// $db['lr'] = $this->sum_query($date, $arr_lr_host, $f_db);
		// $db['server'] = $this->sum_query($date, $arr_server_host, $f_db);

		print_r($db);
		exit;
		//Domain
		$sql = '
		SELECT SUM( a.cost ) AS domain_pay
		FROM main AS a
		WHERE pay_use = "D"
		AND DATE_FORMAT( a.pay_date, "%Y-%m" ) >= "'.$date.'"
		AND DATE_FORMAT( a.pay_date, "%Y-%m" ) <= "'.$date.'"
		';

		$result = $this->db->query($sql);
		$db['domain'] = $result->db->row();


		$result = mysql_query($sql, $f_dbconn);
		$db['domain'] = mysql_fetch_row($result);

		//SMS
		$sql = '
		SELECT SUM( a.cost ) AS sms_pay
		FROM main AS a
		WHERE pay_use = "S"
		AND DATE_FORMAT( a.pay_date, "%Y-%m" ) >= "'.$date.'"
		AND DATE_FORMAT( a.pay_date, "%Y-%m" ) <= "'.$date.'"
		';
		$result = mysql_query($sql, $f_dbconn);
		$db['sms'] = mysql_fetch_row($result);





		$sql = '
		SELECT SUM( a.cost ) AS etc_pay
		FROM main AS a
		LEFT JOIN pay_memo AS m ON a.mid = m.mid
		WHERE a.pay_use = "E"
		AND DATE_FORMAT( a.pay_date, "%Y-%m" ) >= "'.$date.'"
		AND DATE_FORMAT( a.pay_date, "%Y-%m" ) <= "'.$date.'"
		AND m.memo LIKE "%호스팅%" AND m.memo NOT LIKE "%홈페이지%"
		';
		$result = mysql_query($sql, $f_dbconn);
		$db2['etc_h'] = mysql_fetch_row($result);

		$sql = '
		SELECT SUM( a.cost ) AS etc_pay
		FROM main AS a
		LEFT JOIN pay_memo AS m ON a.mid = m.mid
		WHERE a.pay_use = "E"
		AND DATE_FORMAT( a.pay_date, "%Y-%m" ) >= "'.$date.'"
		AND DATE_FORMAT( a.pay_date, "%Y-%m" ) <= "'.$date.'"
		AND m.memo LIKE "%도메인%" AND m.memo NOT LIKE "%홈페이지%"
		';
		$result = mysql_query($sql, $f_dbconn);
		$db2['etc_d'] = mysql_fetch_row($result);


		$sql = '
		SELECT  SUM( a.cost ) AS etc_pay
		FROM main AS a
		LEFT JOIN pay_memo AS m ON a.mid = m.mid
		WHERE a.pay_use = "E"
		AND DATE_FORMAT( a.pay_date, "%Y-%m" ) >= "'.$date.'"
		AND DATE_FORMAT( a.pay_date, "%Y-%m" ) <= "'.$date.'"
		AND (m.memo LIKE "%코로케이션%" OR m.memo LIKE "%임대서버%" OR m.memo LIKE "%IDC%")
		';
		$result = mysql_query($sql, $f_dbconn);
		$db2['etc_coro'] = mysql_fetch_row($result);

		//클라우드
		$sql = '
		SELECT  SUM( a.cost ) AS etc_pay
		FROM main AS a
		LEFT JOIN pay_memo AS m ON a.mid = m.mid
		WHERE a.pay_use = "E"
		AND DATE_FORMAT( a.pay_date, "%Y-%m" ) >= "'.$date.'"
		AND DATE_FORMAT( a.pay_date, "%Y-%m" ) <= "'.$date.'"
		AND (m.memo LIKE "%AWS%")
		';
		$result = mysql_query($sql, $f_dbconn);
		$db2['etc_cloud'] = mysql_fetch_row($result);


		//홈페이지
		$sql = '
		SELECT  SUM( a.cost ) AS etc_pay
		FROM main AS a
		LEFT JOIN pay_memo AS m ON a.mid = m.mid
		WHERE a.pay_use = "E"
		AND DATE_FORMAT( a.pay_date, "%Y-%m" ) >= "'.$date.'"
		AND DATE_FORMAT( a.pay_date, "%Y-%m" ) <= "'.$date.'"
		AND (m.memo LIKE "%홈페이지%")
		';
		$result = mysql_query($sql, $f_dbconn);
		$db2['etc_home'] = mysql_fetch_row($result);


		//CGI
		$sql = '
		SELECT  SUM( a.cost ) AS etc_pay
		FROM main AS a
		LEFT JOIN pay_memo AS m ON a.mid = m.mid
		WHERE a.pay_use = "E"
		AND DATE_FORMAT( a.pay_date, "%Y-%m" ) >= "'.$date.'"
		AND DATE_FORMAT( a.pay_date, "%Y-%m" ) <= "'.$date.'"
		AND (a.domain LIKE "%CGI%")
		';
		$result = mysql_query($sql, $f_dbconn);
		$db2['etc_cgi'] = mysql_fetch_row($result);

		//print_r($db2);
		$etc_h =  $db2['etc_h'][0]; //기타에서 호스팅비
		$etc_d =  $db2['etc_d'][0]; //기타에서 도메인비
		$etc_coro =  $db2['etc_coro'][0]; //기타에서 코로케이션

		$db['cloud'][0] = $etc_cloud =  $db2['etc_cloud'][0]; //기타에서 클라우드
		$db['home'][0] = $etc_home = $db2['etc_home'][0]; //기타에서 홈페이지
		$db['cgi'][0] = $etc_cgi = $db2['etc_cgi'][0]; //기타에서 CGI

		// $db['cloud'][0] = $db2['etc_cloud'][0];//클라우드 가격 분리
		// $db['home'][0] = $db2['etc_home'][0];//클라우드 가격 분리






		//기타
		$sql = '
		SELECT SUM( a.cost ) AS etc_pay
		FROM main AS a
		WHERE (pay_use = "E" OR  pay_use = "")
		AND DATE_FORMAT( a.pay_date, "%Y-%m" ) >= "'.$date.'"
		AND DATE_FORMAT( a.pay_date, "%Y-%m" ) <= "'.$date.'"
		';
		$result = mysql_query($sql, $f_dbconn);
		$db['etc'] = mysql_fetch_row($result);
	 }

 	
}

	
