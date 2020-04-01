<?php
defined('BASEPATH') or exit('No direct script access allowed');

class private_ctrl extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('user');
        $this->load->model('about');
        $this->load->model('services');
        $this->load->model('plans');
        $this->load->model('details');
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

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('');
    }

    public function get_about()
    {
        echo json_encode($this->about->get_about());
    }

    public function get_services()
    {
        echo json_encode($this->services->get_services());
    }

    public function get_plans()
    {
        echo json_encode($this->plans->get_plans());
    }

    public function get_details()
    {
        echo json_encode($this->details->get_details());
    }


    public function save_about()
    {
        $about_us = $this->input->post('about_us');
        $mission = $this->input->post('mission');
        $vision = $this->input->post('vision');

        if ($this->session->userdata("user")) {
            if ($this->about->save_about($about_us, $mission, $vision)) {
                echo json_encode(array("msg" => "1"));
            } else {
                echo json_encode(array("msg" => "2"));
            }
        } else {
            redirect('');
        }
    }
}
