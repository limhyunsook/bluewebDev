<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order_model extends CI_Model {
	function __construct(){
        parent::__construct();
    }

     //단일 테이블 단일 로우 검색
     function select_one($table,$data){
        $this->db->from($table);
        $this->db->where($data);
        $result['rows']= $this->db->get()->row_array();
        return $result;
    }
	
	//선택적 테이블 검색
	function select_get($table, $data = false, $orderby = false, $limit = false){
        $this->db->from($table);
        if($data) $this->db->where($data);
		if($orderby) $this->db->order_by(key($orderby), $orderby[key($orderby)]);
		if($limit) $this->db->limit($limit);
        return $this->db->get();
    }
    
    //심플 인서트
    function insert($table,$data){
        $result['status'] =  $this->db->insert($table, $data);		
        $result['insert_id'] = $this->db->insert_id();
        return $result;
    }
    //삭제
    function delete($table,$data){		
        return $this->db->delete($table, $data); 
    }
    
	//심플 +1 
    function update_plus($table, $field, $id, $id_name){
        $this->db->set($field, $field ."+1", FALSE);		
        $this->db->where($id_name, $id);		
        $this->db->update($table);
    }
	
	//심플 업데이트
    function update($table, $field, $data, $id){
        $this->db->where($field, $id);
        $this->db->update($table, $data); 
    }
	
	//범용적인 페이지네이션
	function page_list_m($input){
		if(is_numeric($input["page"]) == false) $input["page"] = 1;
		if($input["page"] < 0) $input["page"] = 1;
		
		$limit_ofset = ($input["page"]-1) * $input["pagelist"];

		$table = $input["table"];//테이블 명으로 받아옴
		
		$this->db->select('SQL_CALC_FOUND_ROWS T1.* ',false);
		$this->db->from($table." as T1");

		if(isset($input["sfl"]) && $input["sfl"] && $input["stx"] && $input["stx"]){
			if($input["sfl"] == "GoodsName") $this->db->like("T1.GoodsName", $input["stx"]); //kakao
			if($input["sfl"] == "PayMethod") $this->db->like("T1.PayMethod", $input["stx"]); //kakao
			if($input["sfl"] == "payMethod") $this->db->like("T1.payMethod", $input["stx"]); //inicis
		}
		
		if(isset($input["sdate"]) && $input["sdate"] && $table == "kakao_pay_result") $this->db->where("T1.AuthDate >=", $input["sdate"]);
		if(isset($input["edate"]) && $input["edate"] && $table == "kakao_pay_result") $this->db->where("T1.AuthDate <=", $input["edate"]);
		if(isset($input["sdate"]) && $input["sdate"] && $table == "inicis_pay_result") $this->db->where("T1.applDate >=", $input["sdate"]);
		if(isset($input["edate"]) && $input["edate"] && $table == "inicis_pay_result") $this->db->where("T1.applDate <=", $input["edate"]);
		
		$this->db->order_by("T1.idx","desc");
		$this->db->order_by("T1.createDatetime","desc");
		
		$this->db->limit($input["pagelist"],$limit_ofset);

		$result['page_list_m']= $this->db->get()->result_array();
		$result['total_cnt'] =$this->db->query("SELECT FOUND_ROWS() AS total_cnt;")->row()->total_cnt;
		return $result;

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

        //$sql = $this->db->query('insert into test values(m_name=?,m_email=?)',false);
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