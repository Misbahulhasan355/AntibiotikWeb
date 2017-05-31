<?php 
 
class doktermodel extends CI_Model{
	function tampil_data(){
return $this->db->get('dokterku');
}

function input_data($data,$table){
$this->db->insert($table,$data);
}

function update_data($where,$data,$table){
$this->db->where($where);
$this->db->update($table,$data);
}
	
function hapus_data($id_dok){
$this->db->where('id_dok',$id_dok);
$this->db->delete('dokterku');
return;
}

function edit_data($where,$table){
return $this->db->get_where($table,$where);
}

}
?>