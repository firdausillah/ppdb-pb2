<?php
class HomeModel extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    function get()
    {
        return $this->db->get('tb_siswa');
    }

    function findBy($id)
    {
        $this->db->where($id);
        return $this->db->get('tb_siswa');
    }

    function add($data)
    {
        return $this->db->insert('tb_siswa', $data);
    }

    function update($id, $data)
    {
        $this->db->where($id);
        return $this->db->update('tb_siswa', $data);
    }

    function delete($id)
    {
        $this->db->where($id);
        return $this->db->delete('tb_siswa');
    }
}
