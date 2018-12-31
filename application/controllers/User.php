<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{


    public function __construct()
    {
        parent::__construct();
        // Load [form,url] helper
        $this->load->helper(['form','url']);
    }

    public function index()
	{
	    if(!($this->session->logged_in)){
            redirect('check');
        }
        $this->load->model('order_model');
        $data['orders'] = $this->order_model->getOrderfromUsername($this->session->userdata('username'));
        $this->load->view('header');
        $this->load->view('user_section',$data);
        $this->load->view('footer');
	}

}