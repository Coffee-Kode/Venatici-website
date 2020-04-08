<?php

class Services extends CI_Model
{

    public function get_services()
    {
        return $this->db->get("services")->result();
    }

    public function save_services($id_service, $title, $description)
    {
        $this->db->where("id_service", $id_service);

        $data = array(
            "title" => $title,
            "description" => $description
        );

        return $this->db->update("services", $data);
    }
}
