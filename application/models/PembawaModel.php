<?php
class PembawaModel extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

	function get()
	{
		return $this->db->get('tb_pembawa');
	}

	function findBy($id)
	{
		$this->db->where($id);
		return $this->db->get('tb_pembawa');
	}

	function add($data)
	{
		return $this->db->insert('tb_pembawa', $data);
	}

	function update($id, $data)
	{
		$this->db->where($id);
		return $this->db->update('tb_pembawa', $data);
	}

	function delete($id)
	{
		$this->db->where($id);
		return $this->db->delete('tb_pembawa');
	}
}
