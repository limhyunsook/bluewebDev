<?php
$get = $this->input->get('sever',true);
if(!$get) $get = 'step01s';
?>
<script>

    $(document).ready( function (){      
        on_tab();
        // $.each( $('.tab-pay > li '), function( key, value ) {
        //     //alert($(this).attr("item"));
        //     if($(this).attr("item") == '2item'){
        //         $(this).find("a").click();
        //         $(this).addClass("active");                
        //     }
        // });
    });

     $( window ).on( "load", function() {
        $('.tab-pay > li > a ').on('click', function (){
            //claer
            $('.tab-pay > li ').removeClass('active');
            $('.tab-pay > li > a').removeClass('active');            
            
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
    <div class="sub-content t-6">
        <div class="wrapper"> 
            <h5>운영부터 보안까지 전문가가 관리</h5>			
            <h2>클라우드 요금계산기</h2>	
        </div>    
    </div>    
    <!-- //sub-title -->  
	
	
    <!-- body-content -->  
    <div class="blu-content wrapper">        
        <div role="tabpanel">            
			
            <!-- nav tabs -->
            <ul class="nav nav-pills tab-pay" role="tablist">
                <li role="presentation" id="step01s" class="col-xs-4 active"><a href="#step01" aria-controls="step01" role="tab" data-toggle="tab"><strong>STEP 01</strong>호스팅 기본 정보 선택</a></li>
                <li role="presentation" id="step02s" class="col-xs-4"><a href="#step02" aria-controls="step02" role="tab" data-toggle="tab"><strong>STEP 02</strong>호스팅 신청정보 확인 및 결제</a></li>
                <li role="presentation" id="step03s" class="col-xs-4"><a href="#step03" aria-controls="step03" role="tab" data-toggle="tab"><strong>STEP 03</strong>호스팅 신청 완료</a></li>
            </ul>
			<!-- //nav tabs -->
			
			
            <!-- tab panes -->
            <div class="tab-content fixing">
				
				
              
				<!-- step01 -->
                <div role="tabpanel" class="tab-pane active" id="step01"> 
                    <ul class="row">
                        <li class="col-xs-9">
							
                            <div class="service">
								
								
								<!-- 신청정보 -->
								<table class="table tableTypeA mb12"> 
								<caption class="table_title">신청 정보</caption>       
								<tbody>
								<tr>
									<th>IDC 선택</th>
									<td>  
										 <div class="selectbox">                                         
											 <select class="selectpicker">
												<option>선택하세요!</option>
												<option>교대센터(SK)</option>
												<option>강남센터(KT)</option>                  
											</select>                                       
										</div>
									</td>   
								</tr>  
								<tr>
									<th>IDC 선택</th>
									<td>  
										IBM X3550M5(6core) 
										<a href="#" class="btn btn-primary mt12 a_block">서버 변경</a>
										<a href="#" class="btn btn-primary mt12 a_block">부품 추가</a>
									</td>   
								</tr>  	
								<tr>
									<th>서버 정보</th>
									<td>  
										<table class="table tableTypeA">
										<tbody>                                        
										<tr>
											<th>BOARD</th>
											<td>Xeon Hexa Core Board</td>
										</tr> 
											 <tr>
											<th>CPU</th>
											<td>Intel Xeon E5-2603 v4, 1.7GHz, 6C </td>
										</tr>                                         
										<tr>
											<th>MEM</th>
											<td>
												8GB TruDDR4 Memory (1Rx4, 1.2V) PC4-19200 CL17 2400MHz LP RDIMM
												<a href="#" class="btn btn-primary mt12 a_block">RAM 변경</a>
											</td>
										</tr> 
										<tr>
											<th>HDD</th>
											<td>
												300GB 10K 12Gbps SAS 2.5in G3HS HDD
												<a href="#" class="btn btn-primary mt12 a_block">HDD 변경</a>
											</td>
										</tr> 
										</tbody>
										</table>                        
									</td>   
								</tr>  
								<tr>
									<th>상면 정보</th>
									<td>1U(일반형)</td>    
								</tr>
								<tr>
									<th>회선 정보</th>
									<td>
										<div class="selectbox">                                        
											<select class="selectpicker">
												<option>Dedicate-10M</option>
												<option>Dedicate-20M</option>
												<option>Dedicate-30M</option>
												<option>Dedicate-40M</option>
												<option>Dedicate-50M</option>
												<option>Dedicate-60M</option>
												<option>Dedicate-70M</option>
												<option>Dedicate-80M</option>
												<option>Dedicate-90M</option>
												<option>Dedicate-100M</option>              
											</select>                                          
										</div>                                
									</td>    
								</tr>
								<tr>
									<th>OS</th>
									<td>
										<label class="radiocontainer">
											<input type="radio" name="inlineRadioOptions5" id="inlineRadio1" value="option1" checked="checked">
											<span class="radio-text"></span> 리눅스
										</label>    
										<label class="radiocontainer">
											<input type="radio" name="inlineRadioOptions5" id="inlineRadio1" value="option1" checked="checked">
											<span class="radio-text"></span> 윈도우
										</label>   
									</td>    
								</tr>
								<tr>
									<th>설치 방법</th>
									<td>
										<label class="radiocontainer">
											<input type="radio" name="inlineRadioOptions6" id="inlineRadio1" value="option1" checked="checked">
											<span class="radio-text"></span> 설치 의뢰
										</label>    
										<label class="radiocontainer">
											<input type="radio" name="inlineRadioOptions6" id="inlineRadio1" value="option1">
											<span class="radio-text"></span> 자가 설치 (IDC 방문 및 직접 설치)
										</label>   
									</td>     
								</tr>
								<tr>
									<th>개설 희망일</th>
									<td>                                
										<div class="input-group date" data-provide="datepicker">
											<input type="text" class="form-control">
											<div class="input-group-addon">
												<span class="glyphicon glyphicon-th"></span>
											</div>
										</div>
										<p class="mt12"> (계약 만료일: 2020-08-21)</p>
									</td>    
								</tr>
								<tr>
									<th>선납 기간</th>
									<td>
										 <div class="selectbox">
											 <select class="selectpicker">
												<option>선납 안 함</option>
												<option>1개월</option>
												<option>3개월</option>
												<option>6개월</option>
												<option>12개월</option>   
											</select> 
										</div>  
									</td>    
								</tr>
								<tr>
									<th>결제일</th>
									<td>매월 25일 (결제 만료일: <span>2018-09-25</span>)</td>    
								</tr>
								</tbody>
								</table>
								<!-- //신청정보 -->	


								<!-- 위탁운영 서비스 추가 (선택 사항) -->
								<table class="table tableTypeA mb12"> 
									<caption class="table_title">위탁운영 서비스 추가 <span class="color01">(선택 사항)</span></caption> 
								<tbody>
								<tr>
									<th>위탁운영</th>
									<td>  
										<label class="radiocontainer">
											<input type="radio" name="inlineRadioOptions7" id="inlineRadio1" value="option1" checked="checked">
											<span class="radio-text"></span>스탠더드(서버)
										</label>
										<label class="radiocontainer">
											<input type="radio" name="inlineRadioOptions7" id="inlineRadio1" value="option1" checked="checked">
											<span class="radio-text"></span>프리미엄(서버)
										</label>
										<label class="radiocontainer">
											<input type="radio" name="inlineRadioOptions7" id="inlineRadio1" value="option1" checked="checked">
											<span class="radio-text"></span>신청 안 함
										</label>                                    
									</td>   
								</tr>  
								</tbody>
								</table>
								<!-- //위탁운영 서비스 추가 (선택 사항) -->


								<!-- 소프트웨어 추가 -->
								<table class="table tableTypeA mb12"> 
								<caption class="table_title">소프트웨어 추가</caption>       
								<tbody>
								<tr>
									<th rowspan="4">소프트웨어</th>
									<td>  
										<label class="radiocontainer">
											<input type="radio" name="inlineRadioOptions8" id="inlineRadio1" value="option1" checked="checked">
											<span class="radio-text"></span>소프트웨어 신청
										</label>
										
										<div class="chk mt12 mb12">											
											<label class="chkcontainer">
												<input type="checkbox" name="check2">
												<span class="check-text"></span>OS 라이선스								
											</label>      
											<label class="chkcontainer">
												<input type="checkbox" name="check2">
												<span class="check-text"></span>DB 라이선스					
											</label>      
											<label class="chkcontainer">
												<input type="checkbox" name="check2">
												<span class="check-text"></span>기타 라이선스						
											</label>   
										</div>
										
										<label class="radiocontainer">
											<input type="radio" name="inlineRadioOptions8" id="inlineRadio1" value="option1">
											<span class="radio-text"></span>신청 안 함
										</label>
										
									</td>   
								</tr>  							
								<tr>
									<td>
										<h2 class="mb12">OS 라이선스</h2>
										<label class="radiocontainer">
											<input type="radio" name="inlineRadioOptions9" id="inlineRadio1" value="option1" checked="checked">
											<span class="radio-text"></span>라이선스 임대
										</label>
										<label class="radiocontainer">
											<input type="radio" name="inlineRadioOptions9" id="inlineRadio1" value="option1" checked="checked">
											<span class="radio-text"></span>라이선스 구매
										</label>
										<div class="selectbox mt12">
											<select class="selectpicker">
												<option>선납 안 함</option>
												<option>1개월</option>
												<option>3개월</option>
												<option>6개월</option>
												<option>12개월</option>
											</select>  
										</div> 
									</td>                                
								</tr>
								<tr>
									<td>
										<h2 class="mb12">DB 라이선스</h2>
										<label class="radiocontainer">
											<input type="radio" name="inlineRadioOptions10" id="inlineRadio1" value="option1" checked="checked">
											<span class="radio-text"></span>라이선스 임대
										</label>
										<label class="radiocontainer">
											<input type="radio" name="inlineRadioOptions10" id="inlineRadio1" value="option1" checked="checked">
											<span class="radio-text"></span>라이선스 구매
										</label>
										<div class="selectbox mt12">
											<select class="selectpicker">
												<option>선납 안 함</option>
												<option>1개월</option>
												<option>3개월</option>
												<option>6개월</option>
												<option>12개월</option>  
											</select>                                       
										</div> 
									</td> 
								</tr>   
								<tr>
									<td>
										<h2 class="mb12">기타 라이선스</h2>
										<label class="radiocontainer">
											<input type="radio" name="inlineRadioOptions11" id="inlineRadio1" value="option1" checked="checked">
											<span class="radio-text"></span>라이선스 임대
										</label>
										<label class="radiocontainer">
											<input type="radio" name="inlineRadioOptions11" id="inlineRadio1" value="option1" checked="checked">
											<span class="radio-text"></span>라이선스 구매
										</label>
										<div class="selectbox mt12">
											<select class="selectpicker">
												<option>선납 안 함</option>
												<option>1개월</option>
												<option>3개월</option>
												<option>6개월</option>
												<option>12개월</option>  
											</select>  
										</div> 
									</td> 
								</tr>  
								</tbody>
								</table>
								<!-- //소프트웨어 추가 -->



								<!-- 부가서비스 추가 -->
								<table class="table tableTypeA mb12"> 
								<caption class="table_title">부가서비스 추가</caption>       
								<tbody>
								<tr>
									<th>방화벽</th>
									<td>
										<div class="selectbox">                                        
											<select class="selectpicker">
												<option>선납 안 함</option>
												<option>공유형(블루웹)</option>
											</select>
										</div>                                 
									</td>   
								</tr>  
								<tr>
									<th>통합모니터링</th>
									<td>위탁운영에 포함되어 있습니다</td>   
								</tr>  
								<tr>
									<th>백업</th>
									<td>
										<div class="selectbox">                                        
											<select class="selectpicker">
												<option>선납 안 함</option>
												<option>백업 100GB</option>
												<option>백업 150GB</option>
												<option>백업 200GB</option>
												<option>백업 300GB</option>
												<option>백업 350GB</option>
												<option>백업 400GB</option>
												<option>백업 450GB</option>
												<option>백업 500GB</option>
											</select>                                                                               
										</div>                                 
									</td>   
								</tr>  
								<tr>
									<th>바이러스 백신</th>
									<td>

										<div class="selectbox">                                        
											<select class="selectpicker">
												<option>선납 안 함</option>
												<option>Bitdefender GravityZone Business Security</option>                                           
											</select>
										</div>                                 
									</td>   
								</tr>  
								<tr>
									<th>웹방화벽</th>
									<td>
										<div class="selectbox">
											<select class="selectpicker">
												<option>선납 안 함</option>
												<option>H/W공유형</option> 
												<option>S/W설치형</option> 
												<option>리버스 프록시형</option> 
											</select> 
										</div>                                 
									</td>   
								</tr>  
								<tr>
									<th>웹사이트 이전</th>
									<td>
										<div class="selectbox">
											<select class="selectpicker">
												<option>선납 안 함</option>
												<option>웹사이트 이전</option> 
											</select>                                         
										</div>                                 
									</td>   
								</tr>  
								</tbody>
								</table>
								<!-- //부가서비스 추가 -->
								
								
							</div>  
							
                        </li>       						
                        <li class="col-xs-3">   
							
                            <!-- cart -->
                            <div class="cart">
                                <table class="table">
								<h2>결제 금액 계산</h2>
								<thead>
								<tr>
									<th>항목</th>
									<th>비용</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td>웹호스팅</td>
									<td>360,000원</td>
								</tr>  
								<tr>
									<td><span class="not">ㄴ</span> 5% 할인</td>
									<td class="color02">-18,000원</td>
								</tr>  
								<tr>
									<td>설치비</td>
									<td>30,000원</td>
								</tr>  
								<tr>
									<td>트래픽</td>
									<td>960,000원</td>
								</tr>  
								<tr>
									<td><span class="not">ㄴ</span> 5% 할인</td>
									<td class="color02">-48,000원</td>
								</tr>  
								<tr>
									<td>웹메일</td>
									<td>60,000원</td>
								</tr>  
								<tr>
									<td><span class="not">ㄴ</span> 5% 할인</td>
									<td class="color02">-48,000원</td>
								</tr>  

								<tr>                                     
									<td colspan="2">결제 예상 금액<br/><span class="total_price">88,000원</span></td>
								</tr>  
								</tbody>
                                </table>   
								
								<div class="btnAgree">
									<p>결제할 서비스 내용을 확인하였으며 구매에 동의하시겠습니까?</p>
									<label class="chkcontainer chk_l">
										<input type="checkbox" name="check2" checked="checked">
										<span class="check-text"></span>동의합니다.										
									</label>       
									<span>(전자상거래법 제8조 2항)</span>
								</div>
								
                                <div class="btnBox">
                                    <button type="button" id="tabStep01" class="btn btn-primary mb12 cart_btnext" onclick="tabNextStep();">
                                        다음 단계 <span class="lnr lnr-chevron-right"></span>
                                    </button>  
                                    <!-- button type="button" id="tabStep01" class="btn btn-danger mb12 cart_btnext" onclick="winOpenDomainPage('http://211.202.2.224/inicis_sample/stdpay/INIStdPaySample/INIStdPayBill.php');">
                                        결제하기 <span class="lnr lnr-chevron-right"></span>
                                    </button -->           
									<button type="button" id="tabStep01" class="btn btn-danger mb12 cart_btnext" onclick="javascrip:location.href='/order/oready';">
										결제하기 <span class="lnr lnr-chevron-right"></span>
                                    </button>
                                    <button type="button" id="tabStep01" class="btn btn-default mb12 cart_btprev" onclick="tabBackStep();">
                                        <span class="lnr lnr-chevron-left"></span> 이전단계 
                                    </button>           

                                    <a href="" class="btn btn-success mb12" onclick="winOpenHostingPage('print');return false;">견적서 메일로 받기</a>
                                    <a href="" class="btn btn-success mb12" onclick="winOpenHostingPage('print');return false;">견적서 바로 출력</a> 
                                    <a href="" class="btn btn-success" onclick="winOpenHostingPage('print');return false;">견적서 결제 확인 출력</a> 
                                </div>    
                            </div>
							<!-- //cart -->
							
                        </li>
                    </ul>                     
                </div>      
                <!-- //step01 -->
                
				
				
                <!-- step02 -->
                <div role="tabpanel" class="tab-pane" id="step02">  
                                    
                    <ul class="row">
						
                        <li class="col-xs-9">
							
							
							<!--  신청리스트 -->
							<table class="table tableTypeA table-hover mb12">
                            <caption class="table_title">신청 리스트</caption>                             
                            <tbody>      								
							<tr>
								<th>서버명</th>
								<th>OS</th>
								<th>Disk</th>
								<th>CPU/Memory</th>
								<th>서버수량</th>
								<th>약정</th>
								<th>월사용 요금</th>
							</tr>  
							<tr>
								<td><input type="text" class="form-control" placeholder="Server"></td>
								<td>
									<div class="selectbox reset">                                        
										<select class="selectpicker">
											<option>LINUX 보급형</option>
										</select> 
									</div>	
								</td>
								<td>
									<div class="selectbox reset">                                        
										<select class="selectpicker">
											<option>100G</option>
											<option>20G</option>
										</select> 
									</div>									
								</td>
								<td>
									<div class="selectbox reset">                                        
										<select class="selectpicker">
											<option>1vCore*1GB (26,000원)</option>
										</select> 
									</div>									
								</td>
								<td><input type="text" class="form-control" placeholder="0"></td>
								<td>
									<div class="selectbox reset">                                        
										<select class="selectpicker">
											<option>1년</option>
											<option>2년</option>
											<option>3년</option>
										</select> 
									</div>									
								</td>
								<td><input type="text" class="form-control" placeholder="0원"></td>
							</tr>  
                            </tbody>
							</table>  
							<!--  //신청리스트 -->
								
							
							
							<!-- 신청 정보 -->
							<table class="table tableTypeA mb12">
                            <caption class="table_title">신청 정보</caption>                             
                            <tbody>      								
                                <tr>
                                    <th>서비스</th>
                                    <td>웹호스팅 스탠더드</td>
                                </tr>  
                                <tr>
                                    <th>신청 항목</th>
                                    <td>신규</td>
                                </tr>  
                            </tbody>
							</table>       
							<!-- //신청 정보 -->
							
							
							
							<!-- 결제수단 -->
                            <table class="table tableTypeA mb12">
                            <caption class="table_title">결제수단</caption>                             
                            <tbody>      								
                                <tr>
                                    <th>예치금</th>
                                    <td>  
                                        <input type="text" class="form-control" placeholder="예치금을 입력해주세요.">   
                                    </td>
                                </tr>  
                                <tr>
                                    <th>결제 방법</th>
                                    <td>  
										<label class="radiocontainer">
                                            <input type="radio" name="inlineRadioOptions1" id="inlineRadio1" value="option1" checked="checked">
                                            <span class="radio-text"></span>신용카드
                                        </label>
                                        <label class="radiocontainer">
                                            <input type="radio" name="inlineRadioOptions1" id="inlineRadio1" value="option1" checked="checked">
                                            <span class="radio-text"></span>실시간 계좌이체
                                        </label>
                                        <label class="radiocontainer">
                                            <input type="radio" name="inlineRadioOptions1" id="inlineRadio1" value="option1" checked="checked">
                                            <span class="radio-text"></span>무통장 입금(가상계좌)
                                        </label> 
                                    </td>
                                </tr>  
                            </tbody>
							</table>           
							<!-- 결제수단 -->
							
							
							
                            <div class="tip mb12">
                                ※ 2005년 4월부터 개정된 부가가치세법에 따라 신용카드 매출전표가 세금계산서를 대체합니다.<br>
                                ※ 예치금을 일부 사용하고 신용카드/휴대폰 결제를 하는 경우, 현금영수증은 예치금 사용 금액에 대해서만 발행됩니다.                                    
                            </div>
                            <div class="tip mb12">
                                * 현금영수증과 세금계산서는 중복으로 발행되지 않습니다.<br>
                                * 현금영수증은 현재 페이지에서만 발행할 수 있습니다.<br>
                                * Mac OS에서는 결제가 불가능합니다                                
                            </div>

							
                        </li> 
						
						
                        <li class="col-xs-3">  
							
							
                            <!-- cart -->
                            <div class="cart">
                                <table class="table">
								<h2>결제 금액 계산</h2>
								<thead>
								<tr>
									<th>항목</th>
									<th>비용</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td>웹호스팅</td>
									<td>360,000원</td>
								</tr>  
								<tr>
									<td><span class="not">ㄴ</span> 5% 할인</td>
									<td class="color02">-18,000원</td>
								</tr>  
								<tr>
									<td>설치비</td>
									<td>30,000원</td>
								</tr>  
								<tr>
									<td>트래픽</td>
									<td>960,000원</td>
								</tr>  
								<tr>
									<td><span class="not">ㄴ</span> 5% 할인</td>
									<td class="color02">-48,000원</td>
								</tr>  
								<tr>
									<td>웹메일</td>
									<td>60,000원</td>
								</tr>  
								<tr>
									<td><span class="not">ㄴ</span> 5% 할인</td>
									<td class="color02">-48,000원</td>
								</tr>  

								<tr>                                     
									<td colspan="2">결제 예상 금액<br/><span class="total_price">88,000원</span></td>
								</tr>  
								</tbody>
                                </table>   
								
								<div class="btnAgree">
									<p>결제할 서비스 내용을 확인하였으며 구매에 동의하시겠습니까?</p>
									<label class="chkcontainer chk_l">
										<input type="checkbox" name="check2" checked="checked">
										<span class="check-text"></span>동의합니다.										
									</label>       
									<span>(전자상거래법 제8조 2항)</span>
								</div>
								
                                <div class="btnBox">
                                    <button type="button" id="tabStep01" class="btn btn-primary mb12 cart_btnext" onclick="tabNextStep();">
                                        다음 단계 <span class="lnr lnr-chevron-right"></span>
                                    </button>  
                                    <!-- button type="button" id="tabStep01" class="btn btn-danger mb12 cart_btnext" onclick="winOpenDomainPage('http://211.202.2.224/inicis_sample/stdpay/INIStdPaySample/INIStdPayBill.php');">
                                        결제하기 <span class="lnr lnr-chevron-right"></span>
                                    </button -->           
									<button type="button" id="tabStep01" class="btn btn-danger mb12 cart_btnext" onclick="javascrip:location.href='/order/oready';">
										결제하기 <span class="lnr lnr-chevron-right"></span>
                                    </button>
                                    <button type="button" id="tabStep01" class="btn btn-default mb12 cart_btprev" onclick="tabBackStep();">
                                        <span class="lnr lnr-chevron-left"></span> 이전단계 
                                    </button>           

                                    <a href="" class="btn btn-success mb12" onclick="winOpenHostingPage('print');return false;">견적서 메일로 받기</a>
                                    <a href="" class="btn btn-success mb12" onclick="winOpenHostingPage('print');return false;">견적서 바로 출력</a> 
                                    <a href="" class="btn btn-success" onclick="winOpenHostingPage('print');return false;">견적서 결제 확인 출력</a> 
                                </div>    
                            </div>
							<!-- //cart -->
							
							
							
                        </li>    
						
						
						
                    </ul>                    
                </div>    				
				<!-- //step02 -->                
				
				
				
                <!-- step03  -->				
                <div role="tabpanel" class="tab-pane" id="step03">    
					

					<script>
					$("#step03").load("/page/pop/nts_application_cancel.php");
					</script>	
					
					<!--
					<a href="nts_application_ok.php">ok Page</a>
					<a href="nts_application_cancel.php">cancel Page</a>	
					-->
					
										
                </div>   
				<!-- //step03  -->
								

				
            </div>         
			<!-- //tab panes -->
			
			
        </div>    
    </div>  
	
	
</section>
<!-- //container -->


<!-- modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-box">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">보안서버인증 의무규정 관련 법령 전문</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<dl>
						<dt>『정보통신망 이용촉진 및 정보보호 등에 관한 법률』제28조(개인정보의 보호조치)</dt>
						<dd>
						정보통신서비스 제공자 등이 개인정보를 취급할 때에는 개인정보의 분실·도난·누출·변조 또는 훼손을 방지하기 위하여 대통령령으로 정하는 기준에 따라 다음 각 호의 기술적·관리적 조치를 하여야 한다.<br>
						4. 개인정보를 안전하게 저장·전송할 수 있는 암호화 기술 등을 이용한 보안조치
						</dd>
					</dl>
					<dl>
						<dt>『정보통신망 이용촉진 및 정보보호 등에 관한 법률』시행령 제15조(개인정보의 보호조치)</dt>
						<dd>
						④ 법 제28조 제1항 제4호에 따라 정보통신서비스 제공자 등은 개인정보가 안전하게 저장ㆍ전송될 수 있도록 다음 각 호의 보안조치를 하여야 한다.<br>
						3. 정보통신망을 통하여 이용자의 개인정보 및 인증정보를 송신ㆍ수신하는 경우 보안서버 구축 등의 조치<br>이하 생략
						</dd>
					</dl>
					<dl>
						<dt>『정보통신망 이용촉진 및 정보보호 등에 관한 법률』 제76조(과태료)</dt>
						<dd>
						① 다음 각 호의 어느 하나에 해당하는 자와 제7호부터 제11호까지의 경우에 해당하는 행위를 하도록 한 자에게는 3천만 원 이하의 과태료를 부과한다.<br>
						3. 제28조제1항(제67조에 따라 준용되는 경우를 포함한다)에 따른 기술적·관리적 조치를 하지 아니한 자
						</dd>
					</dl>
					<p class="logo">
						<img src="/assets/images/bg_law.gif" alt="정보통신부 한국정보보호진흥원">
					</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal">닫기</button>
					<!--button type="button" class="btn btn-primary">Save changes</button-->
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //modal -->

    
    
    
    
    
    
    
    

