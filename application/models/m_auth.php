<?php

class M_auth extends CI_Model
{
    public function getUserLogin()
    {
        return $this->db->get_where('user', ['email_undira' => $this->session->userdata('email_undira')])->row_array();
    }
    public function getDataKeluarga($user_id)
    {
        return $this->db->get_where('data_keluarga', ['user_id' => $user_id])->result_array();
    }
    public function getDataPendidikan($user_id)
    {
        return $this->db->get_where('master_pendidikan', ['user_id' => $user_id])->result_array();
    }
    public function getDataPengalaman($user_id)
    {
        return $this->db->get_where('data_pengalaman', ['user_id' => $user_id])->result_array();
    }
    public function getDataPelatihan($user_id)
    {
        return $this->db->get_where('data_pelatihan', ['user_id' => $user_id])->result_array();
    }
    public function getDataSeminar($user_id)
    {
        return $this->db->get_where('master_seminar', ['user_id' => $user_id])->result_array();
    }
}
