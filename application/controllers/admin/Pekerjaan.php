<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pekerjaan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('PekerjaanModel');

        if ($this->session->userdata('role') != 'admin') {
            redirect(base_url("auth/login"));
        }
    }

    public function index()
    {
        $data = [
            'title' => 'Pekerjaan',
            'pekerjaan' => $this->PekerjaanModel->get()->result(),
            'content' => 'admin/pekerjaan/table'
        ];

        $this->load->view('layout_admin/base', $data);
    }
    public function save()
    {
        $data = [
            'pekerjaan' => $this->input->post('pekerjaan'),

        ];

        if ($this->PekerjaanModel->add($data)) {
            $this->session->set_flashdata('flash', 'Data berhasil dimasukan');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }

        redirect(base_url('admin/pekerjaan'));
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit pekerjaan',
            'pekerjaan' => $this->PekerjaanModel->findBy(['id' => $id])->row(),
            'content' => 'admin/pekerjaan/edit'
        ];

        $this->load->view('layout_admin/base', $data);
    }

    public function update($id)
    {
        $data = [
            'pekerjaan' => $this->input->post('pekerjaan'),

        ];

        if ($this->PekerjaanModel->update(['id' => $id], $data)) {
            $this->session->set_flashdata('flash', 'Data berhasil diupdate');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }

        redirect(base_url('admin/pekerjaan'));
    }

    public function delete($id)
    {
        if ($this->PekerjaanModel->delete(['id' => $id])) {
            $this->session->set_flashdata('flash', 'Data berhasil dihapus');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }
        redirect('admin/pekerjaan');
    }
}
