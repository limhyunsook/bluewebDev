<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cms extends MY_Controller 
{
	function __construct()	{
		parent::__construct();

		$this->load-> library('session'); //세선사용
		$this->load-> library('pagination_custom_v3');
		$this->load->model('common_model');
		$this->load->helper('url');
		$this->load->helper('alert');
		$this->segs = $this->uri->segment_array();
		//$this->output->enable_profiler(true);
	}
	public function _remap($method){

		$this->segs = $this->uri->segment_array();			
		// $location = $this->session->userdata('location');		
		// $auth_lv = $this->session->userdata('auth_lv');

		// $this->load->view("/admin/common/header_admin");			
		if( method_exists($this, $method) ){
			$this->{"{$method}"}();
		}
		// $this->load->view("/admin/common/footer_admin");
	}


	
	function index()
	{
		$data = array();
		echo 'index admin';

		//$data = $this->common_model->analytics();
		//print_r($data['db']);
		//$this->load->view("/admin/index_v",$data);		
	 }//end index 	

	 function lists()
	 {
		$data = [];
		foreach($this->input->get(NULL, TRUE) as $key => $val) $input["{$key}"]  = $val;
		if(!isset($input["page"])) $input["page"] = 1;
		if(!isset($input["pagelist"])) $input["pagelist"] = 100;
		$data['input'] = $input;
		$input['table'] = "erp"; // 외부에서 테이블명을 주입

		$db_data = $this->common_model->page_list_m($input); // my  model  상속

		//print_r($db_data);
		$this->segs[3] = $this->segs[3] ?? 1;

		$link_url = "/".$this->segs[1]."/".$this->segs[2]."/".$this->segs[3]."/";
		$total_count = $db_data['total_cnt'];
		$data['total_count'] = $total_count;

		$config = $this->pagination_custom_v3->pagenation_bootstrap($input["page"], $total_count, $input["pagelist"], $link_url, $segment=4, $num_link=3);
		$config['base_url'] = base_url().$link_url;
		$config['page_query_string'] = true; //쿼리 스트링
		$config['query_string_segment'] = 'page';
		$config['display_always'] = TRUE;      
		$config['use_fixed_page'] = TRUE;
		$config['fixed_page_num'] = 10;
		$this->pagination_custom_v3->initialize($config);
		
		$data['page_nation'] = $this->pagination_custom_v3->create_links();
		$data['lists'] = $db_data['page_list_m'];


		$this->load->view("/cms/head");
		$this->load->view("/cms/lists_v",$data);
	 }

	 function ajax_crud()
	 {
		$this->segs[3] = $this->segs[3] ?? null;
		foreach($this->input->post(NULL, TRUE) as $key => $val) $input["{$key}"]  = $val;
		//print_r($input);
		$input['service_name'] = $input['service_name'] ?? null;
		//var_dump($input);

		$json = ["status"=>false];

		if(!$input['service_name']) $json["msg"] = "서비스 명은 필수입니다";
		if(!$input['idx']) $json["msg"] = "키 값이 비어있습니다.";

		$in_data = $input;
		$table = "erp";

		$where_set["field"] = "idx";
		$where_set["id"] = $input["idx"];

		$data["service_name"] = $input['service_name'];
		$data["service_page"] = $input['service_page'];
		$data["service_memo"] = $input['service_memo'];
		$db = $this->common_model->update($table, $where_set, $data);
		if($db['status']){
			$json["status"] = true;
		}else{
			$json["status"] = false;
		}

		print_r(json_encode($json));

	 }
	 function crud()
	 {

		$this->segs[3] = $this->segs[3] ?? null;
		if($this->segs[3]){

			$table = 'erp';
			foreach($this->input->post(NULL, TRUE) as $key => $val) $input["{$key}"]  = $val;
			if($this->segs[3] == 'add'){
				$input['service_name'] = $input['service_name'] ?? null;
				//var_dump($input);

				if(!$input['service_name']) alert('서비스명은 필수 입니다.');
				$in_data = $input;
				$db = $this->common_model->insert($table,$in_data);
				if($db['status']){
					alert('정상적으로 등록 되었습니다.','/cms/lists/1');
				}else{
					alert('DB 입력 미스.','/cms/lists/1');
				}
			}
			if($this->segs[3] == 'del'){
				$input['idx'] = $input['idx'] ?? null;
				$data = ['idx'=>$input['idx']];
				$db = $this->common_model->delete($table,$data);
				if($db['status']){
					alert('정상적으로 삭제 되었습니다.','/cms/lists/1');
				}else{
					alert('DB 입력 미스.','/cms/lists/1');
				}
			}

		}else{
			alert('잘못된 접근');
		}
		
		
	 }
}