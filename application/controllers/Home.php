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
        if(($this->session->logged_in) && ($this->session->username == 'admin')){
            redirect('product');
        }
        $data = array();
        if (!empty($param)) {
            $this->load->model('product_model');
            $datas = $this->product_model->getTypeData($param);
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
    public function CPU($param){
        $data = array();
        $this->load->model('product_model');
        $datas = $this->product_model->getCPU($param);
        $data = array(
            'param' => $param,
            'datas' => $datas
        );
        $this->load->view('header');
        $this->load->view('left_content');
        $this->load->view('right_content', $data);
        $this->load->view('footer');
    }

    public function GPU($param){
        $data = array();
        $this->load->model('product_model');
        $datas = $this->product_model->getGPU($param);
        $data = array(
            'param' => $param,
            'datas' => $datas
        );
        $this->load->view('header');
        $this->load->view('left_content');
        $this->load->view('right_content', $data);
        $this->load->view('footer');
    }

    public function storage($param){
        $data = array();
        $this->load->model('product_model');
        $datas = $this->product_model->getStorage($param);
        $data = array(
            'param' => $param,
            'datas' => $datas
        );
        $this->load->view('header');
        $this->load->view('left_content');
        $this->load->view('right_content', $data);
        $this->load->view('footer');
    }

    public function notebook($param){
        $data = array();
        $this->load->model('product_model');
        $datas = $this->product_model->getNotebook($param);
        $data = array(
            'param' => $param,
            'datas' => $datas
        );
        $this->load->view('header');
        $this->load->view('left_content');
        $this->load->view('right_content', $data);
        $this->load->view('footer');
    }

    public function cost($param){
        $data = array();
        $this->load->model('product_model');
        $datas = $this->product_model->getCost($param);
        $data = array(
            'param' => $param,
            'datas' => $datas
        );
        $this->load->view('header');
        $this->load->view('left_content');
        $this->load->view('right_content', $data);
        $this->load->view('footer');
    }

    public function mouse($param){
        $data = array();
        $this->load->model('product_model');
        $datas = $this->product_model->getMouse($param);
        $data = array(
            'param' => $param,
            'datas' => $datas
        );
        $this->load->view('header');
        $this->load->view('left_content');
        $this->load->view('right_content', $data);
        $this->load->view('footer');
    }

    public function keyboard($param){
        $data = array();
        $this->load->model('product_model');
        $datas = $this->product_model->getKeyboard($param);
        $data = array(
            'param' => $param,
            'datas' => $datas
        );
        $this->load->view('header');
        $this->load->view('left_content');
        $this->load->view('right_content', $data);
        $this->load->view('footer');
    }

    public function headphone($param){
        $data = array();
        $this->load->model('product_model');
        $datas = $this->product_model->getHeadphone($param);
        $data = array(
            'param' => $param,
            'datas' => $datas
        );
        $this->load->view('header');
        $this->load->view('left_content');
        $this->load->view('right_content', $data);
        $this->load->view('footer');
    }





}