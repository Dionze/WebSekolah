<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_crud extends CI_Model {

	public function getUser($table_name){  
		$get_user = $this->db->get($table_name);
		return $get_user->result_array();
	}
	public function tambahData($table_name,$data){
		$tambah = $this->db->insert($table_name,$data);
		return $tambah;
	}
	public function editData($table_name,$data,$id){
		$this->db->where('id_siswa',$id);
		$edit = $this->db->update($table_name,$data);
		return $edit;
	}
	public function hapusData($table_name,$id){
		$this->db->where('id_siswa',$id);
		$hapus = $this->db->delete($table_name);
		return $hapus;
	}
	public function dataEdit($table_name,$id){
		$this->db->where('id_siswa',$id); 
		$get_user = $this->db->get($table_name);
		return $get_user->row();
	}
}