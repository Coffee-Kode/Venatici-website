<?php

class Programs extends CI_Model
{

    public function get_programs()
    {
        return $this->db->get("programs")->result();
    }

    public function save_programs($programs)
    {
        $this->db->where("id_programs", "1");

        $data = array(
            "description" => $programs
        );

        return $this->db->update("programs", $data);
    }
}