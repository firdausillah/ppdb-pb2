<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendidikan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('PendidikanModel');

        if ($this->session->userdata('role') != 'admin') {
            redirect(base_url("auth/login"));
        }
    }

    public function index()
    {
        $data = [
            'title' => 'Pendidikan',
            'pendidikan' => $this->PendidikanModel->get()->result(),
            'content' => 'admin/pendidikan/table'
        ];

        $this->load->view('layout_admin/base', $data);
    }
    public function save()
    {
        $data = [
            'pendidikan' => $this->input->post('pendidikan'),

        ];

        if ($this->PendidikanModel->add($data)) {
            $this->session->set_flashdata('flash', 'Data berhasil dimasukan');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }

        redirect(base_url('admin/pendidikan'));
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit pendidikan',
            'pendidikan' => $this->PendidikanModel->findBy(['id' => $id])->row(),
            'content' => 'admin/pendidikan/edit'
        ];

        $this->load->view('layout_admin/base', $data);
    }

    public function update($id)
    {
        $data = [
            'pendidikan' => $this->input->post('pendidikan'),

        ];

        if ($this->PendidikanModel->update(['id' => $id], $data)) {
            $this->session->set_flashdata('flash', 'Data berhasil diupdate');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }

        redirect(base_url('admin/pendidikan'));
    }

    public function delete($id)
    {
        if ($this->PendidikanModel->delete(['id' => $id])) {
            $this->session->set_flashdata('flash', 'Data berhasil dihapus');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }
        redirect('admin/pendidikan');
    }
}
