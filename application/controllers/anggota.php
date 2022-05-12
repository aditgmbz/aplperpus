<?php

class Anggota Extends CI_Controller{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_anggota');
    }

    public function index()
    {
        $isi['content']       = 'anggota/v_anggota';
        $isi['judul']         = 'Daftar Data Anggota';
        $isi['data']          = $this->db->get('anggota')->result();
        $this->load->view('v_dashboard', $isi);
    }

    public function tambah_anggota()
    {
        $isi['content']       = 'anggota/form_anggota';
        $isi['judul']         = 'Form Tambah Anggota';
        $isi['id']            = $this->m_anggota->id();
        $this->load->view('v_dashboard', $isi);
    }

    public function simpan()
    {
        $data = array(
            'id'     => $this->input->post('id'),
            'nama'   => $this->input->post('nama'),
            'jk'     => $this->input->post('jk'),
            'alamat' => $this->input->post('alamat'),
            'no_hp'  => $this->input->post('no_hp')
        );
        $query = $this->db->insert('anggota', $data);
        if ($query = true) {
            $this->session->set_flashdata('info', 'Data Berhasil di Simpan');
            redirect('anggota');
        }
    }

    public function edit($id)
    {
        $isi['content']       = 'anggota/edit_anggota';
        $isi['judul']         = 'Form Edit Anggota';
        $isi['data']            = $this->m_anggota->edit($id);
        $this->load->view('v_dashboard', $isi);
    }

    public function update()
    {
        $id = $this->input->post('id');
        $data = array(
            'id'     => $this->input->post('id'),
            'nama'   => $this->input->post('nama'),
            'jk'     => $this->input->post('jk'),
            'alamat' => $this->input->post('alamat'),
            'no_hp'  => $this->input->post('no_hp')
        );
        $query = $this->m_anggota->update($id, $data);
        if ($query = true) {
            $this->session->set_flashdata('info', 'Data Berhasil di Perbarui');
            redirect('anggota');
        }
    }

    public function hapus($id)
    {
        $query = $this->m_anggota->hapus($id);
        if ($query = true) {
            $this->session->set_flashdata('info', 'Data Berhasil di Hapus');
            redirect('anggota'); 
        }
    }
}