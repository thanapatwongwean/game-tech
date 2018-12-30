<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Product_model extends CI_Model{

    public function insert_product($data)    {
        return $this->db->insert('product', $data);
    }

    public function getAll(){

        $query = $this->db->get('product');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $item) {
                $data[] = $item;
            }
            return $data;
        }
        return FALSE;

    }
    public  function getData($type){
        $this->db->where('type',$type);
        $this->db->order_by("name", "asc");
        $query = $this->db->get('product');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $item) {
                $data[] = $item;
            }
            return $data;
        }
        return FALSE;
    }

    public function getContain($text)
    {
        $this->db->like('name', $text);
        $this->db->order_by("name", "asc");
        $query = $this->db->get('product');
        if($query->num_rows() > 0) {
            foreach ($query->result_array() as $item) {
                $data[] = $item;
            }
            return $data;
        }
        return FALSE;
    }

    public function getContainVGA($text)
    {
        $this->db->like('description', $text);
        $this->db->order_by("name", "asc");
        $query = $this->db->get('product');
        if($query->num_rows() > 0) {
            foreach ($query->result_array() as $item) {
                $data[] = $item;
            }
            return $data;
        }
        return FALSE;
    }

    public  function getMouse($cost){
        $this->db->where('type',$cost);
        $this->db->order_by("name", "asc");
        $query = $this->db->get('product');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $item) {
                $data[] = $item;
            }
            return $data;
        }
        return FALSE;
    }

    public  function getKeyboard($cost){
        $this->db->where('type',$cost);
        $this->db->order_by("name", "asc");
        $query = $this->db->get('product');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $item) {
                $data[] = $item;
            }
            return $data;
        }
        return FALSE;
    }

    public  function getHeadphone($cost){
        $this->db->where('type',$cost);
        $this->db->order_by("name", "asc");
        $query = $this->db->get('product');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $item) {
                $data[] = $item;
            }
            return $data;
        }
        return FALSE;
    }

    public function getProduct($id){
        $this->db->where('id',$id);
        $query = $this->db->get('product');
        if($query->num_rows() > 0){
            foreach ($query->result_array() as $item) {
                $data = $item;
            }
            return $data;
        }
        return FALSE;
    }


    public function deleteData($id){
        $this->db->where('id',$id);
        return $this->db->delete('product');
    }

    public function updateData($id,$data){
        $this->db->where('id', $id);
        return $this->db->update('product', $data);
    }

}