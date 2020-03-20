<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class website_ctrl extends CI_Controller {

	public function __construct() {
        parent::__construct();
	}

	public function index()
	{
		$this->load->view('website/header');
		$this->load->view('website/home');
		$this->load->view('website/footer');
	}

	public function home()
	{
		$this->load->view('website/header');
		$this->load->view('website/home');
		$this->load->view('website/footer');
	}
	
	public function marketing()
	{
		$this->load->view('website/header_services');
		$this->load->view('website/marketing');
		$this->load->view('website/footer');
	}

	public function emprende()
	{
		$this->load->view('website/header_services');
		$this->load->view('website/emprende');
		$this->load->view('website/footer');
	}

	public function develop_web()
	{
		$this->load->view('website/header_services');
		$this->load->view('website/develop_web');
		$this->load->view('website/footer');
	}
}
