<script>
$(document).ready(function () {
    $('.add').click(function() {
        $('.form_post_add').submit();
    });

    $(document).on('click','.mod_btn',function(e){
        //배열타입의 시리얼라이즈 하여서 담아둔다
        //var parameter = $(".form_post").serializeArray();
        //var url = $(".form_url").val(); //호출할 주소를 담아둔다
        var url = "/cms/ajax_crud/mod";

        //액션값을 넣어준다 insert, delete, update 등을 호출 
        //하나의 api에서 액션마다로 작업을 다르게 반응 한다
        //parameter.push({ name: "action", value: "insert" });

        var data1 = $(".text1_" + $(this).attr("item")).val();
        var data2 = $(".text2_" + $(this).attr("item")).val();
        var data3 = $(".text3_" + $(this).attr("item")).val();
        
        $.ajax({
            type: "post",
            data: {"service_name": data1, "service_page": data2, "service_memo": data3, idx: $(this).attr("item") },
            async: false,
            url: url,
            dataType: "json",
            success: function(res){
                if(res.status){
                    alert("수정성공");
                }else{
                    alert("DB 에러");
                }
                //확인용으로 푸터에 빈 div 하나 넣어둠
                //실제 사용시에는 주석처리 하면 끝
            }
        })
    });
	$('.del_btn').click(function() {
		//alert($(this).attr("item"));

        $('#del_idx').val($(this).attr("item"));
        if(confirm('삭제 하시겠습니까?')){
            $('.form_post').submit();
        }
	});
});
	 
</script>

<div class="row">
<div class="col-md-1"></div>
  <div class="col-md-10">
<table class="table table-striped">
    <thead>
        <td>num</td>
        <td>서비스명</td>
        <td>주소</td>
        <td>설명</td>
    </thead>
    <tbody>
        <?php $i=1; foreach($lists as $key => $val): ?>
        <tr>
            <td><?php echo $i++;?></td>
            <td><input type="text" name="service_name" class="text1_<?php echo $val['idx'];?>" value="<?php echo $val['service_name'];?>"></td>
            <td><input type="text" name="service_page" class="text2_<?php echo $val['idx'];?>" value="<?php echo $val['service_page'];?>"></td>
            <td><textarea name="service_memo" cols="35" rows="5" class="text3_<?php echo $val['idx'];?>"><?php echo $val['service_memo'];?></textarea></td>
            <td>
                <a href="#" class="btn btn-info mod_btn" item="<?php echo $val['idx'];?>">수정</a>
                <a href="#" class="btn btn-danger del_btn" item="<?php echo $val['idx'];?>">삭제</a>
            </td>
        </tr>
        <?php endforeach;?>
</tbody>
</table>

<hr>

  
    서비스 정보를 입력해 주세요.
    
    <form action="/cms/crud/add" method="post" class="form_post_add" >
        <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">서비스명</span>
        <input type="text" class="form-control" placeholder="블루웹" name="service_name" >
        </div>
        <div class="input-group">
        <span class="input-group-addon" id="basic-addon2">주소</span>
        <input type="text" class="form-control" placeholder="blueweb.co.kr" name="service_page" aria-describedby="basic-addon2">
        </div>
        <div class="input-group">
        <span class="input-group-addon" id="basic-addon3">설명</span>
            <textarea name="service_memo" cols="105" rows="5"></textarea>        
        </div>
        <div class="input-group">
            <button type="button"  class="btn btn-info btn-lg btn-block add" > 개시 </button>            
        </div>
    </form>
    </div>
</div>



<div>
    <form action='/cms/crud/del' method='post' class='form_post'>
        <input type="hidden" name ="idx"  id ="del_idx">
    </form>
</div>