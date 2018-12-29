<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Load url helper
        $this->load->helper('url');
    }
    public function index(){
        $this->load->library('form_validation');
        $this->load->model('user_model');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_message('required', 'The %s field is require');

        $email = $this->input->post('email');
        $password = $this->input->post('password');

        if($this->form_validation->run()) {

            if($this->user_model->can_login($email,$password)){
                $this->session->set_userdata('email',$email);
                $this->session->set_userdata('username',$this->user_model->getUsername($this->session->email));
                $this->session->set_userdata('address',$this->user_model->getAddress($this->session->username));
                $this->session->set_userdata('fullname',$this->user_model->getFullname($this->session->username));
                $this->session->set_userdata('phone',$this->user_model->getPhone($this->session->username));
                $this->session->set_userdata('logged_in','1');
                redirect('/','refresh');
            }
            else{
                $this->session->set_flashdata('error', 'Incorrect email or password.');
                redirect('/');
            }
        }
        $this->session->set_flashdata('error',validation_errors());
        redirect('/');
    }
}


