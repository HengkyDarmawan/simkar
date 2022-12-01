<?php

class M_pelatihan extends CI_Model
{
    public function getAllPelatihan()
    {
        $this->db->select('*');
        $this->db->from('data_pelatihan');
        $this->db->join('user', 'data_pelatihan.user_id = user.id', 'left');
        return $this->db->get()->result_array();
    }

    public function addPelatihan()
    {
        $data = [
            "user_id" => $this->input->post('user_id', true),
            "nama_pelatihan" => $this->input->post('nama_pelatihan', true),
            "organisasi_penerbit" => $this->input->post('organisasi_penerbit', true),
            "url" => $this->input->post('url', true),
            "status" => $this->input->post('status', true)
        ];
        $this->db->insert('data_pelatihan', $data);
    }

    public function hapusPelatihan($id)
    {
        $this->db->delete('data_pelatihan', ['id_pelatihan' => $id]);
    }

    public function getPelatihanId($id)
    {
        return $this->db->get_where('data_pelatihan', ['id_pelatihan' => $id])->row_array();
    }

    public function editPelatihan()
    {
        $data = [
            "user_id" => $this->input->post('user_id', true),
            "nama_pelatihan" => $this->input->post('nama_pelatihan', true),
            "organisasi_penerbit" => $this->input->post('organisasi_penerbit', true),
            "url" => $this->input->post('url', true),
            "status" => $this->input->post('status', true)
        ];
        $this->db->where('id_pelatihan', $this->input->post('id_pelatihan'));
        $this->db->update('data_pelatihan', $data);
    }
}
