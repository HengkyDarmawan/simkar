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
        $data['jabatan'] = $this->m_user->getJabatan();
        $data['role'] = $this->m_user->getRole();

        $this->form_validation->set_rules('name', 'Nama Pegawai', 'required');
        $this->form_validation->set_rules('jabatan_id', 'Jabatan', 'required');
        $this->form_validation->set_rules('address', 'Alamat', 'required');
        $this->form_validation->set_rules('tmpt_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('agama', 'Agama', 'required');
        $this->form_validation->set_rules('nik_ktp', 'NIK KTP', 'required|numeric');
        $this->form_validation->set_rules('nik_karyawan', 'NIK Pegawai', 'required');
        $this->form_validation->set_rules('nama_bank', 'Bank', 'required');
        $this->form_validation->set_rules('no_rek', 'Nomor Rekening', 'required|numeric');
        $this->form_validation->set_rules('npwp', 'NPWP', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('email_undira', 'Email Undira', 'required');
        $this->form_validation->set_rules('telp', 'No.Hp', 'required|numeric');
        $this->form_validation->set_rules('no_bpjs_kesehatan', 'No BPJS Kesehatan', 'required|numeric');
        $this->form_validation->set_rules('no_bpjs_ketenagakerjaan', 'No BPJS Ketenagakerjaan', 'required|numeric');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('role_id', 'Role', 'required');
        $this->form_validation->set_rules('is_active', 'Active', 'required');
        $this->form_validation->set_rules('tgl_bergabung', 'Tanggal Bergabung', 'required');

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
    public function editPegawai($id)
    {
        $data['title'] = "Edit Data Pegawai";
        $data['user'] = $this->m_auth->getUserLogin();
        $data['jabatan'] = $this->m_jabatan->getAllJabatan();
        $data['role'] = $this->m_admin->getRole();
        $data['pegawai'] = $this->m_user->getPegawaiByID($id);

        $this->form_validation->set_rules('name', 'Nama Pegawai', 'required');
        $this->form_validation->set_rules('jabatan_id', 'Jabatan', 'required');
        $this->form_validation->set_rules('address', 'Alamat', 'required');
        $this->form_validation->set_rules('tmpt_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('agama', 'Agama', 'required');
        $this->form_validation->set_rules('nik_ktp', 'NIK KTP', 'required|numeric');
        $this->form_validation->set_rules('nik_karyawan', 'NIK Pegawai', 'required');
        $this->form_validation->set_rules('nama_bank', 'Bank', 'required');
        $this->form_validation->set_rules('no_rek', 'Nomor Rekening', 'required|numeric');
        $this->form_validation->set_rules('npwp', 'NPWP', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('email_undira', 'Email Undira', 'required');
        $this->form_validation->set_rules('telp', 'No.Hp', 'required|numeric');
        $this->form_validation->set_rules('no_bpjs_kesehatan', 'No BPJS Kesehatan', 'required|numeric');
        $this->form_validation->set_rules('no_bpjs_ketenagakerjaan', 'No BPJS Ketenagakerjaan', 'required|numeric');
        $this->form_validation->set_rules('role_id', 'Role', 'required');
        $this->form_validation->set_rules('is_active', 'Active', 'required');
        $this->form_validation->set_rules('tgl_bergabung', 'Tanggal Bergabung', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('data/pegawai_edit', $data);
            $this->load->view('template/footer');
        } else {
            $this->m_user->editPegawai();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pegawai Di Edit !!!</div>');
            redirect('pegawai');
        }
    }
}
