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
                <li role="presentation" class="active col-xs-4" ><a href="#step01" aria-controls="step01" role="tab" data-toggle="tab"><strong>STEP 01</strong>호스팅 기본 정보 선택</a></li>
                <li role="presentation" class="col-xs-4"><a href="#step02" aria-controls="step02" role="tab" data-toggle="tab"><strong>STEP 02</strong>호스팅 신청정보 확인 및 결제</a></li>
                <li role="presentation" class="col-xs-4"><a href="#step03" aria-controls="step03" role="tab" data-toggle="tab"><strong>STEP 03</strong>호스팅 신청 완료</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content fixing">
              
                <!-- tab 1 -->
                <div role="tabpanel" class="tab-pane active" id="step01"> 
                    <ul class="row">
                        <li class="col-xs-9 list">
                                
                            
                            <!-- 웹호스팅 신청 정보 -->
                            <table class="table tableTypeA ma2"> 
                            <caption class="table_title">신청 정보</caption>       
                            <tbody>
                            <tr>
                                <th>호스팅 종류</th>
                                <td>                                            
                                    <div class="selectbox ma1">
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
                                    <div class="ma1">
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
                                    <a href="#" class="btn btn-primary ma0 a_block">선납무이자</a>
                                </td>
                            </tr>   
                            </tbody>
                            </table>    

                            
                            
                            
                            
                            <!-- 도메인입력 -->
                            <table class="table tableTypeA ma2"> 
                            <caption class="table_title">도메인 입력</caption>       
                            <tbody>
                             <tr>
                                <th>대표 도메인</th>
                                <td>  
                                    <input type="text" class="form-control" placeholder="Domain">               
                                    <a href="#" class="btn btn-primary ma0 a_block">도메인 체크</a>
                                    <div class="tip color01 ma0">
                                        도메인 입력 후 ‘도메인 체크’ 버튼을 눌러 주세요. 
                                    </div>
                                    <div class="tip">
                                        도메인을 입력하지 않으면 가비아 기본 도메인으로 호스팅이 세팅 됩니다.
                                    </div>
                                </td>   
                            </tr>   
                            </tbody>
                            </table>   
                            
                            
                            
                            <!-- 옵션 추가 -->
                            <table class="table tableTypeA ma2"> 
                            <caption class="table_title">옵션 추가</caption>       
                            <tbody>
                            <tr>
                                <th>트래픽</th>
                                <td>  
                                    <div class="selectbox ma0">
                                        <button class="btncontainer">신청안함</button>
                                        <div class="dropdown">
                                            <button class="btncontainer btnstyle">
                                              <i class="fa fa-caret-down"></i>
                                            </button>
                                            <div class="dropdown-content">
                                                <a href="#">4G</a>
                                                <a href="#">8G</a>
                                                <a href="#">12G</a>
                                                <a href="#">16G</a>
                                                <a href="#">20G</a>
                                            </div>
                                        </div>   
                                    </div>
                                </td>   
                            </tr>  
                            <tr>
                                <th>웹 용량</th>
                                <td>  
                                    <div class="selectbox ma0">
                                        <button class="btncontainer">신청안함</button>
                                        <div class="dropdown">
                                            <button class="btncontainer btnstyle">
                                              <i class="fa fa-caret-down"></i>
                                            </button>
                                            <div class="dropdown-content">
                                                <a href="#">2G</a>
                                                <a href="#">4G</a>
                                                <a href="#">6G</a>
                                                <a href="#">8G</a>
                                                <a href="#">10G</a>
                                                <a href="#">12G</a>
                                                <a href="#">14G</a>
                                                <a href="#">16G</a>
                                            </div>
                                        </div>   
                                    </div>
                                </td>   
                            </tr>  
                            </tbody>
                            </table>
                            
                            
                            <!-- 부가서비스 추가 -->
                            <table class="table tableTypeA ma2"> 
                            <caption class="table_title">부가서비스 추가</caption>       
                            <tbody>
                            <tr>
                                <th>SSL 보안서버인증서</th>
                                <td>  
                                    <a href="#" class="btn btn-primary a_block">관련법령</a>
                                    <div class="tip color01 ma0">정통부 의무규정 사항 </div>
                                </td>   
                            </tr>  
                            <tr>
                                <th>웹 용량</th>
                                <td>  
                                    <label class="radiocontainer">
                                        <input type="radio" name="inlineRadioOptions1" id="inlineRadio1" value="option1" checked="checked">
                                        <span class="radio-text"></span>구매 및 설치
                                    </label>
                                    <label class="radiocontainer">
                                        <input type="radio" name="inlineRadioOptions1" id="inlineRadio1" value="option1" checked="checked">
                                        <span class="radio-text"></span>보유중인 SSL설치
                                    </label>
                                    <label class="radiocontainer">
                                        <input type="radio" name="inlineRadioOptions1" id="inlineRadio1" value="option1" checked="checked">
                                        <span class="radio-text"></span>신청 안 함
                                    </label>                                    
                                </td>   
                            </tr>  
                            </tbody>
                            </table>
                            
                            
                            
                            
                            <!-- 서버호스팅 신청정보 -->
                            <table class="table tableTypeA ma2"> 
                            <caption class="table_title">신청 정보</caption>       
                            <tbody>
                            <tr>
                                <th>IDC 선택</th>
                                <td>  
                                     <div class="selectbox">
                                        <button class="btncontainer">선택하세요!</button>                                            
                                        <div class="dropdown">
                                            <button class="btncontainer btnstyle">
                                              <i class="fa fa-caret-down"></i>
                                            </button>
                                            <div class="dropdown-content">
                                                <a href="#">교대센터(SK)</a>
                                                <a href="#">강남센터(KT)</a>
                                            </div>
                                        </div> 
                                    </div>
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
                                            <a href="#" class="btn btn-primary ma0 a_block">관련법령</a>
                                        </td>
                                    </tr> 
                                    <tr>
                                        <th>HDD</th>
                                        <td>
                                            300GB 10K 12Gbps SAS 2.5in G3HS HDD
                                            <a href="#" class="btn btn-primary ma0 a_block">HDD 변경</a>
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
                                        <button class="btncontainer">선택하세요!</button>                                            
                                        <div class="dropdown">
                                            <button class="btncontainer btnstyle">
                                              <i class="fa fa-caret-down"></i>
                                            </button>
                                            <div class="dropdown-content">
                                                <a href="#">Dedicate-10M</a>
                                                <a href="#">Dedicate-20M</a>
                                                <a href="#">Dedicate-30M</a>
                                                <a href="#">Dedicate-40M</a>
                                                <a href="#">Dedicate-50M</a>
                                                <a href="#">Dedicate-60M</a>
                                                <a href="#">Dedicate-70M</a>
                                                <a href="#">Dedicate-80M</a>
                                                <a href="#">Dedicate-90M</a>
                                                <a href="#">Dedicate-100M</a>
                                            </div>
                                        </div> 
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
                                        <input type="radio" name="inlineRadioOptions6" id="inlineRadio1" value="option1" checked="checked">
                                        <span class="radio-text"></span> 자가 설치 (IDC 방문 및 직접 설치)
                                    </label>   
                                </td>     
                            </tr>
                            <tr>
                                <th>개설 희망일</th>
                                <td>                                
                                   

                                </td>    
                            </tr>
                            <tr>
                                <th>선납 기간</th>
                                <td>
                                     <div class="selectbox">
                                        <button class="btncontainer">선납 안 함</button>                                            
                                        <div class="dropdown">
                                            <button class="btncontainer btnstyle">
                                              <i class="fa fa-caret-down"></i>
                                            </button>
                                            <div class="dropdown-content">
                                                <a href="#">선납 안 함</a>
                                                <a href="#">1개월</a>
                                                <a href="#">3개월</a>
                                                <a href="#">6개월</a>
                                                <a href="#">12개월</a>
                                            </div>
                                        </div> 
                                    </div>  
                                </td>    
                            </tr>
                            <tr>
                                <th>결제일</th>
                                <td>매월 25일 (결제 만료일: 2018-09-25 )</td>    
                            </tr>
                            </tbody>
                            </table>
                            
                 
                            
                            
                            <!-- 위탁운영 서비스 추가 (선택 사항) -->
                            <table class="table tableTypeA ma2"> 
                            <caption class="table_title">위탁운영 서비스 추가 (선택 사항)</caption>       
                            <tbody>
                            <tr>
                                <th>위탁운영</th>
                                <td>  
                                    <label class="radiocontainer">
                                        <input type="radio" name="inlineRadioOptions1" id="inlineRadio1" value="option1" checked="checked">
                                        <span class="radio-text"></span>스탠더드(서버)
                                    </label>
                                    <label class="radiocontainer">
                                        <input type="radio" name="inlineRadioOptions1" id="inlineRadio1" value="option1" checked="checked">
                                        <span class="radio-text"></span>프리미엄(서버)
                                    </label>
                                    <label class="radiocontainer">
                                        <input type="radio" name="inlineRadioOptions1" id="inlineRadio1" value="option1" checked="checked">
                                        <span class="radio-text"></span>신청 안 함
                                    </label>                                    
                                </td>   
                            </tr>  
                            </tbody>
                            </table>
                            
                            
                            <!-- 소프트웨어 추가 -->
                            <table class="table tableTypeA ma2"> 
                            <caption class="table_title">소프트웨어 추가</caption>       
                            <tbody>
                            <tr>
                                <th rowspan="4">소프트웨어 </th>
                                <td>  
                                    <label class="radiocontainer">
                                        <input type="radio" name="inlineRadioOptions1" id="inlineRadio1" value="option1" checked="checked">
                                        <span class="radio-text"></span>소프트웨어 신청
                                    </label>
                                    (
                                    <label class="radiocontainer">
                                        <input type="radio" name="inlineRadioOptions1" id="inlineRadio1" value="option1" checked="checked">
                                        <span class="radio-text"></span>OS 라이선스
                                    </label>
                                    <label class="radiocontainer">
                                        <input type="radio" name="inlineRadioOptions1" id="inlineRadio1" value="option1" checked="checked">
                                        <span class="radio-text"></span> DB 라이선스
                                    </label> 
                                    <label class="radiocontainer">
                                        <input type="radio" name="inlineRadioOptions1" id="inlineRadio1" value="option1" checked="checked">
                                        <span class="radio-text"></span>기타 라이선스
                                    </label>)
                                    <label class="radiocontainer">
                                        <input type="radio" name="inlineRadioOptions1" id="inlineRadio1" value="option1" checked="checked">
                                        <span class="radio-text"></span>신청 안 함
                                    </label>
                                </td>   
                            </tr>  
                            <tr>
                                <td>
                                    <h2 class="ma1">OS 라이선스</h2>
                                    <label class="radiocontainer">
                                        <input type="radio" name="inlineRadioOptions1" id="inlineRadio1" value="option1" checked="checked">
                                        <span class="radio-text"></span>라이선스 임대
                                    </label>
                                    <label class="radiocontainer">
                                        <input type="radio" name="inlineRadioOptions1" id="inlineRadio1" value="option1" checked="checked">
                                        <span class="radio-text"></span>라이선스 구매
                                    </label>
                                    <div class="selectbox ma0">
                                        <button class="btncontainer">선납 안 함</button>                                            
                                        <div class="dropdown">
                                            <button class="btncontainer btnstyle">
                                              <i class="fa fa-caret-down"></i>
                                            </button>
                                            <div class="dropdown-content">
                                                <a href="#">선납 안 함</a>
                                                <a href="#">1개월</a>
                                                <a href="#">3개월</a>
                                                <a href="#">6개월</a>
                                                <a href="#">12개월</a>
                                            </div>
                                        </div> 
                                    </div> 
                                </td>                                
                            </tr>
                            <tr>
                                <td>
                                    <h2 class="ma1">OS 라이선스</h2>
                                    <label class="radiocontainer">
                                        <input type="radio" name="inlineRadioOptions1" id="inlineRadio1" value="option1" checked="checked">
                                        <span class="radio-text"></span>라이선스 임대
                                    </label>
                                    <label class="radiocontainer">
                                        <input type="radio" name="inlineRadioOptions1" id="inlineRadio1" value="option1" checked="checked">
                                        <span class="radio-text"></span>라이선스 구매
                                    </label>
                                    <div class="selectbox ma0">
                                        <button class="btncontainer">선납 안 함</button>                                            
                                        <div class="dropdown">
                                            <button class="btncontainer btnstyle">
                                              <i class="fa fa-caret-down"></i>
                                            </button>
                                            <div class="dropdown-content">
                                                <a href="#">선납 안 함</a>
                                                <a href="#">1개월</a>
                                                <a href="#">3개월</a>
                                                <a href="#">6개월</a>
                                                <a href="#">12개월</a>
                                            </div>
                                        </div> 
                                    </div> 
                                </td> 
                            </tr>   
                            <tr>
                                <td>
                                    <h2 class="ma1">OS 라이선스</h2>
                                    <label class="radiocontainer">
                                        <input type="radio" name="inlineRadioOptions1" id="inlineRadio1" value="option1" checked="checked">
                                        <span class="radio-text"></span>라이선스 임대
                                    </label>
                                    <label class="radiocontainer">
                                        <input type="radio" name="inlineRadioOptions1" id="inlineRadio1" value="option1" checked="checked">
                                        <span class="radio-text"></span>라이선스 구매
                                    </label>
                                    <div class="selectbox ma0">
                                        <button class="btncontainer">선납 안 함</button>                                            
                                        <div class="dropdown">
                                            <button class="btncontainer btnstyle">
                                              <i class="fa fa-caret-down"></i>
                                            </button>
                                            <div class="dropdown-content">
                                                <a href="#">선납 안 함</a>
                                                <a href="#">1개월</a>
                                                <a href="#">3개월</a>
                                                <a href="#">6개월</a>
                                                <a href="#">12개월</a>
                                            </div>
                                        </div> 
                                    </div> 
                                </td> 
                            </tr>  
                            </tbody>
                            </table>
                            
                            
                            
                            
                            <!-- 부가서비스 추가 -->
                            <table class="table tableTypeA ma2"> 
                            <caption class="table_title">부가서비스 추가</caption>       
                            <tbody>
                            <tr>
                                <th>방화벽</th>
                                <td>
                                    <div class="selectbox">
                                        <button class="btncontainer">선납 안 함</button>                                            
                                        <div class="dropdown">
                                            <button class="btncontainer btnstyle">
                                              <i class="fa fa-caret-down"></i>
                                            </button>
                                            <div class="dropdown-content">
                                                <a href="#">선납 안 함</a>
                                                <a href="#">공유형(블루웹)</a>
                                            </div>
                                        </div> 
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
                                        <button class="btncontainer">선납 안 함</button>                                            
                                        <div class="dropdown">
                                            <button class="btncontainer btnstyle">
                                              <i class="fa fa-caret-down"></i>
                                            </button>
                                            <div class="dropdown-content">
                                                <a href="#">선납 안 함</a>
                                                <a href="#">백업 100GB</a>
                                                <a href="#">백업 150GB</a>
                                                <a href="#">백업 200GB</a>
                                                <a href="#">백업 300GB</a>
                                                <a href="#">백업 350GB</a>
                                                <a href="#">백업 400GB</a>
                                                <a href="#">백업 450GB</a>
                                                <a href="#">백업 500GB</a>
                                            </div>
                                        </div> 
                                    </div>                                 
                                </td>   
                            </tr>  
                            <tr>
                                <th>바이러스 백신</th>
                                <td>
                                    <div class="selectbox">
                                        <button class="btncontainer">선납 안 함</button>                                            
                                        <div class="dropdown">
                                            <button class="btncontainer btnstyle">
                                              <i class="fa fa-caret-down"></i>
                                            </button>
                                            <div class="dropdown-content">
                                                <a href="#">선납 안 함</a>
                                                <a href="#">Bitdefender GravityZone Business Security</a>
                                            </div>
                                        </div> 
                                    </div>                                 
                                </td>   
                            </tr>  
                            <tr>
                                <th>웹방화벽 </th>
                                <td>
                                    <div class="selectbox">
                                        <button class="btncontainer">선납 안 함</button>                                            
                                        <div class="dropdown">
                                            <button class="btncontainer btnstyle">
                                              <i class="fa fa-caret-down"></i>
                                            </button>
                                            <div class="dropdown-content">
                                                <a href="#">선납 안 함</a>
                                                <a href="#">H/W공유형</a>
                                                <a href="#">S/W설치형</a>
                                                <a href="#">리버스 프록시형</a>
                                            </div>
                                        </div> 
                                    </div>                                 
                                </td>   
                            </tr>  
                            <tr>
                                <th>웹사이트 이전</th>
                                <td>
                                    <div class="selectbox">
                                        <button class="btncontainer">선납 안 함</button>                                            
                                        <div class="dropdown">
                                            <button class="btncontainer btnstyle">
                                              <i class="fa fa-caret-down"></i>
                                            </button>
                                            <div class="dropdown-content">
                                                <a href="#">선납 안 함</a>
                                                <a href="#">웹사이트 이전</a>
                                            </div>
                                        </div> 
                                    </div>                                 
                                </td>   
                            </tr>  
                            </tbody>
                            </table>
                            
                           

                        </li>                          
                    </ul>                     
                </div>      
                
                
                <!-- tab 2 -->
                <div role="tabpanel" class="tab-pane" id="step02">  
                                    
                    
                    <table class="table tableTypeA ma2">
                    <caption class="table_title">결제수단</caption>                             
                    <tbody>                       
                        <tr>
                            <th>예치금</th>
                            <td>  
                                <input type="text" class="form-control" placeholder="Deposit">   
                            </td>
                        </tr>  
                        <tr>
                            <th rowspan="3">결제 방법</th>
                            <td>                    
                                <label class="radiocontainer">
                                    <input type="radio" name="inlineRadioOptions3" id="inlineRadio1" value="option1" checked="checked">
                                    <span class="radio-text"></span> 신용카드                                    
                                </label>       
                                <a href="#" class="btn btn-primary btn_xs a_inlinblock">무이자 할부 안내</a>
                            </td>
                        </tr> 
                        <tr>
                            <td>     
                                <label class="radiocontainer">
                                    <input type="radio" name="inlineRadioOptions3" id="inlineRadio1" value="option1">
                                    <span class="radio-text"></span> 실시간 계좌이체                                    
                                </label>   
                                <a href="#" class="btn btn-primary btn_xs a_inlinblock">현금영수증 안내</a>                            
                                <div> 
                                    <table class="table tableTypeC ma0">
                                    <tbody>   
                                    <tr>
                                        <th>현금영수증</th>
                                        <td>
                                            <label class="radiocontainer radio_w ma1">
                                                <input type="radio" name="inlineRadioOptions1" id="inlineRadio1" value="option1" checked="checked">
                                                <span class="radio-text"></span>개인소득공제
                                            </label>
                                            <div class="radio_down">
                                                <input type="text" class="form-control ma1 ma0" placeholder="Telephone"> 
                                                <input type="text" class="form-control ma1" placeholder="Cash receipt card"> 
                                                <input type="text" class="form-control" placeholder="Name"> 
                                                <a href="#" class="btn btn-primary ma0">확인</a>
                                            </div>                                       
                                            <label class="radiocontainer ma1">
                                                <input type="radio" name="inlineRadioOptions1" id="inlineRadio1" value="option1">
                                                <span class="radio-text"></span>사업자 지출증빙
                                            </label>
                                            <div class="radio_down">
                                                <input type="text" class="form-control ma1 ma0" placeholder="Telephone"> 
                                                <input type="text" class="form-control ma1" placeholder="Cash receipt card"> 
                                                <input type="text" class="form-control" placeholder="Business name"> 
                                                <a href="#" class="btn btn-primary ma0">확인</a>
                                            </div>      
                                        </td>                                    
                                    </tr>  
                                    <tr>
                                        <th>세금계산서 신청</th>
                                        <td>
                                            <label class="radiocontainer radio_w ma1">
                                                <input type="radio" name="inlineRadioOptions1" id="inlineRadio1" value="option1" checked="checked">
                                                <span class="radio-text"></span>개인소득공제
                                            </label>
                                            <div class="radio_down">
                                                <input type="text" class="form-control ma1 ma0" placeholder="Telephone"> 
                                                <input type="text" class="form-control ma1" placeholder="Cash receipt card"> 
                                                <input type="text" class="form-control" placeholder="Name"> 
                                                <a href="#" class="btn btn-primary ma0">확인</a>
                                            </div>                                       
                                            <label class="radiocontainer ma1">
                                                <input type="radio" name="inlineRadioOptions1" id="inlineRadio1" value="option1">
                                                <span class="radio-text"></span>사업자 지출증빙
                                            </label>
                                            <div class="radio_down">
                                                <input type="text" class="form-control ma1 ma0" placeholder="Telephone"> 
                                                <input type="text" class="form-control ma1" placeholder="Cash receipt card"> 
                                                <input type="text" class="form-control" placeholder="Business name"> 
                                                <a href="#" class="btn btn-primary ma0">확인</a>
                                            </div>      
                                        </td>                                    
                                    </tr>  
                                    <tr>
                                        <th>신청 안 함</th>
                                        <td></td>                                    
                                    </tr>      
                                        
                                        
                                        
                                    </tbody>
                                    </table>  
                                    <div class="tip ma0 color01"> 2018년 08월 20일까지 미입금 시 자동취소 됩니다.</div>
                                </div>
                            </td>
                        </tr> 
                        <tr>
                            <td>  
                                <label class="radiocontainer">
                                    <input type="radio" name="inlineRadioOptions3" id="inlineRadio1" value="option1">
                                    <span class="radio-text"></span> 무통장 입금(가상계좌)
                                </label>
                            </td>
                        </tr> 
                        
                        
                        
                        
                        
                        
                        <tr>
                            <th rowspan="3">증빙 서류</th>
                            <td>  
                                <label class="radiocontainer">
                                    <input type="radio" name="inlineRadioOptions4" id="inlineRadio1" value="option1">
                                    <span class="radio-text"></span> 현금영수증 신청
                                </label>                                 
                            </td>
                        </tr>    
                        <tr>                            
                            <td>                                
                                <label class="radiocontainer">
                                    <input type="radio" name="inlineRadioOptions4" id="inlineRadio1" value="option1" checked="checked">
                                    <span class="radio-text"></span> 세금계산서 신청
                                </label>                               
                            </td>
                        </tr>    
                        <tr>                           
                            <td>                                 
                                <label class="radiocontainer">
                                    <input type="radio" name="inlineRadioOptions4" id="inlineRadio1" value="option1">
                                    <span class="radio-text"></span> 신청 안 함
                                </label>
                            </td>
                        </tr>    
                    </tbody>
                    </table>           
                    
                    <div class="tip ma2">
                        ※ 2005년 4월부터 개정된 부가가치세법에 따라 신용카드 매출전표가 세금계산서를 대체합니다.<br>
                        ※ 예치금을 일부 사용하고 신용카드/휴대폰 결제를 하는 경우, 현금영수증은 예치금 사용 금액에 대해서만 발행됩니다.                                    
                    </div>
                    
                    <div class="tip ma2">
                        * 현금영수증과 세금계산서는 중복으로 발행되지 않습니다.<br>
                        * 현금영수증은 현재 페이지에서만 발행할 수 있습니다.<br>
                        * Mac OS에서는 결제가 불가능합니다                                
                    </div>

                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                </div>    
                
                <!-- tab 3 -->
                <div role="tabpanel" class="tab-pane" id="step03">                  
                    <div class="signal">
                        <i class="fa fa-check"></i>
                        <h2><span class="color01">카드결제</span>가<br>실패되었습니다.</h2>
                        <p><span>실패사유</span>를 살펴보시고 다시 결제부탁드립니다.</p>
                    </div> 
                </div>    

                
          </div>            
        </div>          
        
        <!-- 계산기 -->
        <div class="cart">
            <table class="table">
                <caption class="table_title">결제 금액 계산</caption>
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
            <div class="btnBox">
                <button type="button" id="tabStep01" class="btn btn-primary ma1 cart_btnext" onclick="tabNextStep();">
                    다음 단계 <span class="lnr lnr-chevron-right"></span>
                </button>  
                <button type="button" id="tabStep01" class="btn btn-danger ma1 cart_btnext" onclick="tabNextStep();">
                    결제하기 <span class="lnr lnr-chevron-right"></span>
                </button>           
                <button type="button" id="tabStep01" class="btn btn-warning ma1 cart_btprev" onclick="tabNextStep();">
                    <span class="lnr lnr-chevron-left"></span> 이전단계 
                </button>           
                
                <a href="" class="btn btn-success ma1" onclick="winOpenHostingPage('print');return false;">견적서 메일로 받기</a>
                <a href="" class="btn btn-success ma1" onclick="winOpenHostingPage('print');return false;">견적서 바로 출력</a> 
                <a href="" class="btn btn-success" onclick="winOpenHostingPage('print');return false;">견적서 결제 확인 출력</a> 
            </div>     
            <div class="alert alert-warning ma0" role="alert"><a href="#"><i class="fa fa-exclamation-circle"></i> 결제가 안 될 때 <strong>ActiveX</strong> 수동설치</a></div>
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

