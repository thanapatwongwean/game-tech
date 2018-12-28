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
		$this->load->view('header');
        $this->load->view('user_section');
        $this->load->view('footer');
		
	}

}