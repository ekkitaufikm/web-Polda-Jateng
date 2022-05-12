<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tamu extends CI_Controller {

	function __construct() {
		parent::__construct();
		check_not_login();
        $this->load->model('tamu_m');
        $this->load->library('form_validation');
	}

	public function index()
	{
		$data['row'] = $this->tamu_m->get();
		$this->template->load('template', 'tamu/tamu_data', $data);
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

		if ($this->form_validation->run() == FALSE) {
			$this->template->load('template', 'tamu/tamu_form_add');
		} else {
			$post = $this->input->post(null, TRUE);
			$this->tamu_m->add($post);
			if($this->db->affected_rows() > 0) {
				echo "<script>alert('Data Berhasil Disimpan');</script>";
			}
			echo "<script>window.location='".site_url('tamu')."';</script>";
		}
    }

    public function edit($id)
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
		
 
		$this->form_validation->set_error_delimiters('<span class="help-block">','</span>');
		
		if($this->form_validation->run() == FALSE){
			$query = $this->tamu_m->get($id);
			if ($query->num_rows() > 0 ) {
				$data['row'] = $query->row();
				$this->template->load('template','tamu/tamu_form_edit', $data);
			} else {
				echo "<script> alert('Data tidak ditemukan');";
				echo "window.location='".site_url('tamu')."'; </script>";
			}
			
		}else{
			$post = $this->input->post(null, TRUE);
			$this->tamu_m->edit($post);
			if($this->db->affected_rows() > 0 ){
				echo "<script>alert('Data Berhasil diedit!');</script>";
			}
			echo "<script>window.location='".site_url('tamu')."';</script>";
		}
	}
    
    public function del()
	{
        $id = $this->input->post('tamu_id');
		$this->tamu_m->del($id);

		if($this->db->affected_rows() > 0 ){
			echo "<script> alert('Data Berhasil dihapus!'); </script>";
		}
		echo "<script> window.location='".site_url('tamu')."'; </script>";
	}

}
