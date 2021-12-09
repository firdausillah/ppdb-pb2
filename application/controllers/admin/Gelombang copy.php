<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gelombang extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('GelombangModel');

        if ($this->session->userdata('role') != 'admin') {
            redirect(base_url("auth/login"));
        }
    }

    public function index()
    {
        $data = [
            'title' => 'Gelombang',
            'gelombang' => $this->GelombangModel->get()->result(),
            'content' => 'admin/gelombang/table'
        ];

        $this->load->view('layout_admin/base', $data);
    }

    public function save(){
        $data = [
            'gelombang' => $this->input->post('gelombang'),
            'tgl_buka'  => $this->input->post('tgl_buka'),
            'tgl_tutup' => $this->input->post('tgl_tutup'),
            'status'    => $this->input->post('status')
        ];
        
        if ($this->GelombangModel->add($data)) {
            $this->session->set_flashdata('flash', 'Data berhasil dimasukan');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }

        redirect(base_url('admin/gelombang'));
    }

    public function edit($id){
        $data = [
            'title' => 'Edit Gelombang',
            'gelombang' => $this->GelombangModel->findBy($id)->row(),
            'content' => 'admin/gelombang/edit'
        ];

        $this->load->view('layout_admin/base', $data);
    }

    public function update($id){
        $data = [
            'gelombang' => $this->input->post('gelombang'),
            'tgl_buka'  => $this->input->post('tgl_buka'),
            'tgl_tutup' => $this->input->post('tgl_tutup'),
            'status'    => $this->input->post('status')
        ];
        
        if ($this->GelombangModel->update(['id' => $id], $data)) {
            $this->session->set_flashdata('flash', 'Data berhasil diupdate');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }

        redirect(base_url('admin/gelombang'));
    }

    public function delete($id){
        if ($this->GelombangModel->delete(['id' => $id])) {
            $this->session->set_flashdata('flash', 'Data berhasil dihapus');
        } else {
            $this->session->set_flashdata('flash', 'Oops! Terjadi suatu kesalahan');
        }
        redirect('admin/gelombang');
    }
}
