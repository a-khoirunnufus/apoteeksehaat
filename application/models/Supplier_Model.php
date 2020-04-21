<?php 
 
class Pembelian_Model extends CI_Model{	
	function get_all(){
		return $this->db->get('supplier')->result();
	}

	function input_supplier($data){
		return $this->db->insert('supplier',$data);
	}

	function update_supplier($id_supplier,$data){
		$this->db->where('id_supplier',$id_supplier);
		return $this->db->update('supplier',$data);
	}

	function delete_supplier($id_supplier){
		return $this->db->delete('supplier',array('id_supplier' => $id_supplier));
	}	
}