<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('doktermodel');
		$this->load->model('daruratmodel');
		$this->load->model('obatmodel');
		$this->load->model('tipsmodel');
		$this->load->model('quotemodel');
		$this->load->model('akunmodel');
		$this->load->helper('url');
	}
	function index(){
		$data['username'] = $this->session->userdata('username');
		$this->load->view('homeadmin.php', $data);
	}

	//-- Akun --//
	function pengguna(){
		$data['akun'] = $this->akunmodel->tampil_data()->result();
		$this->load->view('headeradmin.php');
		$this->load->view('akunpage.php', $data);
		$this->load->view('footeradmin.php');
	}
	function hapus_akun($id_akun){
		$this->load->model('akunmodel');
		$this->akunmodel->hapus_data($id_akun);
		redirect('Admin/pengguna');
	}

								//-- DOKTERKU --//
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

				//-- OBAT --//
	function obat(){
		$data['lemari'] = $this->obatmodel->tampil_data()->result();
		$this->load->view('headeradmin.php');
		$this->load->view('obat.php' , $data);
		$this->load->view('footeradmin.php');
	}
	function tambahobat(){
		$data['page'] = 'obat.php';
		$this->load->view('headeradmin.php');
		$this->load->view('obat.php',$data);
		$this->load->view('footeradmin.php');
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
		redirect('Admin/obat');
	}
	function hapus_obat($id_obat){
		$this->load->model('obatmodel');
		$this->obatmodel->hapus_data($id_obat);
		redirect('Admin/obat');
	}
	function edit_obat($id_obat){
	$where = array('id_obat' => $id_obat);
	$data['lemari'] = $this->obatmodel->edit_data($where,'lemari')->result();
	$this->load->view('headeradmin.php');
	$this->load->view('editobat.php',$data);
	$this->load->view('footeradmin.php');
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
		redirect('Admin/obat');
	}

				//-- TIPS --//
	function tips(){
		$data['tips'] = $this->tipsmodel->tampil_data()->result();
		$this->load->view('headeradmin.php');
		$this->load->view('tips.php' ,$data);
		$this->load->view('footeradmin.php');
	}
	function tambahtips(){
		$data['page'] = 'tips.php';
		$this->load->view('headeradmin.php');
		$this->load->view('tips.php',$data);
		$this->load->view('footeradmin.php');
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
		redirect('Admin/tips');
	}
	function hapus_tips($id_tips){
		$this->load->model('tipsmodel');
		$this->tipsmodel->hapus_data($id_tips);
		redirect('Admin/tips');
	}
	function edit_tips($id_tips){
	$where = array('id_tips' => $id_tips);
	$data['tips'] = $this->tipsmodel->edit_data($where,'tips')->result();
	$this->load->view('headeradmin.php');
	$this->load->view('edittips.php',$data);
	$this->load->view('footeradmin.php');
	}
	function update_tips(){
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
		redirect('Admin/tips');
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

		//-- Hasil Tabel dan Json -->
	function tabel(){
		$data['dokterku'] = $this->doktermodel->tampil_data()->result();
		$data['quote'] = $this->quotemodel->tampil_data()->result();
		$data['tips'] = $this->tipsmodel->tampil_data()->result();
		$data['lemari'] = $this->obatmodel->tampil_data()->result();
		$data['darurat'] = $this->daruratmodel->tampil_data()->result();
		$this->load->view('headeradmin.php');
		$this->load->view('hasiltabel.php', $data);
		$this->load->view('footeradmin.php');
	}

			//-- Data Json dokterku --//
	function json_dokterku(){
		$sql = $this->db->query("
			select * from dokterku
			")->result();
		echo json_encode($sql);
	}

			//-- Data Json tips --//
	function json_tips(){
		$sql = $this->db->query("
			select * from tips
			")->result();
		echo json_encode($sql);
	}

			//-- Data Json quote --//
	function json_quote(){
		$sql = $this->db->query("
			select * from quote
			")->result();
		echo json_encode($sql);
	}

			//-- Data Json Obat --//
	function json_obat(){
		$sql = $this->db->query("
			select * from lemari
			")->result();
		echo json_encode($sql);
	}

			//-- Data Json darurat --//
	function json_darurat(){
		$sql = $this->db->query("
			select * from darurat
			")->result();
		echo json_encode($sql);
	}
}
?>