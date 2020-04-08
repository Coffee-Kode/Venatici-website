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

    public function add_details()
    {
        $description = $this->input->post('detail_description');
        $check = $this->input->post('detail_switch');
        $id_plans_details = $this->input->post('id_plans');

        if ($this->session->userdata("user")) {
            if ($this->details->add_details($description, $check, $id_plans_details)) {
                echo json_encode(array("msg" => "1"));
            } else {
                echo json_encode(array("msg" => "2"));
            }
        } else {
            redirect('');
        }
    }

    public function save_details()
    {
        if ($this->session->userdata("user")) {
            $id_details = $this->input->post('edit_detail_id');
            $description = $this->input->post('edit_detail_description');
            $check = $this->input->post('edit_detail_switch');

            if ($this->details->save_details($id_details, $description, $check)) {
                echo json_encode(array("msg" => "1"));
            } else {
                echo json_encode(array("msg" => "2"));
            }
        } else {
            redirect('');
        }
    }

    public function delete_details()
    {
        if ($this->session->userdata("user")) {
            $id_details = $this->input->post('delete_detail_id');

            if ($this->details->delete_details($id_details)) {
                echo json_encode(array("msg" => "1"));
            } else {
                echo json_encode(array("msg" => "2"));
            }
        } else {
            redirect('');
        }
    }

    public function save_img()
    {

        if ($this->session->userdata("user")) {

            $config = [
                "upload_path" => "./assets/images",
                'allowed_types' => "png|jpg",
                'remove_spaces' => TRUE,
                'max_size' => '2048',
                'max_width' => '1200',
                'max_height' => '400'
            ];

            $this->load->library("upload", $config);

            if ($this->upload->do_upload('img_carousel')) {
                $data = array("upload_data" => $this->upload->data());
                $path = $data['upload_data']['file_name'];
                if ($this->img->save_img($path)) {
                    echo json_encode(array("msg" => "1"));
                } else {
                    echo json_encode(array("msg" => "2"));
                }
            } else {
                foreach ($this->upload->data() as $item => $value) {
                    if ($item == 'image_width') {
                        $width = $value;
                    } else if (($item == 'image_height')) {
                        $height = $value;
                    } else if (($item == 'image_size')) {
                        $size = $value;
                    }
                }
                if ($width != '1200' || $height != '400' || $size > '2048') {
                    echo json_encode(array("msg" => "3"));
                } else {
                    echo  $this->upload->display_errors();
                }
            }
        } else {
            redirect('');
        }
    }

    public function delete_img()
    {
        if ($this->session->userdata("user")) {
            $id_img = $this->input->post('id_img');
            $path = $this->input->post('img_path');

            if ($this->img->delete_img($id_img)) {
                echo json_encode(array("msg" => "1"));
                unlink("./assets/images/$path");
            } else {
                echo json_encode(array("msg" => "2"));
            }
        } else {
            redirect('');
        }
    }

    public function save_plans()
    {
        $id_plans = $this->input->post('plan_id');
        $title = $this->input->post('plan_title');
        $description = $this->input->post('plan_description');
        $cost = $this->input->post('plan_cost');

        if ($this->session->userdata("user")) {
            if ($this->plans->save_plans($id_plans, $title, $description, $cost)) {
                echo json_encode(array("msg" => "1"));
            } else {
                echo json_encode(array("msg" => "2"));
            }
        } else {
            redirect('');
        }
    }

    public function save_programs()
    {
        $programs = $this->input->post('programs');

        if ($this->session->userdata("user")) {
            if ($this->programs->save_programs($programs)) {
                echo json_encode(array("msg" => "1"));
            } else {
                echo json_encode(array("msg" => "2"));
            }
        } else {
            redirect('');
        }
    }

    public function save_services()
    {
        if ($this->session->userdata("user")) {
            $id_service = $this->input->post('id_service');
            $title = $this->input->post('title');
            $description = $this->input->post('description');

            if ($this->services->save_services($id_service, $title, $description)) {
                echo json_encode(array("msg" => "1"));
            } else {
                echo json_encode(array("msg" => "2"));
            }
        } else {
            redirect('');
        }
    }
}
