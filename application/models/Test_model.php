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


    function test_sel($stx = null,$m_name=null,$m_email=null){
        $arr['m_name'] = $m_name;
        $arr['m_email'] = $m_email;

        $this->db->insert('test',$arr);

//        $sql = $this->db->query('insert into test values(m_name=?,m_email=?)',false);
        $sql = $this->db->query('select * from test',false);
        //$this->db->select("*");
        //$this->db->from("test"); //테이블 설정
        //$sql = $this->db->get(); //쿼리 실행

        $result = [];
        if($sql->num_rows() > 0){
            //DATA 로우가 1개라도 있다면
            $result['test'] = $sql->result_array(); //인덱스 배열로 반환
            //자주쓰는 배열 생성 함수  row(), row_array(), result_array()  안에서 보통 해결된다
        }else{
            $result['test']  = [];
        }
        return $result;

    }
	
}