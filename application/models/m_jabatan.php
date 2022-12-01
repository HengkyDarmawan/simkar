<?php

class M_jabatan extends CI_Model
{
    public function getJabatan()
    {
        return $this->db->get('jabatan')->result_array();
    }
}
