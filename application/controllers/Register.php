<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller{


    public function __construct()
    {
        parent::__construct();
        // Load url helper
        $this->load->helper(['form','url']);
    }

    public function index(){
        $this->load->library('form_validation');

        $this->form_validation->set_rules('Username', '', 'required');

        $this->load->view('header');
        $this->load->view('form_register');
        $this->load->view('footer');
    }

}