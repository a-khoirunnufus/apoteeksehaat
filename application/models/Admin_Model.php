<?php 
 
class Admin_Model extends CI_Model{	
	function ubah_profil($id,$data){
		$this->db->where('id_pengguna', $id);
		return $this->db->update('pengguna',$data);
	}	
}