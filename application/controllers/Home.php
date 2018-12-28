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

        $this->form_validation->set_rules('email', 'email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'password', 'required|min_length[6]|callback_check_user');
        $this->form_validation->set_message('required', 'The %s field is require');
        $this->form_validation->set_message('min_length', 'Password is Greater than 6 letter');
        $this->form_validation->set_message('valid_email', 'Email is invalid');

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

    public function check_user($password){
        $this->load->model('user_model');
        $email=$this->input->post('email');
            if($this->user_model->login($email,$password)){
                $this->session->user_data('email',$email);
                $this->session->user_data('username',$this->user_model->getUsername($this->session->email));
                $this->session->user_data('address',$this->user_model->getAddeess($this->session->username));
                $this->session->user_data('fullname',$this->user_model->getFullname($this->session->username));
                $this->session->user_data('phone',$this->user_model->getPhone($this->session->username));
                $this->session->user_data('logged_in','1');
                redirect('/','refresh');
            }

    }
}
