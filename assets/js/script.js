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


function closeTopBanner(){
	//document.getElementById("topBannerArea").style.display = "none";
	$("#topBannerArea").addClass("BannerClose");
}


function openTopBanner(){
	document.getElementById("topBannerArea").style.display = "";
}


function TopBannerCheck() {
	var bannerCookie = getCookie("topBannerCheck");
	if(bannerCookie != "hide"){
		openTopBanner();
	}else{
		closeTopBanner();
	}
}


function setCookie(c_name, c_val, c_date) {
		var expire = new Date();
		var cookieDate = 1000*60*60*24 * c_date;
		expire.setTime(expire.getTime() + cookieDate);
		cookies = c_name + '=' + escape(c_val) + '; domain=blueweb.co.kr; path=/ '; 
		if(typeof c_date != 'undefined') cookies += ';expires=' + expire.toGMTString() + ';';
		document.cookie = cookies;
}


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







// --------------------------  워드프레스 슬라이드 stop play 버튼 -------------------------- //





/*

$(function () {
    $('#homeCarousel').carousel({
        interval:3000,
        pause: "false"
    });
    $('#playButton').click(function () {
        $('#homeCarousel').carousel('cycle');
    });
    $('#pauseButton').click(function () {
        $('#homeCarousel').carousel('pause');
    });
});



*/


