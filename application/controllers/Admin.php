<?php
defined("BASEPATH") OR EXIT("No direct script access allowed");
/**
 * 
 */
class Admin extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status') != "login") {
			redirect(base_url("login"));
		}
		$this->load->model("M_tampil");
		$this->load->model("M_wilayah");
	}

	public function index()
	{
		$this->page("content/dasboard");
	}

	public function seting()
	{
		$kab = $this->input->post('kab');
		echo $kab;
		$data = [
			'prov' => $this->M_wilayah->prov(),
			'kab' =>$this->M_wilayah->kab($kab)
		];
		$this->page("content/setting",$data);
	}
	
// admin
	function akun()
	{
		$this->page("content/akun");
	}
	public function add_admin()
	{
		$this->page("content/add_admin");
	}
// end Admin

// Siswa
	public function siswa()
	{
		$id = $this->session->userdata('id_sek');
		$data = [
			'anak' => $this->M_tampil->siswa($id)
		];
		$this->page("content/siswa", $data);
	}
	public function add_siswa()
	{
		$this->page("content/add_siswa");
	}
// edn siswa

// Mapel
	public function mapel()
	{
		$this->page("content/mapel");
	}
	public function add_mapel()
	{
		$this->page("content/add_mapel");
	}
// end mapel

// Materi Ujian
	public function soal()
	{
		$this->page("content/soal");
	}
	public function add_soal()
	{
		$this->page("content/add_soal");
	}
// End materi ujian

// Hasil ujian
	function repot()
	{
		$this->page("content/repot");
	}
// End Ujian

	public function page($content = "true" , $data = "true")
	{
		$id = $this->session->userdata('id_sek');
		$foto = [
			'admin' => $this->M_tampil->get_akun($id)
		];
		$this->load->view("content/header", $foto);
		$this->load->view("content/sidebar", $foto);
		$this->load->view($content,$data);
		$this->load->view("content/footer");
	}
}