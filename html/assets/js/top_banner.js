//상단 배너 클래스
var TopBannerClass = function(){
	//배너 영역 닫기
	this.closeTopBannerArea = function(){
		closeTopBanner();
	}
	
	//배너 다시 안보기
	this.closeTopBannerCookie = function(){
		setCookie("topBannerCheck","hide",1);
		closeTopBanner();
	}
	
	//배너 영역 닫기
	var closeTopBanner = function(){
		document.getElementById("topBannerArea").style.display = "none";
	}

	//배너 영역 열기
	var openTopBanner = function(){
		document.getElementById("topBannerArea").style.display = "";
	}
	
	//쿠키값 설정
	var setCookie = function(c_name, c_val, c_date) {
		var expire = new Date();
		var cookieDate = 1000*60*60*24 * c_date;//날짜 지정
		expire.setTime(expire.getTime() + cookieDate);
		cookies = c_name + '=' + escape(c_val) + '; domain=blueweb.co.kr; path=/ '; // 한글 깨짐 막기 : escape(cValue)
		if(typeof c_date != 'undefined') cookies += ';expires=' + expire.toGMTString() + ';';
		document.cookie = cookies;
	}
	
	//쿠키값 가지고오기
	var getCookie = function(c_name) {
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
	
	//다시 안보기 여부
	var TopBannerCheck = function() {
		var bannerCookie = getCookie("topBannerCheck");
		if(bannerCookie != "hide"){
			openTopBanner();
		}else{
			return false;
		}
	}
	
	//다시 안보기 여부 실행
	TopBannerCheck();
}

var objTBC = new TopBannerClass();