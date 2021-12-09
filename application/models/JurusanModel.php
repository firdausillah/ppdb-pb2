<?php
 class JurusanModel extends CI_Model{

	function __construct()
	{
		parent::__construct();
	}
 	
 	function get(){
 		return $this->db->get('tb_jurusan');
 	}

 	function findBy($id){
 		$this->db->where($id);
 		return $this->db->get('tb_jurusan');
 	}

 	function add($data){
 		return $this->db->insert('tb_jurusan',$data);
 	}
 	
 	function update($id,$data){
 		$this->db->where($id);
 		return $this->db->update('tb_jurusan',$data);
 	}

 	function delete($id){
 		$this->db->where($id);
 		return $this->db->delete('tb_jurusan');
 	}
 }
