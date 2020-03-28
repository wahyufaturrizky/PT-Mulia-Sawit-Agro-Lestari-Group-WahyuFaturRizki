<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	
	public function __construct() {
        parent::__construct();
		$this->load->model('my_query'); 
	}

	public function index(){

		$data = [
			'content' => $this->load->view()
		];

		$this->load->view('back/layout/page');

	}

	public function logout(){


	}

	public function adms_login_page(){
		$this->load->view('back/layout/login_page');
	}

	public function do_login(){

		$username =	$this->input->post('user');
		$password = $this->input->post('pw');

		$select = "*";
		$from   = "adms";
		$where 	=	[
			'admin_email' => $username,
			'password' =>  md5($password),
		];
		$result 	=	$this->my_query->get_data($select , $from  , $where )->result();
		
		if (count($result) > 0) {	

			foreach ($result as $val) {
				
				$session['user_id']    = $val->admin_id;
				$session['user_name']  = $val->admin_fullname;
				$session['user_email'] = $val->admin_email;
				$this->session->set_userdata($session);

				$this->session->set_flashdata('msg', 'Selamat datang '.$val->admin_fullname);
				redirect('Dashboard');
					
			}

		} else {

			$this->session->set_flashdata('msg' , 'Username / Password salah , silahkan coba kembali');
			redirect('Admin');

		}
	}
}
 ?>