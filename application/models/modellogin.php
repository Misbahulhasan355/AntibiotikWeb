<?php
defined('BASEPATH') or exit('No direct script access allowed');

class modellogin extends CI_Model{
	function cek($username,$password){
	$this->db->where('username', $username);
	$this->db->where('password', md5($password));
	return $this->db->get('akun');
	}
}
?>