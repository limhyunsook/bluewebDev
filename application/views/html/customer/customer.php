<?php
$get = $this->input->get('customer',true);
if(!$get) $get = 'faqs';
?>
<script>

	$(document).ready( function (){      
		on_tab();
		// $.each( $('.tab-cus > li '), function( key, value ) {
		//     //alert($(this).attr("item"));
		//     if($(this).attr("item") == '2item'){
		//         $(this).find("a").click();
		//         $(this).addClass("active");                
		//     }
		// });
	});

	 $( window ).on( "load", function() {
		$('.tab-cus > li > a ').on('click', function (){
			//claer
			$('.tab-cus > li ').removeClass('active');
			$('.tab-cus > li > a').removeClass('active');            

			//set
			$(this).addClass("active");
			$(this).parent().addClass("active");            
		});
	});


	function on_tab()
	{
		 var target = '<?=$get?>';         
		 $("#"+target).find("a").click();
		 $("#"+target).addClass("active");    
	}
</script>



<!-- container -->
<section class="container-warp">	
		
	
    <!-- sub-title -->  
    <div class="sub-content t-9">
        <div class="wrapper"> 
            <h5>궁금한 점이 있으신가요? 분야별 전문가가 도와드립니다.</h5>			
            <h2>고객센터에서 궁금하신 점을 찾아보세요.</h2>	
        </div>    
    </div>    
	<!-- //sub-title -->  
	
   
	
	
	
	
    <!-- body-content -->
    <div class="blu-content wrapper">        
		
		<div class="customer-sec01">
			<h2>궁금한 점이 있으신가요? 분야별 전문가가 도와드립니다.</h2>			
			<ul class="row">
				<li class="col-xs-3">				
					<div class="col-m-2">  						
						<a href="#">
							<img src="http://localhost/assets/images/ico_1to1.png">
							<h4>1:1 문의</h4>
							<p>상세한 상담 문의를 지원합니다.</p>
						</a>
					</div>
				</li>
				<li class="col-xs-3">				
					<div class="col-m-2">  						
						<a href="#">
							<img src="http://localhost/assets/images/ico_nologin.png">
							<h4>원격 지원</h4>
							<p>온라인 원격 지원을 제공합니다.</p>
						</a>
					</div>
				</li>		
				<li class="col-xs-3">				
					<div class="col-m-2">  						
						<a href="#">
							<img src="http://localhost/assets/images/ico_1to1.png">
							<h4>자주하는 질문</h4>
							<p>자주하는 질문을 모아놓았습니다.</p>
						</a>
					</div>
				</li>
				<li class="col-xs-3">				
					<div class="col-m-2">  						
						<a href="#">
							<img src="http://localhost/assets/images/ico_faq.png">
							<h4>로그인 없이 연장</h4>
							<p>로그인 없이 연장할 수 있습니다.</p>
						</a>
					</div>
				</li>
			</ul>
		</div>

		
 
    </div>
    <!-- //body-content -->  

	
		
	<div role="tabpanel" class="customer-sec02">

		<div class="wrapper">
			<!-- nav tabs -->
			<ul class="nav tab-cus" role="tablist">
				<li role="presentation" id="faqs" class="col-xs-2"><a href="#faq" aria-controls="faq" role="tab" data-toggle="tab">자주 하는 질문</a></li>
				<li role="presentation" id="manuals" class="col-xs-2"><a href="#manual" aria-controls="manual" role="tab" data-toggle="tab">매뉴얼</a></li>
			</ul>
			<!-- //nav tabs -->
			<!-- Tab panes -->
			<div class="tab-content tab-cus-cont">
				<!-- faq --> 
				<div role="tabpanel" class="tab-pane active tab-cus-box " id="faq"> 
					<ul>
						<li class="col-xs-4">
							<div class="col-m-3"> 								
								<a href="#" >
									<h4>Q</h4>
									특정 업체의 메일이 수신되지 않았습니다.
								</a>
							</div>
						</li>
						<li class="col-xs-4">
							<div class="col-m-3"> 
								<a href="#">
									<h4>Q</h4>
									FTP 접속이 안됩니다.
								</a>
							</div>
						</li>
						<li class="col-xs-4">
							<div class="col-m-3"> 
								<a href="#">
									<h4>Q</h4>
									사용자 메일 계정은 어떻게 등록하나요?
								</a>
							</div>
						</li>
						<li class="col-xs-4">
							<div class="col-m-3"> 
								<a href="#">
									<h4>Q</h4>
									네임서버를 변경했습니다. 언제쯤 반영이 되나요?
								</a>
							</div>
						</li>
						<li class="col-xs-4">
							<div class="col-m-3"> 
								<a href="#"> 
									<h4>Q</h4>
									사용자 메일 계정 등록 방법은?
								</a>
							</div>
						</li>
						<li class="col-xs-4">
							<div class="col-m-3"> 
								<a href="#" class="faq_plus">								
									관련 FAQ 더보기 +
								</a>
							</div>
						</li>				  
					</ul>	
				</div>     
				<!-- //faq --> 
				<!-- manual -->   				
				<div role="tabpanel" class="tab-pane tab-cus-box" id="manual"> 							
					<ul>
						<li class="col-xs-4">
							<div class="col-m-3"> 
								<a href="#">
									<h4>manual</h4>
									안드로이드폰(갤럭시S3 등) 메일 설정
								</a>
							</div>
						</li>
						<li class="col-xs-4">
							<div class="col-m-3"> 
								<a href="#">
									<h4>manual</h4>
									주요 도메인 등록 방법
								</a>
							</div>
						</li>
						<li class="col-xs-4">
							<div class="col-m-3"> 
								<a href="#">
									<h4>manual</h4>
									Outlook 2016 설정하기
								</a>
							</div>
						</li>
						<li class="col-xs-4">
							<div class="col-m-3"> 
								<a href="#">
									<h4>manual</h4>
									아이폰/아이패드 설정하기
								</a>
							</div>
						</li>
						<li class="col-xs-4">
							<div class="col-m-3"> 
								<a href="#">
									<h4>manual</h4>
									Outlook 2010 설정하기
								</a>
							</div>
						</li>
						<li class="col-xs-4">
							<div class="col-m-3"> 
								<a href="#" class="faq_plus">								
									매뉴얼 더보기 +
								</a>
							</div>
						</li>
					</ul>
				</div>
				<!-- //manual -->   
			</div>			 

	 	</div>   
	</div>  

		
		
	<div class="customer-sec03"> 
		<div class="wrapper">
			<h2>지금 바로 해결할 수 있는 업무를 확인해 주세요</h2>
			<ul class="row">
				<li class="col-xs-3">				
					<div class="col-m-2">
						<img src="http://localhost/assets/images/ico_1to1.png">
						<h2>서비스 바로가기</h2>
						<a href="#">ㆍ콜백서비스</a>
						<a href="#">ㆍ원격지원요청</a>
					</div>
				</li>
				<li class="col-xs-3">				
					<div class="col-m-2">  
						<img src="http://localhost/assets/images/ico_1to1.png">
						<h2>메일 바로가기</h2>					
						<a href="#">ㆍ서비스 매뉴얼</a>
						<a href="#">ㆍ메일문의</a>
						<a href="#">ㆍ고객의 말씀</a>
					</div>
				</li>	
				<li class="col-xs-3">				
					<div class="col-m-2">     
						<img src="http://localhost/assets/images/ico_faq.png">
						<h2>문의 바로가기</h2>					
						<a href="#">ㆍ이벤트</a>
						<a href="#">ㆍBest 칭찬사원</a>
						<a href="#">ㆍ오늘의 제안</a>
					</div>
				</li>	
				<li class="col-xs-3">				
					<div class="col-m-2">     
						<img src="http://localhost/assets/images/ico_nologin.png">
						<h2>이벤트 바로가기</h2>					
						<a href="#">ㆍ이벤트</a>
						<a href="#">ㆍBest 칭찬사원</a>
						<a href="#">ㆍ오늘의 제안</a>
					</div>
				</li>	
			</ul>		
		</div>
	</div>  
			
		
	
	
	<!-- support -->  
    <div class="cunselt-content">    
        <div class="wrapper">
            <h3>도움이 필요하신가요?<br>빠르고 정확하게 해결해 드리겠습니다.</h3>
            <p>고객센터는 IT 비즈니스 전문가들로만 운영되고 있습니다.<br>로그인 후 1:1 문의를 이용하실 수 있습니다.</p>
            <a href="/consult" class="btn btn-danger" >상담하기</a>
            <h4><span class="lnr lnr-phone"></span> 1544-2120</h4>
        </div>    
    </div>
    <!-- //support -->  
	
	

		

	<!-- q&a-->	
	<div class="qna-content">	
		 <div class="wrapper">
			<h2>공지사항</h2>
			<ul class="qna">
				<li class="col-xs-12 qnaBasic">
               		<div class="col-m-2"> 		
						<h3>[ 호스팅 > 사용안내 ] 네임서버란?</h3>		
						<div class="quickRightBasic" id="line1">							
							<div>	
								특정 네트워크에 속한 특정 호스트에 접속하기 위해, 숫자로 된 IP 주소를 기억하지 않고 도메인
								네임만으로도 가능하게 하기위해 도메인 네임을 IP 주소로 전환시켜 주는 시스템입니다.

								IP 주소가 210.205.6.5과 같이 각 바이트마다 마침표로 구분된 4바이트 크기의 숫자 주소인데
								비하여 도메인 네임은 blueweb.co.kr과 같이 문자로 구성되어 있어서, 숫자보다는 이름을 이해하거나 기억하기 쉽습니다.
							</div>
						</div>		
					</div>
				</li>
				<li class="col-xs-12 qnaBasic">
               		<div class="col-m-2"> 		
						<h3>올바른 호스팅 업체를 선택하는 기준은 무엇인가요?</h3>		
						<div class="quickRightBasic" id="line1">
							<div>
								1) 주기적으로 데이터를 백업하고 다중 백업을 하고 있는가?<br> 
								블루웹은 고객님의 데이터를 정기적 3중 백업하고 있습니다. 백업 시점이 다른 3개의 백업 데이터를 가지고 있으며 서로 다른 물리적 하드디스크에 저장되므로 한쪽에 예측 불가능한 장비문제가 생겨도 고객님의 데이터는 안전하게 보관됩니다.<br><br>

								2) 호스팅 서비스 가격이 적절한가? <br>
								블루웹은 안정적인 장비, 우수한 관리 인력, 친절한 고객지원을 바탕으로 한 호스팅 서비스를 제공합니다. 최상의 환경에서 합리적인 가격으로 호스팅 서비스를 받으실 수 있습니다.<br><br>

								3) 자체 솔루션을 보유하고 있는가? <br>
								블루웹은 홈페이지 구축 솔루션 이비즈로, 자체 웹메일, 웹하드 솔루션 블루하드, CGI 솔루션 BlueCGI 등 다양한 자체 솔루션을 보유함으로써 고객님께 홈페이지 구축의 편리한 환경을 제공합니다.<br><br>

								4) 이용약관의 내용이 적절한가? <br>
								블루웹은 (사)한국인터넷호스팅협회 공동약관을 적용하고 있습니다. 공동약관은 불공정한 내용의 이용약관이 통용되거나 난립하는 것을 방지하기 위해 한국웹호스팅기업협회 차원에서 마련된 것입니다.<br><br>

								5) 24시간 전화 상담이 가능한가? <br>
								블루웹은 24시간 전화상담이 가능합니다. 심야에도 IDC에 상주하고 있는 전문 엔지니어에게 상담을 받으실 수 있습니다.<br><br>

								6) 손해배상보험에 가입되어 있는가? <br>
								블루웹은 고객님들에게 보다 안정적인 서비스를 제공하고자 AIG IT전문인 배상책임보험을 가입하였습니다. 보장내용으로는 불시에 발생할 수 있는 데이터처리오류, 해킹, 시스템정지, 하드웨어의 오작동, 프로그램버그, 소프트웨어의 오류 등을 포함합니다.<br><br>

								7) IDC에서 서버를 관리하는가? <br>
								블루웹은 서울 서초구 서초동에 있는 하나로텔레콤IDC에서 서버를 관리하고 있습니다. 하나로통신 기가스위치 백본망에 전 서버가 연결되어 운영되므로 홈페이지로의 접속에 있어 최상의 서비스 속도와 안정성을 자랑합니다.<br><br>

								8) 서버관리자가 IDC로부터 근거리에서 근무하는가? <br>
								블루웹은 IDC에 자체 사무실을 가지고 365일 24시간 엔지니어가 상주하며 고객님의 서버를 관리하고 있습니다. 서버에 어떠한 문제나 에러가 발생 하여도 신속하고 완벽하게 처리가 가능합니다.<br><br>
								
								9) 방화벽 및 최신보안 패치 등 서버 보안 능력이 우수한가? <br>
								블루웹은 고성능 IPS(침입방지시스템), 웹방화벽, 실시간 모니터링 관제 시스템을 운영하여 다양한 위험에 대한 대처능력을 강화하였습니다. 또한 최신보안 패치를 적용하여 서버의 안정성을 높이고 있습니다.<br><br>

								10) 정보보호 안전진단 수검 필증이 있는가? <br>
								블루웹은 관련 법률에 의한 정보보호지침 이행 확인 및 정보보호 안전진단에서 모든 항목에 대해 성공적으로수행하고 있는 것이 확인되어 정보보호 안전진단 필증을 획득하였습니다.
							</div>
						</div>		
					</div>
				</li>
				<li class="col-xs-12 qnaBasic">
               		<div class="col-m-2"> 		
						<h3>블루웹 회원 탈퇴 하고 싶습니다.</h3>		
						<div class="quickRightBasic" id="line1">
							<div>
								탈퇴는 회원이 더 이상 블루웹 홈페이지의 서비스를 받지 않고자 할 때 신청하는 것입니다. 
								탈퇴 신청이 되면 바로 자동 탈퇴가 이루어지고 개인정보는 삭제됩니다.
								단, 이용중인 서비스와 이벤트 참가 및 혜택은 모두 사용하실 수 없게 되니 탈퇴를 하시기 전에
								신중히 판단하시기 바랍니다. <a href="#">(블루웹 회원혜택 자세히보기)</a>
							</div>
						</div>		
					</div>
				</li>			
			</ul>	
			<a href="#">전체보기 <i class="fa  fa-angle-right"></i></a>
		</div>
	</div>
	<!-- //q&a-->	
    
</section>
<!-- //container -->











