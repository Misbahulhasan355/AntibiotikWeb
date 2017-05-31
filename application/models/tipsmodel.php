<?php 
 
class tipsmodel extends CI_Model{
	function tampil_data(){
return $this->db->get('tips');
}

function input_data($data,$table){
$this->db->insert($table,$data);
}

function update_data($where,$data,$table){
$this->db->where($where);
$this->db->update($table,$data);
}
	
function hapus_data($id_tips){
$this->db->where('id_tips',$id_tips);
$this->db->delete('tips');
return;
}

function edit_data($where,$table){
return $this->db->get_where($table,$where);
}

}
?>