<?php  
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require realpath(FCPATH) . '/vendor/kaleido/src/Kaleido/autoload.php';

//core 에서 MY 상속하고 있음 -- MY_ 는 고정 픽스. 변경시에는 config.php 에서 변경 해야한다
class Order extends MY_Controller 
{

	//생성자 구성
	public function __construct()	
	{
		parent::__construct();
		$this->load->model('order_model'); //common model
		$this->load->helper('pg');
	}	
	public function _remap($method) {
		$this->segs = $this->uri->segment_array();
		if ($this->input->is_ajax_request()) {
			if (method_exists($this, $method)) {
				$this -> {"{$method}"}();
			}
		} else {
			//ajax가 아니면
			if (method_exists($this, $method)) {
				$this->_header(); //내부함수 해더 호출				
				$this->{"{$method}"}();
				$this->_footer(); //내부함수 해더 호출
			} else {
				$this->err_404();
			}
			//$this->output->enable_profiler(true);
		}
	}

	//컨트롤러 시작시에 무조건 참고 한다. 생성자 호출 이후 호출됨
	public function index(){}//end index
	public function err_404(){$this->load->view('/kaleido/common/not_found');}//404	

	/**
	 * 주문 준비 - 주문서
	 */
	public function oready()
	{

		$data = [];
		$this->load->view('/order/oready',$data);
	}

	/**
	 * 주문 완료
	 */
	public function ocomplete()
	{
		
	}

	/**
	 * 주문 실패
	 */
	public function ofail()
	{
		
	}
	

	private function _header()
	{

		$this->load->view('common/head');
	}
	private function _footer()
	{
		$this->load->view('common/foot');
	}

	
}