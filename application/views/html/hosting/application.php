<?php
$get = $this->input->get('hosting',true);
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
    <div class="sub-content t-1">
        <div class="wrapper"> 
            <h5>원하는 호스팅 365일 언제나 블루웹</h5>			
            <h2>서비스 신청하기</h2>	
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
                <li role="presentation" id="step013" class="col-xs-4"><a href="#step03" aria-controls="step03" role="tab" data-toggle="tab"><strong>STEP 03</strong>호스팅 신청 완료</a></li>
            </ul>
			<!-- //nav tabs -->
			
			
            <!-- tab panes -->
            <div class="tab-content fixing">
				
				
              
				<!-- step01 -->
                <div role="tabpanel" class="tab-pane active" id="step01"> 
                    <ul class="row">
                        <li class="col-xs-9">     
							
                            <div class="service">
								
								
                                <!-- 신청 정보 -->
                                <table class="table tableTypeA mb12"> 
                                <caption class="table_title">신청 정보</caption>       
                                <tbody>
                                <tr>
                                    <th>호스팅 종류</th>
                                    <td>                                            
                                        <div class="selectbox mb12">                                        
                                            <select class="selectpicker">
                                                <option>LINUX 보급형</option>
                                                <option>LINUX 기본형</option>
                                                <option>LINUX 블루형</option>
                                                <option>LINUX 파워형</option>
                                                <option>LINUX 파워플러스</option>
                                                <option>LINUX MAX형</option>
                                            </select> 
                                        </div>

                                        <table class="table tableTypeB">
                                        <thead>
                                            <tr>
                                                <th>트래픽</th>
                                                <th>웹용량</th>
                                                <th>DB용량</th>
                                                <th class="color01">메일용량(개수)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr >
                                                <td>12G</td>
                                                <td>10G</td>
                                                <td>무제한</td>
                                                <td>30개</td>
                                            </tr>                                          
                                        </tbody>
                                        </table>  
                                    </td>                                     
                                </tr>
                                <tr >
                                    <th scope="row">메일 형태</th>
                                    <td>
                                        <div class="mb12">
                                            웹메일을 이미 사용중입니까?
                                            <label class="radiocontainer">
                                                <input type="radio" name="inlineRadioOptions13" id="inlineRadio1" value="option1" checked="checked">
                                                <span class="radio-text"></span>YES
                                            </label>
                                            <label class="radiocontainer">
                                                <input type="radio" name="inlineRadioOptions13" id="inlineRadio1" value="option1">
                                                <span class="radio-text"></span>NO
                                            </label>  
                                        </div>       
                                        <div>
                                            <label class="radiocontainer">
                                                <input type="radio" name="inlineRadioOptions2" id="inlineRadio1" value="option1" checked="checked">
                                                <span class="radio-text"></span>아웃룩
                                            </label>
                                            <label class="radiocontainer">
                                                <input type="radio" name="inlineRadioOptions2" id="inlineRadio1" value="option1">
                                                <span class="radio-text"></span>웹메일
                                            </label>                    
                                        </div>
                                        <div class="selectbox mt12">
                                            <select class="selectpicker">
                                                <option>다음</option>
                                                <option>네이버</option> 
                                            </select>
                                        </div>
                                    </td>
                                </tr>  
                                <tr >
                                    <th scope="row">호스팅 요금<br/>납부방식</th>
                                    <td>    
                                        <div class="selectbox">
                                            <select class="selectpicker">
                                                <option>결제방식 선택</option>
                                                <option>자동이체(매월 5% 할인)</option>
                                                <option>1년선납결제(2개월무료)</option>
                                                <option>2년선납결제(6개월무료)</option>
                                                <option>3년선납결제(12개월무료)</option>
                                                <option>매월 결제</option>  
                                            </select>                                          
                                        </div>
                                        <a href="#" class="btn btn-primary mt12 a_block">선납무이자</a>
                                    </td>
                                </tr>   
                                </tbody>
                                </table>    
								<!-- //신청 정보 -->

								
                                <!-- 도메인입력 -->
                                <table class="table tableTypeA mb12"> 
                                <caption class="table_title">도메인 입력</caption>       
                                <tbody>
                                 <tr>
                                    <th>대표 도메인</th>
                                    <td>  
                                        <input type="text" class="form-control" placeholder="도메인을 입력해주세요.">               
                                        <a href="#" class="btn btn-primary mt12 a_block">도메인 체크</a>
                                        <div class="tip color01 mt12">
                                            도메인 입력 후 ‘도메인 체크’ 버튼을 눌러 주세요. 
                                        </div>
                                        <div class="tip">
                                            도메인을 입력하지 않으면 기본 도메인으로 호스팅이 세팅 됩니다.
                                        </div>
                                    </td>   
                                </tr>   
                                </tbody>
                                </table>   
								<!-- //도메인입력 -->

								
                                <!-- 옵션 추가 -->
                                <table class="table tableTypeA mb12"> 
                                <caption class="table_title">
                                    옵션 추가                                    
                                    <label class="chkcontainer chk_l">
                                        <input type="checkbox" name="check2" checked="checked">
                                        <span class="check-text"></span>
                                    </label>                               
                                </caption>       
                                <tbody>
                                <tr>
                                    <th>트래픽</th>
                                    <td>  
                                        <div class="selectbox">
                                            <select class="selectpicker">
                                                <option>신청안함</option>
                                                <option>4G</option>
                                                <option>8G</option>
                                                <option>12G</option>
                                                <option>16G</option>
                                                <option>20G</option>
                                            </select>
                                        </div>
                                    </td>   
                                </tr>  
                                <tr>
                                    <th>웹 용량</th>
                                    <td>  
                                        <div class="selectbox">
                                            <select class="selectpicker">
                                                <option>신청안함</option>
                                                <option>2G</option>
                                                <option>4G</option>
                                                <option>6G</option>
                                                <option>8G</option>
                                                <option>10G</option>
                                                <option>12G</option>
                                                <option>14G</option>
                                                <option>16G</option>
                                                <option>16G</option>
                                            </select>
                                        </div>
                                    </td>   
                                </tr>  
                                </tbody>
                                </table>
								<!-- //옵션 추가 -->


                                <!-- 부가서비스 추가 -->
                                <table class="table tableTypeA mb12"> 
                                <caption class="table_title">부가서비스 추가</caption>       
                                <tbody>
                                <tr>
                                    <th>SSL 보안서버인증서</th>
                                    <td>  
                                        <a href="#" class="btn btn-primary a_block" data-toggle="modal" data-target="#exampleModalCenter">관련법령</a>
                                        <div class="tip color01 mt12">정통부 의무규정 사항 </div>
                                    </td>   
                                </tr>  
                                <tr>
                                    <th>SSL 보안서버인증서</th>
                                    <td>  
                                        <label class="radiocontainer">
                                            <input type="radio" name="inlineRadioOptions3" id="inlineRadio1" value="option1" checked="checked">
                                            <span class="radio-text"></span>구매 및 설치
                                        </label>
                                        <label class="radiocontainer">
                                            <input type="radio" name="inlineRadioOptions3" id="inlineRadio1" value="option1" checked="checked">
                                            <span class="radio-text"></span>보유중인 SSL설치
                                        </label>
                                        <label class="radiocontainer">
                                            <input type="radio" name="inlineRadioOptions3" id="inlineRadio1" value="option1" checked="checked">
                                            <span class="radio-text"></span>신청 안 함
                                        </label>                                    
                                    </td>   
                                </tr>  
                                </tbody>
                                </table>
								<!-- //부가서비스 추가 -->
								
																
                            </div> 
							
                        </li>       						
                        <li class="col-xs-3">   
							
							
							<!-- cart -->
                            <div class="col-xs-12 cart-new">
								<h4>주문 요약</h4>								
								<ul class="cart-total">
									<li>
										<div class="row">
											<div class="col-xs-5 col-lg-8"><p>LINUX 보급형</p></div>
											<div class="col-xs-7 col-lg-4 text-right"><p>₩194,040</p></div>
										</div>
										<div class="row">
											<div class="col-xs-5 col-lg-8"><p>₩5,390/월</p></div>
											<div class="col-xs-7 col-lg-4 text-right"><p>36 개월</p></div>
										</div>
									</li>
									<li>
										<div class="row">
											<div class="col-xs-5 col-lg-8"><p>아웃룩</p></div>
											<div class="col-xs-7 col-lg-4 text-right"><p>₩4,040</p></div>
										</div>
										<div class="row">
											<div class="col-xs-5 col-lg-8"><p>₩4,040/년</p></div>
											<div class="col-xs-7 col-lg-4 text-right"><p>12 개월</p></div>
										</div>
									</li>
								</ul>
								<div class="row cart-price">
									<div class="col-xs-5">
										<div><p>합계</p></div>
									</div>
									<div class="col-xs-7 text-right">
										<p id="totalPrice">₩198,080</p>
									</div>
								</div>
								<div class="cart-Agree">
									<p>결제할 서비스 내용을 확인하였으며 구매에 동의하시겠습니까?</p>
									<label class="chkcontainer chk_l">
										<input type="checkbox" name="check2" checked="checked">
										<span class="check-text"></span>동의합니다.		
									</label>       
									<span>(전자상거래법 제8조 2항)</span>
								</div>
								<div class="cart-btn">
                                    <button type="button" id="tabStep01" class="btn btn-primary mb12 cart_btnext" onclick="tabNextStep();">다음 단계 <span class="lnr lnr-chevron-right"></span>
                                    </button>   
                                    <button type="button" id="tabStep01" class="btn btn-danger mb12 cart_btnext" onclick="javascrip:location.href='/order/oready';">결제하기 <span class="lnr lnr-chevron-right"></span>
                                    </button>
                                    <button type="button" id="tabStep01" class="btn btn-default mb12 cart_btprev" onclick="tabBackStep();"><span class="lnr lnr-chevron-left"></span> 이전단계 
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
                            <div class="col-xs-12 cart-new">
								<h4>주문 요약</h4>								
								<ul class="cart-total">
									<li>
										<div class="row">
											<div class="col-xs-5 col-lg-8"><p>LINUX 보급형</p></div>
											<div class="col-xs-7 col-lg-4 text-right"><p>₩194,040</p></div>
										</div>
										<div class="row">
											<div class="col-xs-5 col-lg-8"><p>₩5,390/월</p></div>
											<div class="col-xs-7 col-lg-4 text-right"><p>36 개월</p></div>
										</div>
									</li>
									<li>
										<div class="row">
											<div class="col-xs-5 col-lg-8"><p>아웃룩</p></div>
											<div class="col-xs-7 col-lg-4 text-right"><p>₩4,040</p></div>
										</div>
										<div class="row">
											<div class="col-xs-5 col-lg-8"><p>₩4,040/년</p></div>
											<div class="col-xs-7 col-lg-4 text-right"><p>12 개월</p></div>
										</div>
									</li>
								</ul>
								<div class="row cart-price">
									<div class="col-xs-5">
										<div><p>합계</p></div>
									</div>
									<div class="col-xs-7 text-right">
										<p id="totalPrice">₩198,080</p>
									</div>
								</div>
								<div class="cart-Agree">
									<p>결제할 서비스 내용을 확인하였으며 구매에 동의하시겠습니까?</p>
									<label class="chkcontainer chk_l">
										<input type="checkbox" name="check2" checked="checked">
										<span class="check-text"></span>동의합니다.		
									</label>       
									<span>(전자상거래법 제8조 2항)</span>
								</div>
								<div class="cart-btn">
                                    <button type="button" id="tabStep01" class="btn btn-primary mb12 cart_btnext" onclick="tabNextStep();">다음 단계 <span class="lnr lnr-chevron-right"></span>
                                    </button>   
                                    <button type="button" id="tabStep01" class="btn btn-danger mb12 cart_btnext" onclick="javascrip:location.href='/order/oready';">결제하기 <span class="lnr lnr-chevron-right"></span>
                                    </button>
                                    <button type="button" id="tabStep01" class="btn btn-default mb12 cart_btprev" onclick="tabBackStep();"><span class="lnr lnr-chevron-left"></span> 이전단계 
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

    
    
    
    
    
    
    
    

