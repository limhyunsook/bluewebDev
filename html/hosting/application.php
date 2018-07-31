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
	include($_SERVER["DOCUMENT_ROOT"]."/html/inc/top.php");
?>
</header>
<!--========== end header ==========-->






<!--========== info ==========-->
<section class="container-warp">	
		
    <div class="sub-top">
        <h5>원하는 호스팅 365일 언제나</h5>			
        <h2>신청하기</h2>	
    </div>    
    
    <div class="container sub-container"> 
       
        <div role="tabpanel">
            
          <!-- Nav tabs -->
          <ul class="nav nav-pills tab02" role="tablist">
              <li role="presentation" class="active col-xs-4" ><a href="#step01" aria-controls="step01" role="tab" data-toggle="tab"><strong>STEP 01</strong>호스팅 기본 정보 선택</a></li>
              <li role="presentation" class="col-xs-4"><a href="#step02" aria-controls="step02" role="tab" data-toggle="tab"><strong>STEP 02</strong>호스팅 관리 정보 입력</a></li>
              <li role="presentation" class="col-xs-4"><a href="#step03" aria-controls="step03" role="tab" data-toggle="tab"><strong>STEP 03</strong>호스팅 신청정보 확인 및 결제</a></li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="step01">                
                        
                <ul class="row">
                    <li class="col-xs-9">
                        
                        <table class="table table01">
                            <thead>
                                <tr>
                                    <th scope="col">호스팅 종류</th>
                                    <td>  
                                        <select class="form-control">
                                            <option>보급형</option>
                                            <option>기본형</option>
                                            <option>블루형</option>
                                            <option>파워형</option>
                                            <option>파워플러스</option>
                                        </select>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="table-success">
                                    <th scope="row">메일 형태</th>
                                    <td>
                                        <div>
                                            웹메일을 이미 사용중입니까?
                                            <label class="radio-inline">
                                              <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">yes
                                            </label>
                                            <label class="radio-inline">
                                              <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">no
                                            </label>    
                                        </div>       
                                        <div>
                                            <label class="radio-inline">
                                              <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">아웃룩
                                            </label>
                                            <label class="radio-inline">
                                              <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">웹메일
                                            </label>                       
                                        </div> 
                                    </td>
                                </tr>  
                                <tr class="table-success">
                                    <th scope="row">호스팅 요금<br/>납부방식</th>
                                    <td>
                                        <select class="form-control">
                                            <option>자동이체(매월 5% 할인) </option>
                                            <option>1년선납결제(2개월무료)</option>
                                            <option>2년선납결제(6개월무료)</option>
                                            <option>3년선납결제(12개월무료)</option>
                                            <option>매월 결제</option>
                                        </select>
                                        <button class="btn btn-danger ma0" type="submit" onclick="location.href='/html/hosting/application.php';">선납무이자</button>
                                    </td>
                                 </tr>   
                            </tbody>
                        </table>   
                                             

                        <table class="table table-hover table02">
                            <thead>
                                <tr>
                                    <th scope="col">초기세팅비</th>
                                    <th scope="col">당월 요금</th>
                                    <th scope="col">선납 요금</th>
                                    <th scope="col">옵션 요금</th>
                                    <th scope="col">총액</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="table-success">
                                    <th scope="row">5,500원</th>
                                    <td>1,800원</td>
                                    <td>0원</td>
                                    <td>0원</td>
                                    <td>7,300원</td>
                                </tr>                                          
                            </tbody>
                        </table>   
                        <div class="refer">* 호스팅 견적을 메일로 받아 보실 수 있습니다. [메일로 호스팅 견적 받기], [견적 프린트]</div>

                    </li>                  
                    <li class="col-xs-1"></li> 
                    <li class="col-xs-3">  
                        <div class="aside">
                            
                            <table class="table">
                            <caption>결제 금액 계산</caption>
                            <thead>
                                <tr>
                                    <th scope="col">항목</th>
                                    <th scope="col">비용</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="table-success">
                                    <th scope="row">웹호스팅</th>
                                    <td>50,000원</td>
                                </tr>  
                                <tr class="table-success">
                                    <th scope="col">ㄴ설치비</th>
                                    <td scope="col">30,000원</td>
                                </tr>  
                                <tr class="table-success">
                                    <th scope="col">부가세</th>
                                    <td scope="col">8,000원</td>
                                </tr>  
                                <tr class="table-success">
                                    <th scope="col"></th>
                                    <td scope="col">결제 예상 금액<br/><span>88,000원</span></td>
                                </tr>  
                            </tbody>
                            </table>   
                            
                            <button type="button" class="btn btn-primary ma1" href="#step02">다음 단계</button>
                            <button type="button" class="btn btn-success" onclick="location.href='/html/hosting/registration.php';">견적서 출력</button>           
                        </div>
                    </li>  
                </ul>   
             
                
                
            </div>              
            <div role="tabpanel" class="tab-pane" id="step02">
                
                <table class="table table03">
                <caption>결제 금액 계산</caption>
                <thead>
                    <tr>
                        <th scope="col">이름</th>
                        <td scope="col"><input type="text" class="form-control" placeholder="Text input"></td>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-success">
                        <th scope="row">아이디</th>
                        <td scope="col"><input type="text" class="form-control" placeholder="Text input"></td>
                    </tr>  
                    <tr class="table-success">
                        <th scope="col">메일주소</th>
                        <td scope="col"><input type="text" class="form-control" placeholder="Text input"></td>
                    </tr>  
                    <tr class="table-success">
                        <th scope="col">전화번호</th>
                        <td scope="col"><input type="text" class="form-control" placeholder="Text input"></td>
                    </tr>  
                    <tr class="table-success">
                        <th scope="col">휴대 전화번호</th>
                        <td scope="col"><input type="text" class="form-control" placeholder="Text input"></td>
                    </tr>  
                </tbody>
                </table>   
                
                <div class="refer">고객님이 지금까지 사용중인 호스팅이 22건 있습니다.<Br/>이 중 하나의 호스팅 정보와 아래 관리자 정보 및 요금 담당자 정보를 일치시킬 수 있습니다.</div>
                
                <div class="price03">
                     <div role="tabpanel" class="tab-pane" id="step03">
                        기존 호스팅 정보와 동일한 정보 사용하여 호스팅 신청<Br/><Br/>
                        <select class="form-control">
                            <option>1</option>
                            <option>1</option>
                            <option>1</option>
                            <option>1</option>
                        </select>                 
                    </div> 
                </div>
                
                <table class="table table03">
                <caption>                   
                    호스팅 관리자 정보
                    <label><input type="checkbox"> 회원정보와 동일하게 설정</label>                        
                </caption>         
                <thead>
                    <tr>
                        <th scope="col">관리자 이름</th>
                        <td scope="col"><input type="text" class="form-control" placeholder="Text input"></td>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-success">
                        <th scope="row">메일주소</th>
                        <td scope="col"><input type="text" class="form-control" placeholder="Text input"></td>
                    </tr>  
                    <tr class="table-success">
                        <th scope="col">전화번호</th>
                        <td scope="col">
                            <input type="text" class="form-control" placeholder="Text input">
                            <span>(- 포함시켜주세요)</span>                        
                        </td>
                    <tr class="table-success">
                        <th scope="col">휴대 전화번호</th>
                        <td scope="col">
                            <input type="text" class="form-control" placeholder="Text input">
                            <span>(- 포함시켜주세요)</span>                        
                        </td>
                    </tr>                     
                </tbody>
                </table>   
                
                
                <table class="table table03">
                <caption>                   
                    요금 담당자 정보
                    <label><input type="checkbox"> 회원정보와 동일하게 설정</label>                        
                </caption>         
                <thead>
                    <tr>
                        <th scope="col">요금 담당자 이름</th>
                        <td scope="col"><input type="text" class="form-control" placeholder="Text input"></td>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-success">
                        <th scope="row">청구 메일주소</th>
                        <td scope="col"><input type="text" class="form-control" placeholder="Text input"></td>
                    </tr>  
                    <tr class="table-success">
                        <th scope="col">전화번호</th>
                        <td scope="col">
                            <input type="text" class="form-control" placeholder="Text input">
                            <span>(- 포함시켜주세요)</span>                        
                        </td>
                    </tr>  
                    <tr class="table-success">
                        <th scope="col">휴대 전화번호</th>
                         <td scope="col">
                            <input type="text" class="form-control" placeholder="Text input">
                            <span>(- 포함시켜주세요)</span>                        
                        </td>
                    </tr>  
                </tbody>
                </table>   
                
                                
                <table class="table table03">
                <caption>FTP정보</caption>
                <thead>
                    <tr>
                        <th scope="col">도메인</th>
                        <td scope="col"><input type="text" class="form-control" placeholder="Text input"></td>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-success">
                        <th scope="row">FTP ID	</th>
                        <td scope="col">
                            <input type="text" class="form-control" placeholder="Text input">
                            <button class="btn btn-danger ma0" type="submit" onclick="location.href='/html/hosting/application.php';">중복검사</button>
                        </td>
                    </tr>  
                    <tr class="table-success">
                        <th scope="col">메일주소</th>
                        <td scope="col">
                            <input type="text" class="form-control" placeholder="Text input">
                            <button class="btn btn-danger ma0" type="submit" onclick="location.href='/html/hosting/application.php';">중복검사</button>
                        </td>
                    </tr>  
                    <tr class="table-success">
                        <th scope="col">FTP 비밀번호</th>
                        <td scope="col">
                            <input type="text" class="form-control" placeholder="Text input"> 
                            <span>※ FTP비밀번호는 도메인명, FTP ID와 동일하게 설정할 수 없으며,8자 이상으로 작성하셔야 합니다.</span>   
                        </td>
                    </tr>  
                    <tr class="table-success">
                        <th scope="col">FTP 비밀번호 확인</th>
                        <td scope="col"><input type="text" class="form-control" placeholder="Text input"></td>
                    </tr>  
                </tbody>
                </table>   
                
                
                <table class="table table03">
                <caption>APM 정보</caption>
                <thead>
                    <tr>
                        <th scope="col">PHP종류 선택</th>
                        <td scope="col">
                            <select class="form-control">
                                <option>1</option>
                                <option>1</option>
                                <option>1</option>
                                <option>1</option>
                            </select>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-success">
                        <th scope="row">DB종류 선택</th>
                        <td scope="col">        
                            <div class="radio">
                                <label class="radio-inline">
                                    <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">MySQL
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">MariaDB 10.x.x
                                </label> 
                            </div>                            
                             <select class="form-control">
                                <option>1</option>
                                <option>1</option>
                                <option>1</option>
                                <option>1</option>
                            </select>
                        </td>
                    </tr>  
                    <tr class="table-success">
                        <th scope="col">DB 아이디</th>
                        <td scope="col"></td>
                    </tr>  
                    <tr class="table-success">
                        <th scope="col">DB 비밀번호</th>
                        <td scope="col"></td>
                    </tr>                     
                </tbody>
                </table>  
                
                <div class="refer">
                    - DB 아이디와 비밀번호는 FTP 정보와 동일하게 설정됩니다.<Br/>
                    - Apache 버전은 최신 버전으로 설치 됩니다.
                </div>
                
                
                <table class="table table03">
                <caption>파트너 정보 확인</caption>
                <thead>
                    <tr>
                        <th scope="col">파트너 ID</th>
                        <td scope="col">
                            <input type="text" class="form-control" placeholder="Text input">
                            <button class="btn btn-danger ma0" type="submit" onclick="location.href='/html/hosting/application.php';">파트너정보확인</button>   
                        </td>
                    </tr>
                </thead>               
                </table>   
                
                <div class="refer">-  파트너 ID를 알고계신 고객께서는 파트너 ID를 입력후 반드시 '파트너정보확인' 버튼을 클릭하여 인증을 받기 바랍니다.</div>
                
                
            </div>
           
                            
          </div>            
        </div>          
        
    </div>    
</section>
<!--========== END hosting ==========-->









<!--========== footer ==========-->
<footer class="footer">		
<?php
    include($_SERVER["DOCUMENT_ROOT"]."/html/inc/bottom.php");
?>
</footer>
<!--========== end footer ==========-->






</body>
</html>

