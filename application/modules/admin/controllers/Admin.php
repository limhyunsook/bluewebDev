<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends MY_Controller 
{
	function __construct()	{
		parent::__construct();

		$this->load-> library('session'); //세선사용
		$this->load-> library('pagination_custom_v3');
		$this->load->model('common_model');
		$this->segs = $this->uri->segment_array();
		//$this->output->enable_profiler(true);
	}
	public function _remap($method){

		$this->segs = $this->uri->segment_array();			
		$location = $this->session->userdata('location');		
		$auth_lv = $this->session->userdata('auth_lv');

		$this->load->view("/admin/common/header_admin");			
		if( method_exists($this, $method) ){
			$this->{"{$method}"}();
		}
		$this->load->view("/admin/common/footer_admin");
	}
	
	function index()
	{
		$data = array();
		//$data = $this->common_model->analytics();
		//print_r($data['db']);
		$this->load->view("/admin/index_v",$data);		
 	}//end index 	

 	
}

	
