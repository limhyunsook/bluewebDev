<!-- container -->
<section class="container-warp">	

	
	<!-- body-content -->  
    <div class="blu-content layout-lg"> 
		
		<ul class="row layout-sm">
			<li class="col-xs-6">
				<div class="col-m-2 panel">
					<h2 class="subject">일반 <span>로그인</span></h2>				
					<form id="loginForm" method="post" novalidate="novalidate">
					<div class="form-group">
						<input type="text" class="form-control form-control_lg" placeholder="아이디를 입력하세요.">    
					</div>

					<div class="form-group">			
						<input type="password" class="form-control form-control_lg" placeholder="비밀번호를 입력하세요.">
					</div>

					<div class="form-group">		
						<label class="chkcontainer">
							<input type="checkbox" name="check2" checked="checked">
							<span class="check-text"></span>아이디저장
						</label>      
					</div>

					<div class="frm-buttons">
						<button type="button" class="btn btn-primary ma1" onclick="location.href='/page/index.php';">로그인</button>  
					</div>	

					<div class="login-link">
						<span><a href="/page/member/join1.php" class="color01">회원가입</a></span>							
						<span><a href="/page/member/idsearch.php">아이디 찾기</a></span>							
						<span><a href="/page/member/pwsearch.php">비밀번호 찾기</a></span>	
						<span><a href="/page/member/inactive.php">휴면계정찾기</a></span>
					</div>
					</form>

				</div>
			</li>
			<li class="col-xs-6">
				<div class="col-m-2 panel">
					<h2 class="subject">SNS <span>로그인</span></h2>				
					<form id="loginForm" method="post" novalidate="novalidate">
						<div class="sns-inner">
							<a href="#" class="ico-naver col-xs-3">
								<i><img src="/assets/images/ico_login_naver.png" alt="네이버 아이콘"></i>
								<span>네이버</span>
							</a>
							<a href="#" class="ico-facebook col-xs-3">
								<i><img src="/assets/images/ico_login_facebook.png" alt="페이스북 아이콘"></i>
								<span>페이스북</span>
							</a>
							<a href="/api/sns_login?type=KO" class="ico-kakao col-xs-3">
								<i><img src="/assets/images/ico_login_kakao.png" alt="카카오톡 아이콘"></i>
								<span>카카오톡</span>
							</a>
							<a href="#" class="ico-google col-xs-3">
								<i><img src="/assets/images/ico_login_google.png" alt="구글 아이콘"></i>
								<span>구글</span>
							</a>
						</div>
						<div class="txt-box">
							블루웹 홈페이지는<br>SNS계정으로 간편하게 로그인하실 수 있습니다.
						</div>
					</form>

				</div>
			</li>
		</ul>   	
				
	</div>
	<!-- //body-content -->  
		

</section>
<!-- //container -->