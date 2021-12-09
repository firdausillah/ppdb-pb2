<?php
class AsalSekolahModel extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

	function get()
	{
		return $this->db->get('tb_asal_sekolah');
	}

	function findBy($id)
	{
		$this->db->where(['id' => $id]);
		return $this->db->get('tb_asal_sekolah');
	}

	function add($data)
	{
		return $this->db->insert('tb_asal_sekolah', $data);
	}

	function update($id, $data)
	{
		$this->db->where($id);
		return $this->db->update('tb_asal_sekolah', $data);
	}

	function delete($id)
	{
		$this->db->where($id);
		return $this->db->delete('tb_asal_sekolah');
	}

}
