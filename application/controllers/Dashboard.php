<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	public function __construct() {
        parent::__construct();
		$this->load->model('my_query'); 
	}

	public function index(){
		$url = [
			'0'=> base_url(),
		];
		$breadcrumb = [
			'0'=>'Dashboard PT Mulia Sawit Agro Lestari Group' ,
		];

		$data = [
			'title' => 'Dashboard' ,
			'breadcrumb' => $breadcrumb , 'b_url' => $url,
			'content' => $this->load->view('back/dashboard/index' ,'',true),
		];
		$this->load->view('back/layout/page'  , $data);
	}


}
 ?>