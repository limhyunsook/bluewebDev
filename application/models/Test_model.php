<?php
class Test_model extends CI_Model {
	function __construct(){
        parent::__construct();
    }

    public function member_list($stx = null){

        $this->db->select("*");
        $this->db->from("tb_member"); //테이블 설정
        if($stx) $this->db->where("userId",$stx);  //조건문 추가
        $sql = $this->db->get(); //쿼리 실행
        
        $result = array();
        if($sql->num_rows() > 0){
            //DATA 로우가 1개라도 있다면
            $result['member'] = $sql->result_array(); //인덱스 배열로 반환
            //자주쓰는 배열 생성 함수  row(), row_array(), result_array()  안에서 보통 해결된다
        }else{
            $result['member']  = array();
        }
        return $result;
    }
	
}