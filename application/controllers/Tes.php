<?php
class Tes extends CI_Controller{
	function index(){
		$this->load->view('templates/navigasi_admin');
		$this->load->view('admin/dashboard_admin');
	}
}