<?php 
defined('BASEPATH') or exit ('no direct script access allowed');
class Websekolah extends CI_Controller{
		  function __construct(){ 
					parent::__construct();
		} 
		public function index(){
		 		$this->load->view('v_headersekolah');
		 		$this->load->view('v_indexsekolah');
		 		$this->load->view('v_footersekolah');
		}
		public function sejarah(){  
		 		$this->load->view('v_headersekolah'); 
		 		$this->load->view('v_sejarah'); 
		  		$this->load->view('v_footersekolah');  
		}
		public function visimisi(){  
		 		$this->load->view('v_headersekolah'); 
		 		$this->load->view('v_visimisi'); 
		  		$this->load->view('v_footersekolah');
		}
		public function manajemenmutu(){ 
		 		$this->load->view('v_headersekolah'); 
		 		$this->load->view('v_manajemenmutu'); 
		  		$this->load->view('v_footersekolah');
		}
		public function ekstrakulikuler(){  
		 		$this->load->view('v_headersekolah'); 
		 		$this->load->view('v_ekstrakulikuler'); 
		  		$this->load->view('v_footersekolah');
		}
		public function persyaratan(){  
		 		$this->load->view('v_headersekolah'); 
		 		$this->load->view('v_persyaratan'); 
				$this->load->view('v_footersekolah');
		}
		public function registrasi(){ 
				$this->load->view('v_headersekolah'); 
				$this->load->view('v_registrasi'); 
				$this->load->view('v_footersekolah');
		}
		public function insert(){
		$data = array('nama' => $this->input->post('nama',true),
					  'tempat_lahir' => $this->input->post('tempatlahir',true),
					  'jurusan' => $this->input->post('jurusan',true),
					  'jenis_kelamin' => $this->input->post('jeniskelamin',true),
					  'agama' => $this->input->post('agama',true),
					  'tgl_lahir' => $this->input->post('tgl_lahir',true),
					  'bln_lahir' => $this->input->post('bln_lahir',true),
					  'thn_lahir' => $this->input->post('thn_lahir',true),
			          'alamat' => $this->input->post('alamat',true),
		              'provinsi' => $this->input->post('provinsi',true),
	                  'kecamatan' => $this->input->post('kecamatan',true),
                      'kota' => $this->input->post('kota',true),
                      'kelurahan' => $this->input->post('kelurahan',true),
                      'rt' => $this->input->post('rt',true),
                      'rw' => $this->input->post('rw',true),
                      'no_kk' => $this->input->post('nokk',true),
                      'no_akta' => $this->input->post('noakta',true),
                      'no_hp' => $this->input->post('nohp',true));
		$insert = $this->m_sekolah->prosesinsert('siswa',$data);
		if($insert>0){
			$this->session->set_flashdata('sukses','*****Data Berhasil Disimpan******');
			 redirect('websekolah/berhasil');
		}else{
			echo 'gagal';
		}
	}
		public function login(){
			$this->load->view('v_headersekolah');
			$this->load->view('v_login');
			$this->load->view('v_footersekolah');
	}
		function proseslogin(){
			$email_user = $this->input->post('email',true);
			$password_user = $this->input->post('password',true);
			$cek = $this->m_sekolah->ceklogin($email_user, $password_user);
			$tes = ($cek);
			if($tes > 0){
				$data_login = $this->m_sekolah->ceklogin($email_user, $password_user);
				$level = $data_login->level;
				$data = array('level' => $level);
				$this->session->set_userdata($data);
				if($level == 'admin'){
					redirect('admin');
				}elseif($level == 'siswa'){
					redirect('siswa');
				}
			}else{
				echo 'gagal login';
		}
	}
	public function insertsiswa(){
		$data = array('nama' => $this->input->post('nama',true),
					  'tempat_lahir' => $this->input->post('tempatlahir',true),
					  'jurusan' => $this->input->post('jurusan',true),
					  'jenis_kelamin' => $this->input->post('jeniskelamin',true),
					  'agama' => $this->input->post('agama',true),
					  'tgl_lahir' => $this->input->post('tgl_lahir',true),
					  'bln_lahir' => $this->input->post('bln_lahir',true),
					  'thn_lahir' => $this->input->post('thn_lahir',true),
			          'alamat' => $this->input->post('alamat',true),
		              'provinsi' => $this->input->post('provinsi',true),
	                  'kecamatan' => $this->input->post('kecamatan',true),
                      'kota' => $this->input->post('kota',true),
                      'kelurahan' => $this->input->post('kelurahan',true),
                      'rt' => $this->input->post('rt',true),
                      'rw' => $this->input->post('rw',true),
                      'no_kk' => $this->input->post('nokk',true),
                      'no_akta' => $this->input->post('noakta',true),
                      'no_hp' => $this->input->post('nohp',true));
		$insert = $this->m_sekolah->prosesinsert('siswa',$data);
		if($insert>0){
			$this->session->set_flashdata('sukses','*****Data Berhasil Disimpan******');
			 redirect('siswa/registrasisiswa');
		}else{
			echo 'gagal';
		}
	}
	public function berhasil(){  
		 		$this->load->view('v_headersekolah'); 
		 		$this->load->view('v_berhasil'); 
				$this->load->view('v_footersekolah');
	}
	public function daftarsiswa(){
		$this->data['hasil'] = $this->m_crud->getUser('siswa');  
		$this->load->view('v_headersekolah');
		$this->load->view('v_daftarsiswa', $this->data); 
		$this->load->view('v_footersekolah');
	}
	public function rincian(){  
		 		$this->load->view('v_headersekolah'); 
		 		$this->load->view('v_rincian'); 
				$this->load->view('v_footersekolah');
	}
	public function berkas(){  
		 		$this->load->view('v_headersekolah'); 
		 		$this->load->view('v_berkas'); 
				$this->load->view('v_footersekolah');
	}
}