<?php 
 
class Pembelian_Model extends CI_Model{	
	function get_all(){
		return $this->db->get('pembelian_obat')->result();
	}
	function get_all_item(){
		return $this->db->get('item_pembelian')->result();
	}
	function input_pembelian($data){
		return $this->db->insert('pembelian',$data);
	}

	function input_item_pembelian($data){
		return $this->db->insert('item_pembelian',$data);
	}

	function delete_item_pembelian($data){
		return $this->db->delete('item_pembelian',$data);
	}	
}