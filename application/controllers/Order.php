<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Order extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(['form','url']);


    }

    public function index(){

        if(($this->session->logged_in) && ($this->session->username == 'admin')) {
            $this->load->model('product_model');
            $data['orders'] = $this->product_model->getOrder();
            $this->load->view('header');
            $this->load->view('orders', $data);
            $this->load->view('footer');
        }
        else{
            redirect('/');
        }
    }

	public function submit($status){
        $this->load->model('product_model');

        $submit_data['status'] = $this->input->post('status', TRUE);
		$id = $this->db->load->get('orderid');
        $data = array(
                'orderid' => $submit_data['orderid'],
                'date' =>$submit_data['date'],
				'username' => $submit_data['username'],
				'status' => $submit_data['status']);

        if($this->product_model->updateOrder($status,$data)){
                $this->session->set_flashdata('msg','update successed');
                redirect('orders');
        }
        else{
                $this->session->set_flashdata('error_msg','update failed');
                redirect('orders');
        }
        
        $data = $this->product_model->getProduct($status);
        $this->load->view('header');
        $this->load->view('orders',$data);
        $this->load->view('footer');
    }
}