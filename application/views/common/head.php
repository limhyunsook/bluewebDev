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

	<?php $v = mt_rand(1,50); //auto ver change ?>
    
	<!-- favicon ================================================== -->
	<link rel="shortcut icon" href="/assets/images/favicon.ico">

	<!-- script ================================================== --> 
    <script src="/assets/js/jquery-3.3.1.js?v=<?php echo $v;?>"></script>
    <!-- script src="/assets/js/jquery.bxslider.min.js"></script -->
    
	<script src="/assets/js/script.js?v=<?php echo $v;?>"></script>

    <!-- bootstrapk ================================================== -->    
	<!--
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/jquery-ui.theme.min.css">	
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/bootstrap-datepicker.min.js"></script>
	-->

    <link rel="stylesheet" href="/assets/css/jquery-ui.theme.min.css">	


	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
	<!-- script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	<script src="/assets/js/bootstrap-datepicker.min.js"></script>

    
    <!-- css ================================================== -->   
	<link rel="stylesheet" href="/assets/css/common.css?v=<?php echo $v;?>">
	<link rel="stylesheet" href="/assets/css/style.css?v=<?php echo $v;?>">
    
</head>
<body>




     
	
	
	
<!-- top banner -->
<div id="topBannerArea">	
	<div class="BannerImg"><a href="#" target="_blank"></a></div>
	<div class="BannerBtn"><span class="lnr lnr-cross"></span></div>	
</div>
<!-- //top banner -->	

	
	
	    

