<?php

class Details extends CI_Model
{

    public function get_details()
    {
        return $this->db->get("details")->result();
    }

    public function get_details_plan_1()
    {
        $this->db->where("id_plans_details", "1");
        return $this->db->get("details")->result();
    }

    public function get_details_plan_2()
    {
        $this->db->where("id_plans_details", "2");
        return $this->db->get("details")->result();
    }

    public function get_details_plan_3()
    {
        $this->db->where("id_plans_details", "3");
        return $this->db->get("details")->result();
    }

    public function get_details_plan_4()
    {
        $this->db->where("id_plans_details", "4");
        return $this->db->get("details")->result();
    }

    public function get_details_plan_5()
    {
        $this->db->where("id_plans_details", "5");
        return $this->db->get("details")->result();
    }

    public function get_details_plan_6()
    {
        $this->db->where("id_plans_details", "6");
        return $this->db->get("details")->result();
    }

    public function get_details_plan_7()
    {
        $this->db->where("id_plans_details", "7");
        return $this->db->get("details")->result();
    }

    public function get_details_plan_8()
    {
        $this->db->where("id_plans_details", "8");
        return $this->db->get("details")->result();
    }

    public function get_details_plan_9()
    {
        $this->db->where("id_plans_details", "9");
        return $this->db->get("details")->result();
    }

    public function get_details_plan_10()
    {
        $this->db->where("id_plans_details", "10");
        return $this->db->get("details")->result();
    }

    public function get_details_plan_11()
    {
        $this->db->where("id_plans_details", "11");
        return $this->db->get("details")->result();
    }

    public function get_details_emprende()
    {
        return $this->db->query("SELECT details.id_details, details.description, details.check, details.id_plans_details FROM details
        JOIN plans ON details.id_plans_details = plans.id_plans
        JOIN services ON plans.id_services_plans = services.id_service
        WHERE services.id_service = 1 ORDER BY details.id_details")->result();
    }

    public function get_details_marketing()
    {
        return $this->db->query("SELECT details.id_details, details.description, details.check, details.id_plans_details FROM details
        JOIN plans ON details.id_plans_details = plans.id_plans
        JOIN services ON plans.id_services_plans = services.id_service
        WHERE services.id_service = 2 ORDER BY details.id_details")->result();
    }
    public function get_details_web()
    {
        return $this->db->query("SELECT details.id_details, details.description, details.check, details.id_plans_details FROM details
        JOIN plans ON details.id_plans_details = plans.id_plans
        JOIN services ON plans.id_services_plans = services.id_service
        WHERE services.id_service = 3 ORDER BY details.id_details")->result();
    }
}
