<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	function index(){
		$this->load->view('homeadmin.php');
	}
	function dokterku(){
		$this->load->view('headeradmin.php');
		$this->load->view('dokterku.php');
		$this->load->view('footeradmin.php');
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