<?php 
 
class Apoteker extends CI_Controller{
 
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect('login');
		}
		$this->load->model('obat_model');
		$this->load->model('supplier_model');
		$this->load->model('apoteker_model');
		$this->load->model('penjualan_model');
		$this->load->model('pembelian_model');
	}
 
 	//menu navigasi start

	function index(){
		$data['obat'] = $this->obat_model->get_all();
		$json = file_get_contents("./assets/data1.json");
		$data['json'] = json_decode($json,true);
		$this->load->view('templates/top_template');
		$this->load->view('apoteker/dashboard_apoteker',$data);
	}

	function ubah_harga_obat(){
		$data['obat'] = $this->obat_model->get_all();
		$this->load->view('templates/top_template');
		$this->load->view('apoteker/ubah_harga_obat',$data);
	}

	function kelola_penjualan(){
		$data['penjualan'] = $this->penjualan_model->get_all();
		$data['obat'] = $this->obat_model->get_all();
		$data['newid'] = $this->penjualan_model->get_newid();
		$this->load->view('templates/top_template');
		$this->load->view('apoteker/kelola_penjualan',$data);
	}

	function kelola_pembelian(){
		$data['pembelian'] = $this->pembelian_model->get_all();
		$data['obat'] = $this->obat_model->get_all();
		$data['newid'] = $this->pembelian_model->get_newid();
		$data['supplier'] = $this->supplier_model->get_all();
		$this->load->view('templates/top_template');
		$this->load->view('apoteker/kelola_pembelian',$data);
	}

	// menu navigasi end

	// update profil apoteker
	function kelola_profil($id){
		$data['pengguna'] = $this->db->get_where('pengguna',array('id_pengguna' => $id))->row_array();
		$this->session->set_userdata('nama',$data['pengguna']['nama_lengkap']);
		$this->load->view('templates/top_template');
		$this->load->view('apoteker/kelola_profil',$data);
	}

	//update harga jual obat
	function ubah_harga_jual($id_obat){
		$harga_jual = $this->input->post('harga_jual');
		$this->obat_model->ubah_harga_jual($id_obat,$harga_jual);
		redirect('apoteker/ubah_harga_obat');
	}

	//update stok obat
	function ubah_stokgudang($id_obat){
		$stok_gudang = $this->input->post('stok_gudang');
		$this->obat_model->ubah_stokgudang($id_obat,$stok_gudang);
		redirect('apoteker');
	}

	//create update delete penjualan
	function input_penjualan($id_penjualan){
		$data = array(
			'id_penjualan' => $id_penjualan,
			'nama_konsumen' => $this->input->post('nama_konsumen'),
			'id_obat' => $this->input->post('id_obat'),
			'jumlah_obat'=> $this->input->post('jumlah_obat'),
			'tanggal' => $this->input->post('tanggal'),
			'harga_total' => $this->input->post('harga_total')
		);
		$this->penjualan_model->input_penjualan($data);
		redirect('apoteker/kelola_penjualan');
	}


	//get harga obat
	function get_harga_obat($id_obat){
		return $this->obat_model->get_harga_obat($id_obat);
	}

	//create update delete pembelian
	function input_pembelian($id_pembelian){
		$data = array(
			'id_pembelian' => $id_pembelian,
			'no_faktur' => $this->input->post('no_faktur'),
			'id_obat' => $this->input->post('id_obat'),
			'jumlah_obat' => $this->input->post('jumlah_obat'),
			'tanggal' => $this->input->post('tanggal'),
			'jenis' => $this->input->post('jenis'),
			'id_supplier' => $this->input->post('id_supplier'),
			'tanggal_kadaluarsa' => $this->input->post('tanggal_kadaluarsa')
		);
		$this->pembelian_model->input_pembelian($data);
		redirect('apoteker/kelola_pembelian');
	}

	//print data obat
	function data_obat(){
		$data = $this->obat_model->get_all();
		echo json_encode($data);
	}


}