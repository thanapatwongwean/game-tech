<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller{


    public function __construct()
    {
        parent::__construct();
        // Load [form,url] helper
        $this->load->helper(['form','url']);
    }

    public function index()
	{
	    $this->load->model('order_model');
	    $data['orders'] = $this->order_model->getOrder($this->session->username);
		$this->load->view('header');
        $this->load->view('form_cart',$data);
        $this->load->view('footer');
		
	}

	public function addCart($id){
        if(!($this->session->has_userdata('cart'))){
            $cart[] = '';
            $this->session->set_userdata('cart',$cart);
        }
        $cart = $this->session->userdata('cart');
        $cart[] =  $id;
        $this->session->set_userdata('cart',$cart);
        redirect('/');

    }

}