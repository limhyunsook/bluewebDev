<!-- container -->
<section class="container-warp">	

	
	<!-- body content -->  
    <div class="blu-content layout-lg">  
		
		<ul class="row layout-xs">

			<li class="col-xs-12">
				<div class="col-m-2 b-join mb20">
					
					<h3>기본 정보</h3>	
					<div class="form-group">
						<input type="text" class="form-control" placeholder="이름 입력">   
					</div>
					<div class="form-group">			
						<input type="text" class="form-control" placeholder="아이디 입력(영문,숫자 및 '-','_','.'의 조합)">
					</div>
					<div class="form-actions">
						<button type="button" class="btn btn-primary ma1" onclick="location.href='#';">중복확인</button>  
					</div>								
					<div class="form-group">			
						<input type="password" class="form-control" placeholder="비밀번호 입력(영문 대/소문자, 숫자, 특수문자 조합 8~15자)">
					</div>						
					<div class="form-group">			
						<input type="password" class="form-control" placeholder="비밀번호 재입력(영문 대/소문자, 숫자, 특수문자 조합 8~15자)">
					</div>						
					<div class="tip mb12">
						* 비밀번호에 개인정보가 포함되지 않도록 해주세요.<br>
						* 1회성 비밀번호를 SMS로 받아 로그인하는 기능은 회원 가입 후  설정 가능
					</div>	
				</div>
				
				
				
				
				
				<script type="text/javascript">
					$(function(){
						$(".agree input[name=check2]").on("click",function(){
							var chk = $(this).attr("checked");
							if(chk!=undefined){
								$(".mb10 > input[type=checkbox]").prop("checked", chk);
							}else{
								$(".mb10 > input[type=checkbox]").prop("checked", false);
							}
						});
						$(".agree .mb10 > input[type=checkbox]").each(function(){
							$(this).on("click",function(){
								var total = $(".agree .mb10 > input[type=checkbox]").length;
								var chkcount = $(".agree .mb10 > input[type=checkbox]:checked").length;
							if(total==chkcount){
								$("input[name=check2]").prop("checked",true);
							}else{
								$("input[name=check2]").prop("checked",false);
							}
								
							})
						});
					})
				</script>		
				
				
				
				
				
				<div class="col-m-2 b-join agree">
					
					<h3>가입 약관 동의</h3>						
					<div class="form-group">		
						<label class="chkcontainer">
							<input type="checkbox" name="check2">
							<span class="check-text"></span>이용 약관, 개인정보 수집 및 이용, 광고성 정보 수신(선택)에<br>모두 동의합니다.
						</label>  
					</div>
					<div class="form-group">		
						<label class="chkcontainer mb10">
							<input type="checkbox" name="check3">
							<span class="check-text"></span>블루웹 회원 약관에 동의합니다. <span class="color01">(필수)</span>
						</label>      
						
						<div class="agreement" tabindex="0">
							<pre>
<strong>제1장 총 칙</strong>

<strong>제1조 (목적)</strong>	

본 약관은 (주)블루웹 (이하 "회사"라 합니다)에서
제공하는 인터넷 서비스(이하 "서비스"라 합니다)를 
이용함에 있어 회사와 이용자의 권리, 의무 및 
책임사항을 규정함을 목적으로 합니다.
							</pre>
						</div>
					</div>
					<div class="form-group">		
						<label class="chkcontainer mb10">
							<input type="checkbox" name="check4">
							<span class="check-text"></span>개인정보의 수집 및 이용에 동의합니다. <span class="color01">(필수)</span>
						</label>      
						
						<div class="agreement mb10" tabindex="0">
							<pre>
<strong>제1장 총 칙</strong>

<strong>제1조 (목적)</strong>	

본 약관은 (주)블루웹 (이하 "회사"라 합니다)에서
제공하는 인터넷 서비스(이하 "서비스"라 합니다)를 
이용함에 있어 회사와 이용자의 권리, 의무 및 
책임사항을 규정함을 목적으로 합니다.
							</pre>
						</div>
					</div>
					<div class="form-group">		
						<label class="chkcontainer mb10">
							<input type="checkbox" name="check4">
							<span class="check-text"></span>개인정보의 수집 및 이용에 동의합니다. <span class="color01">(선택)</span>
						</label>   
						
						<div class="agreement v" tabindex="0">
							<pre>
<strong>제1장 총 칙</strong>

<strong>제1조 (목적)</strong>	

본 약관은 (주)블루웹 (이하 "회사"라 합니다)에서
제공하는 인터넷 서비스(이하 "서비스"라 합니다)를 
이용함에 있어 회사와 이용자의 권리, 의무 및 
책임사항을 규정함을 목적으로 합니다.
							</pre>
						</div>						
					</div>
					
					<button type="button" class="btn btn-default mt20 " onclick="#">취소</button>  
					<button type="button" class="btn btn-primary mt20 " onclick="#">다음</button>  
				
				</div>
				
				
				
				
				
			</li>		
			
			
			
		</ul> 	
		
	</div>
	<!-- //body content -->  
	

</section>
<!-- //container -->