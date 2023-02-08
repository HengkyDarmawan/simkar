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
        $data['title'] = "Data Posisi Jabatan";
        $data['user'] = $this->m_auth->getUserLogin();
        $data['jabatan'] = $this->m_jabatan->getAllJabatan();
        $this->load->view('template/header', $data);
        $this->load->view('data/jabatan', $data);
        $this->load->view('template/footer');
    }
    public function addJabatan()
    {
        $data['title'] = "Add Jabatan";
        $data['user'] = $this->m_auth->getUserLogin();
        $data['parentJabatan'] = $this->m_jabatan->getAllParentJabatan();

        $this->form_validation->set_rules('parent_jabatan_id', 'Parent Jabatan', 'required');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('data/jabatan_add', $data);
            $this->load->view('template/footer');
        } else {
            $this->m_jabatan->addJabatan();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">jabatan Di Tambahkan !!!</div>');
            redirect('jabatan');
        }
    }

    public function hapusJabatan($id)
    {
        $this->m_jabatan->hapusJabatan($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data jabatan di Hapus !!!</div>');
        redirect('jabatan');
    }

    public function editJabatan($id)
    {
        $data['title'] = "Edit Jabatan";
        $data['user'] = $this->m_auth->getUserLogin();
        $data['parentJabatan'] = $this->m_jabatan->getAllParentJabatan();
        $data['jabatan'] = $this->m_jabatan->getJabatanId($id);

        $this->form_validation->set_rules('parent_jabatan_id', 'Parent Jabatan', 'required');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('data/jabatan_edit', $data);
            $this->load->view('template/footer');
        } else {
            $this->m_jabatan->editJabatan();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">jabatan Di Edit !!!</div>');
            redirect('jabatan');
        }
    }


    //Parent Jabatan
    public function parentJabatan()
    {
        $data['title'] = "Data Parent Jabatan";
        $data['user'] = $this->m_auth->getUserLogin();
        $data['parentjabatan'] = $this->m_jabatan->getAllParentJabatan();
        $this->load->view('template/header', $data);
        $this->load->view('data/p_jabatan', $data);
        $this->load->view('template/footer');
    }

    public function addParentJabatan()
    {
        $data['title'] = "Add Parent Jabatan";
        $data['user'] = $this->m_auth->getUserLogin();

        $this->form_validation->set_rules('parent_jabatan', 'Parent Jabatan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('data/p_jabatan_add', $data);
            $this->load->view('template/footer');
        } else {
            $this->m_jabatan->addParentJabatan();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Parent jabatan Di Tambahkan !!!</div>');
            redirect('jabatan/parentJabatan');
        }
    }

    public function hapusParentJabatan($id)
    {
        $this->m_jabatan->hapusParentJabatan($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Parent jabatan di Hapus !!!</div>');
        redirect('jabatan/parentJabatan');
    }

    public function editParentJabatan($id)
    {
        $data['title'] = "Edit Parent Jabatan";
        $data['user'] = $this->m_auth->getUserLogin();
        $data['parentjabatan'] = $this->m_jabatan->getParentJabatanId($id);

        $this->form_validation->set_rules('parent_jabatan', 'Parent Jabatan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('data/p_jabatan_edit', $data);
            $this->load->view('template/footer');
        } else {
            $this->m_jabatan->editParentJabatan();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Parent jabatan Di Edit !!!</div>');
            redirect('jabatan/parentJabatan');
        }
    }
}
