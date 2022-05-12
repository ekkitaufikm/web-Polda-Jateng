<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends CI_Model {

	public function login($post)
	{
		$this->db->select('*');
        $this->db->from('users');
        $this->db->where('username', $post['username']);
        $this->db->where('password', sha1($post['password']));
        $query = $this->db->get();
        return $query;
    }
    
    public function get($id = null)
    {
        $this->db->from('users');
        if($id != null){
            $this->db->where('user_id', $id);

        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
	{
		$params['nama'] = $post['nama'];
        $params['username'] = $post['username'];
        $params['password'] = sha1($post['password']);
        $params['alamat'] = $post['alamat'] != "" ? $post['alamat'] : null;
        $params['nik'] = $post['nik'];
        $params['kepentingan'] = $post['kepentingan'];
        $params['level'] = $post['level'];
        $this->db->insert('users', $params);
	}

    public function edit($post)
	{
		$params['nama'] = $post['nama'];
        $params['username'] = $post['username'];
        if (!empty($post['password'])) {
            $params['password'] = sha1($post['password']);
        }
        $params['alamat'] = $post['alamat'];
        $params['nik'] = $post['nik'];
        $params['kepentingan'] = $post['kepentingan'];
        $params['level'] = $post['level'];
        $this->db->where('user_id', $post['user_id']);
        $this->db->update('users', $params);
	}

    public function del($id)
	{
		$this->db->where('user_id', $id);
        $this->db->delete('users');
	}
}