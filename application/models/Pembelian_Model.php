<?php 
 
class Pembelian_Model extends CI_Model{	
	function get_all(){
		$this->db->select('*')->order_by('id_pembelian',"desc");
		return $this->db->get('pembelian')->result_array();
	}
	function get_all_item(){
		return $this->db->get('item_pembelian')->result_array();
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

	function get_newid(){
		return $this->db->select('id_pembelian')->order_by('id_pembelian',"desc")->limit(1)->get('pembelian')->row_array();
	}	
}