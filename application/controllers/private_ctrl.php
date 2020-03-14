<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class private_ctrl extends CI_Controller {

	public function __construct() {
        parent::__construct();
        
		$this->load->model('user');
	}

	public function index()
	{
        if ($this->session->userdata("user")) {
            $this->load->view('private/autoadmin');
        } else {
            $this->load->view('private/login');
        }
	}

	public function signin()
	{
		$mail = $this->input->post('mail');
        $pass = $this->input->post('pass');
        
        $arrayUser = $this->user->login($mail, md5($pass));
        if (count($arrayUser) > 0) {
            $this->session->set_userdata("user", $arrayUser);
            echo json_encode(array("msg" => "1"));
        } else {
            echo json_encode(array("msg" => "0"));
        }
	}
}
