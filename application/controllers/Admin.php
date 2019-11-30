<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index(){
		if(!$this->session->userdata('level')){
			redirect('index');
		}else{
		$this->data['hasil'] = $this->m_crud->getUser('siswa');  
		$this->load->view('admin/v_headersekolahadmin');
		$this->load->view('crud/v_crud', $this->data); 
		$this->load->view('admin/v_footersekolahadmin');
		}
	}
	public function form_input(){
		$this->load->view('admin/v_headersekolahadmin');
		$this->load->view('form-input');
		$this->load->view('admin/v_footersekolahadmin');
	}
	public function insert(){
		$nama = $_POST['nama'];
		$tempatlahir = $_POST['tempatlahir'];
		$tgl_lahir = $_POST['tgl_lahir'];
		$bln_lahir = $_POST['bln_lahir'];
		$thn_lahir = $_POST['thn_lahir'];
		$jeniskelamin = $_POST['jeniskelamin'];
		$agama = $_POST['agama'];
		$jurusan = $_POST['jurusan'];
		$alamat = $_POST['alamat'];
		$provinsi = $_POST['provinsi'];
		$kota = $_POST['kota'];
		$kecamatan = $_POST['kecamatan'];
		$kelurahan = $_POST['kelurahan'];
		$rt = $_POST['rt'];
		$rw = $_POST['rw'];
		$nokk = $_POST['nokk'];
		$noakta = $_POST['noakta'];
		$nohp = $_POST['nohp'];
		$data = array(
			'nama' => $nama, 
			'tempat_lahir' => $tempatlahir, 
			'jurusan' => $jurusan, 
			'jenis_kelamin' => $jeniskelamin, 
			'agama' => $agama, 
			'tgl_lahir' => $tgl_lahir, 
			'bln_lahir' => $bln_lahir, 
			'thn_lahir' => $thn_lahir, 
			'alamat' => $alamat, 
			'provinsi' => $provinsi, 
			'kecamatan' => $kecamatan, 
			'kota' => $kota, 
			'kelurahan' => $kelurahan, 
			'rt' => $rt, 
			'rw' => $rw, 
			'no_kk' => $nokk, 
			'no_akta' => $noakta, 
			'no_hp' => $nohp);
		$tambah = $this->m_crud->tambahData('siswa',$data);
		if($tambah > 0){
			redirect('admin/index');
		}else{
			echo 'gagal disimpan';
		}
	}
	public function delete($id){
		$hapus = $this->m_crud->hapusData('siswa',$id);
		if($hapus > 0){
			redirect('admin/index');
		}else{
			echo 'gagal disimpan';
		}
	}
	public function form_edit($id){
		$this->data['dataEdit'] = $this->m_crud->dataEdit('siswa',$id);
		$this->load->view('admin/v_headersekolahadmin');
		$this->load->view('form-edit', $this->data);
		$this->load->view('admin/v_footersekolahadmin');
	}
	public function update($id){
		$nama = $_POST['nama'];
		$tempatlahir = $_POST['tempatlahir'];
		$tgl_lahir = $_POST['tgl_lahir'];
		$bln_lahir = $_POST['bln_lahir'];
		$thn_lahir = $_POST['thn_lahir'];
		$jeniskelamin = $_POST['jeniskelamin'];
		$agama = $_POST['agama'];
		$jurusan = $_POST['jurusan'];
		$alamat = $_POST['alamat'];
		$provinsi = $_POST['provinsi'];
		$kota = $_POST['kota'];
		$kecamatan = $_POST['kecamatan'];
		$kelurahan = $_POST['kelurahan'];
		$rt = $_POST['rt'];
		$rw = $_POST['rw'];
		$nokk = $_POST['nokk'];
		$noakta = $_POST['noakta'];
		$nohp = $_POST['nohp'];
		$berkas = $_POST['berkas'];
		$bayar = $_POST['bayar'];
		$status = $_POST['status'];
		$data = array(
			'nama' => $nama, 
			'tempat_lahir' => $tempatlahir,
			'tgl_lahir' => $tgl_lahir, 
			'bln_lahir' => $bln_lahir, 
			'thn_lahir' => $thn_lahir,  
			'jenis_kelamin' => $jeniskelamin, 
			'agama' => $agama, 
			'jurusan' => $jurusan,
			'alamat' => $alamat, 
			'provinsi' => $provinsi, 
			'kecamatan' => $kecamatan, 
			'kota' => $kota, 
			'kelurahan' => $kelurahan, 
			'rt' => $rt, 
			'rw' => $rw, 
			'no_kk' => $nokk, 
			'no_akta' => $noakta, 
			'no_hp' => $nohp,
			'berkas' => $berkas,
			'bayar' => $bayar,
			'status' => $status);
		$edit = $this->m_crud->editData('siswa',$data,$id);
		if($edit > 0){
			redirect('admin/index');
		}else{
			echo 'gagal disimpan';
		}
	}
}