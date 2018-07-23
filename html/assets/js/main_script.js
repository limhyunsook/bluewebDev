	









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

    //슬라이더 동작
    $('.main-slide>ul').bxSlider(); //메인슬라이더
    $('.footer-slide>ul').bxSlider();  // 풋터슬라이더


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











	




