<?php
$get = $this->input->get('regist_step1',true);
if(!$get) $get = 'domain_recommends';
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
    <div class="sub-content t-3-1">     
		<div class="wrapper dsearch_big">
 			<!--h5>도메인 구매시 무제한 웹호스팅이 무료</h5>			
            <h2>쉽고 빠른 도메인 생성!</h2-->	
			<div>
				<label><input type="text" placeholder="원하는 도메인을 입력하세요"></label><button type="image" class="btn btn-danger" onclick="location.href='/page/domain/regist.php';"><i class="fa fa-search"></i> 검색</button>				
			</div>
		</div>
    </div>    
    <!-- //sub-title -->   
	
	
    <!-- body-content -->  
    <div class="blu-content wrapper">        
       
	
		 <div role="tabpanel">
            
			
            <!-- nav tabs -->
            <ul class="nav nav-pills tab-cont" role="tablist">
                <li role="presentation" id="domain_recommends" class="col-xs-2"><a href="#domain_recommend" aria-controls="domain_recommend" role="tab" data-toggle="tab">추천도메인</a></li>
                <li role="presentation" id="domain_majors" class="col-xs-2"><a href="#domain_major" aria-controls="domain_major" role="tab" data-toggle="tab">주요 도메인</a></li>
                <li role="presentation" id="domain_cctlds" class="col-xs-2"><a href="#domain_cctld"  aria-controls="domain_cctld" role="tab" data-toggle="tab">국가 도메인</a></li>     
                <li role="presentation" id="domain_newgtlds" class="col-xs-2"><a href="#domain_newgtld" aria-controls="domain_newgtld" role="tab" data-toggle="tab">신규 도메인</a></li>
            </ul>
			<!-- //nav tabs -->
			

            <!-- tab panes -->
            <div class="tab-content">
				

               	<!-- domain_recommend --> 
                <div role="tabpanel" class="tab-pane active" id="domain_recommend"> 
					<? include("nts_domain_recommend.php"); ?>
                </div>     
				<!-- //domain_recommend --> 	
					

                <!-- nts_domain_major -->   
                <div role="tabpanel" class="tab-pane" id="domain_major"> 
					<? include("nts_domain_major.php"); ?>
                </div>
				<!-- //nts_domain_major -->   


                <!-- country_domain -->  
                <div role="tabpanel" class="tab-pane" id="domain_cctld">
					 <? include("nts_domain_cctld.php"); ?>					
                </div>
				<!-- //country_domain -->  

				
				<!-- new_domain -->    
                <div role="tabpanel" class="tab-pane" id="domain_newgtld">
					<? include("nts_domain_newgtld.php"); ?>
                </div>            
				<!-- //new_domain -->  				
				
				
					
            </div>
			<!-- //tab panes -->
			 
			 
        </div>  	
		
		
    </div>  
	<!-- //body-content -->  
	
	
	
</section>
<!-- //container -->


    
    
    
    
    
    
    

