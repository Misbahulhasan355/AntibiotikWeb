<?php
defined('BASEPATH') or exit('No direct scrit access allowed');

class login extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	public function index(){
	$this->load->view('login.php');
	}
	public function masuk(){
	$username = $this->input->post('username');
	$password = $this->input->post('password');
	$this->load->model('modellogin');
	$cek = $this->modellogin->cek($username, $password);
	if($cek->num_rows() == 1){
		foreach($cek->result() as $data){
		$sess_data['id_akun'] = $data->id_akun;
		$sess_data['username'] = $data->username;
		$sess_data['id_jenis_user'] = $data->id_jenis_user;
		$this->session->set_userdata($sess_data);
		}
		if($this->session->userdata('id_jenis_user') == '1'){
		redirect('Admin');
		}
		elseif($this->session->userdata('id_jenis_user') == '0'){
		redirect('User');
		}
	}
	else{
	$this->session->set_flashdata('pesan', 'Maaf, Kombinasi Username dengan Password salah.');
	redirect('login');
	}
	}
	public function keluar(){
	$this->session->sess_destroy();
	redirect('login');
	}
}
?>