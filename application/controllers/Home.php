<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Load url helper
        $this->load->helper('url');
    }

    public function index(){
        //load view
        $this->load->view('header');
        $this->load->view('content');
        $this->load->view('footer');

    }

    public function login(){
        $this->load->library('form_validation');
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
