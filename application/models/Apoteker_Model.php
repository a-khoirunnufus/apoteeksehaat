<?php 
 
class Apoteker_Model extends CI_Model{	
	function ubah_profil($id,$data){
		$this->db->where('id_pengguna', $id);
		return $this->db->update('pengguna',$data);
	}

	function get_all(){
		return $this->db->get_where('pengguna',array('tipe_pengguna' => 'apoteker'))->result_array();
	}

	function input_apoteker($data){
		return $this->db->insert('pengguna',$data);
	}

	function update_apoteker($data){
		$this->db->where('id_pengguna',$data['id_pengguna']);
		return $this->db->update('pengguna',$data);
	}

	function delete_apoteker($id_apoteker){
		return $this->db->delete('pengguna',array('id_pengguna' => $id_apoteker));
	}

	function get_newid(){
		return $this->db->select('id_pengguna')->order_by('id_pengguna',"desc")->limit(1)->get('pengguna')->row_array();
	}
}