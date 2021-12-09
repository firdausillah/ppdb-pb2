<?php
 class PersyaratanModel extends CI_Model{

	function __construct()
	{
		parent::__construct();
	}
 	
 	function get(){
 		return $this->db->get('tb_persyaratan');
 	}

 	function findBy($id){
 		$this->db->where($id);
 		return $this->db->get('tb_persyaratan');
 	}

 	function add($data){
 		return $this->db->insert('tb_persyaratan',$data);
 	}
 	
 	function update($id,$data){
 		$this->db->where($id);
 		return $this->db->update('tb_persyaratan',$data);
 	}

 	function delete($id){
 		$this->db->where($id);
 		return $this->db->delete('tb_persyaratan');
 	}

	//  function peryaratan_siswa_join_persyaratan(){
	// 	$this->db->select('*');
	// 	$this->db->from('tb_persyaratan_siswa');
	// 	$this->db->rightjoin('tb_persyaratan', 'tb_persyaratan_siswa.id = blogs.id');
	// 	$query = $this->db->get();
	//  }
 }
