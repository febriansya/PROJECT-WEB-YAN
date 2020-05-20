<?php

class model_dashboard extends CI_Model
{
    public function get_data()
    {

        return $this->db->get('warga')->result_array();
    }
    public function tambah_warga($warga, $data)

    {
        $this->db->insert($warga, $data);
    }

    public function hapus($id_warga)
    {

        $this->db->where('id_warga', $id_warga);
        $this->db->delete('warga');


        // $this->db->delete('warga', ['id_warga' => $id_warga]);
    }



    public function update($id_warga)
    {
        $data = array(
            'nama_warga' => $this->input->post('nama'),
            'no_kk' => $this->input->post('kk'),
            'nik' => $this->input->post('nik'),
            'no_telpon' => $this->input->post('nomor_hp'),
            'status' => $this->input->post('status'),
            'penghasilan' => $this->input->post('penghasilan'),
        );
        $this->db->where('id_warga', $id_warga);
        $this->db->update('warga', $data);
        return true;
    }



    public function get_keywoard($keywoard)
    {
        // $this->db->select('*');
        // $this->db->from('warga');
        $this->db->like('nama_warga', $keywoard);
        $this->db->or_like('no_kk', $keywoard);
        $this->db->or_like('nik', $keywoard);
        $this->db->or_like('no_telpon', $keywoard);
        $this->db->or_like('status', $keywoard);
        $this->db->or_like('penghasilan', $keywoard);

        return $this->db->get('warga')->result();
    }
}
