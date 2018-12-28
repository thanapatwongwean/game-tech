<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller{


    public function __construct()
    {
        parent::__construct();
        // Load [form,url] helper
        $this->load->helper(['form','url']);
    }

    public function index(){
        // Load form validation
        $this->load->library('form_validation');
        // set validation rules
        $this->form_validation->set_rules('username', 'username','required | is_unique[user.username]',
            array(
            'required'      => 'Username is required',
            'is_unique'     => 'This %s already exists.'
        )
        );
        $this->form_validation->set_rules('password', 'password', 'required | min_length[6]',
            array(
                'required'      => 'Password Confirm is required',
                'min_length'    => 'Password is Greater than 6 letter'
            )
        );
        $this->form_validation->set_rules('passwordConf', 'passwordConf', 'required | match[password]',
            array(
            'required'      => 'Password Confirm is required',
            'match'         => 'Password Confirm not match a password'
        ));
        $this->form_validation->set_rules('fullname', 'fullname', 'required');
        $this->form_validation->set_rules('address', 'address', 'required');
        $this->form_validation->set_rules('email', 'email', 'required | valid_email | is_unique[user.email]',
        array(
            'required'      => 'Email is required',
            'valid_email'   => 'Email is invalid',
            'is_unique'     => 'This %s already exists.'
            )
        );

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('header');
            $this->load->view('form_register');
            $this->load->view('footer');
        } else {
            // load user_model
            $this->load->model('user_model');
            // Get the  data
            $submit_data['name'] = $this->input->post('name', TRUE);
            $submit_data['password'] = $this->input->post('password', TRUE);
            $submit_data['address'] = $this->input->post('address', TRUE);
            $submit_data['phone'] = $this->input->post('phone', TRUE);
            $submit_data['email'] = $this->input->post('email', TRUE);
            if ($this->user_model->insert_data($submit_data)) {
                // redirect to home
                redirect('/');
            } else {
                // redirect register
                redirect('/register');
            }
        }
    }

}