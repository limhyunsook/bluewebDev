<? if (!defined('BASEPATH')) 	exit('No direct script access allowed');

require realpath(FCPATH) . '/vendor/kaleido/src/Kaleido/autoload.php';

class Payment extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this -> load -> model('common_model');
		$this -> load -> helper('form');
		$this -> load -> helper('url');
		$this -> load -> library('pagination_custom_v3'); //ci 3 version
		$this -> load -> helper('pg');
	}

	public function _remap($method) {
		$this->segs = $this->uri->segment_array();
		if ($this -> input -> is_ajax_request()) {
			if (method_exists($this, $method)) {
				$this -> {"{$method}"}();
			}
		} else {
			//ajax가 아니면
			if (method_exists($this, $method)) {
				//원활한 테스트를 위해서 일단 헤더 푸터 주석 처리..
				//$this->load->view("/kaleido/common/header"); 
				//$this->load->view("/kaleido/common/aside_left");
				$this -> {"{$method}"}();
				//$this->load->view("/kaleido/common/footer");
			} else {
				$this->err_404();
			}
			//$this->output->enable_profiler(true);
		}
	}

	function index(){$this->err_404();}//end index
	function err_404(){$this->load->view('/admin/common/not_found');}//404	
	
	//이니시스 주문 리스트
	function inicis_order_list(){
		$input = array();
		foreach($this->input->post_get(NULL, TRUE) as $key => $val) $input["{$key}"]  = $val;
		if(!isset($input["page"])) $input["page"] = 1;
		if(!isset($input["pagelist"])) $input["pagelist"] = 30;
		$data['input'] = $input;
		$input['table'] = "inicis_pay_result"; // 외부에서 테이블명을 주입

		$db_data = $this->common_model->page_list_m($input);

		$link_url = "/".$this->segs[1]."/".$this->segs[2]."/".$this->segs[3]."/";
		$total_count = $db_data['total_cnt'];
		$data['total_count'] = $total_count;

		$config = $this->pagination_custom_v3->pagenation_bootstrap($input["page"], $total_count, $input["pagelist"], $link_url, $segment=4, $num_link=3);
		$config['base_url'] = BASE_URL.$link_url;
		$config['page_query_string'] = true; //쿼리 스트링
		$config['query_string_segment'] = 'page';
		$config['display_always'] = TRUE;      
		$config['use_fixed_page'] = TRUE;
		$config['fixed_page_num'] = 10;
		$this->pagination_custom_v3->initialize($config);
		
		$data['page_nation'] = $this->pagination_custom_v3->create_links();
		$data['lists'] = $db_data['page_list_m'];
		
		$this->load->view("/admin/common/header");
		$this->load->view("/admin/common/aside_left");
		$this->load->view("/admin/analytics/inicis_order_list_v",$data);
		$this->load->view("/admin/common/footer");
		
	}
	
	//이니시스 취소 처리
	function inicis_cancls(){}
	
	//이니시스 모바일 결제 
	function inicis_m_order(){}
	
	
	
} //end controllers
