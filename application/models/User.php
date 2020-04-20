<?php

class User extends CI_Model
{

    public function login($mail, $pass)
    {
        $this->db->where("mail", $mail);
        $this->db->where("password", $pass);
        return $this->db->get("users")->result();
    }

    public function change_password($id_user, $new_password)
    {
        $this->db->where("id_user", $id_user);

        $data = array(
            "password" => $new_password
        );

        $this->db->update("users", $data);
        return $this->db->get("users")->result();
    }
}
