<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // Load url helper
        $this->load->helper('url');
    }

    function _remap($param)
    {
        $this->index($param);
    }

    public function index($param)
    {
        //load view
        $data = array();
        if (!empty($param)) {
            $this->load->model('product_model');
            $datas = $this->product_model->getData($param);
            $data = array(
                'param' => $param,
                'datas' => $datas
            );
        }
        $this->load->view('header');
        $this->load->view('left_content');
        $this->load->view('right_content', $data);
        $this->load->view('footer');

    }

}