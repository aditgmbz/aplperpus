<?php

class Dashboard Extends CI_Controller{

    public function index()
    {
        $this->m_security->getSecurity();
        $isi['content']     = 'v_home';
        $isi['judul']       = 'Dashboard';
        $this->load->view('v_dashboard',$isi);
    }

}