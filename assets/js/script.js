	

// --------------------------  메인 슬라이드 -------------------------- //

$(window).load(function(){
    
    $('.bxslider').bxSlider( {
        mode: 'horizontal',  // 가로 방향 수평 슬라이드        
        speed: 350,          // 이동 속도를 설정       
        moveSlides: 1,       // 슬라이드 이동시 개수
        minSlides: 4,        // 최소 노출 개수
        maxSlides: 4,        // 최대 노출 개수
        slideMargin: 0,      // 슬라이드간의 간격
        auto: true,          // 자동 실행 여부
        autoStart: true,     // 로드시 자동 표시가 시작됩니다. false 이면 "시작"컨트롤을 클릭하면 슬라이드 쇼가 시작 
        autoHover: true,     // 마우스 호버시 정지 여부
        autoControls: true,  // play/stop/pause 슬라이드 컨트롤 버튼
        controls: true,      // 이전 다음 버튼 노출 여부
        infiniteLoop: true,  // true/false 무한루프 설정
        controls: true,      // 다음-이전 컨트롤이 추가
		easing : 'linear',   // 속도
        pager: true         // 현재 위치 페이징 표시 여부 설정
	})
    
    //슬라이더 동작
    $('.main-slide>ul').bxSlider();    // 메인슬라이더
    $('.footer-slide>ul').bxSlider();  // 풋터슬라이더    
    
            
});






// --------------------------  step1~3 넘기기  -------------------------- //
$(function(){
	$("a[data-toggle='tab']").on("click",function(e){
			   e.preventDefault();
				$(this).tab('show');
				if($(e.target).attr("href")=="#step03"){
					$(".blu-content.wrapper").addClass("lastStep");
					$(".fixing").addClass("full");
				}else{
					$(".blu-content.wrapper.lastStep").removeClass("lastStep");
					$(".fixing").removeClass("full");
				}
            
        }); 
});
function tabNextStep(){
    var idx = $(".tab-pane.active").index();
    var sidname = $(".tab-content.fixing > div").eq(idx).next().attr('id');
    if(sidname != undefined){
      $('.blu-content a[href=#' + sidname+ ']').tab('show');
        if(sidname=="step03"){
            $(".blu-content.wrapper").addClass("lastStep");
                $(".fixing").addClass("full");
        }else{
            $(".blu-content.wrapper.lastStep").removeClass("lastStep");
                $(".fixing").removeClass("full");
        }
    }
    //
} 

function tabBackStep(){
    var idx = $(".tab-pane.active").index();
    var sidname = $(".tab-content.fixing > div").eq(idx).prev().attr('id');
    if(sidname != undefined){
      $('.blu-content a[href=#' + sidname+ ']').tab('show');
        if(sidname=="step01"){
            $(".blu-content.wrapper").addClass("lastStep");
                $(".fixing").addClass("full");
        }else{
            $(".blu-content.wrapper.lastStep").removeClass("lastStep");
                $(".fixing").removeClass("full");
        }
    }
    //
} 

	
	

	
// --------------------------  q&a	-------------------------- //
$(function(){
	$(".qna > li > div > h3").on("click",function(){
		if($(this).parent().hasClass("qnaActive")){
			$(this).parent().find("div").first().slideUp(300);
			$(this).parent().removeClass("qnaActive");
		}else{
			$(this).parent().find("div").first().slideDown(300);
			$(this).parent().addClass("qnaActive");
		}
	});
	
	
	
})

	





// --------------------------  popup -------------------------- //	

function winOpenDomainPage(url){
	var screenW = screen.availWidth;
	var screenH = screen.availHeight;
	var w = 700;
	var h = 800;
	var x = (screenW/2) - (w/2);
	var y = (screenH/2) - (h/2);
	var domainPopup = window.open(url,'domainPopup','width=700,height=800,left='+x+',top='+y+',scrollbars=auto,resizable=yes');
	domainPopup.focus();
}










// --------------------------  topbanner -------------------------- //

//배너 영역 닫기
function closeTopBanner(){
	//document.getElementById("topBannerArea").style.display = "none";
	$("#topBannerArea").addClass("BannerClose");
}

//배너 영역 열기
function openTopBanner(){
	document.getElementById("topBannerArea").style.display = "";
}

//다시 안보기 여부
function TopBannerCheck() {
	var bannerCookie = getCookie("topBannerCheck");
	if(bannerCookie != "hide"){
		openTopBanner();
	}else{
		closeTopBanner();
	}
}

//쿠키값 설정
function setCookie(c_name, c_val, c_date) {
		var expire = new Date();
		var cookieDate = 1000*60*60*24 * c_date;//날짜 지정
		expire.setTime(expire.getTime() + cookieDate);
		cookies = c_name + '=' + escape(c_val) + '; domain=blueweb.co.kr; path=/ '; // 한글 깨짐 막기 : escape(cValue)
		if(typeof c_date != 'undefined') cookies += ';expires=' + expire.toGMTString() + ';';
		document.cookie = cookies;
}

//쿠키값 가지고오기
function getCookie(c_name) {
	var c_array = document.cookie.split("; ");
	var c_count = c_array.length;
	var c_val = "";
	for (var i = 0; i < c_count; i++){
		c_val = "";
		c_val = c_array[i].split("=");
		if(c_val[0] == c_name){
			return c_val[1];
		}
	}
	return false;
}


$(function(){
	$("#bannerImg1").on("click",function(){
		closeTopBanner();
	});
	$("#bannerImg2").on("click",function(){
		setCookie("topBannerCheck","hide",1);
		closeTopBanner();
	});
	$(".BannerBtn").on("click",function(){
		closeTopBanner();
	});
	//다시 안보기 여부 실행
	TopBannerCheck();
})










// --------------------------  family Site -------------------------- //


var timmm = 300;
$(function(){
	$(".familySite").hover(function(){
		$(this).find(".family_bt").addClass("active");
		$(this).find("ul").fadeIn(timmm);
	},function(){
		$(this).find(".family_bt").removeClass("active");
		$(this).find("ul").fadeOut(timmm);
	});
});































