<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Masuk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_tampil');
    }

    public function masuk($idsek, $id_mapelsoal)
    {
        $data = [
            'data' => $this->M_tampil->cekmapel($idsek, $id_mapelsoal)
        ];
        $this->page('user/login', $data);
    }

    public function login()
    {
        $idsek = $this->input->post('idsek');
        $id_mapelsoal = $this->input->post('soal');
        // $nis = $this->input->post('nis');
        // $pas = $this->input->post('pass');
        // echo $idsek;
        // echo $id_mapelsoal;
        // echo $nis;
        // echo $pas;

        $config = array(
            array(
                'field' => 'nis',
                'label' => 'NIS',
                'rules' => 'required|numeric'
            ),
            array(
                'field' => 'pass',
                'label' => 'Password',
                'rules' => 'required'
            )
        );

        $this->form_validation->set_rules($config);
        if ($this->form_validation->run($config) == false) {
            $data = [
                'data' => $this->M_tampil->tampilsoal($idsek, $id_mapelsoal)
            ];
            $this->page('user/login', $data);
        } else {
            $this->M_tampil->masuk($idsek, $id_mapelsoal);
        }
    }

    public function page($content = "true", $data = "true")
    {
        $this->load->view("user/header");
        $this->load->view($content, $data);
        $this->load->view("user/footer");
    }
}
