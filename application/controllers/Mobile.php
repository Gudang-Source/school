<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Mobile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_tampil');
    }

    public function index()
    {
        $data = [
            'sekolah' => $this->M_tampil->getdata('sekolah')
        ];
        $this->page('user/sekolah', $data);
    }

    public function mapel($id)
    {
        $data = [
            'mapel' => $this->M_tampil->tampilmapel($id)
        ];
        $this->page('user/mapel', $data);
    }

    public function page($content = "true", $data = "true")
    {
        $this->load->view('user/header');
        $this->load->view($content, $data);
        $this->load->view('user/footer');
    }
}
