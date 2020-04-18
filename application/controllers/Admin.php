<?php 
 
class Admin extends CI_Controller{
 
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect('login');
		}
		$this->load->model('admin_model');
	}
 
	function index(){
		$this->load->view('dashboard_admin');
	}

	function kelola_profil($id){
		$data = $this->db->get_where('admin',array('id' => $id))->row_array();
		$this->load->view('kelola_profil',$data);
	}

	function ubah_profil($id){
		$data = array(
			'nama' => $this->input->post('nama'),
			'no_hp' => $this->input->post('no_hp'),
			'email' => $this->input->post('email')
		);

		$this->admin_model->ubah_profil($id,$data);
		$this->session->set_userdata('pesan','data berhasil diupdate!');
		redirect('admin/kelola_profil/'.$id);
	}
}