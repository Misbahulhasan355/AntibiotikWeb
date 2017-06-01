<?php 
 
class daftarmodel extends CI_Model{
	function input_data($data,$table){
		$this->db->get('akun');
		$this->db->insert($table,$data);
	}
}
?>