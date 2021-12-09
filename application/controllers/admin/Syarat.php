<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Syarat extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('PersyaratanModel');

        if ($this->session->userdata('role') != 'admin') {
            redirect(base_url("auth/login"));
        }
    }

    public function index()
    {
        $data = [
            'title' => 'Syarat',
            'syarat' => $this->PersyaratanModel->get()->result(),
            'content' => 'admin/persyaratan/table'
        ];

        $this->load->view('layout_admin/base', $data);
    }
    public function save()
    {
        // print_r($_POST);
        // exit();
        $data = [
            'persyaratan' => $this->input->post('persyaratan'),
            'satuan'  => $this->input->post('satuan'),

        ];

        if ($this->PersyaratanModel->add($data)) {
            $this->session->set_flashdata('flash', 'Data berhasil dimasukan');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }

        redirect(base_url('admin/syarat'));
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit persyaratan',
            'persyaratan' => $this->PersyaratanModel->findBy(['id' => $id])->row(),
            'content' => 'admin/persyaratan/edit'
        ];

        $this->load->view('layout_admin/base', $data);
    }

    public function update($id)
    {
        $data = [
            'persyaratan' => $this->input->post('persyaratan'),
            'satuan'  => $this->input->post('satuan'),

        ];

        if ($this->PersyaratanModel->update(['id' => $id], $data)) {
            $this->session->set_flashdata('flash', 'Data berhasil diupdate');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }

        redirect(base_url('admin/syarat'));
    }

    public function delete($id)
    {
        if ($this->PersyaratanModel->delete(['id' => $id])) {
            $this->session->set_flashdata('flash', 'Data berhasil dihapus');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }
        redirect('admin/syarat');
    }
}
