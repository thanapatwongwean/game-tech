<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
    }

    public function create_user($data)    {
        $data['password'] = password_hash($data['password'],PASSWORD_BCRYPT);
        return $this->db->insert('user', $data);
    }

    public function can_login($email, $password)
    {
        $this->db->where('email', $email);
        $datas = $this->db->get('user');
        print_r($datas);
        if ($datas->num_rows() > 0) {
            $data = $datas->row();
            $hash = $data->password;
            if (password_verify($password, $hash)) {
                return TRUE;
            }
        }
        return FALSE;
    }


    public function getUsername($email){
        $this->db->from('user');
        $this->db->where('email',$email);
        return $this->db->get()->row('username');
    }

    public function getAddress($username){
        $this->db->from('user');
        $this->db->where('username',$username);
        return $this->db->get()->row('address');
    }

    public function getFullname($username){
        $this->db->from('user');
        $this->db->where('username',$username);
        return $this->db->get()->row('phone');
    }

    public function getPhone($username){
        $this->db->from('user');
        $this->db->where('username',$username);
        return $this->db->get()->row('phone');
    }

    public function verify_password($password,$hash){
        return password_verify($password,$hash);
    }

}