<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Load url helper
        $this->load->helper('url');
    }

     function _remap($param){
        $this->index($param);
     }

    public function index($param){
        //load view
        $data = array();
        if(!empty($param)){
            $this->load->model('product_model');
            $datas = $this->product_model->getData($param);
            $data = array(
                'param' => $param,
                'datas' => $datas
            );
        }
            $this->load->view('header');
            $this->load->view('left_content');
            $this->load->view('right_content',$data);
            $this->load->view('footer');

    }

    public function login(){
        $this->load->library('session');
        $this->load->model('user_model');
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        if($this->user_model->check_user($email,$password)){
            $data = $this->user_model->getUserData($email);
            $this->session->set_userdata($data);
            redirect('/');
        }
        else{
            $this->form_validation->set_message('login', 'Incorrect email or password.');
            redirect('/');
        }

    }
}
