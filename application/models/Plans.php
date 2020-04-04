<?php

class Plans extends CI_Model
{

    public function get_plans()
    {
        return $this->db->get("plans")->result();
    }

    public function get_plans_emprende()
    {
        $this->db->where("id_services_plans", "1");
        return $this->db->get("plans")->result();
    }

    public function get_plans_marketing()
    {
        $this->db->where("id_services_plans", "2");
        return $this->db->get("plans")->result();
    }

    public function get_plans_web()
    {
        $this->db->where("id_services_plans", "3");
        return $this->db->get("plans")->result();
    }
}
