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
	}

	public function index()
	{
		$this->page("content/dasboard");
	}

	public function setting()
	{
		$this->page("content/setting");
	}

	function akun()
	{
		$this->page("content/akun");
	}

	public function add_siswa()
	{
		$this->page("content/siswa");
	}
	
	public function page($content = "true" , $data = "true")
	{
		$this->load->view("content/header");
		$this->load->view("content/sidebar");
		$this->load->view($content,$data);
		$this->load->view("content/footer");
	}
}