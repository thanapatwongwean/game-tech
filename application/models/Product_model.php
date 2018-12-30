<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Product_model extends CI_Model{
    public function insert_product($data)    {
        return $this->db->insert('product', $data);
    }
    public function getAll(){
        $this->db->order_by("id", "asc");
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
		$this->db->where('type', 'VGA');
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
	
	public function getContainCPU($text)
    {
        $this->db->like('name', $text);
		$this->db->where('type', 'CPU');
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
	
	public function getContainKB($text)
    {
        $this->db->like('name', $text);
		$this->db->where('type', 'KB');
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
	
		
	public function getContainNB($text)
    {
        $this->db->like('name', $text);
		$this->db->where('type', 'NB');
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

    public function getContainHS($text)
    {
        $this->db->like('name', $text);
        $this->db->where('type','HEADSET');
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


    public function getContainGGM($text)
    {
        if($text == 'CORSAIR_M')
        {
            $this->db->like('name', 'CORSAIR');
        }
        elseif($text == 'SIGNO_M')
        {
            $this->db->like('name', 'SIGNO');
        }
        elseif($text == 'STEELSERIES_M')
        {
            $this->db->like('name', 'STEELSERIES');
        }

        $this->db->where('type','MOUSE');
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

    public function getContainGGK($text)
    {
        if($text == 'CORSAIR_K')
        {
            $this->db->like('name', 'CORSAIR');
        }
        elseif($text == 'SIGNO_K')
        {
            $this->db->like('name', 'SIGNO');
        }
        elseif($text == 'STEELSERIES_K')
        {
            $this->db->like('name', 'STEELSERIES');
        }

        $this->db->where('type','KB');
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

    public function getDataPrice($price)
    {
        $prices = (double)$price;
        if($prices <=15000)
            $this->db->where('price <=', $price)->where('price >=', 0);
        elseif($prices <=20000)
            $this->db->where('price <=', $price)->where('price >=', 15000);
        elseif($prices <=25000)
            $this->db->where('price <=', $price)->where('price >=', 20000);
        elseif($prices >25000)
            $this->db->where('price >', 25000);

        $this->db->where('type','NB');

        $this->db->order_by("price", "asc");
        $query = $this->db->get('product');
        if($query->num_rows() > 0) {
            foreach ($query->result_array() as $item) {
                $data[] = $item;
            }
            return $data;
        }
        return FALSE;
    }




}