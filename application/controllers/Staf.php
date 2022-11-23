<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Staf extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email_undira' => $this->session->userdata('email_undira')])->row_array();

        $data['title'] = "Dashboard";
        $this->load->view('template/header', $data);
        $this->load->view('staf/index', $data);
        $this->load->view('template/footer');
    }
}
