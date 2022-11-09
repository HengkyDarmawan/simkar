<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Setting extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['title'] = "My Profile";
        $this->load->view('template/header', $data);
        $this->load->view('setting/myprofile', $data);
        $this->load->view('template/footer');
    }
}
