<?php
$get = $this->input->get('mypage',true);
if(!$get) $get = 'my_services';
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
    <div class="sub-content t-9">
        <div class="wrapper"> 
            <h5>나에게 딱맞춘 마이페이지가 찾아왔어요~</h5>			
            <h2>My블루웹 활용법을 확인하세요!</h2>	
        </div>    
    </div>    
	<!-- //sub-title -->  
	
    
    <!-- body-content -->
    <div class="blu-content wrapper">        
	
		
		
		  <div role="tabpanel">
            
			
            <!-- nav tabs -->
            <ul class="nav nav-pills tab-cont" role="tablist">
                <li role="presentation" id="my_services" class="col-xs-2"><a href="#my_service" aria-controls="my_service" role="tab" data-toggle="tab">서비스 관리</a></li>
                <li role="presentation" id="my_extends" class="col-xs-2"><a href="#my_extend" aria-controls="my_extend" role="tab" data-toggle="tab">서비스 연장</a></li>
                <li role="presentation" id="my_payments" class="col-xs-2"><a href="#my_payment" aria-controls="my_payment" role="tab" data-toggle="tab">결제 관리</a></li>     
                <li role="presentation" id="my_infos" class="col-xs-2"><a href="#my_info" aria-controls="my_info" role="tab" data-toggle="tab">내정보 관리</a></li>
            </ul>
			<!-- //nav tabs -->
			

            <!-- Tab panes -->
            <div class="tab-content">
				

               	<!-- my_service --> 
                <div role="tabpanel" class="tab-pane active" id="my_service"> 					
								
					
                </div>     
				<!-- //my_service --> 	
					

                <!-- my_extend -->   
                <div role="tabpanel" class="tab-pane" id="my_extend">      
                    
										
                </div>
				<!-- //my_extend -->   


                <!-- my_payment -->  
                <div role="tabpanel" class="tab-pane" id="my_payment">  					
					   
					
                </div>
				<!-- //my_payment -->  

				<!-- my_info -->    
                <div role="tabpanel" class="tab-pane" id="my_info">  
					
                          
					
                </div>            
				<!-- //my_info -->  
				
				
			
            </div>
        </div>  
		
		
		
		
 
    </div>
    <!-- //body-content -->  


	
	
	

	
	
	
	
	
	
	
    
</section>
<!-- //container -->











