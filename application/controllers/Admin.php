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

//-- DARURAT --//
	function darurat(){
		$data['darurat'] = $this->daruratmodel->tampil_data()->result();
		$this->load->view('headeradmin.php');
		$this->load->view('darurat.php' , $data);
		$this->load->view('footeradmin.php');
	}
	function tambahdarurat(){
		$data['page'] = 'darurat.php';
		$this->load->view('headeradmin.php');
		$this->load->view('darurat.php',$data);
		$this->load->view('footeradmin.php');
	}
	function tambah_aksidarurat(){
		$nm_dar = $this->input->post('nm_dar');
		$almt_dar = $this->input->post('almt_dar');
		$telp_dar = $this->input->post('telp_dar');
		$jam_kerja = $this->input->post('jam_kerja');
		$data = array(
			'nm_dar' => $nm_dar,
			'almt_dar' => $almt_dar,
			'telp_dar' => $telp_dar,
			'jam_kerja' => $jam_kerja
			);
		$this->daruratmodel->input_data($data , 'darurat');
		redirect('Admin/darurat');
	}
	function hapus_darurat($id_dar){
		$this->load->model('daruratmodel');
		$this->daruratmodel->hapus_data($id_dar);
		redirect('Admin/darurat');
	}
	function edit_darurat($id_dar){
	$where = array('id_dar' => $id_dar);
	$data['darurat'] = $this->daruratmodel->edit_data($where,'darurat')->result();
	$this->load->view('headeradmin.php');
	$this->load->view('editdarurat.php',$data);
	$this->load->view('footeradmin.php');
	}
	function update_darurat(){
		$id_dar = $this->input->post('id_dar');
		$nm_dar = $this->input->post('nm_dar');
		$almt_dar = $this->input->post('almt_dar');
		$telp_dar = $this->input->post('telp_dar');
		$jam_kerja = $this->input->post('jam_kerja');
		$data = array(
			'nm_dar' => $nm_dar,
			'almt_dar' => $almt_dar,
			'telp_dar' => $telp_dar,
			'jam_kerja' => $jam_kerja
		);
		$where = array(
		'id_dar' => $id_dar
		);
		$this->daruratmodel->update_data($where,$data,'darurat');
		redirect('Admin/darurat');
	}
	//--- QUOTE --//
	function quote(){
		$data['quote'] = $this->quotemodel->tampil_data()->result();
		$this->load->view('headeradmin.php');
		$this->load->view('quote.php', $data);
		$this->load->view('footeradmin.php');
	}
	function tambahquote(){
		$data['page'] = 'quote.php';
		$this->load->view('headeradmin.php');
		$this->load->view('quote.php',$data);
		$this->load->view('footeradmin.php');
	}
	function tambah_aksiquote(){
		$nm_quote = $this->input->post('nm_quote');
		$data = array(
			'nm_quote' => $nm_quote
			);
		$this->quotemodel->input_data($data , 'quote');
		redirect('Admin/quote');
	}
	function hapus_quote($id_quote){
		$this->load->model('quotemodel');
		$this->quotemodel->hapus_data($id_quote);
		redirect('Admin/quote');
	}
	function edit_quote($id_quote){
	$where = array('id_quote' => $id_quote);
	$data['quote'] = $this->tipsmodel->edit_data($where,'quote')->result();
	$this->load->view('headeradmin.php');
	$this->load->view('editquote.php',$data);
	$this->load->view('footeradmin.php');
	}
	function update_quote(){
		$id_quote = $this->input->post('id_quote');
		$nm_quote = $this->input->post('nm_quote');
		$data = array(
			'nm_quote' => $nm_quote
			);
		$where = array(
		'id_quote' => $id_quote
		);
		$this->quotemodel->update_data($where,$data,'quote');
		redirect('Admin/quote');
	}
}
?>