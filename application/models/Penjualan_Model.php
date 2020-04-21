<?php 
 
class Penjualan_Model extends CI_Model{	
	function get_all(){
		return $this->db->get('penjualan_obat')->result();
	}
	function get_all_item(){
		return $this->db->get('item_penjualan')->result();
	}

	function input_penjualan($data){
		return $this->db->insert('penjualan',$data);
	}

	function input_item_penjualan($data){
		return $this->db->insert('item_penjualan',$data);
	}

	function delete_item_penjualan($data){
		return $this->db->delete('item_penjualan',$data);
	}	
}