<?php

class Img extends CI_Model
{

    public function get_img()
    {
        return $this->db->get("img")->result();
    }

    public function save_img($path, $img_title, $img_description, $img_url)
    {
        $data = array(
            "path" => $path,
            "url" => $img_url,
            "title" => $img_title,
            "description" => $img_description,
            "status" => 1
        );

        return $this->db->insert("img", $data);
    }


    public function edit_img($id_img, $title, $description)
    {
        $this->db->where("id_img", $id_img);

        $data = array(
            "title" => $title,
            "description" => $description
        );

        return $this->db->update("img", $data);
    }

    public function delete_img($id_img)
    {
        $this->db->where('id_img', $id_img);
        return $this->db->delete("img");
    }
}