<!-- header -->
<header class="header">


	<nav class="nav-bar wrapper">
		<div>			
			<ul>
				<?php  $this->authlib->logined();?>			
				<li><a href="/page/member/login.php">회원가입</a></li>
				<li><a href="#">고객센터</a></li>		
				<li><a href="#">내서비스관리</a></li>
				<li><a href="/admin/payment/inicis_order_list">관리자</a></li>
				
			</ul>	
		</div>
	</nav>


	<div class="nav-menu">
		<div class="container wrapper">
			<h2>
				<a href="/page/index.php"><img src="/assets/images/blueweb_logo.png" alt="블루웹 로고"></a>
			</h2>	
			<ul>
				<li>
					<a href="/page/hosting/service.php">호스팅</a>
					 <div>
						<div>
							<nav>											
								<h2>호스팅</h2>
								<p>빠른 처리속도, 뛰어난 안정성, 신속한 업그레이드, PHP 프로그램 최적화 환경</p>							
								<a href="#">서비스 알아보기 <i class="fa fa-angle-right"></i></a>
							</nav>		
							<div class="wrapper">
								<ul>
									<h2><a href="#">웹호스팅</a></h2>
									<li><a href="/page/hosting/service.php">웹호스팅 <span class="badge badge-warning">event</span></a></li>
									<li><a href="#">웹에이전시 호스팅</a></li>
									<li><a href="#">워드프레스 호스팅</a></li>		
									<li><a href="#">DB 호스팅</a></li>
								</ul>		
								<ul>
									<h2><a href="#">솔루션 지원</a></h2>
									<li><a href="#">SMS 호스팅</a></li>
									<li><a href="#">이미지 호스팅</a></li>
									<li><a href="#">동영상 호스팅</a></li>
								</ul>		
								<ul>
									<h2><a href="#">웹사이트 구축 지원</a></h2>
									<li><a href="#">이전 대행</a></li>
									<li><a href="#">간편제작 <span class="badge badge-danger">new</span></a></li>
									<li><a href="#">SSL 호스팅</a></li>
								</ul>	
							</div>
						</div>
					</div>
				</li>
				<li>
					<a href="/page/server/server.php">서버호스팅</a>
					<div>
						<div>
							<nav>											
								<h2>서버호스팅</h2>
								<p>대의 서버를 독립적으로 이용하실 수 있는 서비스</p>							
								<a href="#">서비스 알아보기 <i class="fa fa-angle-right"></i> </a>
							</nav>		
							<div class="wrapper">
								<ul>
									<h2><a href="#">서버호스팅</a></h2>
									<li><a href="/page/server/server.php">서버임대/구매</a></li>
									<li><a href="#">1분설치 서버</a></li>
									<li><a href="#">VPN</a></li>
								</ul>									
								<ul>
									<h2><a href="#">위탁운영</a></h2>	
									<li><a href="#">백업</a></li>
									<li><a href="#">모니터링 <span class="badge badge-warning">event</span></a></li>
								</ul>
								<ul>
									<h2><a href="#">서버파킹</a></h2>	
									<li><a href="#">랙</a></li>
								</ul>					
							</div>
						</div>
					</div>
				</li>
				<li>
					<a href="/page/domain/domain.php">도메인</a>
					<div>
						<div>
							<nav>											
								<h2>도메인</h2>
								<p>도메인은 개인 또는 기업을 대표하는 브랜드이자 첫인상입니다.</p>							
								<a href="#">서비스알아보기 <i class="fa fa-angle-right"></i> </a>
							</nav>		
							<div class="wrapper">
								<ul>
									<h2><a href="#">도메인 등록</a></h2>
									<li><a href="#">도메인 검색</a></li>
									<li><a href="#">구매 대행</a></li>
								</ul>					
								<ul>
									<h2><a href="#">기간이전 <span class="badge badge-danger">new</span></a></h2>
									<li><a href="#">기관연장</a></li>	
								</ul>							
								<ul>
									<h2><a href="#">도메인 가치평가</a></h2>
									<li><a href="#">도메인 정보</a></li>
								</ul>	
							</div>
						</div>
					</div>
				</li>			
				<li>
					<a href="/page/security/security.php">보안</a>
					<div>
						<div>
							<nav>											
								<h2>보안</h2>
								<p>사이버 보안 위협으로부터 실시간 대응하며 고객의 정보를 안전하게 보호합니다.</p>							
								<a href="#">서비스알아보기 <i class="fa fa-angle-right"></i> </a>
							</nav>		
							<div class="wrapper">
								<ul>	
									<h2><a href="#">보안관제</a></h2>
									<li><a href="#">원격관제</a></li>
									<li><a href="#">파견관제</a></li>
								</ul>	
								<ul>	
									<h2><a href="#">컨설팅</a></h2>
									<li><a href="#">모의해킹 <span class="badge badge-warning">event</span></a></li>
									<li><a href="#">취약점진단</a></li>
									<li><a href="#">침해사고분석</a></li>
								</ul>	
								<ul>	
									<h2><a href="#">보안상품</a></h2>
									<li><a href="#">SSL</a></li>
									<li><a href="#">방화벽</a></li>
									<li><a href="#">웹 방화벽</a></li>   
									<li><a href="#">이메일 보안 <span class="badge badge-primary">update</span></a></li>
									<li><a href="#">DB 암호화</a></li>                        
								</ul>	
								<ul>	
									<h2><a href="#">보안 솔루션</a></h2>
									<li><a href="#">문서 중앙화</a></li>
									<li><a href="#">랜섬웨어 차단</a></li>
									<li><a href="#">개인정보보호</a></li>
									<li><a href="#">유해 사이트 차단</a></li>                        
								</ul>																						
							</div>
						</div>
					</div>
				</li>
				<li>
					<a href="/page/solution/solution.php">솔루션</a>
					<div>
						<div>
							<nav>											
								<h2>솔루션</h2>
								<p>홈페이지 DIY(직접 제작)부터 전문 제작의뢰까지, 고객에게 딱 맞는 맞춤형 홈페이지를 제공합니다.</p>							
								<a href="#">서비스알아보기 <i class="fa fa-angle-right"></i> </a>
							</nav>		
							<div class="wrapper">
								<ul>	
									<h2><a href="#">이비즈로</a></h2>
									<li><a href="#">홈페이지자동구축</a></li>
									<li><a href="#">신청하기</a></li>
								</ul>	
								<ul>	
									<h2><a href="#">쿠킹엠</a></h2>
									<li><a href="#">7일무료체험 <span class="badge badge-primary">update</span></a></li>
									<li><a href="#">신청하기</a></li>
								</ul>	
								<ul>	
									<h2><a href="#">코참비즈</a></h2>
									<li><a href="#">상공회의소 회원 무료</a></li>
									<li><a href="#">신청하기 <span class="badge badge-danger">new</span></a></li>
								</ul>	
								<ul>	
									<h2><a href="#">홈페이지제작센터</a></h2>
									<li><a href="#">신청하기</a></li>
								</ul>																						
							</div>
						</div>
					 </div>
				</li>
				<li>
					<a href="/page/cloud/cloud.php">클라우드</a>
					<div>
						<div>
							<nav>											
								<h2>클라우드</h2>							
								<p>중소기업 최초, 클라우드 보안인증 획득!</p>							
								<a href="#">서비스알아보기 <i class="fa fa-angle-right"></i> </a>
							</nav>		
							<div class="wrapper">
								<ul>								
									<h2><a href="#">Compute</a></h2>
									<li><a href="#">cloud Sever</a></li>
									<li><a href="#">cloud HPC <span class="badge badge-warning">event</span></a></li>
									<li><a href="#">cloud DB</a></li>					
									<li><a href="#">cloud CDN</a></li>					
								</ul>
								<ul>
									<h2><a href="#">Storage</a></h2>
									<li><a href="#">Nas <span class="badge badge-primary">update</span></a></li>
								</ul>	
								<ul>
									<h2><a href="#">Security </a></h2>
									<li><a href="#">웹방화벽(WAF)</a></li>
								</ul>
								<ul>
									<h2><a href="#">Management</a></h2>
									<li><a href="#">모니터링(Sycros) <span class="badge badge-danger">new</span></a></li>
									<li><a href="#">백업(backup)</a></li>
								</ul>
								
							</div>
						</div>
					</div>
				</li>
				
			</ul>
		</div>
	</div>
	
	
	
</header>
<!-- //header-->