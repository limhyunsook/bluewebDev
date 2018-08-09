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
		
    <!-- 서브컨텐츠 -->  
    <div class="sub-content">
        <div class="wrapper"> 
            <h5>원하는 호스팅 365일 언제나 블루웹</h5>			
            <h2>신청하기</h2>	
        </div>    
    </div>    
    
    <!-- 바디컨텐츠 -->  
    <div class="blu-content wrapper">        
        <div role="tabpanel">
            
            <!-- Nav tabs -->
            <ul class="nav nav-pills tab02" role="tablist">
                <li role="presentation" class="active col-xs-3" ><a href="#step01" aria-controls="step01" role="tab" data-toggle="tab"><strong>STEP 01</strong>호스팅 기본 정보 선택</a></li>
                <li role="presentation" class="col-xs-3"><a href="#step02" aria-controls="step02" role="tab" data-toggle="tab"><strong>STEP 02</strong>호스팅 관리 정보 입력</a></li>
                <li role="presentation" class="col-xs-3"><a href="#step03" aria-controls="step03" role="tab" data-toggle="tab"><strong>STEP 03</strong>호스팅 신청정보 확인 및 결제</a></li>
                <li role="presentation" class="col-xs-3"><a href="#step04" aria-controls="step04" role="tab" data-toggle="tab"><strong>STEP 04</strong>호스팅 신청 완료</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content fixing">
              
                <!-- tab 1 -->
                <div role="tabpanel" class="tab-pane active" id="step01"> 
                    <ul class="row">
                        <li class="col-xs-9 list">
                                
                            <table class="table step01_table1 ma2"> 
                            <caption>호스팅 기본 정보 선택</caption>       
                            <tbody>
                                 <tr>
                                    <th>호스팅 종류</th>
                                    <td>     
                                        <div class="selectbox">
                                            <button class="btncontainer">선택하세요!</button>
                                            <div class="dropdown">
                                                <button class="btncontainer btnstyle">
                                                  <i class="fa fa-caret-down"></i>
                                                </button>
                                                <div class="dropdown-content">
                                                    <a href="#">LINUX 보급형</a>
                                                    <a href="#">LINUX 기본형</a>
                                                    <a href="#">LINUX 블루형</a>
                                                    <a href="#">LINUX 파워형</a>
                                                    <a href="#">LINUX 파워플러스</a>
                                                    <a href="#">LINUX MAX형</a>
                                                </div>
                                            </div> 
                                        </div>
                                        
                                        <table class="table step01_table4">
                                        <thead>
                                            <tr>
                                                <th>트래픽</th>
                                                <th>웹용량</th>
                                                <th>DB용량</th>
                                                <th>메일용량(개수)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="table-success">
                                                <td>12G</td>
                                                <td>10G</td>
                                                <td>무제한</td>
                                                <td>30개</td>
                                            </tr>                                          
                                        </tbody>
                                        </table>                                         
                                        
                                    </td>
                                     
                                </tr>
                                <tr class="table-success">
                                    <th scope="row">메일 형태</th>
                                    <td>
                                        <div>
                                            웹메일을 이미 사용중입니까?
                                            <label class="radiocontainer">
                                                <input type="radio" name="inlineRadioOptions1" id="inlineRadio1" value="option1" checked="checked">
                                                <span class="radio-text"></span>YES
                                            </label>
                                            <label class="radiocontainer">
                                                <input type="radio" name="inlineRadioOptions1" id="inlineRadio1" value="option1">
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
                                        <div class="selectbox ma0">
                                            <button class="btncontainer">다음</button>
                                            <div class="dropdown">
                                                <button class="btncontainer btnstyle">
                                                  <i class="fa fa-caret-down"></i>
                                                </button>
                                                <div class="dropdown-content">
                                                    <a href="#">다음</a>
                                                    <a href="#">네이버</a>
                                                </div>
                                            </div>   
                                        </div>
                                    </td>
                                </tr>  
                                <tr class="table-success">
                                    <th scope="row">호스팅 요금<br/>납부방식</th>
                                    <td>    
                                        <div class="selectbox">
                                            <button class="btncontainer">결제방식 선택</button>
                                            <div class="dropdown">
                                                <button class="btncontainer btnstyle">
                                                  <i class="fa fa-caret-down"></i>
                                                </button>
                                                <div class="dropdown-content">
                                                    <a href="#">자동이체(매월 5% 할인)</a>
                                                    <a href="#">1년선납결제(2개월무료)</a>
                                                    <a href="#">2년선납결제(6개월무료)</a>
                                                    <a href="#">3년선납결제(12개월무료)</a>
                                                    <a href="#">매월 결제</a>
                                                </div>
                                            </div>   
                                        </div>
                                        <a href="#" class="btn btn-danger step01_table1_a ma0">선납무이자</a>
                                    </td>
                                 </tr>   
                            </tbody>
                            </table>    
                            
                            <div class="step01_refer">* 호스팅 견적을 메일로 받아 보실 수 있습니다.</div>

                        </li>                          
                    </ul>                     
                </div>      

                
                <!-- tab 2 -->
                <div role="tabpanel" class="tab-pane" id="step02">
                   
                    <table class="table step02_table">       
                    <caption>회원 정보</caption>   
                    <tbody>
                         <tr>
                            <th>이름</th>
                            <td><input type="text" class="form-control" placeholder="Text input"></td>
                        </tr>
                        <tr class="table-success">
                            <th scope="row">아이디</th>
                            <td><input type="text" class="form-control" placeholder="Text input"></td>
                        </tr>  
                        <tr class="table-success">
                            <th>메일주소</th>
                            <td><input type="text" class="form-control" placeholder="Text input"></td>
                        </tr>  
                        <tr class="table-success">
                            <th>전화번호</th>
                            <td><input type="text" class="form-control" placeholder="Text input"></td>
                        </tr>  
                        <tr class="table-success">
                            <th>휴대 전화번호</th>
                            <td><input type="text" class="form-control" placeholder="Text input"></td>
                        </tr>  
                    </tbody>
                    </table>   
                    

                    <div class="step02_appli">
                        <span>고객님이 지금까지 사용중인 호스팅이 22건 있습니다.<Br/>이 중 하나의 호스팅 정보와 아래 관리자 정보 및 요금 담당자 정보를 일치시킬 수 있습니다.</span>
                        <p>기존 호스팅 정보와 동일한 정보 사용하여 호스팅 신청</p>    
                        <div class="selectbox">                                                   
                            <button class="btncontainer">기존 호스팅 선택</button>
                            <div class="dropdown">
                                <button class="btncontainer btnstyle">
                                  <i class="fa fa-caret-down"></i>
                                </button>
                                <div class="dropdown-content">
                                    <a href="#">http://cookingm.co.kr/01</a>
                                    <a href="#">http://cookingm.co.kr/02</a>
                                    <a href="#">http://cookingm.co.kr/03</a>
                                </div>
                            </div>   
                        </div> 
                    </div>
                    

                    <table class="table step02_table">
                    <caption>호스팅 관리자 정보
                        <label class="chkcontainer">
                            <input type="checkbox" name="check1" checked="checked">
                            <span class="check-text"></span>회원정보와 동일하게 설정
                        </label>      
                    </caption>                           
                    <tbody>
                         <tr>
                            <th>관리자 이름</th>
                            <td><input type="text" class="form-control" placeholder="Text input"></td>
                        </tr>
                        <tr class="table-success">
                            <th scope="row">메일주소</th>
                            <td><input type="text" class="form-control" placeholder="Text input"></td>
                        </tr>  
                        <tr class="table-success">
                            <th>전화번호</th>
                            <td>
                                <input type="text" class="form-control" placeholder="Text input">
                                <span>(- 포함시켜주세요)</span>                        
                            </td>
                        <tr class="table-success">
                            <th>휴대 전화번호</th>
                            <td>
                                <input type="text" class="form-control" placeholder="Text input">
                                <span>(- 포함시켜주세요)</span>                        
                            </td>
                        </tr>                     
                    </tbody>
                    </table>   


                    <table class="table step02_table">
                    <caption>       
                        요금 담당자 정보                        
                        <label class="chkcontainer">
                            <input type="checkbox" name="check2" checked="checked">
                            <span class="check-text"></span>관리자 정보와 동일하게 설정	
                        </label>      
                        <label class="chkcontainer">
                            <input type="checkbox" name="check3" >
                            <span class="check-text"></span>회원정보와 동일하게 설정  
                        </label>            
                    </caption>                             
                    <tbody>
                        <tr>
                            <th>요금 담당자 이름</th>
                            <td><input type="text" class="form-control" placeholder="Text input"></td>
                        </tr>
                        <tr class="table-success">
                            <th scope="row">청구 메일주소</th>
                            <td><input type="text" class="form-control" placeholder="Text input"></td>
                        </tr>  
                        <tr class="table-success">
                            <th>전화번호</th>
                            <td>
                                <input type="text" class="form-control" placeholder="Text input">
                                <span>(- 포함시켜주세요)</span>                        
                            </td>
                        </tr>  
                        <tr class="table-success">
                            <th>휴대 전화번호</th>
                             <td>
                                <input type="text" class="form-control" placeholder="Text input">
                                <span>(- 포함시켜주세요)</span>                        
                            </td>
                        </tr>  
                    </tbody>
                    </table>   


                    <table class="table step02_table">
                    <caption>FTP정보</caption>
                    <tbody>
                        <tr>
                            <th>도메인</th>
                            <td><input type="text" class="form-control" placeholder="Text input"></td>
                        </tr>
                        <tr class="table-success">
                            <th scope="row">FTP ID	</th>
                            <td>
                                <input type="text" class="form-control" placeholder="Text input">
                                <button class="btn btn-danger ma0" type="submit" onclick="location.href='/html/hosting/application.php';">중복검사</button>
                            </td>
                        </tr>  
                        <tr class="table-success">
                            <th>메일주소</th>
                            <td>
                                <input type="text" class="form-control" placeholder="Text input">
                                <button class="btn btn-danger ma0" type="submit" onclick="location.href='/html/hosting/application.php';">중복검사</button>
                            </td>
                        </tr>  
                        <tr class="table-success">
                            <th>FTP 비밀번호</th>
                            <td>
                                <input type="password" class="form-control" placeholder="Text input"> 
                                <span>※ FTP비밀번호는 도메인명, FTP ID와 동일하게 설정할 수 없으며,8자 이상으로 작성하셔야 합니다.</span>   
                            </td>
                        </tr>  
                        <tr class="table-success">
                            <th>FTP 비밀번호 확인</th>
                            <td><input type="password" class="form-control" placeholder="Text input"></td>
                        </tr>  
                    </tbody>
                    </table>   


                    <table class="table step02_table">
                    <caption>APM 정보</caption>
                    <tbody>
                        <tr>
                            <th>PHP종류 선택</th>
                            <td>  
                                <div class="selectbox">
                                    <button class="btncontainer">PHP 5.x.x</button>
                                    <div class="dropdown">
                                        <button class="btncontainer btnstyle">
                                          <i class="fa fa-caret-down"></i>
                                        </button>
                                        <div class="dropdown-content">
                                            <a href="#">PHP 5.x.x</a>
                                            <a href="#">PHP 7.x.x</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="table-success">
                            <th scope="row">DB종류 선택</th>
                            <td>        
                                <div class="radio">
                                    <label class="radiocontainer">
                                        <input type="radio" name="inlineRadioOptions3" id="inlineRadio1" value="option1" checked="checked">
                                        <span class="radio-text"></span>MySQL
                                    </label>
                                    <label class="radiocontainer">
                                        <input type="radio" name="inlineRadioOptions3" id="inlineRadio1" value="option1">
                                        <span class="radio-text"></span>MariaDB 10.x.x
                                    </label> 
                                </div>    
                                <div class="selectbox">
                                    <button class="btncontainer">MySQL 5.X 버전</button>
                                    <div class="dropdown">
                                        <button class="btncontainer btnstyle">
                                          <i class="fa fa-caret-down"></i>
                                        </button>
                                        <div class="dropdown-content">
                                            <a href="#">MySQL 3.X 버전</a>
                                            <a href="#">MySQL 4.X 버전</a>
                                            <a href="#">MySQL 5.X 버전</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>  
                        <tr class="table-success">
                            <th>DB 아이디</th>
                            <td><input type="text" class="form-control" placeholder="Text input"></td>
                        </tr>  
                        <tr class="table-success">
                            <th>DB 비밀번호</th>
                            <td><input type="text" class="form-control" placeholder="Text input"></td>
                        </tr>                     
                    </tbody>
                    </table>  

                    <div class="step02_refer">
                        - DB 아이디와 비밀번호는 FTP 정보와 동일하게 설정됩니다.<Br/>
                        - Apache 버전은 최신 버전으로 설치 됩니다.
                    </div>

                    <table class="table step02_table ma2">
                    <caption>파트너 정보 확인</caption>
                    <tbody>
                        <tr>
                            <th>파트너 ID</th>
                            <td>
                                <input type="text" class="form-control" placeholder="Text input">
                                <button class="btn btn-danger ma0" type="submit" onclick="location.href='/html/hosting/application.php';">파트너정보확인</button>   
                            </td>
                        </tr>
                    </tbody>               
                    </table>   

                    <div class="step02_refer">-  파트너 ID를 알고계신 고객께서는 파트너 ID를 입력후 반드시 '파트너정보확인' 버튼을 클릭하여 인증을 받기 바랍니다.</div>    
                              
                </div>
                
                
                
                
                
                <!-- tab 3 -->
                <div role="tabpanel" class="tab-pane" id="step03">  
                    
                    <table class="table step03_table1">
                    <caption>                   
                        호스팅 기본 정보
                        <button type="button" id="tabStep02" class="btn btn-danger step03_b">호스팅 기본정보 수정</button>                        
                    </caption>                             
                    <tbody>
                        <tr>
                            <th>호스팅 종류</th>
                            <td><input type="text" class="form-control" placeholder="Text input"></td>
                        </tr>
                        <tr class="table-success">
                            <th scope="row">호스팅 사양</th>
                            <td><input type="text" class="form-control" placeholder="Text input"></td>
                        </tr>  
                        <tr class="table-success">
                            <th>메일 형태</th>
                            <td><input type="text" class="form-control" placeholder="Text input"></td>
                        </tr>  
                        <tr class="table-success">
                            <th>요금납부 방식</th>
                            <td><input type="text" class="form-control" placeholder="Text input"></td>
                        </tr>  
                         <tr class="table-success">
                            <th>혜택</th>
                            <td><input type="text" class="form-control" placeholder="Text input"></td>
                        </tr>  
                         <tr class="table-success">
                            <th>보안서비스</th>
                            <td><input type="text" class="form-control" placeholder="Text input"></td>
                        </tr>  
                    </tbody>
                    </table>   
                    
                    
                    <table class="table step03_table1">
                    <caption>                   
                        호스팅 관리자 정보
                        <button type="button" id="tabStep02" class="btn btn-danger step03_b">호스팅 관리자정보 수정</button> 
                    </caption>                             
                    <tbody>
                        <tr>
                            <th>이름</th>
                            <td><input type="text" class="form-control" placeholder="Text input"></td>
                        </tr>
                        <tr class="table-success">
                            <th scope="row">아이디</th>
                            <td><input type="text" class="form-control" placeholder="Text input"></td>
                        </tr>  
                        <tr class="table-success">
                            <th>메일주소</th>
                            <td><input type="text" class="form-control" placeholder="Text input"></td>
                        </tr>  
                        <tr class="table-success">
                            <th>전화번호</th>
                            <td><input type="text" class="form-control" placeholder="Text input"></td>
                        </tr>  
                         <tr class="table-success">
                            <th>휴대 전화번호</th>
                            <td><input type="text" class="form-control" placeholder="Text input"></td>
                        </tr>                         
                    </tbody>
                    </table>   
                    
                    
                    
                    <table class="table step03_table1">
                    <caption>                   
                        요금 담당자 정보
                        <button type="button" id="tabStep02" class="btn btn-danger step03_b">호스팅 요금 담당자 정보 수정</button>  
                    </caption>                             
                    <tbody>
                        <tr>
                            <th>이름</th>
                            <td><input type="text" class="form-control" placeholder="Text input"></td>
                        </tr>
                        <tr class="table-success">
                            <th scope="row">아이디</th>
                            <td><input type="text" class="form-control" placeholder="Text input"></td>
                        </tr>  
                        <tr class="table-success">
                            <th>메일주소</th>
                            <td><input type="text" class="form-control" placeholder="Text input"></td>
                        </tr>  
                        <tr class="table-success">
                            <th>전화번호</th>
                            <td><input type="text" class="form-control" placeholder="Text input"></td>
                        </tr>  
                         <tr class="table-success">
                            <th>휴대 전화번호</th>
                            <td><input type="text" class="form-control" placeholder="Text input"></td>
                        </tr>            
                    </tbody>
                    </table>   
                    
                    
                    <table class="table step03_table2">
                    <caption>약관 동의</caption>                             
                    <tbody>
                        <tr>
                            <th>호스팅 이용약관 동의</th>
                            <td>     
                                <label class="chkcontainer">
                                    <input type="checkbox" name="check1" checked="checked">
                                    <span class="check-text"></span>호스팅 약관에 동의 합니다.        
                                </label>                             
                                <a href="#" class="btn btn-danger ma0">약관보기</a>
                            </td>
                        </tr>                       
                    </tbody>
                    </table>                
                </div>    
                
                <!-- tab 4 -->
                <div role="tabpanel" class="tab-pane" id="step04">                  
                    <div class="error_message01">
                        <i class="fa fa-check"></i>
                        <h2><span class="color01">카드결제</span>가<br>실패되었습니다.</h2>
                        <p><span>실패사유</span>를 살펴보시고 다시 결제부탁드립니다.</p>
                    </div>
                    <table class="table step03_table1">                                         
                    <tbody>
                        <tr>
                            <th>도메인명</th>
                            <td><input type="text" class="form-control" placeholder="Text input"></td>
                        </tr>
                        <tr class="table-success">
                            <th scope="row">주문번호</th>
                            <td><input type="text" class="form-control" placeholder="Text input"></td>
                        </tr>  
                        <tr class="table-success">
                            <th>에러메시지</th>
                            <td><input type="text" class="form-control" placeholder="Text input"></td>
                        </tr>  
                        <tr class="table-success">
                            <th>결제내역(원)</th>
                            <td><input type="text" class="form-control" placeholder="Text input"></td>
                        </tr>    
                    </tbody>
                    </table>                     
                </div>    

                
          </div>            
        </div>          
        
        <!-- 계산기 -->
        <div class="step01_table3 cart">
            <table class="table">
                <caption>결제 금액 계산</caption>
                <thead>
                    <tr>
                        <th>항목</th>
                        <th>비용</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-success">
                        <td>웹호스팅</td>
                        <td>360,000원</td>
                    </tr>  
                    <tr class="table-success">
                        <td><span class="not">ㄴ</span>5% 할인</td>
                        <td class="color02">-18,000원</td>
                    </tr>  
                    <tr class="table-success">
                        <td><span  class="not">ㄴ</span>설치비</td>
                        <td>30,000원</td>
                    </tr>  
                    <tr class="table-success">
                        <td>트래픽</td>
                        <td>960,000원</td>
                    </tr>  
                    <tr class="table-success">
                        <td><span>ㄴ</span>5% 할인</td>
                        <td class="color02">-48,000원</td>
                    </tr>  
                    <tr class="table-success">
                        <td>웹메일</td>
                        <td>60,000원</td>
                    </tr>  
                    <tr class="table-success">
                        <td><span  class="not">ㄴ</span>5% 할인</td>
                        <td class="color02">-48,000원</td>
                    </tr>  
                    
                    <tr class="table-success">                                     
                        <td colspan="2">결제 예상 금액<br/><span class="total_price">88,000원</span></td>
                    </tr>  
                </tbody>
            </table>   
            <div class="step_nextbtn1">
                <button type="button" id="tabStep01" class="btn btn-primary ma1" onclick="tabNextStep();">
                    다음 단계 <span class="lnr lnr-chevron-right"></span>
                </button>  
                <button type="button" id="tabStep01" class="btn btn-danger ma1" onclick="tabNextStep();">
                    결제하기 <span class="lnr lnr-chevron-right"></span>
                </button>                  
                
                <a href="" class="btn btn-success ma1" onclick="winOpenHostingPage('print');return false;">견적서 메일로 받기</a>
                <a href="" class="btn btn-success ma1" onclick="winOpenHostingPage('print');return false;">견적서 바로 출력</a> 
                <a href="" class="btn btn-success" onclick="winOpenHostingPage('print');return false;">견적서 결제 확인 출력</a>
                
            </div>     
        </div>
        
        
    </div>    
</section>
<!--========== END hosting ==========-->

<script type="text/javascript">
function tabNextStep(){
    var idx = $(".tab-pane.active").index();
    var sidname = $(".tab-content.fixing > div").eq(idx).next().attr('id');
    if(sidname != undefined){
      $('.blu-content a[href=#' + sidname+ ']').tab('show');  
    }
    //
}
</script>







<!--========== footer ==========-->
<footer class="footer">		
<?php
    include($_SERVER["DOCUMENT_ROOT"]."/html/inc/bottom.php");
?>
</footer>
<!--========== end footer ==========-->




     
    
    
    

</body>
</html>

