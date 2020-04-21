<?php 
 
class Pembelian_Model extends CI_Model{	
	function get_all(){
		return $this->db->get('pembelian_obat')->result();
	}
	function get_all_item(){
		return $this->db->get('item_pembelian')->result();
	}	
}