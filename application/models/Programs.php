<?php

class Programs extends CI_Model
{

    public function get_programs()
    {
        return $this->db->get("programs")->result();
    }
}
