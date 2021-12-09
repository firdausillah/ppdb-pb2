<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('ProfileModel');
        $this->load->model('SiswaModel');
        $this->load->model('JurusanModel');

        if ($this->session->userdata('role') != 'admin') {
            redirect(base_url("auth/login"));
        }
    }

    public function index()
    {
        $jurusan = $this->JurusanModel->get()->result();

        foreach ($jurusan as $jur) :
            $query = $this->db->query("SELECT * FROM tb_jurusan WHERE id = " . $jur->id)->result();

            foreach ($query as $key) {
                 $lk = $this->db->query("SELECT jk from tb_siswa where tb_siswa.id_jurusan = " . $jur->id." AND jk = 'Laki-laki' AND tb_siswa.status = 'Sudah Verifikasi'" )->result();
            }

            foreach ($query as $key) {
                 $pr = $this->db->query("SELECT jk from tb_siswa where tb_siswa.id_jurusan = " . $jur->id." AND jk = 'Perempuan' AND tb_siswa.status = 'Sudah Verifikasi'" )->result();
            }

            $r[] = ['jurusan' => $jur->jurusan, 'lk' => count($lk), 'pr' => count($pr), 'jumlah' => count($lk)+count($pr)];
        endforeach;
        // print_r($r);

        // exit();

        // exit();
        $perjurusan = $r;
        $siswa = $this->SiswaModel->get()->result();
        $verifikasi = $this->SiswaModel->joinPembawaSudah()->result();
        $belum_verifikasi = $this->SiswaModel->joinPembawaBelum()->result();


        $data = [
            'title' => 'Dashboard',
            'profile' => $this->ProfileModel->findBy(['id' => 1])->row(),
            'siswa' => $siswa,
            'perjurusan' => $perjurusan,
            'verifikasi' => count($verifikasi),
            'belum_verifikasi' => count($belum_verifikasi),
            'content' => 'admin/dashboard'
        ];

        $this->load->view('layout_admin/base', $data);
    }
}
