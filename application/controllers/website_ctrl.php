<?php
defined('BASEPATH') or exit('No direct script access allowed');

class website_ctrl extends CI_Controller
{

	public function __construct()
	{
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
		$this->load->view('website/header');
		$this->load->view('website/marketing');
		$this->load->view('website/footer');
	}

	public function emprende()
	{
		$this->load->view('website/header');
		$this->load->view('website/emprende');
		$this->load->view('website/footer');
	}

	public function develop_web()
	{
		$this->load->view('website/header');
		$this->load->view('website/develop_web');
		$this->load->view('website/footer');
	}

	public function send_mail()
	{
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$title = $this->input->post('title');
		$message = $this->input->post('message');

		$this->load->library('email');
		$configuraciones['mailtype'] = 'html';
		$this->email->initialize($configuraciones);
		$this->email->from($email, $name);
		$this->email->to('lnmendez94@gmail.com');
		$this->email->cc('rodrimanriquez10@gmail.com');

		$this->email->subject($title);
		$this->email->message('<p>Mensaje: ' . $message . '</p>');

		if ($this->email->send()) {
			echo json_encode(array("msg" => "Correo enviado"));
		} else {
			echo json_encode(array("msg" => $this->email->print_debugger()));
		}
	}
}
