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










<!--========== login start ==========-->
<section class="login-wrap">	

	<div class="login-area">

		<div class="default-login">

			<h2>일반 <span>로그인</span></h2>	
			
			<div class="form-login">
				<div class="frm-input">
					<input type="text" placeholder="아이디를 입력하세요">
					<div class="tooltip">아이디를 입력해주세요.</div>
				</div>

				<div class="frm-input">				
					<input type="password" placeholder="비밀번호를 입력하세요" >
					<div class="tooltip">비밀번호를 입력해주세요.</div>
				</div>

				<div class="frm-checkbox">
					<input type="checkbox" value="" name="checkbox" checked="" id="aaa"><label for="aaa"> 아이디저장</label>
				</div>

				<div class="frm-button">
					<button onclick="location.href='/html/index.php';">로그인</button>
				</div>
			</div>

			<div class="login-link">
				<span><a href="/html/member/join.php" class="join-style">회원가입</a></span>
				<span>|</span>
				<span><a href="/html/member/find_idpw.php">아이디/비밀번호 찾기</a></span>
				<span>|</span>
				<span><a href="/html/member/find_dormancy.php">휴면계정찾기</a></span>
			</div>

		</div>

		<div class="sns-login">

			<h2>SNS <span>로그인</span></h2>

			<div class="sns-inner">
				<a href="#" class="ico-naver">
					<i><img src="/html/assets/images/ico_login_naver.png" alt="네이버 아이콘"></i>
					<span>네이버</span>
				</a>
				<a href="#" class="ico-facebook">
					<i><img src="/html/assets/images/ico_login_facebook.png" alt="페이스북 아이콘"></i>
					<span>페이스북</span>
				</a>
				<a href="#" class="ico-kakao">
					<i><img src="/html/assets/images/ico_login_kakao.png" alt="카카오톡 아이콘"></i>
					<span>카카오톡</span>
				</a>
				<a href="#" class="ico-twitter">
					<i><img src="/html/assets/images/ico_login_twitter.png" alt="트위터 아이콘"></i>
					<span>트위터</span>
				</a>
			</div>

			<div class="txt-box">
				블루웹 홈페이지는<br>SNS계정으로 간편하게 로그인하실 수 있습니다.
			</div>

		</div>

	</div>

</section>
<!--========== end login ==========-->








<!--========== footer ==========-->
<footer class="footer">		
<?php
    include($_SERVER["DOCUMENT_ROOT"]."/html/assets/inc/bottom.php");
?>
</footer>
<!--========== end footer ==========-->




</body>
</html>

