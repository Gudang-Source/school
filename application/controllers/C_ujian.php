<?php
defined('BASEPATH') or exit('No direct script access allowed');
class C_ujian extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }
        $this->load->model('M_tampil');
    }

    public function index()
    {
        $data = [
            
        ];
        $this->page('content/ujian_kelas');
    }

    public function ujian_mapel()
    {
        $this->page('content/ujian_mapel');
    }

    public function ujian_all()
    {
        $this->page('content/ujian_all');
    }

    public function page($content = 'true', $data = 'true')
    {
        $idsek = $this->session->userdata('id_sek');
        $email = $this->session->userdata('email');
        $akun = [
            'user' => $this->M_tampil->admin($idsek, $email)
        ];
        $this->load->view('header', $akun);
        $this->load->view('sidebar', $akun);
        $this->load->view($content, $data);
        $this->load->view('footer');
    }
}
