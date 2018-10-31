
<!-- container -->
<section class="container-warp">	
		
	
    <!-- sub-title -->  
    <div class="sub-content t-9">
        <div class="wrapper"> 
            <h5>서비스를 이용하는 고객의 FAQ를 모았습니다.</h5>			
            <h2>자주하는 질문</h2>	
        </div>    
    </div>    
	<!-- //sub-title -->  
	
   

    <!-- body-content -->	
    <div class="blu-content wrapper">        
		
		
		<div class="faq-sec01">
			<h2>궁금한 점이 있으신가요? 분야별 전문가가 도와드립니다.</h2>		
			<div class="selectarea">
				<div class="selectbox">                                        
					<select class="selectpicker">
						<option>서비스/질문 구분</option>
						<option>도메인</option>
						<option>호스팅</option>
						<option>서버호스팅</option>
						<option>매니지먼트</option>
						<option>보안</option>
					</select> 
				</div>
				<div class="selectbox">                                        
					<select class="selectpicker">
						<option>하위 구분</option>
					</select> 
				</div>
				<div class="selectbox">                                        
					<select class="selectpicker">
						<option>하위 구분</option>
					</select> 
				</div>
			</div>			
			<div class="dsearch_small">
				<div>
					<label><input type="text" placeholder="무엇을 도와드릴까요?"></label>
					<button type="image" class="btn btn-danger" onclick="location.href='/page/domain/regist.php';"><i class="fa fa-search"></i> 검색</button>
				</div>				
			</div>		
		</div>
			
			
	
		
		
		<div class="container">
			<form id="boardForm" name="boardForm" method="post">
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>번호</th>
							<th>서비스</th>
							<th>제목</th>
						</tr>
					</thead>
					<tbody>
						<c:forEach var="result" items="${list }" varStatus="status">
							<tr>
								<td><c:out value="${result.code }"/>1</td>
								<td><c:out value="${result.service }"/>호스팅</td>
								<td><a href='#' onClick='fn_view(${result.code})'><c:out value="${result.title }"/></a>DB에 연결하려면 어떤 프로그램을 이용해야 하나요?</td>
							</tr>
							<tr>
								<td><c:out value="${result.code }"/>2</td>
								<td><c:out value="${result.service }"/>메일</td>
								<td><a href='#' onClick='fn_view(${result.code})'><c:out value="${result.title }"/></a>[아웃룩] POP3/SMTP 서버 및 포트가 어떻게 되나요?</td>
							</tr>
							<tr>
								<td><c:out value="${result.code }"/>3</td>
								<td><c:out value="${result.service }"/>회원/결제/예치금/쿠폰</td>
								<td><a href='#' onClick='fn_view(${result.code})'><c:out value="${result.title }"/></a>카드 결제 시 마지막 단계에서 공인인증서 비밀번호를 입력하고 결제를 누르면 오류가 발생합니...</td>
							</tr>
						</c:forEach>
					</tbody>
				</table>

				<nav aria-label="Page navigation" class="paging">
					<ul class="pagination pagination-lg">
						<li class="page-item disabled "><a class="page-link page-b" href="#" tabindex="-1">Previous</a></li>
						<li class="page-item"><a class="page-link" href="#">1</a></li>
						<li class="page-item active"><a class="page-link" href="#">2 <span class="sr-only">(current)</span></a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item"><a class="page-link page-b" href="#">Next</a>
						</li>
					</ul>
				</nav>

				
				<!--div>            
					<a href='#' onClick='fn_write()' class="btn btn-success">글쓰기</a>            
				</div-->
				
			</form>
		</div>
		<script>
		//글쓰기
		function fn_write(){

			var form = document.getElementById("boardForm");

			form.action = "<c:url value='/board/writeForm.do'/>";
			form.submit();

		}

		//글조회
		function fn_view(code){

			var form = document.getElementById("boardForm");
			var url = "<c:url value='/board/viewContent.do'/>";
			url = url + "?code=" + code;

			form.action = url;    
			form.submit(); 
		}
		</script>
		
		
		
		
		
		
		
		
		
		
		
		
    </div>
    <!-- //body-content -->  

	

	
	
	
	
    
</section>
<!-- //container -->











