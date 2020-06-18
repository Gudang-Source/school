<?php 
defined("BASEPATH") or exit("No direct script access allowed");
/**
 * 
 */
class C_add extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status') != "login") {
			redirect(base_url("login"));
		}
		$this->load->model('M_insert');
	}

	public function profil()
	{
		$data["id_sek"]   = $this->session->userdata('id_sek');
		$data["nama"]     = $this->input->post('nama');
		$data["provinsi"] = $this->input->post('provinsi');
		$data["kab"]      = $this->input->post('kab');
		$data["kec"]      = $this->input->post('kec');
		$data["alamat"]   = $this->input->post('alamat');
		$data["email"]    = $this->input->post('email');
		$data["telpon"]   = $this->input->post('telpon');

		$res = array(
			'id_sekolah' => $data["id_sek"],
			'nama'       => $data["nama"],
			'provinsi'   => $data["provinsi"],
			'kecamatan'  => $data["kec"],
			'kabupaten'  => $data["kab"],
			'alamat'     => $data["alamat"],
			'email'      => $data["email"],
			'telpon'     => $data["telpon"]
		);

		$res = $this->M_insert->data("sekolah", $res);
		redirect(base_url('admin'));
	}

	public function add_siswa()
	{
		$id = $this->session->userdata('id_sek');
		$data["nama"] = $this->input->post('nama');
		$data["nis"] = $this->input->post('nis');

		$res = array(
			'id_sek' => $id,
			'nama' => $data["nama"],
			'nis' => $data["nis"]
		 );

		$res = $this->M_insert->data("siswa",$res);
		redirect(base_url('admin'));
	}
}