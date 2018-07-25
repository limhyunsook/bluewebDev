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




<!--========== start  tab_effect  ==========-->
<script type="text/javascript">
$(function(){
	$(".login-tab > ul > li > a").each(function(){
		$(this).click(function(){
			var index = $(this).parent().index();
			$(this).parent().addClass("login-tab-active").siblings().removeClass("login-tab-active");
			$(this).parent().parent().parent().parent().find(".login-box").hide(0).eq(index).show(0);
		});
	});
});
</script>
<!--========== end tab_effect ==========-->



<!--========== start phone/e-mail  ==========-->
<script>
$(function(){
	$("input[name=idcheck1],input[name=idcheck2],input[name=idcheck3],input[name=idcheck4]").click(function(){
		if($(this).index()==0){
			$(this).parent().parent().find("div.id-input").last().find("input").attr("placeholder","이메일");
		}else{
			$(this).parent().parent().find("div.id-input").last().find("input").attr("placeholder","핸드폰");
		};
	});
});
</script>
<!--========== end phone/e-mail   ==========-->





<!--========== find_idpw ==========-->
<section class="login-wrap">	
	<div class="login-area">



		<!--  find_id -->		
		<div class="login-table login-right">

			<h2>아이디 찾기</h2>

			<!-- id tab -->
			<div class="login-tab"> 
				<ul>
					<li class="login-tab-btn login-tab-active"><a href="#">개인</a></li>
					<li class="login-tab-btn"><a href="#">기업</a></li>		
				</ul>
			</div>

			<!-- find_id_individual -->
			<div class="login-box">			
				<div>				
					<div class="id-input">
						<input type="text" placeholder="이름">
					</div>
					
					<div class="id-input">
						<input type="text" placeholder="이메일">
					</div>

					<div class="id-radio">
						<input type="radio" value="" name="idcheck1" checked="checked" id="aaa" ><label for="aaa">이메일</label>
						<input type="radio" value="" name="idcheck1" id="bbb"><label for="bbb">핸드폰</label>
					</div>
				</div>	
				<button class="id-ok" onclick="location.href='/html/member/find_id_ok.php';">확인</button>
			</div>

			<!-- find_id_corporation -->
			<div class="login-box">				
				<div>				
					<div class="id-input">
						<input type="text" placeholder="기업명">
					</div>
					
					<div class="id-input">
						<input type="text" placeholder="사업자등록번호">
					</div>
					
					<div class="id-input">
						<input type="text" placeholder="이메일">
					</div>

					<div class="id-radio">
						<input type="radio" value="" name="idcheck2" checked="checked" id="ccc"><label for="ccc"> 이메일</label>
						<input type="radio" value="" name="idcheck2" id="ddd"><label for="ddd">핸드폰</label>
					</div>
				</div>	
				<button class="id-ok id-line" onclick="location.href='/html/member/find_id_ok.php';">확인</button>
			</div>

		</div>		



		<!--  find_pw -->
		<div class="login-table">

			<h2>비밀번호 찾기</h2>
		

			<!-- pw tab -->
			<div class="login-tab"> 
				<ul>
					<li class="login-tab-btn login-tab-active"><a href="#">개인</a></li>
					<li class="login-tab-btn"><a href="#">기업</a></li>		
				</ul>
			</div>

			<!-- find_pw_individual -->
			<div class="login-box">					
				<div>		
					<div class="id-input">
						<input type="text" placeholder="아이디">
					</div>					

					<div class="id-input">
						<input type="text" placeholder="이름">
					</div>
					
					<div class="id-input">
						<input type="text" placeholder="이메일">
					</div>

					<div class="id-radio">
						<input type="radio" value="" name="idcheck3" checked="checked" id="eee"><label for="eee">이메일</label>
						<input type="radio" value="" name="idcheck3" id="fff"><label for="fff">핸드폰</label>
					</div>	
				</div>						
				<button class="id-ok" onclick="location.href='/html/member/find_pw_ok.php';">본인인증확인</button>
			</div>

			<!-- find_pw_corporation -->
			<div class="login-box">			
				<div>
					<div class="id-input">
						<input type="text" placeholder="아이디">
					</div>			
				
					<div class="id-input">
						<input type="text" placeholder="기업명">
					</div>
					
					<div class="id-input">
						<input type="text" placeholder="사업자등록번호">
					</div>
					
					<div class="id-input">
						<input type="text" placeholder="이메일">
					</div>

					<div class="id-radio">
						<input type="radio" value="" name="idcheck4" checked="checked" id="ggg"><label for="ggg">이메일</label>
						<input type="radio" value="" name="idcheck4" id="hhh"><label for="hhh">핸드폰</label>
					</div>
				</div>						
				<button class="id-ok" onclick="location.href='/html/member/find_pw_ok.php';">확인</button>
			</div>

		</div>


	</div>
</section>
<!--========== end find_idpw ==========-->








<!--========== footer ==========-->
<footer class="footer">		
<?php
    include($_SERVER["DOCUMENT_ROOT"]."/html/assets/inc/bottom.php");
?>
</footer>
<!--========== end footer ==========-->




</body>
</html>

