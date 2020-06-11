<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('M_insert');
        $this->load->model('M_tampil');
    }

    // Login
    public function index()
    {
        $this->page('login/login');
    }

    public function loginpun()
    {
        $config = array(
            array(
                'field' => 'email',
                'label' => 'E-Mail',
                'rules' => 'required|valid_email'
            ),
            array(
                'field' => 'pass',
                'label' => 'Password',
                'rules' => 'required'
            )
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run($config) == false) {
            $this->page('login/login', $config);
        } else {
            $this->M_tampil->login();
        }
    }

    public function regis()
    {
        $this->page('login/register');
    }

    public function loginact()
    {
        $config = array(
            array(
                'field' => 'id_sek',
                'label' => 'No Sekolah',
                'rules' => 'required|max_length[15]|numeric'
            ),
            array(
                'field' => 'user',
                'label' => 'Username',
                'rules' => 'required|max_length[30]'
            ),
            array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required|valid_email'
            ),
            array(
                'field' => 'pass',
                'label' => 'Password',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'You must provide a %s.',
                )
            ),
            array(
                'field' => 'confpass',
                'label' => 'Re-Entry Password',
                'rules' => 'required|matches[pass]'
            ),
            array(
                'field' => 'agree',
                'label' => 'Agree',
                'rules' => 'required'
            )
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == FALSE) {
            $this->page('login/register', $config);
        } else {
            $this->M_insert->regis();
            redirect('login');
        }
    }

    public function sek_check($str)
    {
        $idsek = $this->input->post('id_sek');
        $id_sek = $this->M_tampil->get_akun($idsek);

        foreach ($id_sek->result() as $e) {
            $id = $e->id_sek;
        }

        if ($str == $id) {
            $this->form_validation->set_message('sek_check', '{field} Sudah Terdaftar');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    // public function email_check($str)
    // {
    //     $idsek = $this->input->post('email');
    //     $email = $this->M_tampil->get_akun($idsek);

    //     foreach ($email->result() as $e) {
    //         $id = $e->email;
    //     }

    //     if ($str == $id) {
    //         $this->form_validation->email_message('sek_check', '{field} Sudah Terdaftar');
    //         return FALSE;
    //     } else {
    //         return TRUE;
    //     }
    // }

    public function forget()
    {
        $this->page('login/forget');
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }

    public function page($content = '', $data = '')
    {
        $this->load->view('login/header');
        $this->load->view($content, $data);
        $this->load->view('login/footer');
    }
}
