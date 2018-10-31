<?php
$get = $this->input->get('server',true);
if(!$get) $get = 'server_bl';
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
    <div class="sub-content t-2">
        <div class="wrapper"> 
            <h5>높은 품질과 안정성을 보장합니다</h5>			
            <h2>가용률 99.99% 이상!<br>서버호스팅</h2>	
        </div>    
    </div>    
	<!-- //sub-title -->  
	
    
    <!-- body-content -->
    <div class="blu-content wrapper">        
        <div role="tabpanel">
            
			
            <!-- nav tabs -->
            <ul class="nav nav-pills tab-cont" role="tablist">
                <li role="presentation" id="#server_bl_s" class="col-xs-2 active"><a href="#server_bl" aria-controls="server_bl" role="tab" data-toggle="tab">BL 서버</a></li>
                <li role="presentation" id="#server_fu_s" class="col-xs-2"><a href="#server_fu" aria-controls="server_fu" role="tab" data-toggle="tab">FUJITSU 서버</a></li>
                <li role="presentation" id="#server_hp_s" class="col-xs-2"><a href="#server_hp" aria-controls="server_hp" role="tab" data-toggle="tab">HP 서버</a></li>
                <li role="presentation" id="#server_ibm_s" class="col-xs-2"><a href="#server_ibm" aria-controls="server_ibm" role="tab" data-toggle="tab">IBM 서버</a></li>
            </ul>
			<!-- //nav tabs -->
			
			
			

            <!-- Tab panes -->
            <div class="tab-content">
				

               	<!-- server_bl --> 
                <div role="tabpanel" class="tab-pane active" id="server_bl"> 
					
					<div class="subtitbox">
						<h2 class="subtit">BL 서버 시리즈</h2>
						<p class="subtxt">
							신뢰성 있는 인텔의 정품 하드웨어를 사용하여 최적의 성능을 구현할 수 있는 시스템을 설계하여 오랜기간 안정성 테스트를<br>
							거친 BL 서버 시리즈는 많은 사용자들에게 이미 검증된 서비스 입니다.<br>
							서버의 성능은 사이트 규모에 따라 적합하게 선택되어야 하는 만큼, 요구에 알맞는 하드웨어로 제공해드립니다. 
						</p>
						<a href="#">사양 자세히 보기 <i class="fa fa-angle-right"></i></a>
					</div> 			
					
					
                    <table class="table tableTypeD">                    
                    <thead>
                    <tr>
						<th>브랜드 및 상품명</th>
						<th>사양</th>
						<th>회선</th>
						<th>IP</th>
						<th>신청하기</th>
                    </tr>
                    </thead>
                    <tbody>
                   <tr>
                        <td scope="row">
							<img src="/assets/images/logo_hp.png">
							<span class="badge badge-border-danger">EVENT</span><br>
							BL-1624SAS<br>(쿼드코어)</td>
                        <td>
							<span class="badge badge-danger">CPU</span> Intel® Xeon® Processor E5-2609 v2<br>
							<span class="badge badge-primary">RAM</span> 8GB DDR-III 1600 PC12800<br>
							<span class="badge badge-success">HDD</span> 300GB SAS HDD
						</td>
                        <td>10Mbps</td>                       
						<td>1개</td>       
						<td>								
							<p>190,000원<span>/월</span></p>
							<button type="button" class="btn btn-primary" onclick="location.href='/page/server/application.php';">신청하기</button>                    						
						</td>       
                    </tr>          
					<tr>
                        <td scope="row">
							<img src="/assets/images/logo_ibm.png">
							<span class="badge badge-border-danger">EVENT</span><br>
							BL-1624SAS<br>(쿼드코어)</td>
                        <td>
							<span class="badge badge-danger">CPU</span> Intel® Xeon® Processor E5-2609 v2<br>
							<span class="badge badge-primary">RAM</span> 8GB DDR-III 1600 PC12800<br>
							<span class="badge badge-success">HDD</span> 300GB SAS HDD
						</td>
                        <td>10Mbps</td>                       
						<td>1개</td>       
						<td>								
							<p>190,000원<span>/월</span></p>
							<button type="button" class="btn btn-primary" onclick="location.href='/page/server/application.php';">신청하기</button>                    						
						</td>       
                    </tr>          
					<tr>
                        <td scope="row">
							BL-1624SAS<br>(쿼드코어)</td>
                        <td>
							<span class="badge badge-danger">CPU</span> Intel® Xeon® Processor E5-2609 v2<br>
							<span class="badge badge-primary">RAM</span> 8GB DDR-III 1600 PC12800<br>
							<span class="badge badge-success">HDD</span> 300GB SAS HDD
						</td>
                        <td>10Mbps</td>                       
						<td>1개</td>       
						<td>								
							<p>190,000원<span>/월</span></p>
							<button type="button" class="btn btn-primary" onclick="location.href='/page/sever/application.php';">신청하기</button>                    						
						</td>       
                    </tr>          
					<tr>
                        <td scope="row">
							BL-1624SAS<br>(쿼드코어)</td>
                        <td>
							<span class="badge badge-danger">CPU</span> Intel® Xeon® Processor E5-2609 v2<br>
							<span class="badge badge-primary">RAM</span> 8GB DDR-III 1600 PC12800<br>
							<span class="badge badge-success">HDD</span> 300GB SAS HDD
						</td>
                        <td>10Mbps</td>                       
						<td>1개</td>       
						<td>								
							<p>190,000원<span>/월</span></p>
							<button type="button" class="btn btn-primary" onclick="location.href='/page/server/application.php';">신청하기</button>                    						
						</td>       
                    </tr>          	
					<tr>
                        <td scope="row">
							<span class="badge badge-border-danger">EVENT</span><br>
							BL-1624SAS<br>(쿼드코어)</td>
                        <td>
							<span class="badge badge-danger">CPU</span> Intel® Xeon® Processor E5-2609 v2<br>
							<span class="badge badge-primary">RAM</span> 8GB DDR-III 1600 PC12800<br>
							<span class="badge badge-success">HDD</span> 300GB SAS HDD
						</td>
                        <td>10Mbps</td>                       
						<td>1개</td>       
						<td>							
							<p>190,000원<span>/월</span></p>
							<button type="button" class="btn btn-primary" onclick="location.href='/page/server/application.php';">신청하기</button>                    						
						</td>       
                    </tr>          											
                    </tbody>
                    </table> 			
					
                </div>     
				<!-- //server_bl --> 	
					

                <!-- server_fu -->   
                <div role="tabpanel" class="tab-pane" id="server_fu">      
                    
                    <div class="subtitbox">
						<h2 class="subtit">FUJITSU 서버</h2>
						<p class="subtxt">
							고객의 다양한 요구에 부응하기 위하여 HP, IBM, SAMSUNG 등 다양한 국내외의 서버 전문 브랜드의 제품을 제공하고 있습니다.<br>
							뛰어난 성능과 안정성을 자랑하는 최고의 제품을 다양한 부가서비스와 함께 저렴한 가격으로 만나보시기 바랍니다. 
						</p>
						<a href="#">사양 자세히 보기 <i class="fa fa-angle-right"></i></a>
					</div> 		
					
					
                    <table class="table tableTypeD">                    
                    <thead>
                    <tr>
						<th>브랜드 및 상품명</th>
						<th>사양</th>
						<th>회선</th>
						<th>IP</th>
						<th>신청하기</th>
                    </tr>
                    </thead>
                    <tbody>
                   <tr>
                        <td scope="row">
							<img src="/assets/images/logo_hp.png">
							<span class="badge badge-border-danger">EVENT</span><br>
							BL-1624SAS<br>(쿼드코어)</td>
                        <td>
							<span class="badge badge-danger">CPU</span> Intel® Xeon® Processor E5-2609 v2<br>
							<span class="badge badge-primary">RAM</span> 8GB DDR-III 1600 PC12800<br>
							<span class="badge badge-success">HDD</span> 300GB SAS HDD
						</td>
                        <td>10Mbps</td>                       
						<td>1개</td>       
						<td>								
							<p>190,000원<span>/월</span></p>
							<button type="button" class="btn btn-primary" onclick="location.href='/page/server/application.php';">신청하기</button>                    						
						</td>       
                    </tr>          
					<tr>
                        <td scope="row">
							<img src="/assets/images/logo_ibm.png">
							<span class="badge badge-border-danger">EVENT</span><br>
							BL-1624SAS<br>(쿼드코어)</td>
                        <td>
							<span class="badge badge-danger">CPU</span> Intel® Xeon® Processor E5-2609 v2<br>
							<span class="badge badge-primary">RAM</span> 8GB DDR-III 1600 PC12800<br>
							<span class="badge badge-success">HDD</span> 300GB SAS HDD
						</td>
                        <td>10Mbps</td>                       
						<td>1개</td>       
						<td>								
							<p>190,000원<span>/월</span></p>
							<button type="button" class="btn btn-primary" onclick="location.href='/page/server/application.php';">신청하기</button>                    						
						</td>       
                    </tr>          
					<tr>
                        <td scope="row">
							BL-1624SAS<br>(쿼드코어)</td>
                        <td>
							<span class="badge badge-danger">CPU</span> Intel® Xeon® Processor E5-2609 v2<br>
							<span class="badge badge-primary">RAM</span> 8GB DDR-III 1600 PC12800<br>
							<span class="badge badge-success">HDD</span> 300GB SAS HDD
						</td>
                        <td>10Mbps</td>                       
						<td>1개</td>       
						<td>								
							<p>190,000원<span>/월</span></p>
							<button type="button" class="btn btn-primary" onclick="location.href='/page/server/application.php';">신청하기</button>                    						
						</td>       
                    </tr>          
					<tr>
                        <td scope="row">
							BL-1624SAS<br>(쿼드코어)</td>
                        <td>
							<span class="badge badge-danger">CPU</span> Intel® Xeon® Processor E5-2609 v2<br>
							<span class="badge badge-primary">RAM</span> 8GB DDR-III 1600 PC12800<br>
							<span class="badge badge-success">HDD</span> 300GB SAS HDD
						</td>
                        <td>10Mbps</td>                       
						<td>1개</td>       
						<td>								
							<p>190,000원<span>/월</span></p>
							<button type="button" class="btn btn-primary" onclick="location.href='/page/server/application.php';">신청하기</button>                    						
						</td>       
                    </tr>          	
					<tr>
                        <td scope="row">
							<span class="badge badge-border-danger">EVENT</span><br>
							BL-1624SAS<br>(쿼드코어)</td>
                        <td>
							<span class="badge badge-danger">CPU</span> Intel® Xeon® Processor E5-2609 v2<br>
							<span class="badge badge-primary">RAM</span> 8GB DDR-III 1600 PC12800<br>
							<span class="badge badge-success">HDD</span> 300GB SAS HDD
						</td>
                        <td>10Mbps</td>                       
						<td>1개</td>       
						<td>								
							<p>190,000원<span>/월</span></p>
							<button type="button" class="btn btn-primary" onclick="location.href='/page/server/application.php';">신청하기</button>                    						
						</td>       
                    </tr>          											
                    </tbody>
                    </table>   
					
                </div>
				<!-- //server_fu -->   


                <!-- server_hp -->  
                <div role="tabpanel" class="tab-pane" id="server_hp">  
					
					<div class="subtitbox">
						<h2 class="subtit">HP 서버</h2>
						<p class="subtxt">
							고객의 다양한 요구에 부응하기 위하여 HP, IBM, SAMSUNG 등 다양한 국내외의 서버 전문 브랜드의 제품을 제공하고 있습니다.<br>
							뛰어난 성능과 안정성을 자랑하는 최고의 제품을 다양한 부가서비스와 함께 저렴한 가격으로 만나보시기 바랍니다. 
						</p>
						<a href="#">사양 자세히 보기 <i class="fa fa-angle-right"></i></a>
					</div> 			
					
					
                    <table class="table tableTypeD">                    
                    <thead>
                    <tr>
						<th>브랜드 및 상품명</th>
						<th>사양</th>
						<th>회선</th>
						<th>IP</th>
						<th>신청하기</th>
                    </tr>
                    </thead>
                    <tbody>
                   <tr>
                        <td scope="row">
							<img src="/assets/images/logo_hp.png">
							<span class="badge badge-border-danger">EVENT</span><br>
							BL-1624SAS<br>(쿼드코어)</td>
                        <td>
							<span class="badge badge-danger">CPU</span> Intel® Xeon® Processor E5-2609 v2<br>
							<span class="badge badge-primary">RAM</span> 8GB DDR-III 1600 PC12800<br>
							<span class="badge badge-success">HDD</span> 300GB SAS HDD
						</td>
                        <td>10Mbps</td>                       
						<td>1개</td>       
						<td>								
							<p>190,000원<span>/월</span></p>
							<button type="button" class="btn btn-primary" onclick="location.href='/page/server/application.php';">신청하기</button>                    						
						</td>       
                    </tr>          
					<tr>
                        <td scope="row">
							<img src="/assets/images/logo_ibm.png">
							<span class="badge badge-border-danger">EVENT</span><br>
							BL-1624SAS<br>(쿼드코어)</td>
                        <td>
							<span class="badge badge-danger">CPU</span> Intel® Xeon® Processor E5-2609 v2<br>
							<span class="badge badge-primary">RAM</span> 8GB DDR-III 1600 PC12800<br>
							<span class="badge badge-success">HDD</span> 300GB SAS HDD
						</td>
                        <td>10Mbps</td>                       
						<td>1개</td>       
						<td>								
							<p>190,000원<span>/월</span></p>
							<button type="button" class="btn btn-primary" onclick="location.href='/page/server/application.php';">신청하기</button>                    						
						</td>       
                    </tr>          
					<tr>
                        <td scope="row">
							BL-1624SAS<br>(쿼드코어)</td>
                        <td>
							<span class="badge badge-danger">CPU</span> Intel® Xeon® Processor E5-2609 v2<br>
							<span class="badge badge-primary">RAM</span> 8GB DDR-III 1600 PC12800<br>
							<span class="badge badge-success">HDD</span> 300GB SAS HDD
						</td>
                        <td>10Mbps</td>                       
						<td>1개</td>       
						<td>							
							<p>190,000원<span>/월</span></p>
							<button type="button" class="btn btn-primary" onclick="location.href='/page/server/application.php';">신청하기</button>                    						
						</td>       
                    </tr>          
					<tr>
                        <td scope="row">
							BL-1624SAS<br>(쿼드코어)</td>
                        <td>
							<span class="badge badge-danger">CPU</span> Intel® Xeon® Processor E5-2609 v2<br>
							<span class="badge badge-primary">RAM</span> 8GB DDR-III 1600 PC12800<br>
							<span class="badge badge-success">HDD</span> 300GB SAS HDD
						</td>
                        <td>10Mbps</td>                       
						<td>1개</td>       
						<td>								
							<p>190,000원<span>/월</span></p>
							<button type="button" class="btn btn-primary" onclick="location.href='/page/server/application.php';">신청하기</button>                    						
						</td>       
                    </tr>          	
					<tr>
                        <td scope="row">
							<span class="badge badge-border-danger">EVENT</span><br>
							BL-1624SAS<br>(쿼드코어)</td>
                        <td>
							<span class="badge badge-danger">CPU</span> Intel® Xeon® Processor E5-2609 v2<br>
							<span class="badge badge-primary">RAM</span> 8GB DDR-III 1600 PC12800<br>
							<span class="badge badge-success">HDD</span> 300GB SAS HDD
						</td>
                        <td>10Mbps</td>                       
						<td>1개</td>       
						<td>								
							<p>190,000원<span>/월</span></p>
							<button type="button" class="btn btn-primary" onclick="location.href='/page/server/application.php';">신청하기</button>                    						
						</td>       
                    </tr>          											
                    </tbody>
                    </table>   
					
                </div>
				<!-- //server_hp -->  


				<!-- server_ibm -->    
                <div role="tabpanel" class="tab-pane" id="server_ibm">    
					
					<div class="subtitbox">
						<h2 class="subtit">IBM 서버</h2>
						<p class="subtxt">
							고객의 다양한 요구에 부응하기 위하여 HP, IBM, SAMSUNG 등 다양한 국내외의 서버 전문 브랜드의 제품을 제공하고 있습니다.<br>
							뛰어난 성능과 안정성을 자랑하는 최고의 제품을 다양한 부가서비스와 함께 저렴한 가격으로 만나보시기 바랍니다. 
						</p>
						<a href="#">사양 자세히 보기 <i class="fa fa-angle-right"></i></a>
					</div>
					
					
                    <table class="table tableTypeD">                    
                    <thead>
                    <tr>
						<th>브랜드 및 상품명</th>
						<th>사양</th>
						<th>회선</th>
						<th>IP</th>
						<th>신청하기</th>
                    </tr>
                    </thead>
                    <tbody>
                   <tr>
                        <td scope="row">
							<img src="/assets/images/logo_hp.png">
							<span class="badge badge-border-danger">EVENT</span><br>
							BL-1624SAS<br>(쿼드코어)</td>
                        <td>
							<span class="badge badge-danger">CPU</span> Intel® Xeon® Processor E5-2609 v2<br>
							<span class="badge badge-primary">RAM</span> 8GB DDR-III 1600 PC12800<br>
							<span class="badge badge-success">HDD</span> 300GB SAS HDD
						</td>
                        <td>10Mbps</td>                       
						<td>1개</td>       
						<td>								
							<p>190,000원<span>/월</span></p>
							<button type="button" class="btn btn-primary" onclick="location.href='/page/server/application.php';">신청하기</button>                    						
						</td>       
                    </tr>          
					<tr>
                        <td scope="row">
							<img src="/assets/images/logo_ibm.png">
							<span class="badge badge-border-danger">EVENT</span><br>
							BL-1624SAS<br>(쿼드코어)</td>
                        <td>
							<span class="badge badge-danger">CPU</span> Intel® Xeon® Processor E5-2609 v2<br>
							<span class="badge badge-primary">RAM</span> 8GB DDR-III 1600 PC12800<br>
							<span class="badge badge-success">HDD</span> 300GB SAS HDD
						</td>
                        <td>10Mbps</td>                       
						<td>1개</td>       
						<td>								
							<p>190,000원<span>/월</span></p>
							<button type="button" class="btn btn-primary" onclick="location.href='/page/server/application.php';">신청하기</button>                    						
						</td>       
                    </tr>          
					<tr>
                        <td scope="row">
							BL-1624SAS<br>(쿼드코어)</td>
                        <td>
							<span class="badge badge-danger">CPU</span> Intel® Xeon® Processor E5-2609 v2<br>
							<span class="badge badge-primary">RAM</span> 8GB DDR-III 1600 PC12800<br>
							<span class="badge badge-success">HDD</span> 300GB SAS HDD
						</td>
                        <td>10Mbps</td>                       
						<td>1개</td>       
						<td>								
							<p>190,000원<span>/월</span></p>
							<button type="button" class="btn btn-primary" onclick="location.href='/page/server/application.php';">신청하기</button>                    						
						</td>       
                    </tr>          
					<tr>
                        <td scope="row">
							BL-1624SAS<br>(쿼드코어)</td>
                        <td>
							<span class="badge badge-danger">CPU</span> Intel® Xeon® Processor E5-2609 v2<br>
							<span class="badge badge-primary">RAM</span> 8GB DDR-III 1600 PC12800<br>
							<span class="badge badge-success">HDD</span> 300GB SAS HDD
						</td>
                        <td>10Mbps</td>                       
						<td>1개</td>       
						<td>								
							<p>190,000원<span>/월</span></p>
							<button type="button" class="btn btn-primary" onclick="location.href='/page/server/application.php';">신청하기</button>                    						
						</td>       
                    </tr>          	
					<tr>
                        <td scope="row">
							<span class="badge badge-border-danger">EVENT</span><br>
							BL-1624SAS<br>(쿼드코어)</td>
                        <td>
							<span class="badge badge-danger">CPU</span> Intel® Xeon® Processor E5-2609 v2<br>
							<span class="badge badge-primary">RAM</span> 8GB DDR-III 1600 PC12800<br>
							<span class="badge badge-success">HDD</span> 300GB SAS HDD
						</td>
                        <td>10Mbps</td>                       
						<td>1개</td>       
						<td>								
							<p>190,000원<span>/월</span></p>
							<button type="button" class="btn btn-primary" onclick="location.href='/page/server/application.php';">신청하기</button>                    						
						</td>       
                    </tr>          											
                    </tbody>
                    </table>               
					
                </div>
				<!-- //server_ibm -->  
            </div>		
        </div>  
		
		
		
		
    </div>
    <!-- //body-content -->  
    
     
    
    
</section>
<!-- //container -->











