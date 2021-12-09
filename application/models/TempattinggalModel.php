<?php
class TempattinggalModel extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    function get()
    {
        return $this->db->get('tbl_tempattinggal');
    }

    function findBy($id)
    {
        $this->db->where($id);
        return $this->db->get('tbl_tempattinggal');
    }

    function add($data)
    {
        return $this->db->insert('tbl_tempattinggal', $data);
    }

    function update($id, $data)
    {
        $this->db->where($id);
        return $this->db->update('tbl_tempattinggal', $data);
    }

    function delete($id)
    {
        $this->db->where($id);
        return $this->db->delete('tbl_tempattinggal');
    }
}
