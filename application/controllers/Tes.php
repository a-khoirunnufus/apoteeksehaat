<?php
class Tes extends CI_Controller{
	function dashboard_admin(){
		$this->load->view('templates/top_template');
		$this->load->view('admin/dashboard_admin');
	}

	function obat(){
		$this->load->view('templates/top_template');
		$this->load->view('admin/obat');
	}
	function supplier(){
		$this->load->view('templates/top_template');
		$this->load->view('admin/supplier');
	}
	function apoteker(){
		$this->load->view('templates/top_template');
		$this->load->view('admin/apoteker');
	}

	function penjualan(){
		$this->load->view('templates/top_template');
		$this->load->view('apoteker/penjualan');
	}

	function pembelian(){
		$this->load->view('templates/top_template');
		$this->load->view('apoteker/pembelian');
	}
}