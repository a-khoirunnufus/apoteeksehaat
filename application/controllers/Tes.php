<?php
class Tes extends CI_Controller{
	function index(){
		$this->load->view('templates/top_template');
		$this->load->view('admin/obat');
	}
}