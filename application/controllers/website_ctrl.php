<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class website_ctrl extends CI_Controller {

	public function __construct() {
        parent::__construct();
	}

	public function index()
	{
		$this->load->view('website/home');
	}

	public function marketing()
	{
		$this->load->view('website/marketing');
	}

	public function emprende()
	{
		$this->load->view('website/emprende');
	}

	public function develop_web()
	{
		$this->load->view('website/develop_web');
	}
}
