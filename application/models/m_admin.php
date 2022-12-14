<?php

class M_admin extends CI_Model
{
    public function getRole()
    {
        return $this->db->get('user_role')->result_array();
    }
    public function getRoleId($role_id)
    {
        return $this->db->get_where('user_role', ['id' => $role_id])->row_array();
    }
    public function total_user()
    {
        return $this->db->get('user')->num_rows();
    }
    public function total_jabatan()
    {
        return $this->db->get('master_jabatan')->num_rows();
    }
}
