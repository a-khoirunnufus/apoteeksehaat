<?php 
 
class Penjualan_Model extends CI_Model{	
	function get_all(){
		$this->db->select('*')->order_by('id_penjualan',"desc");
		return $this->db->get('penjualan')->result_array();
	}
	function get_all_item(){
		return $this->db->get('item_penjualan')->result_array();
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

	function get_newid(){
		return $this->db->select('id_penjualan')->order_by('id_penjualan',"desc")->limit(1)->get('penjualan')->row_array();
	}	
}