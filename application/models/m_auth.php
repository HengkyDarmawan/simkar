<?php

class M_auth extends CI_Model
{
    public function getUserLogin()
    {
        return $this->db->get_where('user', ['email_undira' => $this->session->userdata('email_undira')])->row_array();
    }
}
