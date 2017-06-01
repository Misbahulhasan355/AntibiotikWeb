<?php
defined('BASEPATH') or exit('No direct scrit access allowed');

class daftar extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	public function index(){
	$this->load->view('daftar.php');
	}

	public function tambah_akun(){
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));
		$this->load->model('daftarmodel');
		$data = array(
			'username' => $username,
			'password' => $password,
			'email' => $email
		);
		$this->daftarmodel->input_data($data, 'akun');
		redirect('daftar');
	}
	
}
?>