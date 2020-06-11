<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Soal extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        if ($this->session->userdata('status') != "masuk") {
            redirect(base_url("masuk"));
        }

        $this->load->model('M_tampil');
    }

    public function tampil($idsek, $idmapel)
    {
        $data = [
            'soal' => $this->M_tampil->tampilsoal($idsek, $idmapel)
        ];
        $this->page('user/soal', $data);
    }

    public function selesai()
    {
        $data = [
            'siswa' => $this->session->userdata('nis')
        ];
        $this->page('user/selesai',$data);
    }

    public function page($content = 'true', $data = 'true')
    {
        $this->load->view('user/header');
        $this->load->view($content, $data);
        $this->load->view('user/footer');
    }
}
