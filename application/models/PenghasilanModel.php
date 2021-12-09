<?php
class PenghasilanModel extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

	function get()
	{
		return $this->db->get('tb_penghasilan');
	}

	function findBy($id)
	{
		$this->db->where($id);
		return $this->db->get('tb_penghasilan');
	}

	function add($data)
	{
		return $this->db->insert('tb_penghasilan', $data);
	}

	function update($id, $data)
	{
		$this->db->where($id);
		return $this->db->update('tb_penghasilan', $data);
	}

	function delete($id)
	{
		$this->db->where($id);
		return $this->db->delete('tb_penghasilan');
	}
}
