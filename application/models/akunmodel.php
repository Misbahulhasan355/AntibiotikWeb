<?php 
 
class akunmodel extends CI_Model{
	function tampil_data(){
return $this->db->query("SELECT * FROM akun WHERE id_jenis_user='0' ");;
}

function hapus_data($id_akun){
$this->db->where('id_dok',$id_akun);
$this->db->delete('akun');
return;
}

}
?>