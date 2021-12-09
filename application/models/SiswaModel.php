<?php
 class SiswaModel extends CI_Model{

	function __construct()
	{
		parent::__construct();
	}
 	
 	function get(){
 		return $this->db->get('tb_siswa');
 	}

	function joinJurusan($id){
		$this->db->select('*');
		$this->db->from('tb_siswa');
		$this->db->join('tb_jurusan', 'tb_jurusan.id = tb_siswa.id_jurusan', 'left');
		$this->db->where(['tb_siswa.id' => $id]);
		return $this->db->get();
	}

	public function getAll(){
		$this->db->select(
			'kode_pendaftaran,
			nama,
			jk,
			nisn,
			nik_siswa,
			no_kk,
			tempatlahir_siswa,
			tgllahir_siswa,
			noakte_lahir,
			agama,
			kewarganegaraan,
			alamat_siswa,
			nohp,
			rt,
			rw,
			dusun,
			desa,
			kec,
			kab,
			kodepos,
			tempattinggal,
			transportasi,
			anak_berapa,
			punya_kip,
			nama_ayah,
			nohp_ayah,
			nik_ayah,
			tgllahir_ayah,
			pend_ayah.pendidikan AS pendidikanayah,
			kerjaan_ayah.pekerjaan AS pekerjaanayah,
			gaji_ayah.penghasilan AS penghasilanayah,
			nama_ibu,
			nohp_ibu,
			nik_ibu,
			tgllahir_ibu,
			pend_ibu.pendidikan AS pendidikanibu,
			kerjaan_ibu.pekerjaan AS pekerjaanibu,
			gaji_ibu.penghasilan AS penghasilanibu,
			nama_wali,
			nohp_wali,
			nik_wali,
			tgllahir_wali,
			pend_wali.pendidikan AS pendidikanwali,
			kerjaan_wali.pekerjaan AS pekerjaanwali,
			gaji_wali.penghasilan AS penghasilanwali,
			tinggi_badan,
			berat_badan,
			daftar_ulang,
			tgl_daftar_ulang,
			tb_siswa.status,
			tgl_daftar,
			jurusan,
			tb_pembawa.nama_lengkap AS nama_lengkap_pembawa,
			gelombang,
			nama_asal_sekolah');

		$this->db->from('tb_siswa');
		$this->db->join('tb_jurusan', 'tb_siswa.id_jurusan = tb_jurusan.id', 'left');
		$this->db->join('tb_pembawa', 'tb_siswa.id_pembawa = tb_pembawa.id', 'left');
		$this->db->join('tbl_tempattinggal', 'tb_siswa.tempat_tinggal = tbl_tempattinggal.id', 'left');
		$this->db->join('tb_transportasi', 'tb_siswa.moda_transportasi = tb_transportasi.id', 'left');
		$this->db->join('tb_gelombang_pendaftaran', 'tb_siswa.id_gelombang = tb_gelombang_pendaftaran.id', 'left');
		$this->db->join('tb_asal_sekolah', 'tb_siswa.sekolah_asal = tb_asal_sekolah.id', 'left');
		// pendidikan
		$this->db->join('tbl_pendidikan as pend_ayah', 'tb_siswa.pendidikan_ayah = pend_ayah.id', 'left');
		$this->db->join('tbl_pendidikan as pend_ibu', 'tb_siswa.pendidikan_ibu = pend_ibu.id', 'left');
		$this->db->join('tbl_pendidikan as pend_wali', 'tb_siswa.pendidikan_wali = pend_wali.id', 'left');
		// pekerjaan
		$this->db->join('tb_pekerjaan as kerjaan_ayah', 'tb_siswa.pekerjaan_ayah = kerjaan_ayah.id', 'left');
		$this->db->join('tb_pekerjaan as kerjaan_ibu', 'tb_siswa.pekerjaan_ibu = kerjaan_ibu.id', 'left');
		$this->db->join('tb_pekerjaan as kerjaan_wali', 'tb_siswa.pekerjaan_wali = kerjaan_wali.id', 'left');
		// penghasilan
		$this->db->join('tb_penghasilan as gaji_ayah', 'tb_siswa.penghasilan_ayah = gaji_ayah.id', 'left');
		$this->db->join('tb_penghasilan as gaji_ibu', 'tb_siswa.penghasilan_ibu = gaji_ibu.id', 'left');
		$this->db->join('tb_penghasilan as gaji_wali', 'tb_siswa.penghasilan_wali = gaji_wali.id', 'left');

		return $this->db->get();
	}

	function siswaJurusan(){
		$this->db->select('*');
		$this->db->from('tb_siswa');
		$this->db->join('tb_jurusan', 'tb_jurusan.id = tb_siswa.id_jurusan', 'right');
		return $this->db->get();
	}

	function joinPembawa(){
		// $this->db->select('tb_siswa.id as id ', 'kode_pendaftaran', 'nama', 'status', 'sekolah_asal', 'nama_lengkap as pembawa');
		$this->db->select('tb_siswa.id as id, kode_pendaftaran, nama, status, nama_asal_sekolah, daftar_ulang, nama_lengkap as pembawa');
		$this->db->from('tb_siswa');
		$this->db->join('tb_pembawa', 'tb_pembawa.id = tb_siswa.id_pembawa', 'left');
		$this->db->join('tb_asal_sekolah', 'tb_asal_sekolah.id = tb_siswa.sekolah_asal', 'left');
		return $this->db->get();
	}

	function joinPembawaSudah(){
		// $this->db->select('tb_siswa.id as id ', 'kode_pendaftaran', 'nama', 'status', 'sekolah_asal', 'nama_lengkap as pembawa');
		$this->db->select('tb_siswa.id as id, kode_pendaftaran, nama, status, nama_asal_sekolah, daftar_ulang, nama_lengkap as pembawa');
		$this->db->from('tb_siswa');
		$this->db->join('tb_pembawa', 'tb_pembawa.id = tb_siswa.id_pembawa', 'left');
		$this->db->join('tb_asal_sekolah', 'tb_asal_sekolah.id = tb_siswa.sekolah_asal', 'left');
		$this->db->where(['status' => 'Sudah Verifikasi']);
		return $this->db->get();
	}

	function joinPembawaBelum(){
		// $this->db->select('tb_siswa.id as id ', 'kode_pendaftaran', 'nama', 'status', 'sekolah_asal', 'nama_lengkap as pembawa');
		$this->db->select('tb_siswa.id as id, kode_pendaftaran, nama, status, nama_asal_sekolah, daftar_ulang, nama_lengkap as pembawa');
		$this->db->from('tb_siswa');
		$this->db->join('tb_pembawa', 'tb_pembawa.id = tb_siswa.id_pembawa', 'left');
		$this->db->join('tb_asal_sekolah', 'tb_asal_sekolah.id = tb_siswa.sekolah_asal', 'left');
		$this->db->where(['status' => 'Belum Verifikasi'] );
		$this->db->or_where(['status' => ''] );
		return $this->db->get();
	}

	function joinJurusanKode($kode){
		$this->db->select('*');
		$this->db->from('tb_siswa');
		$this->db->join('tb_jurusan', 'tb_jurusan.id = tb_siswa.id_jurusan', 'right');
		$this->db->join('tb_asal_sekolah', 'tb_asal_sekolah.id = tb_siswa.sekolah_asal', 'left');
		$this->db->where(['tb_siswa.kode_pendaftaran' => $kode]);
		return $this->db->get();
	}

 	function findBy($id){
 		$this->db->where(['id' => $id]);
 		return $this->db->get('tb_siswa');
 	}

 	function findSiswaBy($id){
		$this->db->select('nama');
 		$this->db->where(['id' => $id]);
 		return $this->db->get('tb_siswa');
 	}

 	function findByJurusan($id){
 		$this->db->where(['id_jurusan' => $id]);
 		$this->db->where(['status' => 'Sudah Verifikasi']);
 		return $this->db->get('tb_siswa');
 	}

 	function findByGen($id){
 		$this->db->where($id);
 		return $this->db->get('tb_siswa');
 	}

 	function add($data){
 		return $this->db->insert('tb_siswa',$data);
 	}
 	
 	function update($id,$data){
 		$this->db->where($id);
 		return $this->db->update('tb_siswa',$data);
 	}

 	function delete($id){
 		$this->db->where($id);
 		return $this->db->delete('tb_siswa');
 	}


	// additional
	public function cekUrut()
	{
		$query = $this->db->query("SELECT MAX(id) as urut_kode from tb_siswa");
		$hasil = $query->row();
		// print_r($hasil->urut_kode); exit();
		return $hasil->urut_kode;
	}
 }
