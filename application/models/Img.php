<?php

class Img extends CI_Model
{

    public function get_img()
    {
        return $this->db->get("img")->result();
    }

    public function save_img($path)
    {
        $data = array(
            "path" => $path,
            "status" => 1
        );

        return $this->db->insert("img", $data);
    }

    public function delete_img($id_img)
    {
        $this->db->where('id_img', $id_img);
        return $this->db->delete("img");
    }
}
