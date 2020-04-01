<?php

class Plans extends CI_Model
{

    public function get_plans()
    {
        return $this->db->get("plans")->result();
    }
}
