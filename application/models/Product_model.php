<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model{

    public function insert_data($data)    {
        return $this->db->insert('post', $data);
    }


}