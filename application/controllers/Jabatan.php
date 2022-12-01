<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jabatan extends CI_Controller
{
    // public function __construct()
    // {
    //     parent::__construct();
    //     is_logged_in();
    // }
    public function index()
    {
        $data['title'] = "Data Jabatan";
        $data['user'] = $this->m_auth->getUserLogin();
        $data['jabatan'] = $this->m_jabatan->getJabatan();
        $this->load->view('template/header', $data);
        $this->load->view('data/jabatan', $data);
        $this->load->view('template/footer');
    }
}
