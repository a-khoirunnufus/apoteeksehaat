<?php
class Tes extends CI_Controller{
	function dashboard_admin(){
		$this->load->view('templates/top_template');
		$this->load->view('admin/dashboard_admin');
	}

	function index(){
		$this->load->view('loginn');
	}

	function admin($halaman){
		$this->load->view('templates/top_template');
		$this->load->view('admin/'.$halaman);
	}

	function apoteker($halaman){
		$this->load->view('templates/top_template');
		$this->load->view('apoteker/'.$halaman);
	}
}