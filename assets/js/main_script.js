	

// --------------------------  ���� �����̵� -------------------------- //

$(window).load(function(){
    
    $('.bxslider').bxSlider( {
        mode: 'horizontal',  // ���� ���� ���� �����̵�        
        speed: 200,          // �̵� �ӵ��� ����       
        moveSlides: 1,       // �����̵� �̵��� ����
        minSlides: 4,        // �ּ� ���� ����
        maxSlides: 4,        // �ִ� ���� ����
        slideMargin: 0,      // �����̵尣�� ����
        auto: true,          // �ڵ� ���� ����
        autoStart: true,     // �ε�� �ڵ� ǥ�ð� ���۵˴ϴ�. false �̸� "����"��Ʈ���� Ŭ���ϸ� �����̵� � ���� 
        autoHover: true,     // ���콺 ȣ���� ���� ����
        autoControls: true,  // play/stop/pause �����̵� ��Ʈ�� ��ư
        controls: true,      // ���� ���� ��ư ���� ����
        infiniteLoop: true,  // true/false ���ѷ��� ����
        controls: true,      // ����-���� ��Ʈ���� �߰�
        pager: true          // ���� ��ġ ����¡ ǥ�� ���� ����
    });
    
    //�����̴� ����
    $('.main-slide>ul').bxSlider();    // ���ν����̴�
    $('.footer-slide>ul').bxSlider();  // ǲ�ͽ����̴�
     
    
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



	




