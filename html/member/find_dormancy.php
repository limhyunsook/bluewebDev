<!DOCTYPE HTML>
<html  lang="ko">
<head>
    
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<meta http-equiv="imagetoolbar" content="no" />
	<meta http-equiv="Cache-Control" content="no-cache" />
	<meta http-equiv="expires" content="0" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="Page-Enter" content="blendTrans(Duration=0)" />
	<meta http-equiv="Page-Exit" content="blendTrans(Duration=0)" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
	<!-- favicon ================================================== -->
	<link rel="shortcut icon" href="/html/assets/images/favicon.ico">

	<!-- slide ================================================== --> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.12/jquery.bxslider.min.js"></script>    
	<script src="/html/assets/js/main_script.js"></script>

    <!-- bootstrapk ================================================== -->    
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css"><!-- 합쳐지고 최소화된 최신 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css"><!-- 부가적인 테마 -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script><!-- 합쳐지고 최소화된 최신 자바스크립트 -->
    
    <!-- css ================================================== -->
	<link rel="stylesheet" href="/html/assets/css/common.css">
	<link rel="stylesheet" href="/html/assets/css/style.css">

</head>
<body>

    
    
    
    
    
<!--========== header ==========-->
<header class="header">
<?php
	include($_SERVER["DOCUMENT_ROOT"]."/html/assets/inc/top.php");
?>
</header>
<!--========== end header ==========-->








<!--========== find_dormancy ==========-->
<section class="find-dormancy-warp">	

		<div class="find-dormancy-box">

			<h2>휴면계정 조회</h2>		
			<p>				
                블루웹은 고객님의 개인정보를 보호하기 위해,	최근 1년 동안 로그인 기록이 없는 계정을	휴면 계정으로 전환하고	해당 계정의 개인정보를 분리하여 저장/관리하고 있습니다.<Br/><Br/>
                휴면 계정 전환으로 개인정보가 분리 저장/관리될 경우 서비스 이용이 제한됩니다. <Br/><Br/>

                서비스를 다시 이용하고 싶은 고객님은<Br/><span>'휴면계정 조회'</span>로 계정 복원을 하실 수 있습니다.
			</p>	
			<button class="btn-find-dormancy" onclick="location.href='/html/member/find_dormancy_check.php';">휴면계정 조회</button>			
		
		</div>		

</section>
<!--========== end find_dormancy ==========-->








<!--========== footer ==========-->
<footer class="footer">		
<?php
    include($_SERVER["DOCUMENT_ROOT"]."/html/assets/inc/bottom.php");
?>
</footer>
<!--========== end footer ==========-->




</body>
</html>

