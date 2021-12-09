<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AsalSekolah extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('AsalSekolahModel');

        if ($this->session->userdata('role') != 'admin') {
            redirect(base_url("auth/login"));
        }
    }

    public function index()
    {
        $data = [
            'title' => 'Asal Sekolah',
            'asal_sekolah' => $this->AsalSekolahModel->get()->result(),
            'content' => 'admin/asalsekolah/table'
        ];

        $this->load->view('layout_admin/base', $data);
    }

    public function save(){
        $data = [
            'nama_asal_sekolah' => $this->input->post('nama_asal_sekolah')
        ];
        
        if ($this->AsalSekolahModel->add($data)) {
            $this->session->set_flashdata('flash', 'Data berhasil dimasukan');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }

        redirect(base_url('admin/Asalsekolah'));
    }

    public function edit($id){
        $data = [
            'title' => 'Edit AsalSekolah',
            'asal_sekolah' => $this->AsalSekolahModel->findBy($id)->row(),
            'content' => 'admin/asalsekolah/edit'
        ];

        $this->load->view('layout_admin/base', $data);
    }

    public function update($id){
        $data = [
            'nama_asal_sekolah' => $this->input->post('nama_asal_sekolah')
        ];
        
        if ($this->AsalSekolahModel->update(['id' => $id], $data)) {
            $this->session->set_flashdata('flash', 'Data berhasil diupdate');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }

        redirect(base_url('admin/Asalsekolah'));
    }

    public function delete($id){
        if ($this->AsalSekolahModel->delete(['id' => $id])) {
            $this->session->set_flashdata('flash', 'Data berhasil dihapus');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }
        redirect('admin/Asalsekolah');
    }
}
