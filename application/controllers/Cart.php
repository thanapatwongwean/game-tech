<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller{


    public function __construct()
    {
        parent::__construct();
        // Load [form,url] helper
        $this->load->helper(['form','url']);
        $this->load->library('cart');
        $this->load->model('product_model');
    }

    public function index()
	{

        $data['items'] = is_array(unserialize($this->session->userdata('cart')) )? array_values(unserialize($this->session->userdata('cart'))):array();
        $data['total'] = $this->total();
        $this->load->view('header');
        $this->load->view('form_cart',$data);
        $this->load->view('footer');
        //$this->load->view('cart/index', $data);

	}

	public  function addCart($id){
        $product = $this->product_model->getgetDataFromId($id);
        $item = array(
            'id' => $product->id,
            'name' => $product->name,
            'image' => $product->image,
            'price' => $product->price,
            'quantity' => 1
        );
        if(!$this->session->has_userdata('cart')) {
            $cart = array($item);
            $this->session->set_userdata('cart', serialize($cart));
        } else {
            $index = $this->exists($id);
            $cart = array_values(unserialize($this->session->userdata('cart')));
            if($index == -1) {
                array_push($cart, $item);
                $this->session->set_userdata('cart', serialize($cart));
            } else {
                $cart[$index]['quantity']++;
                $this->session->set_userdata('cart', serialize($cart));
            }
        }
        echo "javascript:history.go(-1)";
    }

    private function buySet($id)
    {
        $product = $this->product_model->getgetDataFromId($id);
        $item = array(
            'id' => $product->id,
            'name' => $product->name,
            'image' => $product->image,
            'price' => $product->price,
            'quantity' => 1
        );
        if(!$this->session->has_userdata('cart')) {
            $cart = array($item);
            $this->session->set_userdata('cart', serialize($cart));
        } else {
            $index = $this->exists($id);
            $cart = array_values(unserialize($this->session->userdata('cart')));
            if($index == -1) {
                array_push($cart, $item);
                $this->session->set_userdata('cart', serialize($cart));
            } else {
                $cart[$index]['quantity']++;
                $this->session->set_userdata('cart', serialize($cart));
            }
        }
    }

    public function remove($id)
    {
        $index = $this->exists($id);
        $cart = array_values(unserialize($this->session->userdata('cart')));
        unset($cart[$index]);
        $this->session->set_userdata('cart', serialize($cart));
        redirect('cart');
    }


    public function addSpec($type,$id){
        switch ($type){
            case'CPU':
                if($this->session->has_userdata('CPU')){
                    $this->session->unset_userdata('CPU');
                }
                $data = $this->product_model->getNamefromId($id);
                $this->session->set_userdata('CPU',$data);
                break;
            case'MB':
                if($this->session->has_userdata('MB')){
                    $this->session->unset_userdata('MB');
                }
                $data = $this->product_model->getNamefromId($id);
                $this->session->set_userdata('MB',$data);
                break;
            case'RAM':
                if($this->session->has_userdata('RAM')){
                    $this->session->unset_userdata('RAM');
                }
                $data = $this->product_model->getNamefromId($id);
                $this->session->set_userdata('RAM',$data);
                break;
            case'VGA':
                if($this->session->has_userdata('VGA')){
                    $this->session->unset_userdata('VGA');
                }
                $data = $this->product_model->getNamefromId($id);
                $this->session->set_userdata('VGA',$data);
                break;
            case'HDD':
                if($this->session->has_userdata('HDD')){
                    $this->session->unset_userdata('HDD');
                }
                $data = $this->product_model->getNamefromId($id);
                $this->session->set_userdata('HDD',$data);
                break;
            case'SSD':
                if($this->session->has_userdata('SSD')){
                    $this->session->unset_userdata('SSD');
                }
                $data = $this->product_model->getNamefromId($id);
                $this->session->set_userdata('SSD',$data);
                break;
            case'CASE':
                if($this->session->has_userdata('CASE')){
                    $this->session->unset_userdata('CASE');
                }
                $data = $this->product_model->getNamefromId($id);
                $this->session->set_userdata('CASE',$data);
                break;
            case'PSU':
                if($this->session->has_userdata('PSU')){
                    $this->session->unset_userdata('PSU');
                }
                $data = $this->product_model->getNamefromId($id);
                $this->session->set_userdata('PSU',$data);
                break;
            case'COOL':
                if($this->session->has_userdata('COOL')){
                    $this->session->unset_userdata('COOL');
                }
                $data = $this->product_model->getNamefromId($id);
                $this->session->set_userdata('COOL',$data);
                break;
        }
        redirect("home/$type");
    }

    public function buyCartAll(){
        $data = [
            'CPU' => $this->session->userdata('CPU'),
            'MB' => $this->session->userdata('MB'),
            'MB' => $this->session->userdata('RAM'),
            'VGA' => $this->session->userdata('VGA'),
            'HDD' => $this->session->userdata('HDD'),
            'SSD' => $this->session->userdata('SSD'),
            'CASE' => $this->session->userdata('CASE'),
            'PSU' => $this->session->userdata('PSU'),
            'COOL' => $this->session->userdata('COOL')
        ];
        $this->buySet($data['CPU']);
        $this->buySet($data['MB']);
        $this->buySet($data['RAM']);
        $this->buySet($data['VGA']);
        $this->buySet($data['HDD']);
        $this->buySet($data['SSD']);
        $this->buySet($data['CASE']);
        $this->buySet($data['PSU']);
        $this->buySet($data['COOL']);
        echo "javascript:history.go(-1)";

    }

    private function exists($id)
    {
        $cart = array_values(unserialize($this->session->userdata('cart')));
        for ($i = 0; $i < count($cart); $i ++) {
            if ($cart[$i]['id'] == $id) {
                return $i;
            }
        }
        return -1;
    }

    private function total() {
        $items = is_array(unserialize($this->session->userdata('cart')))?array_values(unserialize($this->session->userdata('cart'))):array();;
        $s = 0;
        foreach ($items as $item) {
            $s += $item['price'] * $item['quantity'];
        }
        return $s;
    }

}