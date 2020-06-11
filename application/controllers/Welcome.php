<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status') != "login") {
			redirect(base_url("login"));
		}
		$this->load->model('M_tampil');
		$this->load->model('M_insert');
		$this->load->model('M_update');
		$this->load->library('session');
		$this->load->helper(array('form', 'url'));
		$this->load->helper('file');
	}

	// dasboard
	public function index()
	{
		$this->page('content/dasboard');
	}

	// profil Sekolah
	public function profil()
	{
		$id = $this->session->userdata('id_sek');
		$data = [
			'profil' => $this->M_tampil->profil($id)
		];
		$this->page('content/profil', $data);
	}

	public function add_profil()
	{
		$this->page('content/add_profil');
	}

	public function sekolah()
	{
		$config = array(
			array(
				'field' => 'sekolah',
				'label' => 'Nama Sekolah',
				'rules' => 'required|max_length[50]'
			),
			array(
				'field' => 'prov',
				'label' => 'Provinsi',
				'rules' => 'required'
			),
			array(
				'field' => 'kab',
				'label' => 'Kabupaten',
				'rules' => 'required'
			),
			array(
				'field' => 'kec',
				'label' => 'Kecamatan',
				'rules' => 'required'
			),
			array(
				'field' => 'alamat',
				'label' => 'Alamat Sekolah',
				'rules' => 'required'
			),
			array(
				'field' => 'email',
				'label' => 'Alamat Email',
				'rules' => 'required|max_length[40]|valid_email'
			),
			array(
				'field' => 'kontak',
				'label' => 'Contact',
				'rules' => 'required'
			)
		);
		$this->form_validation->set_rules($config);
		if ($this->form_validation->run() == false) {
			$this->page('content/add_profil', $config);
		} else {
			$idsek = $this->session->userdata('id_sek');
			$this->M_insert->sekolah($idsek);
			$this->profil();
		}
	}

	// Akun Sekolah
	public function akun()
	{
		$idsek = $this->session->userdata('id_sek');
		$data = [
			'akun' => $this->M_tampil->get_akun($idsek)
		];
		$this->page('content/akun', $data);
	}
	public function editakun()
	{
		$idsek = $this->session->userdata('id_sek');
		$data = [
			'akun' => $this->M_tampil->get_akun($idsek)
		];
		$this->page('content/edit_akun', $data);
	}
	public function add_akun()
	{
		$this->page('content/add_akun');
	}
	public function add_akunact()
	{
		$config = array(
			array(
				'field' => 'user',
				'label' => 'Username',
				'rules' => 'required'
			),
			array(
				'field' => 'email',
				'label' => 'Alamat Email',
				'rules' => 'required|max_length[40]|callback_email_check|valid_email'
			),
			array(
				'field' => 'pass',
				'label' => 'Password',
				'rules' => 'required',
				'errors' => array(
					'required' => 'You must provide a %s.'

				)
			),
			array(
				'field' => 'repass',
				'label' => 'Re-Entry Password',
				'rules' => 'required|matches[pass]'
			)
		);
		$this->form_validation->set_rules($config);
		if ($this->form_validation->run() == FALSE) {
			$this->page('content/add_akun', $config);
		} else {
			$idsek = $this->session->userdata('id_sek');
			$this->M_insert->add_akun($idsek);
			$this->akun();
		}
	}

	public function email_check($str)
	{
		$idsek = $this->session->userdata('id_sek');
		$email = $this->M_tampil->get_akun($idsek);

		foreach ($email->result() as $e) {
			$mail = $e->email;
		}

		if ($str == $mail) {
			$this->form_validation->set_message('email_check', '{field} Sudah Digunakan Sebelumnya');
			return FALSE;
		} else {
			return TRUE;
		}
	}

	// Admin Sekolah
	public function editadmin($id)
	{
		$idsek = $this->session->userdata('id_sek');
		$data = [
			'admin' => $this->M_tampil->get_admin($idsek, $id),
			'id' => $id
		];
		$this->page('content/edit_admin', $data);
	}

	public function edit_adminact()
	{
		$id = $this->input->post('id');
		$edit = array(
			array(
				'field' => 'user',
				'label' => 'Username',
				'rules' => 'required'
			),
			array(
				'field' => 'email',
				'label' => 'Alamat Email',
				'rules' => 'required|max_length[40]|valid_email'
			),
			array(
				'field' => 'pass',
				'label' => 'Password',
				'rules' => 'required',
				'errors' => array(
					'required' => 'You must provide a %s.'

				)
			),
			array(
				'field' => 'repass',
				'label' => 'Re-Entry Password',
				'rules' => 'required|matches[pass]'
			)
		);
		$this->form_validation->set_rules($edit);
		if ($this->form_validation->run($edit) == FALSE) {
			$idsek = $this->session->userdata('id_sek');
			$data = [
				'admin' => $this->M_tampil->get_admin($idsek, $id),
			];
			$this->page('content/edit_admin', $data);
		} else {
			$idsek = $this->session->userdata('id_sek');
			$this->M_update->akun($idsek, $id);
			$this->editakun();
		}
	}

	// setelan
	public function setel()
	{
		$this->page('content/setelan');
	}


	// Kelas
	public function kelas()
	{
		$idsek = $this->session->userdata('id_sek');
		$data = [
			'kelas' => $this->M_tampil->kelas($idsek)
		];
		$this->page('content/kelas', $data);
	}

	public function add_kelas()
	{
		$this->page('content/add_kelas');
	}

	public function add_kelasact()
	{
		$config = array(
			array(
				'field' => 'kelas',
				'label' => 'Kelas',
				'rules' => 'required'
			),
			array(
				'field' => 'ruang',
				'label' => 'Ruangan',
				'rules' => 'required'
			)
		);
		$this->form_validation->set_rules($config);
		if ($this->form_validation->run($config) == FALSE) {
			$idsek = $this->session->userdata('id_sek');
			$this->page('content/add_kelas');
		} else {
			$idsek = $this->session->userdata('id_sek');
			$this->M_insert->kelas($idsek);
			$this->kelas();
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
