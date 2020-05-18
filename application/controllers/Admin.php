<?php 
 
class Admin extends CI_Controller{
 
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect('login');
		}
		$this->load->model('admin_model');
		$this->load->model('obat_model');
		$this->load->model('supplier_model');
		$this->load->model('apoteker_model');
		$this->load->model('penjualan_model');
		$this->load->model('pembelian_model');
	}

	// Menu Navigasi Start
	function index(){
		$this->load->view('templates/top_template');
		$this->load->view('admin/dashboard_admin');
	}

	function kelola_profil($id){
		$data['pengguna'] = $this->db->get_where('pengguna',array('id_pengguna' => $id))->row_array();
		$this->session->set_userdata('nama',$data['pengguna']['nama_lengkap']);
		$this->load->view('templates/top_template');
		$this->load->view('admin/kelola_profil',$data);
	}

	function kelola_obat(){
		$data['obat'] = $this->obat_model->get_all();
		$data['newid'] = $this->obat_model->get_newid();
		$this->load->view('templates/top_template');
		$this->load->view('admin/kelola_obat',$data);
	}

	function kelola_supplier(){
		$data['supplier'] = $this->supplier_model->get_all();		
		$data['newid'] = $this->supplier_model->get_newid();
		$this->load->view('templates/top_template');
		$this->load->view('admin/kelola_supplier',$data);
	}

	function kelola_apoteker(){
		$data['apoteker'] = $this->apoteker_model->get_all();
		$data['newid'] = $this->apoteker_model->get_newid();
		$this->load->view('templates/top_template');
		$this->load->view('admin/kelola_apoteker',$data);
	}

	// Menu Navigasi End

	// update profil admin
	function ubah_profil($id){
		$data = array(
			'nama_lengkap' => $this->input->post('nama_lengkap'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'no_hp' => $this->input->post('no_hp'),
			'email' => $this->input->post('email')
		);

		$this->admin_model->ubah_profil($id,$data);
		redirect('admin/kelola_profil/'.$id);
	}

	//Create Update Delete Obat
	function input_obat($id_obat){
		$data = array(
			'id_obat' => $id_obat,
			'nama_obat' => $this->input->post('nama_obat'),
			'golongan_obat' => $this->input->post('golongan_obat'),
			'bentuk_obat' => $this->input->post('bentuk_obat'),
			'harga_pokok' => (int)$this->input->post('harga_pokok'),
			'isi_obat' => (int)$this->input->post('isi_obat'),
			'stok_min' => (int)$this->input->post('stok_min'),
		);
		$this->obat_model->input_obat($data);
		redirect('admin/kelola_obat');
	}

	function update_obat(){
		$data = array(
			'id_obat' => $this->input->post('id_obat'),
			'nama_obat' => $this->input->post('nama_obat'),
			'golongan_obat' => $this->input->post('golongan_obat'),
			'bentuk_obat' => $this->input->post('bentuk_obat'),
			'harga_pokok' => $this->input->post('harga_pokok'),
			'isi_obat' => $this->input->post('isi_obat'),
			'stok_min' => $this->input->post('stok_min')
		);
		$this->obat_model->update_obat($data);
		redirect('admin/kelola_obat');
	}

	function delete_obat($id_obat){
		$this->obat_model->delete_obat($id_obat);
		redirect('admin/kelola_obat');
	}

	//Create Update Delete Supplier
	function input_supplier($id_supplier){
		$data = array(
			'id_supplier' => $id_supplier,
			'nama_supplier' => $this->input->post('nama_supplier'),
			'alamat_supplier' => $this->input->post('alamat_supplier'),
			'no_telepon' => $this->input->post('no_telepon'),
			'email' => $this->input->post('email')
		);
		$this->supplier_model->input_supplier($data);
		redirect('admin/kelola_supplier');
	}

	function update_supplier(){
		$data = array(
			'id_supplier' => $this->input->post('id_supplier'),
			'nama_supplier' => $this->input->post('nama_supplier'),
			'alamat_supplier' => $this->input->post('alamat_supplier'),
			'kontak_supplier' => $this->input->post('kontak_supplier'),
			'no_telepon' => $this->input->post('no_telepon'),
			'email' => $this->input->post('email')
		);
		$this->supplier_model->update_supplier($data);
		redirect('admin/kelola_supplier');
	}

	function delete_supplier($id_supplier){
		$this->supplier_model->delete_supplier($id_supplier);
		redirect('admin/kelola_supplier');
	}

	//Create Update Delete Apoteker
	function input_apoteker($id_pengguna){
		$data = array(
			'id_pengguna' => $id_pengguna,
			'nama_lengkap' => $this->input->post('nama_lengkap'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'tipe_pengguna' => 'apoteker',
			'foto_profil' => $this->input->post('foto_profil'),
			'no_hp' => $this->input->post('no_hp'),
			'email' => $this->input->post('email')
		);
		$this->apoteker_model->input_apoteker($data);
		redirect('admin/kelola_apoteker');
	}

	function update_apoteker(){
		$data = array(
			'id_pengguna' => $this->input->post('id_pengguna'),
			'nama_lengkap' => $this->input->post('nama_lengkap'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'tipe_pengguna' => 'apoteker',
			'foto_profil' => $this->input->post('foto_profil'),
			'no_hp' => $this->input->post('no_hp'),
			'email' => $this->input->post('email')
		);
		$this->apoteker_model->update_apoteker($data);
		redirect('admin/kelola_apoteker');
	}

	function delete_apoteker($id_pengguna){
		$this->apoteker_model->delete_apoteker($id_pengguna);
		redirect('admin/kelola_apoteker');
	}




}