<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('doktermodeluser');
		$this->load->helper('url');
	}
	function index(){
		$data['username'] = $this->session->userdata('username');
		$this->load->view('homeuser.php', $data);
	}
	function dokterku_user(){
		$data['dokterku'] = $this->doktermodel->tampil_data()->result();
		$this->load->view('header_user.php');
		$this->load->view('dokterku_user.php', $data);
		$this->load->view('footer_user.php');
	}
	function tambahdokterku_user(){
		$data['page'] = 'dokterku_user.php';
		$this->load->view('header_user.php');
		$this->load->view('dokterku_user.php',$data);
		$this->load->view('footer_user.php');
	}
	function tambah_aksidokterku_user(){
		$nm_dok = $this->input->post('nm_dok');
		$spesialis = $this->input->post('spesialis');
		$telp_dok = $this->input->post('telp_dok');
		$almt_dok = $this->input->post('almt_dok');
		$gambar_dok = $this->input->post('gambar_dok');
		$data = array(
			'nm_dok' => $nm_dok,
			'spesialis' => $spesialis,
			'telp_dok' => $telp_dok,
			'almt_dok' => $almt_dok,
			'gambar_dok' => $gambar_dok
			);
		$this->doktermodel->input_data($data , 'dokterku');
		redirect('User/dokterku_user');
	}
	function hapus_dokterku_user($id_dok){
		$this->load->model('doktermodeluser');
		$this->doktermodeluser->hapus_data($id_dok);
		redirect('User/dokterku_user');
	}
	function edit_dokterku_user($id_dok){
	$where = array('id_dok' => $id_dok);
	$data['dokterku'] = $this->doktermodel->edit_data($where,'dokterku')->result();
	$this->load->view('header_user.php');
	$this->load->view('editdokter_user.php',$data);
	$this->load->view('footer_user.php');
}
	function update_dokterku_user(){
		$id_dok = $this->input->post('id_dok');
		$nm_dok = $this->input->post('nm_dok');
		$spesialis = $this->input->post('spesialis');
		$telp_dok = $this->input->post('telp_dok');
		$almt_dok = $this->input->post('almt_dok');
		$gambar_dok = $this->input->post('gambar_dok');
		$data = array(
			'nm_dok' => $nm_dok,
			'spesialis' => $spesialis,
			'telp_dok' => $telp_dok,
			'almt_dok' => $almt_dok,
			'gambar_dok' => $gambar_dok
			);
		$where = array(
		'id_dok' => $id_dok
		);
		$this->doktermodeluser->update_data($where,$data,'dokterku');
		redirect('User/dokterku_user');
	}
	function obat_user(){
		$this->load->view('header_user.php');
		$this->load->view('obat_user.php');
		$this->load->view('footer_user.php');
	}
	function tips_user(){
		$this->load->view('header_user.php');
		$this->load->view('tips_user.php');
		$this->load->view('footer_user.php');
	}
	function darurat_user(){
		$this->load->view('header_user.php');
		$this->load->view('darurat_user.php');
		$this->load->view('footer_user.php');
	}
}
?>