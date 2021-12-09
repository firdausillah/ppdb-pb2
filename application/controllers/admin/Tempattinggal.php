<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tempattinggal extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('TempattinggalModel');

        if ($this->session->userdata('role') != 'admin') {
            redirect(base_url("auth/login"));
        }
    }

    public function index()
    {
        $data = [
            'title' => 'Tempattinggal',
            'tempattinggal' => $this->TempattinggalModel->get()->result(),
            'content' => 'admin/tempattinggal/table'
        ];

        $this->load->view('layout_admin/base', $data);
    }
    public function save()
    {
        $data = [
            'tempattinggal' => $this->input->post('tempattinggal'),

        ];

        if ($this->TempattinggalModel->add($data)) {
            $this->session->set_flashdata('flash', 'Data berhasil dimasukan');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }

        redirect(base_url('admin/tempattinggal'));
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit tempattinggal',
            'tempattinggal' => $this->TempattinggalModel->findBy(['id' => $id])->row(),
            'content' => 'admin/tempattinggal/edit'
        ];

        $this->load->view('layout_admin/base', $data);
    }

    public function update($id)
    {
        $data = [
            'tempattinggal' => $this->input->post('tempattinggal'),

        ];

        if ($this->TempattinggalModel->update(['id' => $id], $data)) {
            $this->session->set_flashdata('flash', 'Data berhasil diupdate');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }

        redirect(base_url('admin/tempattinggal'));
    }

    public function delete($id)
    {
        if ($this->TempattinggalModel->delete(['id' => $id])) {
            $this->session->set_flashdata('flash', 'Data berhasil dihapus');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }
        redirect('admin/tempattinggal');
    }
}
