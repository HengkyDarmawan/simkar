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
        $data['title'] = "My Profile";
        $data['user'] = $this->m_user->getUserByEmail();
        $data['data_keluarga'] = $this->m_auth->getDataKeluarga($data['user']['id']);
        $data['data_pendidikan'] = $this->m_auth->getDataPendidikan($data['user']['id']);
        $data['data_pengalaman'] = $this->m_auth->getDataPengalaman($data['user']['id']);
        $data['data_pelatihan'] = $this->m_auth->getDataPelatihan($data['user']['id']);
        $data['data_seminar'] = $this->m_auth->getDataSeminar($data['user']['id']);

        $this->load->view('template/header', $data);
        $this->load->view('setting/myprofile', $data);
        $this->load->view('template/footer');
    }
    public function edit()
    {
        $data['title'] = "Edit Profile";
        $data['user'] = $this->m_auth->getUserLogin();

        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('telp', 'Telepon', 'required|integer');
        $this->form_validation->set_rules('tmpt_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('setting/edit', $data);
            $this->load->view('template/footer');
        } else {
            $name =  $this->input->post('name');
            $email =  $this->input->post('email');
            $emailUndira =  $this->input->post('email_undira');
            $telp =  $this->input->post('telp');
            $address =  $this->input->post('address');
            $tmpt_lahir =  $this->input->post('tmpt_lahir');
            $tgl_lahir =  $this->input->post('tgl_lahir');

            // cek jika ada gambar yang akan diupload
            $upload_image = $_FILES['image']['name'];
            if ($upload_image) {
                $config['upload_path']   = './assets/img/profile/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = 2048;
                $config['max_width']     = 1024;
                $config['max_height']    = 768;

                $this->load->library('upload', $config);
                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.png') {
                        unlink(FCPATH . 'assets/img/profile/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
                    redirect('setting');
                }
            }

            $this->db->set('name', $name);
            $this->db->set('email', $email);
            $this->db->set('telp', $telp);
            $this->db->set('tmpt_lahir', $tmpt_lahir);
            $this->db->set('address', $address);
            $this->db->set('tgl_lahir', $tgl_lahir);
            $this->db->set('approval', "review");
            $this->db->where('email_undira', $emailUndira);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Profile Berhasil Di Edit !!!</div>');
            redirect('setting');
        }
    }
    public function changePassword()
    {
        $data['title'] = "Change Password";
        $data['user'] = $this->m_auth->getUserLogin();

        $this->form_validation->set_rules('current_password',  'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1',  'New Password', 'required|trim|min_length[3]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2',  'Confirm New Password', 'required|trim|min_length[3]|matches[new_password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('setting/changepassword', $data);
            $this->load->view('template/footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Anda Tidak Sama Dengan Password Sekarang !!!</div>');
                redirect('setting/changepassword');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Password Baru Tidak Boleh Sama Dengan Password Lama !!!</div>');
                    redirect('setting/changepassword');
                } else {
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);
                    $this->db->set('password', $password_hash);
                    $this->db->where('email_undira', $this->session->userdata('email_undira'));
                    $this->db->update('user');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Password Telah di Ganti !!!</div>');
                    redirect('setting/changepassword');
                }
            }
        }
    }
}
