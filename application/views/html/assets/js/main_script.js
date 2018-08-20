	

// --------------------------  메인 슬라이드 -------------------------- //

$(window).load(function(){
    
    $('.bxslider').bxSlider( {
        mode: 'horizontal',  // 가로 방향 수평 슬라이드        
        speed: 200,          // 이동 속도를 설정       
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
        pager: true          // 현재 위치 페이징 표시 여부 설정
    });
    
    //슬라이더 동작
    $('.main-slide>ul').bxSlider();    // 메인슬라이더
    $('.footer-slide>ul').bxSlider();  // 풋터슬라이더
     
    
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



	




