<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Order_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Bangkok');

    }

    public  function  getOrder($username){
        $this->db->where('username',$username);
        $data = $this->db->get('order');
        if($data->num_rows() > 0){
            foreach ($data>result_array() as $item) {
                $orders[] = $item;
            }
            return $orders;
        }
        return false;

    }

    public function insert_order($data){
        $date = date('Y-m-d H:i:s');
        $data = array(
            'date'  => $date,
            'status'  => $data['status'],
            'username' => $data['username']
        );
        return $this->db->insert('orders', $data);
    }

    public function update($id,$data){
        $this->db->where('orderid',$id);
        return $this->db->update('orders',$data);
    }

    public function delete($id){
        $this->db->where('orderid',$id);
        return $this->db->delete('orders');
    }

}