<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Order_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        date_timezone_set('Asia/Bangkok');

    }

    public function insert_order($data){
        $date = date('Y:m:d H:i:s');
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