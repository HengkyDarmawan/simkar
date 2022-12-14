<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai extends CI_Controller
{
    // public function __construct()
    // {
    //     parent::__construct();
    //     is_logged_in();
    // }
    public function index()
    {
        $data['title'] = "Data Pegawai";
        $data['user'] = $this->m_auth->getUserLogin();
        $data['users'] = $this->m_user->getAllUser();
        $this->load->view('template/header', $data);
        $this->load->view('data/pegawai', $data);
        $this->load->view('template/footer');
    }

    public function addPegawai()
    {
        $data['title'] = "Add Data Pegawai";
        $data['user'] = $this->m_auth->getUserLogin();
        $data['users'] = $this->m_user->getAllUser();

        // $this->form_validation->set_rules('user_id', 'Nama Karyawan', 'required');
        // $this->form_validation->set_rules('nama_pelatihan', 'Nama Pelatihan', 'required');
        // $this->form_validation->set_rules('organisasi_penerbit', 'Organisasi Penerbit', 'required');
        // $this->form_validation->set_rules('lokasi_pelatihan', 'Lokasi Pelatihan', 'required');
        // $this->form_validation->set_rules('tgl_mulai', 'Tanggal Mulai', 'required');
        // $this->form_validation->set_rules('tgl_selesai', 'Tanggal Selesai', 'required');
        // $this->form_validation->set_rules('url', 'URL', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('data/pegawai_add', $data);
            $this->load->view('template/footer');
        } else {
            $this->m_user->addPegawai();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">pegawai Di Tambahkan !!!</div>');
            redirect('pegawai');
        }
    }

    public function hapusPegawai($id)
    {
        $this->m_user->hapusPegawai($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data pegawai di Hapus !!!</div>');
        redirect('pegawai');
    }

    public function detailPegawai()
    {
        $id = $this->uri->segment(3);

        $data['title'] = 'Detail Pegawai';
        $data['user'] = $this->m_auth->getUserLogin();
        $data['pegawai'] = $this->m_user->getPegawaiByID($id);
        $data['pengalaman'] = $this->m_user->getPengalamanById($id);
        $data['pendidikan'] = $this->m_user->getPendidikanById($id);
        $data['pelatihan'] = $this->m_user->getPelatihanById($id);
        $data['seminar'] = $this->m_user->getSeminarById($id);
        // var_dump($data['pendidikan']);

        $this->load->view('template/header', $data);
        $this->load->view('data/pegawai_detail', $data);
        $this->load->view('template/footer');
    }
}
