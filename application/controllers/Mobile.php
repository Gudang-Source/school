<?php
defined("BASEPATH") or exit("No direct script access allowed");
/**
 * 
 */
class Mobile extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("M_tampil");
}
	public function index()
	{
		$data = [
            'sekolah' => $this->M_tampil->getdata('sekolah')
        ];
        $this->page('user/user', $data);
	}

	public function lanjut()
	{
		$this->M_tampil->user();
	}

	public function mapel($idsek,$kelas)
	{
		$data=[
			'mapel' => $this->M_tampil->soal($idsek,$kelas)
		];
		$this->page('user/mapel',$data);
	}

	public function login($id)
	{
		$this->page('user/login');
	}

	public function page($content = "true",$data = "true")
	{
		$this->load->view('user/header');
		$this->load->view($content,$data);
		$this->load->view('user/footer');

	}
}