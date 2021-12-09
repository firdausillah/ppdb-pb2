<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jurusan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('JurusanModel');

        if ($this->session->userdata('role') != 'admin') {
            redirect(base_url("auth/login"));
        }
    }
    

    public function index()
    {
        $data = [
            'title' => 'Jurusan',
            'jurusan' => $this->JurusanModel->get()->result(),
            'content' => 'admin/jurusan/table'
        ];

        $this->load->view('layout_admin/base', $data);
    }
    public function save()
    {
        $data = [
            'jurusan' => $this->input->post('jurusan'),

        ];

        if ($this->JurusanModel->add($data)) {
            $this->session->set_flashdata('flash', 'Data berhasil dimasukan');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }

        redirect(base_url('admin/jurusan'));
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit jurusan',
            'jurusan' => $this->JurusanModel->findBy(['id' => $id])->row(),
            'content' => 'admin/jurusan/edit'
        ];

        $this->load->view('layout_admin/base', $data);
    }

    public function update($id)
    {
        $data = [
            'jurusan' => $this->input->post('jurusan'),

        ];

        if ($this->JurusanModel->update(['id' => $id], $data)) {
            $this->session->set_flashdata('flash', 'Data berhasil diupdate');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }

        redirect(base_url('admin/jurusan'));
    }

    public function delete($id)
    {
        if ($this->JurusanModel->delete(['id' => $id])) {
            $this->session->set_flashdata('flash', 'Data berhasil dihapus');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }
        redirect('admin/jurusan');
    }
}
