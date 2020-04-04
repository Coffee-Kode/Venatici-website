<?php
defined('BASEPATH') or exit('No direct script access allowed');

class private_ctrl extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('user');
        $this->load->model('about');
        $this->load->model('details');
        $this->load->model('img');
        $this->load->model('plans');
        $this->load->model('programs');
        $this->load->model('services');
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
