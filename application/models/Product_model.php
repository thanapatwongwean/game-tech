<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model{

    public function insert_data($data)    {
        return $this->db->insert('post', $data);
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
	
	
	
}