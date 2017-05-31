<?php 
 
class quotemodel extends CI_Model{
	function tampil_data(){
return $this->db->get('quote');
}

function input_data($data,$table){
$this->db->insert($table,$data);
}

function update_data($where,$data,$table){
$this->db->where($where);
$this->db->update($table,$data);
}
	
function hapus_data($id_quote){
$this->db->where('id_quote',$id_quote);
$this->db->delete('quote');
return;
}

function edit_data($where,$table){
return $this->db->get_where($table,$where);
}

}
?>