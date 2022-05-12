<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('user_m');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('register');
	}

	public function add()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
		$this->form_validation->set_rules('alamat', 'alamat', 'required');
		$this->form_validation->set_rules('nik', 'nik', 'required');
		$this->form_validation->set_rules('kepentingan', 'kepentingan', 'required');
		$this->form_validation->set_rules('level', 'level', 'required');

		$this->form_validation->set_message('required', '%s masih kosong, silahkan isi');
		$this->form_validation->set_message('min_length', '{field} minimal 5 karakter');
		$this->form_validation->set_message('is_unique', '{field} ini sudah dipakai, silahkan ganti');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('register');
		} else {
			$post = $this->input->post(null, TRUE);
			$this->user_m->add($post);
			if($this->db->affected_rows() > 0) {
				echo "<script>alert('Data Berhasil Disimpan');</script>";
			}
			echo "<script>window.location='".site_url('auth/login')."';</script>";
		}
    }

	public function username_check()
	{
		$post = $this->input->post(null, TRUE);
		$query = $this->db->query("SELECT * FROM users WHERE username = '$post[username]' AND user_id != '$post[user_id]' ");
		if ($query->num_rows() > 0) {
			$this->form_validation->set_message('username_check','{field} ini sudah dipakai, cari username lain');
			return FALSE;
		}else {
			return TRUE;
		}
	}
	
}
