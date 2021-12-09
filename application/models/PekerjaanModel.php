<?php
class PekerjaanModel extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

	function get()
	{
		return $this->db->get('tb_pekerjaan');
	}

	function findBy($id)
	{
		$this->db->where($id);
		return $this->db->get('tb_pekerjaan');
	}

	function add($data)
	{
		return $this->db->insert('tb_pekerjaan', $data);
	}

	function update($id, $data)
	{
		$this->db->where($id);
		return $this->db->update('tb_pekerjaan', $data);
	}

	function delete($id)
	{
		$this->db->where($id);
		return $this->db->delete('tb_pekerjaan');
	}
}
