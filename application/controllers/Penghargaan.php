<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penghargaan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }
    public function index()
    {
        $data['title'] = "Penghargaan";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['penghargaan'] = $this->m_penghargaan->getPenghargaan();

        $this->form_validation->set_rules('name', 'Name', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('penghargaan/index', $data);
            $this->load->view('template/footer');
        } else {
            $this->m_penghargaan->addPenghargaan();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Penghargaan Di Tambahkan !!!</div>');
            redirect('penghargaan');
        }
    }
    public function hapus($id)
    {
        $this->m_penghargaan->hapusPenghargaan($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Penghargaan di Hapus !!!</div>');
        redirect('penghargaan');
    }

    public function edit($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "Edit Penghargaan";
        $data['penghargaan'] = $this->m_penghargaan->getPenghargaanId($id);

        $this->form_validation->set_rules('name', 'Name', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('penghargaan/edit', $data);
            $this->load->view('template/footer');
        } else {
            $this->m_penghargaan->editPenghargaan();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Penghargaan Berhasil di Edit !!!</div>');
            redirect('penghargaan');
        }
    }
}
