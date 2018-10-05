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
    <div class="sub-content">
        <div class="wrapper"> 
            <h5>원하는 호스팅 365일 언제나 블루웹</h5>			
            <h2>블루웹 웹호스팅</h2>	
        </div>    
    </div>    
	<!-- //sub-title -->  
	
    
    <!-- body-content -->
    <div class="blu-content wrapper">        
        <div role="tabpanel">
            
			
            <!-- nav tabs -->
            <ul class="nav nav-pills tab-cont" role="tablist">
                <li role="presentation" id="linuxs" class="col-xs-2"><a href="#linux"  role="tab" data-toggle="tab">리눅스 호스팅</a></li>
                <li role="presentation" id="windows" class="col-xs-2"><a href="#window"  role="tab" data-toggle="tab">윈도우 호스팅</a></li>
                <li role="presentation" id="xes" class="col-xs-2"><a href="#zeroxe"  role="tab" data-toggle="tab">제로XE 호스팅</a></li>
                <li role="presentation" id="nets" class="col-xs-2"><a href="#net"  role="tab" data-toggle="tab">.NET 호스팅</a></li>
                <li role="presentation" id="sales" class="col-xs-2"><a href="#reseller" aria-controls="reseller" role="tab" data-toggle="tab">리셀러 호스팅</a></li>
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
					
                    <table class="table table-bordered table-hover l-table">                    
                    <thead>
                    <tr>
                        <th><img src="/assets/images/logo_linux.png"></th>
                        <th>
                            <h2>보급형</h2>                                   
                            <img src="/assets/images/sample.png">     
                            <h3>5,000<span>원</span></h3>
                            <span>월 기본요금</span>      
                            <button class="btn  btn-primary mb12" type="submit" onclick="location.href='/page/hosting/application.php';">신청하기</button>
                            <p>(자동이체5%할인)</p>
                        </th>
                        <th>
                            <h2>기본형</h2>    
                            <img src="/assets/images/sample.png">     
                            <h3>10,000<span>원</span></h3>
                            <span>월 기본요금</span>   
                            <button class="btn  btn-success mb12" type="submit" onclick="location.href='/page/hosting/application.php';">신청하기</button>
                            <p>(자동이체5%할인)</p>
                        </th>
                        <th>
                            <h2>블루형</h2>    
                            <img src="/assets/images/sample.png">     
                            <h3>15,000<span>원</span></h3>
                            <span>월 기본요금</span>   
                            <button class="btn  btn-info mb12" type="submit" onclick="location.href='/page/hosting/application.php';">신청하기</button>
                            <p>(자동이체5%할인)</p>
                        </th>
                        <th>
                            <h2>파워형</h2>    
                            <img src="/assets/images/sample.png">     
                            <h3>30,000<span>원</span></h3>
                            <span>월 기본요금</span>                                                               
                            <button class="btn  btn-danger mb12" type="submit" onclick="location.href='/page/hosting/application.php';">신청하기</button>
                            <p>(자동이체5%할인)</p>
                        </th>
                        <th>
                            <h2>파워플러스</h2>  
                            <img src="/assets/images/sample.png">     
                            <h3>50,000<span>원</span></h3>
                            <span>월 기본요금</span>     
                            <button class="btn  btn-warning mb12" type="submit" onclick="location.href='/page/hosting/application.php';">신청하기</button>
                            <p>(자동이체5%할인)</p>
                        </th>
                        <th>
                            <h2>맥스형</h2>    
                            <img src="/assets/images/sample.png">      
                            <h3>100,000<span>원</span></h3>
                            <span>월 기본요금</span>  
                            <button class="btn  btn-primary mb12" type="submit" onclick="location.href='/page/hosting/application.php';">신청하기</button>
                            <p>(자동이체5%할인)</p>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="table-success">
                        <th scope="row">트래픽</th>
                        <td>90G<Br/>(1일 3G)</td>
                        <td>180G<Br/>(1일 6G)</td>
                        <td>240G<Br/>(1일 8G)</td>
                        <td>360G<Br/>(1일 12G)</td>
                        <td>600G<Br/>(1일 20G)</td>
                        <td>2100G<Br/>(1일 70G)</td>
                    </tr>
                    <tr>
                        <th scope="row">하드용량</th>
                        <td>1.5G</td>
                        <td>3G</td>
                        <td>5G</td>
                        <td>10G</td>
                        <td>15G</td>
                        <td>40G</td>
                    </tr>                    
                    <tr>
                        <th scope="row">DB (MySQL)</th>
                        <td>무제한</td>
                        <td>무제한</td>
                        <td>무제한</td>
                        <td>무제한</td>
                        <td>무제한</td>
                        <td>무제한</td>
                    </tr>
                    <tr>
                        <th scope="row">메일 (POP 아웃룩)</th>
                        <td>5개</td>
                        <td>10개</td>
                        <td>20개</td>
                        <td>30개</td>
                        <td>30개</td>
                        <td>50개</td>
                    </tr>
                    <tr>
                        <th scope="row">운영 가능 호스팅 수</th>
                        <td>1개</td>
                        <td>1개</td>
                        <td>1개</td>
                        <td>4개</td>
                        <td>4개</td>
                        <td>5개</td>
                    </tr>
                    <tr>
                        <th scope="row">초기설치비</th>
                        <td>5,000 원</td>
                        <td>5,000 원</td>
                        <td>5,000 원</td>
                        <td>5,000 원</td>
                        <td>5,000 원</td>
                        <td>10,000 원</td>
                    </tr>
                    <tr>
                        <th scope="row">보안서비스</th>
                        <td>기본</td>
                        <td>기본</td>
                        <td>기본</td>
                        <td>기본</td>
                        <td>기본</td>
                        <td>고급</td>
                    </tr>
                    </tbody>
                    </table>   					
					
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
                        <li class="col-xs-4 z-table">
                            <div class="col-m-1">
                                <div>
                                    <h2>zeroxe hosting</h2>
                                    <p>Standard</p>
                                    <span>빠른 처리속도, 뛰어난 안정성, 신속한 업그레이드, PHP 프로그램 최적화 환경</span>
                                </div>
                                <p>
                                    빠른 처리속도, 뛰어난 안정성, 신속한 업그레이드, PHP 프로그램 최적화 환경<br>
                                    다양한 부가서비스, 각종 무료CGI 제공, POP3 메일제공, 고성의서버의 안정성제공<br>
                                    회사 홍보, 쇼핑몰, 커뮤니티 등 HTML + PHP 로 구현된 홈페이지
                                </p>
                                <button type="button" class="btn btn-primary" onclick="location.href='/page/hosting/application.php';"><span class="lnr lnr-magnifier"></span> 체험신청</button>                  
                                <button type="button" class="btn btn-primary" onclick="location.href='/page/hosting/application.php';"><span class="lnr lnr-heart"></span> 관심등록</button>                  
                                <button type="button" class="btn btn-success" onclick="location.href='/page/hosting/application.php';">신청하기</button>                  
                            </div> 
                        </li>    
                        <li class="col-xs-4 z-table">
                            <div class="col-m-2">
                                <div>
                                    <h2>zeroxe hosting</h2>
                                    <p>Premium</p>
                                    <span>빠른 처리속도, 뛰어난 안정성, 신속한 업그레이드, PHP 프로그램 최적화 환경</span>
                                </div>
                                <p>
                                    빠른 처리속도, 뛰어난 안정성, 신속한 업그레이드, PHP 프로그램 최적화 환경<br>
                                    다양한 부가서비스, 각종 무료CGI 제공, POP3 메일제공, 고성의서버의 안정성제공<br>
                                    회사 홍보, 쇼핑몰, 커뮤니티 등 HTML + PHP 로 구현된 홈페이지
                                </p>
                                 <button type="button" class="btn btn-primary" onclick="location.href='/page/hosting/application.php';"><span class="lnr lnr-magnifier"></span> 체험신청</button>                  
                                <button type="button" class="btn btn-primary" onclick="location.href='/page/hosting/application.php';"><span class="lnr lnr-heart"></span> 관심등록</button>                  
                                <button type="button" class="btn btn-success" onclick="location.href='/page/hosting/application.php';">신청하기</button>                  
                            </div> 
                        </li> 
                        <li class="col-xs-4 z-table">
                            <div class="col-m-2">
                                <div>
                                    <h2>zeroxe hosting</h2>
                                    <p>Basic</p>
                                    <span>빠른 처리속도, 뛰어난 안정성, 신속한 업그레이드, PHP 프로그램 최적화 환경</span>
                                </div>
                                <p>
                                    빠른 처리속도, 뛰어난 안정성, 신속한 업그레이드, PHP 프로그램 최적화 환경<br>
                                    다양한 부가서비스, 각종 무료CGI 제공, POP3 메일제공, 고성의서버의 안정성제공<br>
                                    회사 홍보, 쇼핑몰, 커뮤니티 등 HTML + PHP 로 구현된 홈페이지
                                </p>
                                 <button type="button" class="btn btn-primary" onclick="location.href='/page/hosting/application.php';"><span class="lnr lnr-magnifier"></span> 체험신청</button>                  
                                <button type="button" class="btn btn-primary" onclick="location.href='/page/hosting/application.php';"><span class="lnr lnr-heart"></span> 관심등록</button>                  
                                <button type="button" class="btn btn-success" onclick="location.href='/page/hosting/application.php';">신청하기</button>                  
                            </div> 
                        </li>                     
                    </ul>       
					
                </div>
				<!-- //zeroxe -->  


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
                        <li class="col-xs-4 n-table">
                            <div class="col-m-4"> 
                                <div>
									<span class="badge badge-danger">이슈</span>
									<span class="badge badge-border-primary">20% 할인</span>									
                                    <h2>리눅스 보급형</h2> 
                                    <p>1년 선납  전용 요금</p>
                                </div>
                                <div>
                                    <ul>
                                        <li>서비스사양<br><span>기본형</span></li>
                                        <li>하드용량<br><span>3G</span></li>
                                        <li>트래픽<br><span>180G/월</span></li>
                                        <li>DB<br><span>무제한</span></li>
                                        <li>아룻룩<br><span>10개</span></li>				
                                    </ul>						
                                </div>				
                                <div>
                                    <h5>월 기본요금</h5>
                                    <h3>19.500<span>원</span></h3>
                                </div>
                                <div>
                                    <button type="button" class="btn btn-primary" onclick="location.href='/page/hosting/application.php';">신청하기</button>                
                                </div>
                            </div>
                        </li>
                        <li class="col-xs-4 n-table">
                            <div class="col-m-4"> 
                                <div>
                                    <span class="badge badge-danger">추천</span>
                                    <h2>리눅스 기본형</h2> 
                                    <p>1년 선납  전용 요금</p>
                                </div>
                                <div>
                                    <ul>
                                        <li>서비스사양<br><span>기본형</span></li>
                                        <li>하드용량<br><span>3G</span></li>
                                        <li>트래픽<br><span>180G/월</span></li>
                                        <li>DB<br><span>무제한</span></li>
                                        <li>아룻룩<br><span>10개</span></li>				
                                    </ul>						
                                </div>				
                                <div>
                                    <h5>월 기본요금</h5>
                                    <h3>19.500<span>원</span></h3>
                                </div>
                                <div>
                                    <button type="button" class="btn btn-danger" onclick="location.href='/page/hosting/application.php';">신청하기</button>                
                                </div>
                            </div>
                        </li>
                        <li class="col-xs-4 n-table">
                            <div class="col-m-4"> 
                                <div>
                                    <span class="badge badge-primary">추천</span>
                                    <h2>리눅스 블루형</h2> 
                                    <p>1년 선납  전용 요금</p>
                                </div>
                                <div>
                                    <ul>
                                        <li>서비스사양<br><span>기본형</span></li>
                                        <li>하드용량<br><span>3G</span></li>
                                        <li>트래픽<br><span>180G/월</span></li>
                                        <li>DB<br><span>무제한</span></li>
                                        <li>아룻룩<br><span>10개</span></li>				
                                    </ul>						
                                </div>				
                                <div>
                                    <h5>월 기본요금</h5>
                                    <h3>19.500<span>원</span></h3>
                                </div>
                                <div>
                                    <button type="button" class="btn btn-danger" onclick="location.href='/page/hosting/application.php';">신청하기</button>                
                                </div>
                             </div>
                        </li>
                        <li class="col-xs-4 n-table">
                            <div class="col-m-4"> 
                                <div>
                                    <span class="badge badge-success">기본</span>
                                    <h2>리눅스 파워형</h2> 
                                    <p>1년 선납  전용 요금</p>
                                </div>
                                <div>
                                    <ul>
                                        <li>서비스사양<br><span>기본형</span></li>
                                        <li>하드용량<br><span>3G</span></li>
                                        <li>트래픽<br><span>180G/월</span></li>
                                        <li>DB<br><span>무제한</span></li>
                                        <li>아룻룩<br><span>10개</span></li>				
                                    </ul>						
                                </div>				
                                <div>
                                    <h5>월 기본요금</h5>
                                    <h3>19.500<span>원</span></h3>
                                </div>
                                <div>
                                    <button type="button" class="btn btn-danger" onclick="location.href='/page/hosting/application.php';">신청하기</button>                
                                </div>
                             </div>
                        </li>
                        <li class="col-xs-4 n-table">
                            <div class="col-m-4"> 
                                <div>
                                    <span class="badge badge-warning">이슈</span>
                                    <h2>리눅스 파워플러스</h2> 
                                    <p>1년 선납  전용 요금</p>
                                </div>
                                <div>
                                    <ul>
                                        <li>서비스사양<br><span>기본형</span></li>
                                        <li>하드용량<br><span>3G</span></li>
                                        <li>트래픽<br><span>180G/월</span></li>
                                        <li>DB<br><span>무제한</span></li>
                                        <li>아룻룩<br><span>10개</span></li>				
                                    </ul>						
                                </div>				
                                <div>
                                    <h5>월 기본요금</h5>
                                    <h3>19.500<span>원</span></h3>
                                </div>
                                <div>
                                    <button type="button" class="btn btn-danger" onclick="location.href='/page/hosting/application.php';">신청하기</button>                
                                </div>
                            </div>
                        </li>                 		
                    </ul>               
					
                </div>
				<!-- //net -->  	


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
				

            </div>
			
			
        </div>  
    </div>
    <!-- //body-content -->  
    
    
    <!-- consulting -->  
    <div class="cunselt-content">    
        <div class="wrapper">
            <h3>도움이 필요하신가요? 전문가와 상담하세요</h3>
            <p>상담 문의를 이용하시면 더욱 정확한 상담이 가능합니다.</p>
            <a href="/consult" class="btn btn-danger" >상담하기</a>
            <h4><span class="lnr lnr-phone"></span> 1544-2120</h4>
        </div>    
    </div>
    <!-- //consulting -->  
    
        
    
    <!-- additional -->  
    <div class="adds-content wrapper">
        <h2 class="add-title">편리한 부가서비스</h2>
        <ul class="row">
            <li class="col-xs-3">
                <div class="col-m-2">                
                    <a href="#" class="col-m-2">            
                        <img src="/assets/images/ico_add01.png">
                        <p>관리툴 <span class="lnr lnr-chevron-right"></span></p>
                        <span>트래픽 초기화 등의관리 기능으로 효율적인 호스팅운영이 가능합니다.</span>                    
                    </a>
                </div>
            </li>
            <li class="col-xs-3">
                <div class="col-m-2">                
                    <a href="#">       
                        <img src="/assets/images/ico_add02.png">
                        <p>관리툴 <span class="lnr lnr-chevron-right"></span></p>
                        <span>트래픽 초기화 등의관리 기능으로 효율적인 호스팅운영이 가능합니다.</span>                         
                    </a>
                </div>
            </li>
            <li class="col-xs-3">
                <div class="col-m-2">                
                    <a href="#">     
                        <img src="/assets/images/ico_add03.png">
                        <p>관리툴 <span class="lnr lnr-chevron-right"></span></p>
                        <span>트래픽 초기화 등의관리 기능으로 효율적인 호스팅운영이 가능합니다.</span>                      
                    </a>
                </div>
            </li>
            <li class="col-xs-3">
                <div class="col-m-2">                
                    <a href="#">    
                        <img src="/assets/images/ico_add04.png">
                        <p>관리툴 <span class="lnr lnr-chevron-right"></span></p>
                        <span>트래픽 초기화 등의관리 기능으로 효율적인 호스팅운영이 가능합니다.</span>                     
                    </a>
                </div>
            </li>
            <li class="col-xs-3">
                <div class="col-m-2">                
                   <a href="#"> 
                        <img src="/assets/images/ico_add05.png">
                        <p>관리툴 <span class="lnr lnr-chevron-right"></span></p>
                        <span>트래픽 초기화 등의관리 기능으로 효율적인 호스팅운영이 가능합니다.</span>                    
                    </a>
                </div>
            </li>               
        </ul>
    </div>
    <!-- //additional -->  
    
    
	
	<!-- q&a-->	
	<div class="qna-content">	
		 <div class="wrapper">
			<h2>자주하는 질문</h2>
			<ul class="qna">
				<li class="col-xs-12 qnaBasic">
               		<div class="col-m-2"> 		
						<h3><span class="label label-primary">Q</span> [ 호스팅 > 사용안내 ] 네임서버란?</h3>		
						<div class="quickRightBasic" id="line1">							
							<div>	
								<span class="label label-danger">A</span><br><br>
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
						<h3><span class="label label-primary">Q</span> 올바른 호스팅 업체를 선택하는 기준은 무엇인가요?</h3>		
						<div class="quickRightBasic" id="line1">
							<div>
								<span class="label label-danger">A</span><br><br>
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
						<h3><span class="label label-primary">Q</span> 블루웹 회원 탈퇴 하고 싶습니다.</h3>		
						<div class="quickRightBasic" id="line1">
							<div>
								<span class="label label-danger">A</span><br><br>
								탈퇴는 회원이 더 이상 블루웹 홈페이지의 서비스를 받지 않고자 할 때 신청하는 것입니다. 
								탈퇴 신청이 되면 바로 자동 탈퇴가 이루어지고 개인정보는 삭제됩니다.
								단, 이용중인 서비스와 이벤트 참가 및 혜택은 모두 사용하실 수 없게 되니 탈퇴를 하시기 전에
								신중히 판단하시기 바랍니다. <a href="#">(블루웹 회원혜택 자세히보기)</a>
							</div>
						</div>		
					</div>
				</li>			
			</ul>	
		</div>
	</div>
	<!-- //q&a-->	

	
	
	

	
	
	
	
	
	
	
    
</section>
<!-- //container -->











