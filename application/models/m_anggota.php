<?php

class M_anggota Extends CI_Model{

    public function id()
    {
        $this->db->select('RIGHT(anggota.id,3) as kode', FALSE);
        $this->db->select('id', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('anggota');
        if ($query->num_rows()<>0) {
            $data = $query->row();
            $kode = intval($data->kode)+1;
        }else{
            $kode = 1;
        }

        $kodemax = str_pad($kode,3,"0",STR_PAD_LEFT);
        $kodejadi = "AG".$kodemax;
        return $kodejadi;
    }

    public function edit($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('anggota')->row_array();
    }

    public function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('anggota', $data);
    }

    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('anggota');
    }
}