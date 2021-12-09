<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penghasilan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('PenghasilanModel');

        if ($this->session->userdata('role') != 'admin') {
            redirect(base_url("auth/login"));
        }
    }

    public function index()
    {
        $data = [
            'title' => 'Penghasilan',
            'penghasilan' => $this->PenghasilanModel->get()->result(),
            'content' => 'admin/penghasilan/table'
        ];

        $this->load->view('layout_admin/base', $data);
    }
    public function save()
    {
        $data = [
            'penghasilan' => $this->input->post('penghasilan'),

        ];

        if ($this->PenghasilanModel->add($data)) {
            $this->session->set_flashdata('flash', 'Data berhasil dimasukan');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }

        redirect(base_url('admin/penghasilan'));
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit penghasilan',
            'penghasilan' => $this->PenghasilanModel->findBy(['id' => $id])->row(),
            'content' => 'admin/penghasilan/edit'
        ];

        $this->load->view('layout_admin/base', $data);
    }

    public function update($id)
    {
        $data = [
            'penghasilan' => $this->input->post('penghasilan'),

        ];

        if ($this->PenghasilanModel->update(['id' => $id], $data)) {
            $this->session->set_flashdata('flash', 'Data berhasil diupdate');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }

        redirect(base_url('admin/penghasilan'));
    }

    public function delete($id)
    {
        if ($this->PenghasilanModel->delete(['id' => $id])) {
            $this->session->set_flashdata('flash', 'Data berhasil dihapus');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }
        redirect('admin/penghasilan');
    }
}
