<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transportasi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('TransportasiModel');

        if ($this->session->userdata('role') != 'admin') {
            redirect(base_url("auth/login"));
        }
    }

    public function index()
    {
        $data = [
            'title' => 'Transportasi',
            'transportasi' => $this->TransportasiModel->get()->result(),
            'content' => 'admin/transportasi/table'
        ];

        $this->load->view('layout_admin/base', $data);
    }

    public function save()
    {
        $data = [
            'transportasi' => $this->input->post('transportasi'),

        ];

        if ($this->TransportasiModel->add($data)) {
            $this->session->set_flashdata('flash', 'Data berhasil dimasukan');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }

        redirect(base_url('admin/transportasi'));
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit transportasi',
            'transportasi' => $this->TransportasiModel->findBy(['id' => $id])->row(),
            'content' => 'admin/transportasi/edit'
        ];

        $this->load->view('layout_admin/base', $data);
    }

    public function update($id)
    {
        $data = [
            'transportasi' => $this->input->post('transportasi'),

        ];

        if ($this->TransportasiModel->update(['id' => $id], $data)) {
            $this->session->set_flashdata('flash', 'Data berhasil diupdate');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }

        redirect(base_url('admin/transportasi'));
    }

    public function delete($id)
    {
        if ($this->TransportasiModel->delete(['id' => $id])) {
            $this->session->set_flashdata('flash', 'Data berhasil dihapus');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }
        redirect('admin/transportasi');
    }
}
