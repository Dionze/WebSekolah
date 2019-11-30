<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_sekolah extends CI_Model {
	public function prosesinsert($table_name,$data){
		$insert = $this->db->insert($table_name,$data);
		return $insert;
	}
	public function ceklogin($email, $password){
		$this->db->where('email', $email);
		$this->db->where('password', $password);
		return $this->db->get('user')->row();
	}
}
