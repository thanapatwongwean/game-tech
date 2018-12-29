<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model{

    public function insert_product($data)    {
        return $this->db->insert('product', $data);
    }

    public function getAll(){
        $query = $this->db->get('product');
        if ($query->num_rows() > 0) {
            $data = array();
            foreach ($query->result_array() as $item) {
                $data['product'][] = array(
                    'id'    => $item['id'],
                    'name'  => $item['name'],
                    'price' => $item['price'],
                    'quantity' => $item['quantity'],
                    'type' => $item['type'],
                    'description' => $item['description'],
                    'image' => $item['image']
                );
            }
            return $data;
        }
        return FALSE;
    }

    public  function getTypeData($type){
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

    public  function getCPU($band){

            $this->db->where('type',$band);
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

    public  function getGPU($band){

        $this->db->where('type',$band);
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

    public  function getStorage($type){
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

    public  function getNotebook($band){
        $this->db->where('type',$band);
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

    public  function getCost($cost){
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

    public function getData($id){
        $this->db->where('$id',$id);
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
        $this->db->where('$id',$id);
        return $this->db->delete('product');
    }

    public function updataData($id,$data){
        $this->db->where('id', $id);
        return $this->db->update('product', $data);
    }

}