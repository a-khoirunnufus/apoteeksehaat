<?php 
 
class Admin extends CI_Controller{
 
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect('login');
		}
		$this->load->model('admin_model');
		$this->load->model('obat_model');
	}

	// Menu Navigasi Start
	function index(){
		$this->load->view('templates/navigasi_admin');
		$this->load->view('admin/dashboard_admin');
	}

	function menu_kelola_profil($id){
		$data = $this->db->get_where('admin',array('id' => $id))->row_array();
		$this->load->view('templates/navigasi_admin');
		$this->load->view('kelola_profil',$data);
	}

	function menu_kelola_obat(){
		$data = $this->obat_model->get_all();
		$this->load->view('templates/navigasi_admin');
		$this->load->view('admin/kelola_obat',$data);
	}

	function menu_kelola_supplier(){
		$data = $this->supplier_model->get_all();
		$this->load->view('templates/navigasi_admin');
		$this->load->view('admin/kelola_obat',$data);
	}

	function menu_kelola_apoteker(){
		$data = $this->apoteker_model->get_all();
		$this->load->view('templates/navigasi_admin');
		$this->load->view('admin/kelola_obat',$data);
	}

	function menu_riwayat_pembelian(){
		$data = $this->pembelian_model->get_all();
		$this->load->view('templates/navigasi_admin');
		$this->load->view('admin/kelola_obat',$data);
	}

	function menu_riwayat_penjualan(){
		$data = $this->penjualan_model->get_all();
		$this->load->view('templates/navigasi_admin');
		$this->load->view('admin/kelola_obat',$data);
	}

	// Menu Navigasi End

	// update profil admin
	function ubah_profil($id){
		$data = array(
			'nama_lengkap' => $this->input->post('nama'),
			'foto_profil' => $this->input->post('foto_profil'),
			'no_hp' => $this->input->post('no_hp'),
			'email' => $this->input->post('email')
		);

		$this->admin_model->ubah_profil($id,$data);
		redirect('admin/menu_kelola_profil/'.$id);
	}

	//Create Update Delete Obat
	function input_obat(){
		$data = array(
			'id_obat' => $this->input->post('id_obat'),
			'nama_obat' => $this->input->post('nama_obat'),
			'gol_obat' => $this->input->post('gol_obat'),
			'bentuk_obat' => $this->input->post('bentuk_obat'),
			'harga_pokok' => $this->input->post('harga_pokok'),
			'harga_jual' => $this->input->post('harga_jual'),
			'isi_obat' => $this->input->post('isi_obat'),
			'stok_min' => $this->input->post('stok_min')
		);
		$this->obat_model->input_obat($data);
		redirect('admin/menu_kelola_obat');
	}

	function update_obat(){
		$data = array(
			'id_obat' => $this->input->post('id_obat'),
			'nama_obat' => $this->input->post('nama_obat'),
			'gol_obat' => $this->input->post('gol_obat'),
			'bentuk_obat' => $this->input->post('bentuk_obat'),
			'harga_pokok' => $this->input->post('harga_pokok'),
			'harga_jual' => $this->input->post('harga_jual'),
			'isi_obat' => $this->input->post('isi_obat'),
			'stok_min' => $this->input->post('stok_min')
		);
		$this->obat_model->update_obat($data['id_obat'],$data);
		redirect('admin/menu_kelola_obat');
	}

	function delete_obat($id_obat){
		$this->obat_model->delete_obat($id_obat);
		redirect('admin/menu_kelola_obat');
	}

	//Create Update Delete Supplier
	function input_supplier(){
		$data = array(
			'id_supplier' => $this->input->post('id_supplier'),
			'nama_supplier' => $this->input->post('nama_supplier'),
			'alamat_supplier' => $this->input->post('alamat_supplier'),
			'kontak_supplier' => $this->input->post('kontak_supplier')
		);
		$this->supplier_model->input_supplier($data);
		redirect('admin/menu_kelola_supplier');
	}

	function update_supplier(){
		$data = array(
			'id_supplier' => $this->input->post('id_supplier'),
			'nama_supplier' => $this->input->post('nama_supplier'),
			'alamat_supplier' => $this->input->post('alamat_supplier'),
			'kontak_supplier' => $this->input->post('kontak_supplier')
		);
		$this->supplier_model->update_supplier($data['id_obat'],$data);
		redirect('admin/menu_kelola_supplier');
	}

	function delete_supplier($id_supplier){
		$this->supplier_model->delete_supplier($id_supplier);
		redirect('admin/menu_kelola_supplier');
	}

	//Create Update Delete Apoteker
	function input_apoteker(){
		$data = array(
			'id_user' => $this->input->post('id_user'),
			'nama_lengkap' => $this->input->post('nama_lengkap'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'tipe_user' => $this->input->post('tipe_user'),
			'foto_profil' => $this->input->post('foto_profil'),
			'no_hp' => $this->input->post('no_hp'),
			'email' => $this->input->post('email')
		);
		$this->apoteker_model->input_apoteker($data);
		redirect('admin/menu_kelola_apoteker');
	}

	function update_apoteker(){
		$data = array(
			'id_user' => $this->input->post('id_user'),
			'nama_lengkap' => $this->input->post('nama_lengkap'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'tipe_user' => $this->input->post('tipe_user'),
			'foto_profil' => $this->input->post('foto_profil'),
			'no_hp' => $this->input->post('no_hp'),
			'email' => $this->input->post('email')
		);
		$this->apoteker_model->update_apoteker($data['id_user'],$data);
		redirect('admin/menu_kelola_apoteker');
	}

	function delete_apoteker($id_user){
		$this->apoteker_model->delete_apoteker($id_user);
		redirect('admin/menu_kelola_apoteker');
	}




}