<?php 
 
class Obat_Model extends CI_Model{	
	function get_all(){
		return $this->db->get('obat')->result_array();
	}

	function input_obat($data){
		return $this->db->insert('obat',$data);
	}

	function update_obat($data){
		$this->db->where('id_obat',$data['id_obat']);
		return $this->db->update('obat',$data);
	}

	function delete_obat($id_obat){
		return $this->db->delete('obat',array('id_obat' => $id_obat));
	}

	function update_harga_jual($id_obat,$harga_jual){
		$this->db->where('id_obat',$id_obat);
		return $this->db->update('obat',array('harga_jual' => $harga_jual));
	}

	function update_stok_obat($id_obat,$stok_obat){
		$this->db->where('id_obat',$id_obat);
		return $this->db->update('obat',array('stok_gudang' => $stok_obat));
	}

	function get_newid(){
		return $this->db->select('id_obat')->order_by('id_obat',"desc")->limit(1)->get('obat')->row_array();
	}
}