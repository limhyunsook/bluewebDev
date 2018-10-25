<? if (!defined('BASEPATH')) exit('No direct script access allowed');

// 경고메세지를 경고창으로
function alert($msg='', $url='') {
	$CI =& get_instance();

	if (!$msg) $msg = '올바른 방법으로 이용해 주십시오.';

	echo "<meta http-equiv=\"content-type\" content=\"text/html; charset=".$CI->config->item('charset')."\">";
	echo "<script type='text/javascript'>alert('".$msg."');";
	if ($url)
		echo "location.replace('".$url."');";
	else
		echo "history.go(-1);";
	echo "</script>";
	exit;
}

// 경고메세지 출력후 창을 닫음
function alert_close($msg) {
	$CI =& get_instance();
	echo "<meta http-equiv=\"content-type\" content=\"text/html; charset=".$CI->config->item('charset')."\">";
	echo "<script type='text/javascript'> alert('".$msg."'); window.close(); </script>";
	exit;
}

// 경고메세지만 출력
function alert_only($msg){
	$CI =& get_instance();
	echo "<meta http-equiv=\"content-type\" content=\"text/html; charset=".$CI->config->item('charset')."\">";
	echo "<script type='text/javascript'> alert('".$msg."'); </script>";
	exit;
}

// 경고메세지를 부모창으로 전송
function alert_parent($msg,$url=false){
	$CI =& get_instance();

	echo "<script type='text/javascript'>window.onload = function(){ ";
	echo "alert('".$msg."');";
	if ($url) echo (" parent.document.location.replace('".$url."');");

	echo "window.close();}</script>";
	exit;
}

function alert_stay($msg){
	$CI =& get_instance();
	echo "<meta http-equiv=\"content-type\" content=\"text/html; charset=".$CI->config->item('charset')."\">";
	echo "<script type='text/javascript'> alert('".$msg."'); </script>";
}

function close_popup(){	
	echo "<script type='text/javascript'>window.close(); </script>";	
}

function gotohome(){
	echo "<script type='text/javascript'>opener.parent.document.location.replace('/');  </script>";	
}
?>
