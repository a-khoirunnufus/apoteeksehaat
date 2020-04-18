<?php 
 
class Login extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('login_model');
	}
 
	function index(){
		$this->load->view('login_page');
	}
 
	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->login_model->cek_login("pengguna",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect('admin');
 
		}else{
			$this->session->set_userdata(array('pesan'=>"Username dan password salah !"));
			redirect('login');
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
}