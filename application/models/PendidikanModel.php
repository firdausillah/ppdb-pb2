<?php
class PendidikanModel extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    function get()
    {
        return $this->db->get('tbl_pendidikan');
    }

    function findBy($id)
    {
        $this->db->where($id);
        return $this->db->get('tbl_pendidikan');
    }

    function add($data)
    {
        return $this->db->insert('tbl_pendidikan', $data);
    }

    function update($id, $data)
    {
        $this->db->where($id);
        return $this->db->update('tbl_pendidikan', $data);
    }

    function delete($id)
    {
        $this->db->where($id);
        return $this->db->delete('tbl_pendidikan');
    }
}
