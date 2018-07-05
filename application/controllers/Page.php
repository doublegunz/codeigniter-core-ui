<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller
{
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function template()
	{
		$this->load->view('template');
	}

	public function dashboard()
	{
		$this->template->load('template', 'dashboard');
	}

	public function forms()
	{
		$this->template->load('template', 'forms');
	}

	public function tables()
	{
		$this->template->load('template', 'tables');
	}

	public function charts()
	{
		$this->template->load('template', 'charts');
	}

}
