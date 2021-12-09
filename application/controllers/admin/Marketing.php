<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Marketing extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('PembawaModel');

        if ($this->session->userdata('role') != 'admin') {
            redirect(base_url("auth/login"));
        }
    }


    public function index()
    {
        $data = [
            'title' => 'Marketing',
            'marketing' => $this->PembawaModel->get()->result(),
            'content' => 'admin/marketing/table'
        ];

        $this->load->view('layout_admin/base', $data);
    }
    public function save()
    {
        $data = [
            'nama_lengkap' => $this->input->post('nama_lengkap'),

        ];

        if ($this->PembawaModel->add($data)) {
            $this->session->set_flashdata('flash', 'Data berhasil dimasukan');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }

        redirect(base_url('admin/marketing'));
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit marketing',
            'pembawa' => $this->PembawaModel->findBy(['id' => $id])->row(),
            'content' => 'admin/marketing/edit'
        ];

        $this->load->view('layout_admin/base', $data);
    }

    public function update($id)
    {
        $data = [
            'nama_lengkap' => $this->input->post('nama_lengkap'),

        ];

        if ($this->PembawaModel->update(['id' => $id], $data)) {
            $this->session->set_flashdata('flash', 'Data berhasil diupdate');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }

        redirect(base_url('admin/marketing'));
    }

    public function delete($id)
    {
        if ($this->PembawaModel->delete(['id' => $id])) {
            $this->session->set_flashdata('flash', 'Data berhasil dihapus');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }
        redirect('admin/marketing');
    }
}
