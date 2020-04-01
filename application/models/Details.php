<?php

class Details extends CI_Model
{

    public function get_details()
    {
        return $this->db->get("details")->result();
    }
}
