<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Item_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();

    }

    public function insert($data){
        $this->db->insert('item',$data);
    }

    public function updata($id,$orderid,$data){
        $this->db->where('id',$id);
        $this->db->where('orderid',$orderid);
        $this->db->update('item',$data);
    }

    public function delete($id,$orderid){
        $this->db->where('id',$id);
        $this->db->where('orderid',$orderid);
        $this->db->delete('item');
    }



}