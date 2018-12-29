<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_acc extends CI_Controller{


    public function __construct()
    {
        parent::__construct();
        // Load [form,url] helper
        $this->load->helper(['form','url']);
    }

    public function index()
	{
		$this->load->view('header');
        $this->load->view('user_section_acc');
        $this->load->view('footer');
		
	}

}