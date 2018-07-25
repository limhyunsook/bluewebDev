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








<!--========== find_dormancy_edit ==========-->
<section class="find-dormancy-edit-warp">	
	<div class="find-dormancy-edit-area">

		<h2>휴면계정 조회</h2>

		<div class="find-dormancy-edit-box">
            
			<h3>			
				고객님의 휴면 계정은 다음과 같습니다.<br><span>복원할 계정을 선택하시고 비밀번호를 입력해 주세요.</span>
			</h3>	

			<table class="find-dormancy-edit-table1">		
			<colgroup>
				<col width="15%">
				<col width="40%">
				<col width="45%">
			</colgroup>
			<thead>
				<tr>	
					<th></th>
					<th>아이디</th>
					<th>최종 로그인 기록</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><input type="radio" value="" name="idcheck1" checked="checked" id="aaa" ></td>
					<td>blueweb01</td>
					<td>0000-00-00</td>
				</tr>
				<tr>
					<td><input type="radio" value="" name="idcheck1" checked="" id="aaa" ></td>
					<td>blueweb02</td>
					<td>0000-00-00</td>
				</tr>
			</tbody>
			</table>

			<table class="find-dormancy-edit-table2">		
			<colgroup>				
				<col width="100%">
			</colgroup>
			<tbody>
				<tr>
				
					<td><input type="text" value="" placeholder="새 비밀번호" class="input-style02"></td>					
				</tr>			
				<tr>
					
					<td><input type="text" value="" placeholder="비밀번호" class="input-style02"></td>					
				</tr>			
			</tbody>
			</table>
			
			<p> * 비밀번호는 대소문자 구분하여 영문+숫자 6~12자로 설정</p>
			<button class="btn-find-dormancy-edit" onclick="location.href='/html/member/find_dormancy_ok.php';">휴면계정 복원</button>
			
		
		</div>		



	</div>
</section>
<!--========== end find_dormancy_edit ==========-->








<!--========== footer ==========-->
<footer class="footer">		
<?php
    include($_SERVER["DOCUMENT_ROOT"]."/html/assets/inc/bottom.php");
?>
</footer>
<!--========== end footer ==========-->




</body>
</html>

