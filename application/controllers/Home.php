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

}
