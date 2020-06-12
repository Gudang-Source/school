<?php
defined("BASEPATH") OR exit("No direct script access allowed");
/**
 * 
 */
class Login extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->page("login/login");
	}

	public function regis()
	{
		$this->page("login/register");
	}

	public function forget()
	{
		$this->page("login/forget");
	}

	public function page($content = "true",$data = "true")
	{
		$this->load->view("login/header");
		$this->load->view($content,$data);
		$this->load->view("login/footer");
	}
}