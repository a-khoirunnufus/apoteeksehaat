<?php 
 
class Apoteker_Model extends CI_Model{	
	function ubah_profil($id,$data){
		$this->db->where('id', $id);
		return $this->db->update('_user',$data);
	}

	function get_all(){
		return $this->db->get_where('apoteker',array('tipe_user' => 'apoteker'))->result();
	}	
}