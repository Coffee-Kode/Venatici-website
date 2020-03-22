<?php

class About extends CI_Model
{

    public function get_about() {
        return $this->db->get("about")->result();
    }

    public function save_about($about_us, $mission, $vision)
    {
        $this->db->where("id_about", "1");

        $data = array(
            "about_us" => $about_us,
            "mission" => $mission,
            "vision" => $vision
        );

        return $this->db->update("about", $data);
    }
}
