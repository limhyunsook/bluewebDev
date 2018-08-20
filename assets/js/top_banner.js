//��� ��� Ŭ����
var TopBannerClass = function(){
	//��� ���� �ݱ�
	this.closeTopBannerArea = function(){
		closeTopBanner();
	}
	
	//��� �ٽ� �Ⱥ���
	this.closeTopBannerCookie = function(){
		setCookie("topBannerCheck","hide",1);
		closeTopBanner();
	}
	
	//��� ���� �ݱ�
	var closeTopBanner = function(){
		document.getElementById("topBannerArea").style.display = "none";
	}

	//��� ���� ����
	var openTopBanner = function(){
		document.getElementById("topBannerArea").style.display = "";
	}
	
	//��Ű�� ����
	var setCookie = function(c_name, c_val, c_date) {
		var expire = new Date();
		var cookieDate = 1000*60*60*24 * c_date;//��¥ ����
		expire.setTime(expire.getTime() + cookieDate);
		cookies = c_name + '=' + escape(c_val) + '; domain=blueweb.co.kr; path=/ '; // �ѱ� ���� ���� : escape(cValue)
		if(typeof c_date != 'undefined') cookies += ';expires=' + expire.toGMTString() + ';';
		document.cookie = cookies;
	}
	
	//��Ű�� ���������
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
	
	//�ٽ� �Ⱥ��� ����
	var TopBannerCheck = function() {
		var bannerCookie = getCookie("topBannerCheck");
		if(bannerCookie != "hide"){
			openTopBanner();
		}else{
			return false;
		}
	}
	
	//�ٽ� �Ⱥ��� ���� ����
	TopBannerCheck();
}

var objTBC = new TopBannerClass();