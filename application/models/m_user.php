<?php

class M_user extends CI_Model
{
    public function getAllUser()
    {
        return $this->db->get('user')->result_array();
    }
    // public function getUserByEmail()
    // {
    //     $this->db->from('user');
    //     $this->db->where
    //     $this->db->join('user_role', 'user.role_id = user_role.id');
    //     // $this->db->from('user u')->where('u.email_undira', $this->session->userdata('email_undira'))->join('user_role r', 'r.id = u.role_id')->join('master_jabatan j', 'j.id_jabatan = u.jabatan_id')->get()->row_array();
    //     return $this->db->get_where('user', ['email_undira' => $this->session->userdata('email_undira')])->result_array();
    // }
}
