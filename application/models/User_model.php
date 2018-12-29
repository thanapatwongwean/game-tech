<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{

    public function insert_data($data)    {
        return $this->db->insert('post', $data);
    }

    public function check_user($email,$password){
        $this->db->where('email',$email);
        $datas = $this->db->get('email');
        if ($datas->num_rows() > 0) {
            $data = $datas->row();
            $hash = $data->password;
            if (password_verify($password, $hash)) {
                return TRUE;
            }
        }
        return FALSE;
    }




}