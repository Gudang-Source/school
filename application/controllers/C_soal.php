<?php
defined('BASEPATH') or exit('No direct script access allowed');
class C_soal extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }
        $this->load->helper(array('form', 'url'));
        $this->load->model('M_insert');
        $this->load->model('M_tampil');
    }

    public function index()
    {
        $idsek = $this->session->userdata('id_sek');
        $data = [
            'soal' => $this->M_tampil->soal($idsek)
        ];
        $this->page('content/soal', $data);
    }

    public function soal()
    {
        $idsek = $this->session->userdata('id_sek');
        $data = [
            'mapel' => $this->M_tampil->mapel_soal($idsek)
        ];
        $this->page('content/add_soal', $data);
    }

    public function addsoal()
    {
        $config = array(
            array(
                'field' => 'mapel',
                'label' => 'Id Mata Pelajaran',
                'rules' => 'required'
            ),
            array(
                'field' => 'no',
                'label' => 'No Urut',
                'rules' => 'required|numeric'
            ),
            array(
                'field' => 'soal',
                'label' => 'Soal Ujian',
                'rules' => 'required'
            ),
            array(
                'field' => 'jawaba',
                'label' => 'Jawaban A',
                'rules' => 'required'
            ),
            array(
                'field' => 'jawabb',
                'label' => 'Jawaban B',
                'rules' => 'required'
            ),
            array(
                'field' => 'jawabc',
                'label' => 'Jawaban C',
                'rules' => 'required'
            ),
            array(
                'field' => 'jawabd',
                'label' => 'Jawaban D',
                'rules' => 'required'
            ),

            array(
                'field' => 'jawaban',
                'label' => 'Kunci Jawaban',
                'rules' => 'required'
            )
        );

        $this->form_validation->set_rules($config);
        if ($this->form_validation->run($config) == false) {
            $idsek = $this->session->userdata('id_sek');
            $data = [
                'mapel' => $this->M_tampil->mapel_soal($idsek)
            ];
            $this->page('content/add_soal', $data);
        } else {
            $id =  $this->session->userdata('id_sek');
            $this->M_insert->add_soal($id);
            $this->soal();
        }
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
