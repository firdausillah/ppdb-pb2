<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Log_user extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('LogUserModel');

        if ($this->session->userdata('role') != 'admin') {
            redirect(base_url("auth/login"));
        }
    }

    public function index()
    {
        $data = [
            'title' => 'Log Aktifitas User',
            'log_user' => $this->LogUserModel->get()->result(),
            'content' => 'admin/LogUser/table'
        ];

        $this->load->view('layout_admin/base', $data);
    }

}
