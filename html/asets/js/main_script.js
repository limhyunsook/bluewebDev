	









// --------------------------  메인 슬라이드 -------------------------- //


	$(window).load(function(){
		//메인 슬라이더
		$('.bxslider').bxSlider({
			 auto:true,
			 autoHover: true,
			controls:true,
			 autoControls: true,

			 useCSS: false 
		});

		//메인 슬라이더 높이
		var height = $(window).height()*0.9;
		$('.wrap .main_img .bg_box, .bx-wrapper, .bx-viewport').css({
			'height':height + 'px'
		});


		//features list 모바일 이미지
		if($(window).width() < 800){
			$('.features_list li').addClass('m_bg');
		}else{
			$('.features_list li').removeClass('m_bg');
		}
	});
	$(window).resize(function(){

		//메인 슬라이더 높이
		var height = $(window).height()*0.9;
		$('.wrap .main_img .bg_box, .bx-wrapper, .bx-viewport').css({
			'height':height + 'px'
		});
		
		//features list 모바일 이미지
		if($(window).width() < 800){
			$('.features_list li').addClass('m_bg');
		}else{
			$('.features_list li').removeClass('m_bg');
		}
		


	});











	
// --------------------------  메인 하단 슬라이드 -------------------------- //

	
	var nowbannerNo = 0;
	var rollingpause = false;
	$(function () {
		$(".footer-banner").find("nav").find("a").each(function (index) {
			$(this).hover(function () {
				$(this).addClass("selected").siblings().removeClass("selected");
				$(".footer-banner").find("ul").attr("class", "effect"+index);
				nowbannerNo = index;
			});
		});

		$(".footer-banner").hover(function(){
			rollingpause = true;
		},function(){
			rollingpause = false;
		});

		tim = window.setInterval('autorolling()',3000);
	});

	function autorolling(){
		if (!rollingpause)
		{
			nowbannerNo++;
			if (nowbannerNo>=$(".footer-banner").find("ul").find("li").length)
			{
				nowbannerNo = 0;
			}
			$(".footer-banner").find("nav").find("a").eq(nowbannerNo).addClass("selected").siblings().removeClass("selected");
			$(".footer-banner").find("ul").attr("class", "effect"+nowbannerNo);
		}
	}






