<?php

class Services extends CI_Model
{

    public function get_services()
    {
        return $this->db->get("services")->result();
    }
}
