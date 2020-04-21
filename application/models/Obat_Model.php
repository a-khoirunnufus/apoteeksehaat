<?php 
 
class Obat_Model extends CI_Model{	
	function get_all(){
		return $this->db->get('obat')->result();
	}

	function input_obat($data){
		return $this->db->insert('obat',$data);
	}

	function update_obat($id_obat,$data){
		$this->db->where('id_obat',$id_obat);
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
}