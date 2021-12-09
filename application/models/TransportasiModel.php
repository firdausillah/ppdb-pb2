<?php
class TransportasiModel extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

	function get()
	{
		return $this->db->get('tb_transportasi');
	}

	function findBy($id)
	{
		$this->db->where($id);
		return $this->db->get('tb_transportasi');
	}

	function add($data)
	{
		return $this->db->insert('tb_transportasi', $data);
	}

	function update($id, $data)
	{
		$this->db->where($id);
		return $this->db->update('tb_transportasi', $data);
	}

	function delete($id)
	{
		$this->db->where($id);
		return $this->db->delete('tb_transportasi');
	}
}
