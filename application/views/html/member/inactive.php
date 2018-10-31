<?php
$get = $this->input->get('inactive',true);
if(!$get) $get = 'idsearch_p_s';
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
        $('.tab-find > li > a ').on('click', function (){
            //claer
            $('.tab-find > li ').removeClass('active');
            $('.tab-find > li > a').removeClass('active');            
            
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

	
	<!-- body-content -->
    <div class="blu-content layout-lg">        
		<ul class="row layout-xs">
			<li class="col-xs-12 panel">
				<div role="tabpanel">
					
					<h2 class="subject">휴면계정 <span>찾기</span></h2>	
					<div class="subtip">					
						<h5 class="tip">
							블루웹은 고객님의 개인정보를 보호하기 위해, 최근 1년 동안 로그인 기록이 없는 계정을 휴면 계정으로 전환하고 해당 계정의 개인정보를 분리하여 저장/관리하고 있습니다.
							휴면 계정 전환으로 개인정보가 분리 저장/관리될 경우 서비스 이용이 제한됩니다.<br><br>
							서비스를 다시 이용하고 싶은 고객님은 '휴면계정 조회'로 계정 복원을 하실 수 있습니다.
						</h5>					
					</div>
					
					<!-- nav tabs -->
					<ul class="nav nav-pills tab-find" role="tablist">
						<li role="presentation" id="idsearch_p_s" class="col-xs-2 active"><a href="#idsearch_p" aria-controls="idsearch_p" role="tab" data-toggle="tab">개인회원</a></li>
						<li role="presentation" id="idsearch_p_s" class="col-xs-2"><a href="#idsearch_c" aria-controls="idsearch_c" role="tab" data-toggle="tab">기업회원</a></li>
					</ul>
					<!-- //nav tabs -->


					<!-- Tab panes -->
					<div class="tab-content">

						
						<!-- person --> 
						<div role="tabpanel" class="tab-pane active" id="idsearch_p"> 
							<div class="form-group">
								<input type="text" class="form-control form-control_lg" placeholder="실명을 입력해주세요.">    
							</div>							
							<div class="form-group">
								<div class="selectbox_xs ">                                        
									<select class="selectpicker">
										<option>010</option>
										<option>011</option>
										<option>016</option>
										<option>017</option>
										<option>018</option>
										<option>019</option>
									</select> 
									<input type="text" class="form-control form-control_lg" placeholder="휴대전화번호 입력(인증)">
									<span class=""><a href="#" class="btn btn-default">인증번호 발송</a></span>
								</div>
							</div>	
							<div class="form-group">
								<input type="text" class="form-control form-control_lg" placeholder="인증번호 6자리를 입력하세요.">    
							</div>	
							<div class="tip mt8 color01">							
								본인인증 및 계정 문의 : 고객센터 1588 - 2120
							</div>
							<div class="frm-buttons-xs">
								<button type="button" class="btn btn-default mt20" onclick="location.href='/page/member/login.php';">취소</button>  
								<button type="button" class="btn btn-primary mt20" onclick="location.href='/page/index.php';">확인</button>  
							</div>
						</div>     
						<!-- //person --> 	
						

						<!-- company -->   
						<div role="tabpanel" class="tab-pane" id="idsearch_c">
							<div class="form-group">
								<input type="text" class="form-control form-control_lg" placeholder="기업명을 입력해주세요.">    
							</div>		
							<div class="form-group">
								<input type="text" class="form-control form-control_lg" placeholder="사업자등록번호를 -없이 입력해 주세요.">    
							</div>		
							<div class="form-group">
								<div class="selectbox_xs ">                                        
									<select class="selectpicker">
										<option>010</option>
										<option>011</option>
										<option>016</option>
										<option>017</option>
										<option>018</option>
										<option>019</option>
									</select> 
									<input type="text" class="form-control form-control_lg" placeholder="휴대전화번호 입력(인증)">
									<span class=""><a href="#" class="btn btn-default">인증번호 발송</a></span>
								</div>
							</div>	
							<div class="form-group">
								<input type="text" class="form-control form-control_lg" placeholder="인증번호 6자리를 입력하세요.">    
							</div>	
							<div class="tip mt8 color01">							
								본인인증 및 계정 문의 : 고객센터 1588 - 2120
							</div>
							<div class="frm-buttons-xs">
								<button type="button" class="btn btn-default mt20" onclick="location.href='/page/member/login.php';">취소</button>  
								<button type="button" class="btn btn-primary mt20" onclick="location.href='/page/index.php';">확인</button>  
							</div>							
						</div>     						
						<!-- //company -->  
						
						
						
					</div>				
				</div>  
			</li>
		</ul>
    </div>
    <!-- //body-content -->  
	

</section>
<!-- //container -->


				