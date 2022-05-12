<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tamu_m extends CI_Model {

    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('tamu');
        if($id != null){
            $this->db->where('tamu_id', $id);

        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
	{
		$params['nama'] = $post['nama'];
        $params['nik'] = $post['nik'];
        $params['tanggal'] = $post['tanggal'];
        $params['kelamin'] = $post['kelamin'];
        $params['alamat'] = $post['alamat'];
        $params['kepentingan'] = $post['kepentingan'];
        $this->db->insert('tamu', $params);
    }
    
    public function edit($post)
	{
		$params['nama'] = $post['nama'];
        $params['nik'] = $post['nik'];
        $params['tanggal'] = $post['tanggal'];
        $params['kelamin'] = $post['kelamin'];
        $params['alamat'] = $post['alamat'];
        $params['kepentingan'] = $post['kepentingan'];
        $this->db->where('tamu_id', $post['tamu_id']);
        $this->db->update('tamu', $params);
	}

    public function del($id)
	{
		$this->db->where('tamu_id', $id);
        $this->db->delete('tamu');
	}
}