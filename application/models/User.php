<?php

class User extends CI_Model{

public function login($mail, $pass) {
        $this->db->where("mail", $mail);
        $this->db->where("password", $pass);
        return $this->db->get("users")->result();
    }
}