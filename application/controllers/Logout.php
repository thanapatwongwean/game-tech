<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Logout extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Load url helper
        $this->load->helper('url');
    }

    public function logout(){
        if(!$this->session->logged_in){
            redirect(base_url());
        }
        $this->session->sess_destroy();
        redirect('/');
    }

}