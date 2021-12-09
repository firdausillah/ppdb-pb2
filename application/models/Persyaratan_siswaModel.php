<?php
 class Persyaratan_siswaModel extends CI_Model{

	function __construct()
	{
		parent::__construct();
	}
 	
 	function get(){
 		return $this->db->get('tb_persyaratan_siswa');
 	}

 	function findBy($id){
 		$this->db->where($id);
 		return $this->db->get('tb_persyaratan_siswa');
 	}

 	function findSiswaBy($id){
 		$this->db->where(['id_siswa' => $id]);
 		return $this->db->get('tb_persyaratan_siswa');
 	}

 	function leftJoinPersyaratan($id){
		$this->db->select('*');
		$this->db->from('tb_persyaratan');
		$this->db->join('tb_persyaratan_siswa', 'tb_persyaratan.id = tb_persyaratan_siswa.id_persyaratan', 'left');
		$this->db->where(['tb_persyaratan_siswa.id_siswa' => $id]);
		return $this->db->get();
 	}

 	function add($data){
 		return $this->db->insert('tb_persyaratan_siswa',$data);
 	}
 	
 	// function update($id,$data){
 	// 	$this->db->where($id);
 	// 	return $this->db->update('tb_persyaratan_siswa',$data);
 	// }
 	
 	function update($id_siswa, $id_persyaratan, $data){
 		$this->db->where('id_siswa', $id_siswa);
 		$this->db->where('id_persyaratan', $id_persyaratan);
 		return $this->db->update('tb_persyaratan_siswa',$data);
 	}

 	function delete($id){
 		$this->db->where($id);
 		return $this->db->delete('tb_persyaratan_siswa');
 	}

 }
