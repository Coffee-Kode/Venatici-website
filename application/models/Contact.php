<?php

class Contact extends CI_Model
{

    public function get_contact()
    {
        return $this->db->get("contact")->result();
    }

    public function save_contact($description, $address, $email, $phone_1, $phone_2, $url_maps, $url_facebook, $url_instagram)
    {
        $this->db->where("id_contact", "1");

        $data = array(
            "description" => $description,
            "address" => $address,
            "email_1" => $email,
            "phone_1" => $phone_1,
            "phone_2" => $phone_2,
            "url_maps" => $url_maps,
            "url_facebook" => $url_facebook,
            "url_instagram" => $url_instagram,
        );

        return $this->db->update("contact", $data);
    }
}
