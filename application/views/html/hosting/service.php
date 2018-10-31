<?php
$get = $this->input->get('service',true);
if(!$get) $get = 'linuxs';
?>
<script>

    $(document).ready( function (){      
        on_tab();
        // $.each( $('.tab-cont > li '), function( key, value ) {
        //     //alert($(this).attr("item"));
        //     if($(this).attr("item") == '2item'){
        //         $(this).find("a").click();
        //         $(this).addClass("active");                
        //     }
        // });
    });

     $( window ).on( "load", function() {
        $('.tab-cont > li > a ').on('click', function (){
            //claer
            $('.tab-cont > li ').removeClass('active');
            $('.tab-cont > li > a').removeClass('active');            
            
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
    <div class="sub-content t-1">
        <div class="wrapper"> 
            <h5>원하는 호스팅 365일 언제나 블루웹</h5>			
            <h2>실속있는 웹호스팅</h2>	
        </div>    
    </div>    
	<!-- //sub-title -->  
	
    
    <!-- body-content -->
    <div class="blu-content wrapper">        
        <div role="tabpanel">
            
			
            <!-- nav tabs -->
            <ul class="nav nav-pills tab-cont" role="tablist">
                <li role="presentation" id="linuxs" class="col-xs-2"><a href="#linux"  aria-controls="linux" role="tab" data-toggle="tab">리눅스 호스팅</a></li>
                <li role="presentation" id="windows" class="col-xs-2"><a href="#window" aria-controls="window" role="tab" data-toggle="tab">윈도우 호스팅</a></li>
                <li role="presentation" id="xes" class="col-xs-2"><a href="#zeroxe" aria-controls="zeroxe" role="tab" data-toggle="tab">제로XE 호스팅</a></li>     
                <li role="presentation" id="sales" class="col-xs-2"><a href="#reseller" aria-controls="reseller" role="tab" data-toggle="tab">리셀러 호스팅</a></li>
				<li role="presentation" id="nets" class="col-xs-2"><a href="#net"  aria-controls="net" role="tab" data-toggle="tab">.NET 호스팅</a></li>
            </ul>
			<!-- //nav tabs -->
			

            <!-- Tab panes -->
            <div class="tab-content">
				

               	<!-- linux --> 
                <div role="tabpanel" class="tab-pane active" id="linux"> 
					
					<div class="subtitbox">
						<h2>linux 웹호스팅 종류 및 요금</h2>
						<p>
							빠른 처리속도, 뛰어난 안정성, 신속한 업그레이드, PHP 프로그램 최적화 환경<br>
							다양한 부가서비스, 각종 무료CGI 제공, POP3 메일제공, 고성의서버의 안정성제공<br>
							회사 홍보, 쇼핑몰, 커뮤니티 등 HTML + PHP 로 구현된 홈페이지
						</p>
						<a href="#">사양 자세히 보기 <i class="fa fa-angle-right"></i></a>
					</div> 	
					
                   <ul class="row">
						<li class="col-xs-2">
							<div class="col-m-3 l-table"> 
								<h2>보급형</h2> 
								<div>
									<p>32,523원</p>
									<span class="badge-border-success">45% 할인</span>
								</div>
								<h3>19.500<span>원</span></h3>
								<button type="button" class="btn btn-primary" onclick="location.href='/page/hosting/application.php';">신청하기</button>  
								<ul>
									<li><i class="fa fa-check"></i>전용 IP 주소</li>
									<li><i class="fa fa-check"></i>40 GB 디스크 공간</li>
									<li><i class="fa fa-check"></i>무제한 대역폭</li>
									<li><i class="fa fa-check"></i>3 GB RAM</li>
									<li><i class="fa fa-check"></i>2 CPU 코어</li>				
								</ul>	   
							</div>
						</li>
					   	<li class="col-xs-2">
							<div class="col-m-3 l-table"> 
								<h2>기본형</h2> 
								<div>
									<p>32,523원</p>
									<span class="badge-border-primary">45% 할인</span>
								</div>
								<h3>19.500<span>원</span></h3>
								<button type="button" class="btn btn-primary" onclick="location.href='/page/hosting/application.php';">신청하기</button>  
								<ul>
									<li><i class="fa fa-check"></i>전용 IP 주소</li>
									<li><i class="fa fa-check"></i>40 GB 디스크 공간</li>
									<li><i class="fa fa-check"></i>무제한 대역폭</li>
									<li><i class="fa fa-check"></i>3 GB RAM</li>
									<li><i class="fa fa-check"></i>2 CPU 코어</li>				
								</ul>	   
							</div>
						</li>
					   	<li class="col-xs-2">
							<div class="col-m-3 l-table"> 
								<h2>블루형</h2> 
								<div>
									<p>32,523원</p>
									<span class="badge-border-warning">45% 할인</span>
								</div>
								<h3>19.500<span>원</span></h3>
								<button type="button" class="btn btn-primary" onclick="location.href='/page/hosting/application.php';">신청하기</button>  
								<ul>
									<li><i class="fa fa-check"></i>전용 IP 주소</li>
									<li><i class="fa fa-check"></i>40 GB 디스크 공간</li>
									<li><i class="fa fa-check"></i>무제한 대역폭</li>
									<li><i class="fa fa-check"></i>3 GB RAM</li>
									<li><i class="fa fa-check"></i>2 CPU 코어</li>				
								</ul>	   
							</div>
						</li>
					    <li class="col-xs-2">
							<div class="col-m-3 l-table"> 
								<h2>파워형</h2> 
								<div>
									<p>32,523원</p>
									<span class="badge-border-danger">45% 할인</span>
								</div>
								<h3>19.500<span>원</span></h3>
								<button type="button" class="btn btn-primary" onclick="location.href='/page/hosting/application.php';">신청하기</button>  
								<ul>
									<li><i class="fa fa-check"></i>전용 IP 주소</li>
									<li><i class="fa fa-check"></i>40 GB 디스크 공간</li>
									<li><i class="fa fa-check"></i>무제한 대역폭</li>
									<li><i class="fa fa-check"></i>3 GB RAM</li>
									<li><i class="fa fa-check"></i>2 CPU 코어</li>				
								</ul>	   
							</div>
						</li>
					   	<li class="col-xs-2">
							<div class="col-m-3 l-table"> 
								<h2>파워플러스</h2> 
								<div>
									<p>32,523원</p>
									<span class="badge-border-info">45% 할인</span>
								</div>
								<h3>19.500<span>원</span></h3>
								<button type="button" class="btn btn-primary" onclick="location.href='/page/hosting/application.php';">신청하기</button>  
								<ul>
									<li><i class="fa fa-check"></i>전용 IP 주소</li>
									<li><i class="fa fa-check"></i>40 GB 디스크 공간</li>
									<li><i class="fa fa-check"></i>무제한 대역폭</li>
									<li><i class="fa fa-check"></i>3 GB RAM</li>
									<li><i class="fa fa-check"></i>2 CPU 코어</li>				
								</ul>	   
							</div>
						</li>
						<li class="col-xs-2">
							<div class="col-m-3 l-table"> 
								<h2>맥스형</h2> 
								<div>
									<p>32,523원</p>
									<span class="badge-border-primary">45% 할인</span>
								</div>
								<h3>19.500<span>원</span></h3>
								<button type="button" class="btn btn-primary" onclick="location.href='/page/hosting/application.php';">신청하기</button>  
								<ul>
									<li><i class="fa fa-check"></i>전용 IP 주소</li>
									<li><i class="fa fa-check"></i>40 GB 디스크 공간</li>
									<li><i class="fa fa-check"></i>무제한 대역폭</li>
									<li><i class="fa fa-check"></i>3 GB RAM</li>
									<li><i class="fa fa-check"></i>2 CPU 코어</li>				
								</ul>	   
							</div>
						</li>
					</ul>					
					
                </div>     
				<!-- //linux --> 	
					

                <!-- windows -->   
                <div role="tabpanel" class="tab-pane" id="window">      
                    
					<div class="subtitbox">
                        <h2>Windows 웹호스팅 종류 및 요금</h2>
                        <p>
							Window 2008 R2 및 2016 64bit Server 기반의 안정적인 호스팅 서비스<br>
							보안기능 강화와 사용기능이 향상된 윈도우 호스팅을 이용해보세요
						</p>
						<a href="#">사양 자세히 보기 <i class="fa fa-angle-right"></i></a>
                    </div>  
					
					<ul class="row">
						<li class="col-xs-3">
							<div class="col-m-3 w-table"> 
								<h2>보급형</h2> 
								<p>1년 선납  전용 요금</p>
								<img src="/assets/images/logo_window.png">		
								<h3>19.500<span>원</span></h3>
								<h5>월 기본요금</h5>
								<ul>
									<li><span>서비스사양</span><span>기본형</span></li>
									<li><span>하드용량</span><span>3G</span></li>
									<li><span>트래픽</span><span>180G/월</span></li>
									<li><span>DB</span><span>무제한</span></li>
									<li><span>아룻룩</span><span>10개</span></li>				
								</ul>						
								<button type="button" class="btn btn-primary" onclick="location.href='/page/hosting/application.php';">신청하기</button>              
							</div>
						</li>
						<li class="col-xs-3">
							<div class="col-m-3 w-table"> 
								<h2>보급형</h2> 
								<p>1년 선납  전용 요금</p>
								<img src="/assets/images/logo_window.png">		
								<h3>19.500<span>원</span></h3>
								<h5>월 기본요금</h5>
								<ul>
									<li><span>서비스사양</span><span>기본형</span></li>
									<li><span>하드용량</span><span>3G</span></li>
									<li><span>트래픽</span><span>180G/월</span></li>
									<li><span>DB</span><span>무제한</span></li>
									<li><span>아룻룩</span><span>10개</span></li>				
								</ul>						
								<button type="button" class="btn btn-primary" onclick="location.href='/page/hosting/application.php';">신청하기</button>              
							</div>
						</li>
						<li class="col-xs-3">
							<div class="col-m-3 w-table"> 
								<h2>보급형</h2> 
								<p>1년 선납  전용 요금</p>
								<img src="/assets/images/logo_window.png">		
								<h3>19.500<span>원</span></h3>
								<h5>월 기본요금</h5>
								<ul>
									<li><span>서비스사양</span><span>기본형</span></li>
									<li><span>하드용량</span><span>3G</span></li>
									<li><span>트래픽</span><span>180G/월</span></li>
									<li><span>DB</span><span>무제한</span></li>
									<li><span>아룻룩</span><span>10개</span></li>				
								</ul>						
								<button type="button" class="btn btn-primary" onclick="location.href='/page/hosting/application.php';">신청하기</button>              
							</div>
						</li>
						<li class="col-xs-3">
							<div class="col-m-3 w-table"> 
								<h2>보급형</h2> 
								<p>1년 선납  전용 요금</p>
								<img src="/assets/images/logo_window.png">		
								<h3>19.500<span>원</span></h3>
								<h5>월 기본요금</h5>
								<ul>
									<li><span>서비스사양</span><span>기본형</span></li>
									<li><span>하드용량</span><span>3G</span></li>
									<li><span>트래픽</span><span>180G/월</span></li>
									<li><span>DB</span><span>무제한</span></li>
									<li><span>아룻룩</span><span>10개</span></li>				
								</ul>						
								<button type="button" class="btn btn-primary" onclick="location.href='/page/hosting/application.php';">신청하기</button>              
							</div>
						</li>
					</ul>
                </div>
				<!-- //windows -->   


                <!-- zeroxe -->  
                <div role="tabpanel" class="tab-pane" id="zeroxe">  
					
					<div class="subtitbox">
                        <h2>제로XE 호스팅 종류 및 요금</h2>
                        <p>
							제로보드 XE 홈페이지 제작 툴로 손쉽게 홈페이지 구축 가능<br>
							제보로드4 업그레이드 가능, XE 버전의 자동패치 기능 제공<br>							
							제로보드 XE 버전으로 구축 운영하고자 하는 홈페이지
						</p>
						<a href="#">사양 자세히 보기 <i class="fa fa-angle-right"></i></a>						
                    </div>     
					
                    <ul class="row">
                        <li class="col-xs-3 z-table">
                            <div class="col-m-1">
								<span>zeroxe hosting</span>
								<h2>Standard</h2>
								<p>빠른 처리속도, 뛰어난 안정성, 신속한 업그레이드, PHP 프로그램 최적화 환경</p>
								<img src="https://ninjaidc.com/data/product/pr-1527064583.png">
                                <button type="button" class="btn btn-primary" onclick="location.href='/page/hosting/application.php';"><span class="lnr lnr-magnifier"></span>무료체험</button>   
                                <button type="button" class="btn btn-primary" onclick="location.href='/page/hosting/application.php';"><span class="lnr lnr-heart"></span>관심등록</button>   
                                <button type="button" class="btn btn-success" onclick="location.href='/page/hosting/application.php';">신청하기</button> 
                            </div> 
                        </li>    
                        <li class="col-xs-3 z-table">
                            <div class="col-m-2">
								<span>zeroxe hosting</span>
								<h2>Premium</h2>
								<p>빠른 처리속도, 뛰어난 안정성, 신속한 업그레이드, PHP 프로그램 최적화 환경</p>
								<img src="https://ninjaidc.com/data/product/pr-1527064583.png">  
                                <button type="button" class="btn btn-primary" onclick="location.href='/page/hosting/application.php';"><span class="lnr lnr-magnifier"></span>무료체험</button> 
                                <button type="button" class="btn btn-primary" onclick="location.href='/page/hosting/application.php';"><span class="lnr lnr-heart"></span>관심등록</button>   
                                <button type="button" class="btn btn-success" onclick="location.href='/page/hosting/application.php';">신청하기</button> 
                            </div> 
                        </li>  
						<li class="col-xs-3 z-table">
                            <div class="col-m-2">
								<span>zeroxe hosting</span>
								<h2>Basic</h2>
								<p>빠른 처리속도, 뛰어난 안정성, 신속한 업그레이드, PHP 프로그램 최적화 환경</p> 
								<img src="https://ninjaidc.com/data/product/pr-1527064583.png">
                                <button type="button" class="btn btn-primary" onclick="location.href='/page/hosting/application.php';"><span class="lnr lnr-magnifier"></span>무료체험</button>                  
                                <button type="button" class="btn btn-primary" onclick="location.href='/page/hosting/application.php';"><span class="lnr lnr-heart"></span>관심등록</button>                  
                                <button type="button" class="btn btn-success" onclick="location.href='/page/hosting/application.php';">신청하기</button>   
                            </div> 
                        </li>    
                        <li class="col-xs-3 z-table">
                            <div class="col-m-2">
								<span>zeroxe hosting</span>
								<h2>Basic</h2>
								<p>빠른 처리속도, 뛰어난 안정성, 신속한 업그레이드, PHP 프로그램 최적화 환경</p>
								<img src="https://ninjaidc.com/data/product/pr-1527064583.png">
                                <button type="button" class="btn btn-primary" onclick="location.href='/page/hosting/application.php';"><span class="lnr lnr-magnifier"></span>무료체험</button>                  
                                <button type="button" class="btn btn-primary" onclick="location.href='/page/hosting/application.php';"><span class="lnr lnr-heart"></span>관심등록</button>                  
                                <button type="button" class="btn btn-success" onclick="location.href='/page/hosting/application.php';">신청하기</button>   
                            </div> 
                        </li>  
                    </ul>   
                </div>
				<!-- //zeroxe -->  

				<!-- reseller -->    
                <div role="tabpanel" class="tab-pane" id="reseller">  
					
                   	<div class="subtitbox">
                        <h2>리셀러 호스팅 종류 및 요금</h2>
                        <p>							
							하나의 호스팅으로 여러 개의 홈페이지의 개발/관리가 가능<br>
							웹호스팅 비용을 크게 절감할 수 있는 서비스<br>
							호스팅 하나로 최대 20개까지 홈페이지를 운용하고자 하는 웹에이전시나 프리랜서 등
						</p>
						<a href="#">사양 자세히 보기 <i class="fa fa-angle-right"></i></a>
                    </div>  		
					
                    <ul class="row">
                        <li class="col-xs-3 r-table">
                            <div class="col-m-2">                        
								<div class="badge-add">
									<span class="badge badge-danger">NEW</span>
									<span class="badge badge-border-primary">20% 할인</span>						
								</div>
                               <em class="name">리눅스 보급형</em>
								<dl>
									<dt>메모리</dt>
									<dd>1G</dd>
									
									<dt>스토리지</dt>
									<dd>SSD 25GB</dd>
									
									<dt>트래픽</dt>
									<dd>500GB/월</dd>
								</dl>
								<p class="cost">
									<s><span class="per-mon">20,000원/월</span><span class="per-day">666원/일</span></s>
									<ins><span class="per-mon"><span class="big">15,000원</span>/월</span><span class="per-day">500원/일</span></ins>
								</p>
                            </div>
                        </li>   
                        <li class="col-xs-3 r-table">
                            <div class="col-m-2">                        
                                <div class="badge-add">
									<span class="badge badge-danger">NEW</span>
									<span class="badge badge-border-primary">20% 할인</span>								
								</div>
                                <em class="name">리눅스 보급형</em>
								<dl>
									<dt>메모리</dt>
									<dd>1G</dd>
									
									<dt>스토리지</dt>
									<dd>SSD 25GB</dd>
									
									<dt>트래픽</dt>
									<dd>500GB/월</dd>
								</dl>
								<p class="cost">
									<s><span class="per-mon">20,000원/월</span><span class="per-day">666원/일</span></s>
									<ins><span class="per-mon"><span class="big">15,000원</span>/월</span><span class="per-day">500원/일</span></ins>
								</p>
                            </div>
                        </li>   
                        <li class="col-xs-3 r-table">
                            <div class="col-m-2">                        
                                <div class="badge-add">
									<span class="badge badge-danger">NEW</span>
									<span class="badge badge-border-primary">20% 할인</span>								
								</div>
								<em class="name">리눅스 보급형</em>
								<dl>
									<dt>메모리</dt>
									<dd>1G</dd>
									
									<dt>스토리지</dt>
									<dd>SSD 25GB</dd>
									
									<dt>트래픽</dt>
									<dd>500GB/월</dd>
								</dl>
								<p class="cost">
									<s><span class="per-mon">20,000원/월</span><span class="per-day">666원/일</span></s>
									<ins><span class="per-mon"><span class="big">15,000원</span>/월</span><span class="per-day">500원/일</span></ins>
								</p>
                            </div>                       
                        </li>   
						<li class="col-xs-3 r-table">
                            <div class="col-m-2">                        
                                <div class="badge-add">
									<span class="badge badge-danger">NEW</span>
									<span class="badge badge-border-primary">20% 할인</span>								
								</div>
								<em class="name">리눅스 보급형</em>
								<dl>
									<dt>메모리</dt>
									<dd>1G</dd>
									
									<dt>스토리지</dt>
									<dd>SSD 25GB</dd>
									
									<dt>트래픽</dt>
									<dd>500GB/월</dd>
								</dl>
								<p class="cost">
									<s><span class="per-mon">20,000원/월</span><span class="per-day">666원/일</span></s>
									<ins><span class="per-mon"><span class="big">15,000원</span>/월</span><span class="per-day">500원/일</span></ins>
								</p>
                            </div>                       
                        </li>   
                    </ul>                
					
                </div>            
				<!-- //reseller -->  
				
				
				
				<!-- net -->    
                <div role="tabpanel" class="tab-pane" id="net">    
					
					<div class="subtitbox">
                        <h2>.NET 호스팅 종류 및 요금</h2>
                        <p>
							3배 이상 빠른 페이지 처리, 메모리 누수, 교착 상태 및 충돌 방지, 쉬운 프로그래밍<br>
							windows2003 server의 최적화 웹호스팅, 25개 이상의 .net언어 지원<br>
							.aspx 기반의 Windows 2003 server 웹호스팅. IIS 및 DB(Mssql)를 이용한 홈페이지 운영
						</p>
						<a href="#">사양 자세히 보기 <i class="fa fa-angle-right"></i></a>
                    </div>  
	               
					<ul class="row">						
						<li class="col-xs-3">
							<div class="col-m-3 n-table"> 
								<span class="badge-angle">추천</span>
								<h2>보급형</h2> 
								<div><img src="https://ninjaidc.com/data/product/pr-1527064583.png"></div>
								<h3>19.500</h3>
								<p>선납결제시 5% 할인</p>
								<ul>
									<li>타사보다 2만원 더 싼!</li>
									<li>동일 품질 대비 초저가&최대 추가혜택</li>			
								</ul>	   
								<button type="button" class="btn btn-primary" onclick="location.href='/page/hosting/application.php';">신청하기</button>  
							</div>
						</li>		
						<li class="col-xs-3">
							<div class="col-m-3 n-table"> 
								<h2>보급형</h2> 
								<div><img src="https://ninjaidc.com/data/product/pr-1527064583.png"></div>
								<h3>19.500</h3>
								<p>선납결제시 5% 할인</p>
								<ul>
									<li>타사보다 2만원 더 싼!</li>
									<li>동일 품질 대비 초저가&최대 추가혜택</li>			
								</ul>	   
								<button type="button" class="btn btn-primary" onclick="location.href='/page/hosting/application.php';">신청하기</button>  
							</div>
						</li>		
						<li class="col-xs-3">
							<div class="col-m-3 n-table"> 
								<h2>보급형</h2> 
								<div><img src="https://ninjaidc.com/data/product/pr-1527064583.png"></div>
								<h3>19.500</h3>
								<p>선납결제시 5% 할인</p>
								<ul>
									<li>타사보다 2만원 더 싼!</li>
									<li>동일 품질 대비 초저가&최대 추가혜택</li>			
								</ul>	   
								<button type="button" class="btn btn-primary" onclick="location.href='/page/hosting/application.php';">신청하기</button>  
							</div>
						</li>		
						<li class="col-xs-3">
							<div class="col-m-3 n-table"> 
								<h2>보급형</h2> 
								<div><img src="https://ninjaidc.com/data/product/pr-1527064583.png"></div>
								<h3>19.500</h3>
								<p>선납결제시 5% 할인</p>
								<ul>
									<li>타사보다 2만원 더 싼!</li>
									<li>동일 품질 대비 초저가&최대 추가혜택</li>			
								</ul>	   
								<button type="button" class="btn btn-primary" onclick="location.href='/page/hosting/application.php';">신청하기</button>  
							</div>
						</li>		
					</ul>	
                </div>
				<!-- //net --> 
				
            </div>
        </div>  
		
		
		
		
		
    </div>
    <!-- //body-content -->  
    
   	
	
    
</section>
<!-- //container -->











