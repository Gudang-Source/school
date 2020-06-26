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
			'kab' => $this->M_wilayah->kab($kab)
		];
		$this->page("content/setting",$data);
	}

	public function profil()
	{
		$id = $this->session->userdata('id_sek');
		$data = [
			'profil' => $this->M_tampil->profil($id),
		];
		$this->page("content/profil",$data);
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
			'anak' => $this->M_tampil->admin_siswa($id)
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
		$data = [
			'mapel' => $this->M_tampil->getdata('soal')
		];
		$this->page("content/soal",$data);
	}
	public function add_soal()
	{
		$data = [
			'mapel' => $this->M_tampil->getdata("mapel")
		];
		$this->page("content/add_soal", $data);
	}
// End materi ujian

// Hasil ujian
	function repot()
	{
		$id = $this->session->userdata('id_sek');
		$data = [
			'repot' => $this->M_tampil->ceksoal($id)
		];
		$this->page("content/repot",$data);
	}

	public function prin()
	{
		$id = $this->session->userdata('id_sek');
		$data = [
			'prin' => $this->M_tampil->ceksoal($id),
			'sekolah' =>$this->M_tampil->profil($id)
		];
		$this->load->view('content/print',$data);
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