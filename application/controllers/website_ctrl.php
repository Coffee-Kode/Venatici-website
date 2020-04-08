<?php
defined('BASEPATH') or exit('No direct script access allowed');

class website_ctrl extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('user');
		$this->load->model('about');
		$this->load->model('contact');
		$this->load->model('details');
		$this->load->model('img');
		$this->load->model('plans');
		$this->load->model('programs');
		$this->load->model('services');
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
		$mail_to = $this->input->post('mail_to');
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$title = $this->input->post('title');
		$message = $this->input->post('message');

		$this->load->library('email');
		$configuraciones['mailtype'] = 'html';
		$this->email->initialize($configuraciones);
		$this->email->from($email, $name);
		$this->email->to($mail_to);
		$this->email->subject($title);
		$this->email->message($message);

		if ($this->email->send()) {
			echo json_encode(array("msg" => "Correo enviado"));
		} else {
			echo json_encode(array("msg" => $this->email->print_debugger()));
		}
	}


	public function get_about()
	{
		echo json_encode($this->about->get_about());
	}

	public function get_contact()
	{
		echo json_encode($this->contact->get_contact());
	}

	public function get_details()
	{
		echo json_encode($this->details->get_details());
	}

	public function get_details_plan_1()
	{
		echo json_encode($this->details->get_details_plan_1());
	}

	public function get_details_plan_2()
	{
		echo json_encode($this->details->get_details_plan_2());
	}

	public function get_details_plan_3()
	{
		echo json_encode($this->details->get_details_plan_3());
	}

	public function get_details_plan_4()
	{
		echo json_encode($this->details->get_details_plan_4());
	}

	public function get_details_plan_5()
	{
		echo json_encode($this->details->get_details_plan_5());
	}

	public function get_details_plan_6()
	{
		echo json_encode($this->details->get_details_plan_6());
	}

	public function get_details_plan_7()
	{
		echo json_encode($this->details->get_details_plan_7());
	}

	public function get_details_plan_8()
	{
		echo json_encode($this->details->get_details_plan_8());
	}

	public function get_details_plan_9()
	{
		echo json_encode($this->details->get_details_plan_9());
	}

	public function get_details_plan_10()
	{
		echo json_encode($this->details->get_details_plan_10());
	}

	public function get_details_plan_11()
	{
		echo json_encode($this->details->get_details_plan_11());
	}

	public function get_details_emprende()
	{
		echo json_encode($this->details->get_details_emprende());
	}

	public function get_details_marketing()
	{
		echo json_encode($this->details->get_details_marketing());
	}

	public function get_details_web()
	{
		echo json_encode($this->details->get_details_web());
	}

	public function get_img()
	{
		echo json_encode($this->img->get_img());
	}

	public function get_plans()
	{
		echo json_encode($this->plans->get_plans());
	}

	public function get_plans_emprende()
	{
		echo json_encode($this->plans->get_plans_emprende());
	}

	public function get_plans_marketing()
	{
		echo json_encode($this->plans->get_plans_marketing());
	}

	public function get_plans_web()
	{
		echo json_encode($this->plans->get_plans_web());
	}

	public function get_programs()
	{
		echo json_encode($this->programs->get_programs());
	}

	public function get_services()
	{
		echo json_encode($this->services->get_services());
	}
}
