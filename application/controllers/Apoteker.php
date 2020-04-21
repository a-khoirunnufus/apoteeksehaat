<?php 
 
class Apoteker extends CI_Controller{
 
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect('login');
		}
		$this->load->model('obat_model');
		$this->load->model('penjualan_model');
		$this->load->model('pembelian_model');
	}
 
 	//menu navigasi start

	function index(){
		$this->load->view('dashboard_apoteker');
	}

	function menu_penjualan(){
		$this->load->view('penjualan');
	}

	function menu_pembelian(){
		$this->load->view('pembelian');
	}

	// menu navigasi end

	// update profil apoteker
	function ubah_profil($id){
		$data = array(
			'nama_lengkap' => $this->input->post('nama'),
			'foto_profil' => $this->input->post('foto_profil'),
			'no_hp' => $this->input->post('no_hp'),
			'email' => $this->input->post('email')
		);

		$this->apoteker_model->ubah_profil($id,$data);
		redirect('apoteker/menu_kelola_profil/'.$id);
	}

	//update harga jual obat
	function update_harga_jual(){
		$id_obat = $this->input->post('id_obat');
		$harga_jual = $this->input->post('harga_jual');
		$this->obat_model->update_harga_jual($id_obat,$harga_jual);
		redirect('apoteker');
	}

	//update stok obat
	function update_stok_obat(){
		$data = array(
			'id_obat' => $this->input->post('id_obat'),
			'stok_obat' => $this->input->post('stok_obat')
		);
		$this->obat_model->update_stok_obat($data['id_obat'],$data['stok_obat']);
		redirect('apoteker');
	}

	//create update delete penjualan
	function input_penjualan(){
		$data = array(
			'id_penjualan' => $this->load->post('id_penjualan'),
			'nama_konsumen' => $this->load->post('nama_konsumen'),
			'tanggal_jual' => $this->load->post('tanggal_jual'),
			'harga_total' => $this->load->post('harga_total')
		);
		$this->penjualan_model->input_penjualan($data);
		redirect('apoteker/menu_penjualan')
	}

	// input dan delte item penjualan obat
	function input_item_penjualan(){
		$data = array(
			'id_penjualan' => $this->load->post('id_penjualan'),
			'id_obat' => $this->load->post('id_obat'),
			'jumlah_obat' => $this->load->post('jumlah_obat')
		);
		$this->item_penjualan_model->input_item_penjualan($data);
	} 

	function delete_item_penjualan(){
		$data = array(
			'id_penjualan' => $this->load->post('id_penjualan'),
			'id_obat' => $this->load->post('id_obat')
		);
		$this->item_penjualan_model->delete_item_penjualan($data);
	}

	//get harga obat
	function get_harga_obat($id_obat){
		return $this->obat_model->get_harga_obat($id_obat);
	}

	//create update delete pembelian
	function input_pembelian(){
		$data = array(
			'id_pembelian' => $this->input->post('id_pembelian'),
			'no_faktur' => $this->input->post('no_faktur'),
			'tgl_beli' => $this->input->post('tgl_beli'),
			'jenis_pembelian' => $this->input->post('jenis_pembelian'),
			'id_supplier' => $this->input->post('id_supplier'),
			'tgl_expired' => $this->input->post('tgl_expired')
		);
		$this->pembelian_model->input_pembelian($data['id_pembelian'],$data);
		redirect('apoteker/menu_pembelian')
	}

	// input dan delte item penjualan obat
	function input_item_pembelian(){
		$data = array(
			'id_pembelian' => $this->load->post('id_pembelian'),
			'id_obat' => $this->load->post('id_obat'),
			'jumlah_obat' => $this->load->post('jumlah_obat')
		);
		$this->item_pembelian_model->input_item_pembelian($data);
	} 

	function delete_item_pembelian(){
		$data = array(
			'id_pembelian' => $this->load->post('id_pembelian'),
			'id_obat' => $this->load->post('id_obat')
		);
		$this->item_pembelian_model->delete_item_pembelian($data['id_pembelian'],$data['id_obat']);
	}


}