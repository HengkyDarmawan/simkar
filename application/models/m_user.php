<?php

class M_user extends CI_Model
{
    public function getAllUser()
    {
        return $this->db->get('user')->result_array();
    }
    public function getPegawaiByID($id)
    {
        $this->db->select('user.*, master_jabatan.jabatan');
        $this->db->from('user');
        $this->db->join('master_jabatan', 'user.jabatan_id = master_jabatan.id_jabatan');
        $this->db->where('user.id', $id);
        return $this->db->get()->row_array();
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
}
