<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('role') != "siswa") {
            $this->session->set_flashdata('error', 'Silahkan Login');
            redirect(base_url("home"));
        }

        $this->load->model('SiswaModel');
        $this->load->model('PersyaratanModel');
        $this->load->model('Persyaratan_siswaModel');
        $this->load->model('JurusanModel');
    }

    public function index()
    {
        // print_r($this->SiswaModel->joinJurusan($this->session->userdata('id'))->row()); exit();
        $data = [
            'title' => 'Dashboard Siswa',
            'content' => 'siswa/dashboard',
            'siswa' => $this->SiswaModel->joinJurusan($this->session->userdata('id'))->row(),
            'persyaratan' => $this->PersyaratanModel->get()->result(),
            'persyaratan_siswa' => $this->Persyaratan_siswaModel->leftJoinPersyaratan($this->session->userdata('id'))->result(),
            'jurusan' => $this->JurusanModel->findBy($this->session->userdata('id'))->row()
        ];

        $this->load->view('layout_siswa/base', $data);
    }
}
