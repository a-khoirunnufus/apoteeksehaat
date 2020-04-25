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
		$result = $this->login_model->cek_login('pengguna',$where);
		if($result > 0){
			$data_session = array(
				'id_pengguna' => $result['id_pengguna'],
				'nama' => $result['nama_lengkap'],
				'tipe_pengguna' => $result['tipe_pengguna'],
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect($result['tipe_pengguna']);
 
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