<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Register extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        // Load [form,url] helper
        $this->load->helper(['form','url']);
    }
    public function index()
    {
        // Load form validation
        $this->load->library('form_validation');
        // set validation rules
        $this->form_validation->set_rules('username', 'username', 'required|is_unique[user.username]');
        $this->form_validation->set_rules('password', 'password', 'required|min_length[6]');
        $this->form_validation->set_rules('passwordConf', 'passwordConf', 'required|matches[password]');
        $this->form_validation->set_rules('fullname', 'fullname', 'trim|required');
        $this->form_validation->set_rules('address', 'address', 'trim|required');
        $this->form_validation->set_rules('email', 'email', 'required|valid_email|is_unique[user.email]');
        $this->form_validation->set_message('required', 'The %s field is require');
        $this->form_validation->set_message('is_unique', 'The %s is already taken');
        $this->form_validation->set_message('min_length', 'Password is Greater than 6 letter');
        $this->form_validation->set_message('matches', 'Password Confirm not match a password');
        $this->form_validation->set_message('valid_email', 'Email is invalid');
        $submit_data['username'] = $this->input->post('username', TRUE);
        $submit_data['password'] = $this->input->post('password', TRUE);
        $submit_data['fullname'] = $this->input->post('fullname', TRUE);
        $submit_data['address'] = $this->input->post('address', TRUE);
        $submit_data['phone'] = $this->input->post('phone', TRUE);
        $submit_data['email'] = $this->input->post('email', TRUE);
        if ($this->form_validation->run() == TRUE) {
            $this->load->model('user_model');
            if ($this->user_model->create_user($submit_data)) {
                redirect('/');
            } else {
            }
        }// Get the  data
        $this->load->view('header');
        $this->load->view('form_register');
        $this->load->view('footer');
    }
}