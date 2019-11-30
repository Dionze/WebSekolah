<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	function index(){
		if(!$this->session->userdata('level')){
			redirect('index');
		}else{
			$this->load->view('siswa/v_headersekolahsiswa');
			$this->load->view('siswa/v_indexsekolahsiswa');
			$this->load->view('siswa/v_footersekolahsiswa');
		}
	}
	function sejarah(){  
		$this->load->view('siswa/v_headersekolahsiswa'); 
		$this->load->view('siswa/v_sejarahsiswa'); 
		$this->load->view('siswa/v_footersekolahsiswa');  
	}
	function visimisi(){  
 		$this->load->view('siswa/v_headersekolahsiswa'); 
 		$this->load->view('siswa/v_visimisisiswa'); 
  		$this->load->view('siswa/v_footersekolahsiswa');
	}
	function manajemenmutu(){ 
		$this->load->view('siswa/v_headersekolahsiswa'); 
		$this->load->view('siswa/v_manajemenmutusiswa'); 
		$this->load->view('siswa/v_footersekolahsiswa');
	}
	function ekstrakulikuler(){  
		$this->load->view('siswa/v_headersekolahsiswa'); 
 		$this->load->view('siswa/v_ekstrakulikulersiswa'); 
  		$this->load->view('siswa/v_footersekolahsiswa');
	}
	function registrasisiswa(){ 
		$this->load->view('siswa/v_headersekolahsiswa'); 
		$this->load->view('v_registrasisiswa'); 
		$this->load->view('v_footersekolah');
	}
}
