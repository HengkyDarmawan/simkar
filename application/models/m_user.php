<?php

class M_user extends CI_Model
{
    public function getAllUser()
    {
        return $this->db->get('user')->result_array();
    }
    public function getUserByEmail(){
        $this->db->from('user u');
        $this->db->where('u.email_undira', $this->session->userdata('email_undira'));
        $this->db->join('user_role r', 'r.id = u.role_id');
        $this->db->join('master_jabatan mj', 'mj.id_jabatan = u.jabatan_id');
        return $this->db->get()->row_array();
    }
    //tes
    // public function get_user_data() {
    //     $this->db->from('user u');
    //     $this->db->where('u.email_undira', $this->session->userdata('email_undira'));
    //     $this->db->join('user_role r', 'r.id = u.role_id');
    //     $this->db->join('user_jabatan uj', 'uj.user_id = u.id');
    //     $this->db->join('master_jabatan mj', 'mj.id_jabatan = uj.jabatan_id');
    //     return $this->db->get()->result_array();
    // }
    //end tes
    public function getPegawaiByID($id)
    {
        $this->db->select('user.*, master_jabatan.jabatan');
        $this->db->from('user');
        $this->db->join('master_jabatan', 'user.jabatan_id = master_jabatan.id_jabatan');
        $this->db->where('user.id', $id);
        return $this->db->get()->row_array();
    }

    public function addPegawai()
    {
        $data = [
            "name" => $this->input->post('name', true),
            "jabatan_id" => $this->input->post('jabatan_id', true),
            "address" => $this->input->post('address', true),
            "tmpt_lahir" => $this->input->post('tmpt_lahir', true),
            "tgl_lahir" => $this->input->post('tgl_lahir', true),
            "jenis_kelamin" => $this->input->post('jenis_kelamin', true),
            "agama" => $this->input->post('agama', true),
            "nik_ktp" => $this->input->post('nik_ktp', true),
            "nik_karyawan" => $this->input->post('nik_karyawan', true),
            "nama_bank" => $this->input->post('nama_bank', true),
            "no_rek" => $this->input->post('no_rek', true),
            "npwp" => $this->input->post('npwp', true),
            "email" => $this->input->post('email', true),
            "email_undira" => $this->input->post('email_undira', true),
            "telp" => $this->input->post('telp', true),
            "no_bpjs_kesehatan" => $this->input->post('no_bpjs_kesehatan', true),
            "no_bpjs_ketenagakerjaan" => $this->input->post('no_bpjs_ketenagakerjaan', true),
            "image" => "default.png",
            "password" => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            "role_id" => $this->input->post('role_id', true),
            "is_active" => $this->input->post('is_active', true),
            "tgl_bergabung" => $this->input->post('tgl_bergabung', true)
        ];
        $this->db->insert('user', $data);
    }
    public function hapusPegawai($id)
    {
        $this->db->delete('user', ['id' => $id]);
    }
    public function editPegawai()
    {
        $data = [
            "name" => $this->input->post('name', true),
            "jabatan_id" => $this->input->post('jabatan_id', true),
            "address" => $this->input->post('address', true),
            "tmpt_lahir" => $this->input->post('tmpt_lahir', true),
            "tgl_lahir" => $this->input->post('tgl_lahir', true),
            "jenis_kelamin" => $this->input->post('jenis_kelamin', true),
            "agama" => $this->input->post('agama', true),
            "nik_ktp" => $this->input->post('nik_ktp', true),
            "nik_karyawan" => $this->input->post('nik_karyawan', true),
            "nama_bank" => $this->input->post('nama_bank', true),
            "no_rek" => $this->input->post('no_rek', true),
            "npwp" => $this->input->post('npwp', true),
            "email" => $this->input->post('email', true),
            "email_undira" => $this->input->post('email_undira', true),
            "telp" => $this->input->post('telp', true),
            "no_bpjs_kesehatan" => $this->input->post('no_bpjs_kesehatan', true),
            "no_bpjs_ketenagakerjaan" => $this->input->post('no_bpjs_ketenagakerjaan', true),
            "role_id" => $this->input->post('role_id', true),
            "is_active" => $this->input->post('is_active', true),
            "tgl_bergabung" => $this->input->post('tgl_bergabung', true)
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user', $data);
    }

    public function getPengalamanById($id)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('data_pengalaman', 'data_pengalaman.user_id = user.id', 'left');
        $this->db->where('user.id', $id);
        return $this->db->get()->result_array();
    }

    public function getPendidikanById($id)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('master_pendidikan', 'master_pendidikan.user_id = user.id', 'left');
        $this->db->where('user.id', $id);
        return $this->db->get()->result_array();
    }
    public function getPelatihanById($id)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('data_pelatihan', 'data_pelatihan.user_id = user.id', 'left');
        $this->db->where('user.id', $id);
        return $this->db->get()->result_array();
    }
    public function getSeminarById($id)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('master_seminar', 'master_seminar.user_id = user.id', 'left');
        $this->db->where('user.id', $id);
        return $this->db->get()->result_array();
    }
    public function getJabatan()
    {
        return $this->db->get('master_jabatan')->result_array();
    }
    public function getRole()
    {
        return $this->db->get('user_role')->result_array();
    }
}
