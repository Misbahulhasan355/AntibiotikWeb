<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('doktermodel');
		$this->load->helper('url');
	}
	function index(){
		$data['username'] = $this->session->userdata('username');
		$this->load->view('homeadmin.php', $data);
	}
	function dokterku(){
		$data['dokterku'] = $this->doktermodel->tampil_data()->result();
		$this->load->view('headeradmin.php');
		$this->load->view('dokterku.php', $data);
		$this->load->view('footeradmin.php');
	}
	function tambahdokterku(){
		$data['page'] = 'dokterku.php';
		$this->load->view('headeradmin.php');
		$this->load->view('dokterku.php',$data);
		$this->load->view('footeradmin.php');
	}
	function tambah_aksidokterku(){
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
		redirect('Admin/dokterku');
	}
	function hapus_dokterku($id_dok){
		$this->load->model('doktermodel');
		$this->doktermodel->hapus_data($id_dok);
		redirect('Admin/dokterku');
	}
	function edit_dokterku($id_dok){
	$where = array('id_dok' => $id_dok);
	$data['dokterku'] = $this->doktermodel->edit_data($where,'dokterku')->result();
	$this->load->view('headeradmin.php');
	$this->load->view('editdokter.php',$data);
	$this->load->view('footeradmin.php');
}
	function update_dokterku(){
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
		$this->doktermodel->update_data($where,$data,'dokterku');
		redirect('Admin/dokterku');
	}
	function obat(){
		$this->load->view('headeradmin.php');
		$this->load->view('obat.php');
		$this->load->view('footeradmin.php');
	}
	function tips(){
		$this->load->view('headeradmin.php');
		$this->load->view('tips.php');
		$this->load->view('footeradmin.php');
	}
	function darurat(){
		$this->load->view('headeradmin.php');
		$this->load->view('darurat.php');
		$this->load->view('footeradmin.php');
	}
	function quote(){
		$this->load->view('headeradmin.php');
		$this->load->view('quote.php');
		$this->load->view('footeradmin.php');
	}
}
?>