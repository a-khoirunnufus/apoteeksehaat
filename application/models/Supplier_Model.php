<?php 
 
class Pembelian_Model extends CI_Model{	
	function get_all(){
		return $this->db->get('supplier')->result();
	}	
}