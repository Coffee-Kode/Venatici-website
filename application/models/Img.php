<?php

class Img extends CI_Model
{

    public function get_img()
    {
        return $this->db->get("img")->result();
    }
}
