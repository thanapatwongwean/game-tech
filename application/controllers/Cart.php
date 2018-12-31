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
        $cart = $this->session->userdata('cart');
        $this->load->model(Product_model);
        foreach ($cart as $id){
            $data['product'][] = $this->product_model->getData($id);
        }
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
        $newCart[] = '';
        foreach ($cart as $c)
        $newCart[] = $c;
        $this->session->unset_userdata('cart');
        $this->session->set_userdata('cart',$newCart);
        redirect('/');

    }


    public function addSpec($type,$id){
        switch ($type){
            case'CPU':
                if($this->session->has_userdata('CPU')){
                    $this->session->unset_userdata('CPU');
                }
                $this->session->set_userdata('CPU',$id);
                break;
            case'MB':
                if($this->session->has_userdata('MB')){
                    $this->session->unset_userdata('MB');
                }
                $this->session->set_userdata('MB',$id);
                break;
            case'RAM':
                if($this->session->has_userdata('RAM')){
                    $this->session->unset_userdata('RAM');
                }
                $this->session->set_userdata('RAM',$id);
                break;
            case'VGA':
                if($this->session->has_userdata('VGA')){
                    $this->session->unset_userdata('VGA');
                }
                $this->session->set_userdata('VGA',$id);
                break;
            case'HDD':
                if($this->session->has_userdata('HDD')){
                    $this->session->unset_userdata('HDD');
                }
                $this->session->set_userdata('HDD',$id);
                break;
            case'SSD':
                if($this->session->has_userdata('SSD')){
                    $this->session->unset_userdata('SSD');
                }
                $this->session->set_userdata('SSD',$id);
                break;
            case'CASE':
                if($this->session->has_userdata('CASE')){
                    $this->session->unset_userdata('CASE');
                }
                $this->session->set_userdata('CASE',$id);
                break;
            case'PSU':
                if($this->session->has_userdata('PSU')){
                    $this->session->unset_userdata('pSU');
                }
                $this->session->set_userdata('PSU',$id);
                break;
            case'COOL':
                if($this->session->has_userdata('COOL')){
                    $this->session->unset_userdata('COOL');
                }
                $this->session->set_userdata('COOL',$id);
                break;
        }
        redirect('/');
    }

    public function addCartAll($data){
        if(!($this->session->has_userdata('cart'))){
            $cart[] = '';
            $this->session->set_userdata('cart',$cart);
        }
        $cart = $this->session->userdata('cart');
        $newCart[] = '';
        foreach ($data as $item){
            $newCart[] = $item;
        }
        foreach ($cart as $item){
            $newCart[] = $item;
        }
        $this->session->unset_userdata('cart');
        $this->session->set_userdata('cart',$newCart);
        redirect('/');

    }

    public function deleteCart($id){
        $cart = $this->session->userdata('cart');
        $newCart[] = "";
        foreach ($cart as $item){
            if(!($item == $id)){
                $newCart[] = $item;
            }
        }
        $this->session->unset_userdata('cart');
        $this->session->set_userdata('cart',$newCart);
        redirect('/');
    }

}