<?php
defined('BASEPATH') or exit ('No direct script access allowed');
/**
 * 
 */
class C_delet extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_hapus');
	}

	public function sekolah($id)
	{
		$this->M_hapus->Delete("sekolah",$id);
		redirect(base_url('admin/profil'));
	}

	public function siswa($id)
	{
		$this->M_hapus->Delete("siswa",$id);
		redirect(base_url('admin/siswa'));
	}

	public function admin($id)
	{
		$this->M_hapus->Delete("admin",$id);
		redirect(base_url('admin/akun'));
	}

	public function soal($id)
	{
		$this->M_hapus->Delete("soal",$id);
		redirect(base_url('admin/soal'));
	}
}