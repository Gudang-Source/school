<?php
defined('BASEPATH') or exit('No direct script access allowed');
class C_mapel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }
        $this->load->model('M_insert');
        $this->load->model('M_tampil');
    }

    public function index()
    {
        $idsek = $this->session->userdata('id_sek');
        $data = [
            'mapel' => $this->M_tampil->mapel_soal($idsek),
        ];
        $this->page('content/mapel', $data);
    }

    public function addd_mapel()
    {
        $idsek = $this->session->userdata('id_sek');
        $data = [
            'mapel' => $this->M_tampil->add_mapel($idsek),
            'kel' => $this->M_tampil->kelas($idsek)
        ];
        $this->page('content/addd_mapel', $data);
    }

    public function adddact()
    {
        $config = array(
            array(
                'field' => 'semester',
                'label' => 'Semester',
                'rules' => 'required'
            ),
            array(
                'field' => 'tanggal',
                'label' => 'Tanggal Ujian',
                'rules' => 'required'
            ),
            array(
                'field' => 'mulai',
                'label' => 'Waktu Mulai',
                'rules' => 'required'
            ),
            array(
                'field' => 'selesai',
                'label' => 'Waktu Selesai',
                'rules' => 'required'
            ),
            array(
                'field' => 'pass',
                'label' => 'Password',
                'rules' => 'required'
            )
        );

        $this->form_validation->set_rules($config);
        if ($this->form_validation->run($config) == false) {
            $idsek = $this->session->userdata('id_sek');
            $data = [
                'mapel' => $this->M_tampil->add_mapel($idsek),
                'kel' => $this->M_tampil->kelas($idsek)
            ];
            $this->page('content/addd_mapel', $data);
        } else {
            $idsek = $this->session->userdata('id_sek');
            $this->M_insert->mapel_ujian($idsek);
            $this->index();
        }
    }


    // mapel soal
    public function add_mapel()
    {
        $idsek = $this->session->userdata('id_sek');
        $data = [
            'mapel' => $this->M_tampil->add_mapel($idsek)
        ];
        $this->page('content/add_mapel', $data);
    }
    public function addadd_mapel()
    {
        $this->page('content/addadd_mapel');
    }

    public function addaddact()
    {
        $config = array(
            array(
                'field' => 'idmapel',
                'label' => 'ID Mapel',
                'rules' => 'trim|callback_idmapel_check|required'

            ),
            array(
                'field' => 'mapel',
                'label' => 'Mata pelajaran',
                'rules' => 'required'
            )
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run($config) == false) {
            $idsek = $this->session->userdata('id_sek');
            $data = [
                'mapel' => $this->M_tampil->add_mapel($idsek)
            ];
            $this->page('content/addadd_mapel', $data);
        } else {
            $idsek = $this->session->userdata('id_sek');
            $this->M_insert->add_mapel($idsek);
            $this->add_mapel();
        }
    }

    public function idmapel_check($str)
    {
        $id = 0;
        $idsek = $this->session->userdata('id_sek');
        $cek = $this->M_tampil->add_mapel($idsek);

        foreach ($cek->result() as $c) {
            $id = $c->id_sek;
        }

        if ($str == $cek) {
            $this->form_validation->set_message('idmapel_check', '{field} Sudah Digunakan Sebelumnya');
            return FALSE;
        } else {
            return TRUE;
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
