<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {

	public function index()
	{
		check_not_login();
		$this->template->load('template', 'pengguna');
	}

	public function add()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('nik', 'nik', 'required');
        $this->form_validation->set_rules('tanggal', 'tanggal', 'required');
        $this->form_validation->set_rules('kelamin', 'kelamin', 'required');
		$this->form_validation->set_rules('alamat', 'alamat', 'required');
		$this->form_validation->set_rules('kepentingan', 'kepentingan', 'required');

		$this->form_validation->set_message('required', '%s masih kosong, silahkan isi');
		$this->form_validation->set_message('min_length', '{field} minimal 5 karakter');
		$this->form_validation->set_message('is_unique', '{field} ini sudah dipakai, silahkan ganti');

		if($this->form_validation->run() == FALSE){
			$query = $this->tamu_m->get($id);
			if ($query->num_rows() > 0 ) {
				$data['row'] = $query->row();
				$this->template->load('template','pengguna', $data);
			} else {
				echo "<script> alert('Data tidak ditemukan');";
				echo "window.location='".site_url('pengguna')."'; </script>";
			}
			
		}else{
			$post = $this->input->post(null, TRUE);
			$this->tamu_m->edit($post);
			if($this->db->affected_rows() > 0 ){
				echo "<script>alert('Data Berhasil Disimpan!');</script>";
			}
			echo "<script>window.location='".site_url('pengguna')."';</script>";
		}
    }
}
