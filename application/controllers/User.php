<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('doktermodel');
		$this->load->model('daruratmodel');
		$this->load->model('obatmodel');
		$this->load->model('tipsmodel');
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
		$this->doktermodel->update_data($where,$data,'dokterku');
		redirect('User/dokterku_user');
	}


	function obat_user(){
		$data['lemari'] = $this->obatmodel->tampil_data()->result();
		$this->load->view('header_user.php');
		$this->load->view('obat_user.php' , $data);
		$this->load->view('footer_user.php');
	}
	function tambahobat(){
		$data['page'] = 'obat_user.php';
		$this->load->view('header_user.php');
		$this->load->view('obat_user.php',$data);
		$this->load->view('footer_user.php');
	}
	function tambah_aksiobat(){
		$nm_obat = $this->input->post('nm_obat');
		$kegunaan = $this->input->post('kegunaan');
		$gambar_obat = $this->input->post('gambar_obat');
		$data = array(
			'nm_obat' => $nm_obat,
			'kegunaan' => $kegunaan,
			'gambar_obat' => $gambar_obat
			);
		$this->obatmodel->input_data($data , 'lemari');
		redirect('User/obat_user');
	}
	function edit_obat($id_obat){
	$where = array('id_obat' => $id_obat);
	$data['lemari'] = $this->obatmodel->edit_data($where,'lemari')->result();
	$this->load->view('header_user.php');
	$this->load->view('editobat_user.php',$data);
	$this->load->view('footer_user.php');
	}
	function update_obat(){
		$id_obat = $this->input->post('id_obat');
		$nm_obat = $this->input->post('nm_obat');
		$kegunaan = $this->input->post('kegunaan');
		$gambar_obat = $this->input->post('gambar_obat');
		$data = array(
			'nm_obat' => $nm_obat,
			'kegunaan' => $kegunaan,
			'gambar_obat' => $gambar_obat
			);
		$where = array(
		'id_obat' => $id_obat
		);
		$this->obatmodel->update_data($where,$data,'lemari');
		redirect('User/obat_user');
	}


	function tips_user(){
		$data['tips'] = $this->tipsmodel->tampil_data()->result();
		$this->load->view('header_user.php');
		$this->load->view('tips_user.php' ,$data);
		$this->load->view('footer_user.php');
	}
	function tambahtips(){
		$data['page'] = 'tips_user.php';
		$this->load->view('header_user.php');
		$this->load->view('tips_user.php',$data);
		$this->load->view('footer_user.php');
	}
	function tambah_aksitips(){
		$judul = $this->input->post('judul');
		$deskripsi = $this->input->post('deskripsi');
		$waktu = $this->input->post('waktu');
		$link = $this->input->post('link');
		$gambar = $this->input->post('gambar');
		$data = array(
			'judul' => $judul,
			'deskripsi' => $deskripsi,
			'waktu' => $waktu,
			'link' => $link,
			'gambar' => $gambar
			);
		$this->tipsmodel->input_data($data , 'tips');
		redirect('User/tips_user');
	}
	function edit_tips_user($id_tips){
	$where = array('id_tips' => $id_tips);
	$data['tips'] = $this->tipsmodel->edit_data($where,'tips')->result();
	$this->load->view('header_user.php');
	$this->load->view('edittips_user.php',$data);
	$this->load->view('footer_user.php');
	}
	function update_tips_user(){
		$id_tips = $this->input->post('id_tips');
		$judul = $this->input->post('judul');
		$deskripsi = $this->input->post('deskripsi');
		$waktu = $this->input->post('waktu');
		$link = $this->input->post('link');
		$gambar = $this->input->post('gambar');
		$data = array(
			'judul' => $judul,
			'deskripsi' => $deskripsi,
			'waktu' => $waktu,
			'link' => $link,
			'gambar' => $gambar
			);
		$where = array(
		'id_tips' => $id_tips
		);
		$this->tipsmodel->update_data($where,$data,'tips');
		redirect('User/tips_user');
	}
	function darurat_user(){
		$data['darurat'] = $this->daruratmodel->tampil_data()->result();
		$this->load->view('header_user.php');
		$this->load->view('darurat_user.php' , $data);
		$this->load->view('footer_user.php');
	}
	function tambahdarurat(){
		$data['page'] = 'darurat_user.php';
		$this->load->view('header_user.php');
		$this->load->view('darurat_user.php',$data);
		$this->load->view('footer_user.php');
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
		redirect('User/darurat_user');
	}
	function edit_darurat_user($id_dar){
	$where = array('id_dar' => $id_dar);
	$data['darurat'] = $this->daruratmodel->edit_data($where,'darurat')->result();
	$this->load->view('header_user.php');
	$this->load->view('editdarurat.php',$data);
	$this->load->view('footer_user.php');
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
		redirect('User/darurat_user');
	}
}
?>