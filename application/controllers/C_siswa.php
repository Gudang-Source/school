<?php
defined('BASEPATH') or exit('No direct script access allowed');
class C_siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }
        $this->load->model('M_tampil');
        $this->load->model('M_insert');
        $this->load->model('M_update');
    }

    public function index()
    {
        $id = $this->session->userdata('id_sek');
        $data = [
            'siswa' => $this->M_tampil->siswa($id)
        ];
        $this->page('content/siswa', $data);
    }

    public function add_siswa()
    {
        $id = $this->session->userdata('id_sek');
        $data = [
            'kelas' => $this->M_tampil->kelas($id)
        ];
        $this->page('content/add_siswa', $data);
    }

    public function add_siswact()
    {
        $config = array(
            array(
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => 'required'
            ),
            array(
                'field' => 'nis',
                'label' => 'NIS',
                'rules' => 'required|numeric|callback_nis_check'
            ),
            array(
                'field' => 'jk',
                'label' => 'Jenis Kelamin',
                'rules' => 'required'
            ),
            array(
                'field' => 'kelas',
                'label' => 'Kelas',
                'rules' => 'required'
            ),
            array(
                'field' => 'hp',
                'label' => 'No Handphone',
                'rules' => 'required'
            )
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run($config) == FALSE) {
            $id = $this->session->userdata('id_sek');
            $data = [
                'kelas' => $this->M_tampil->kelas($id)
            ];
            $this->page('content/add_siswa', $data);
        } else {
            $idsek = $this->session->userdata('id_sek');
            $this->M_insert->siswa($idsek);
            $this->index();
        }
    }

    public function nis_check($str)
    {
        $idsek = $this->session->userdata('id_sek');
        $nis = $this->M_tampil->siswa($idsek);
        foreach ($nis->result() as $e) {
            $nis = $e->nis;
        }

        if ($str == $nis) {
            $this->form_validation->set_message('nis_check', '{field} Sudah Diinput Sebelumnya');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function upsiswa()
    {
        $idsek = $this->session->userdata('id_sek');
        $data = [
            'siswa' => $this->M_tampil->siswa($idsek)
        ];
        $this->page('content/edit_siswa', $data);
    }

    public function edit_siswa($id)
    {
        $idsek = $this->session->userdata('id_sek');
        $data = [
            'siswa' => $this->M_tampil->siswa($idsek, $id),
            'kelas' => $this->M_tampil->kelas($idsek)
        ];
        $this->page('content/upd_siswa', $data);
    }

    public function edit_siswaact()
    {
        $id = $this->input->post('id');
        $config = array(
            array(
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => 'required'
            ),
            array(
                'field' => 'nis',
                'label' => 'NIS',
                'rules' => 'required|numeric'
            ),
            array(
                'field' => 'jk',
                'label' => 'Jenis Kelamin',
                'rules' => 'required'
            ),
            array(
                'field' => 'kelas',
                'label' => 'Kelas',
                'rules' => 'required'
            ),
            array(
                'field' => 'hp',
                'label' => 'No Handphone',
                'rules' => 'required'
            )
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run($config) == FALSE) {
            $id = $this->session->userdata('id_sek');
            $data = [
                'kelas' => $this->M_tampil->kelas($id)
            ];
            $this->page('content/upd_siswa', $data);
        } else {
            $idsek = $this->session->userdata('id_sek');
            $this->M_update->siswa($idsek, $id);
            $this->index();
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
