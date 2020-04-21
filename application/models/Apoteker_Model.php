<?php 
 
class Apoteker_Model extends CI_Model{	
	function ubah_profil($id,$data){
		$this->db->where('id', $id);
		return $this->db->update('_user',$data);
	}

	function get_all(){
		return $this->db->get_where('apoteker',array('tipe_user' => 'apoteker'))->result();
	}

	function input_apoteker($data){
		return $this->db->insert('_user',$data);
	}

	function update_apoteker($id_apoteker,$data){
		$this->db->where('id_user',$id_apoteker);
		return $this->db->update('_user',$data);
	}

	function delete_apoteker($id_apoteker){
		return $this->db->delete('_user',array('id_user' => $id_apoteker));
	}
}