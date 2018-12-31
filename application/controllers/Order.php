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
            $this->load->model('order_model');
            $data['orders'] = $this->order_model->getOrderAll();
            $this->load->view('header');
            $this->load->view('orders', $data);
            $this->load->view('footer');
        }
        else{
            redirect('/');
        }
    }

	public function submit($orderid){
        $this->load->model('order_model');
        $submit_data['status'] = $this->input->post('status', TRUE);
        $data = array(
                'orderid' => $orderid,
                'date' => $this->session->userdata('date'),
				'status' => $submit_data['status'],
                'username' => $this->session->userdata('otheruser')
        );
        $this->session->unset_userdata('date');
        $this->session->unset_userdata('otheruser');
        if($this->order_model->update($orderid,$data)){
                $this->session->set_flashdata('msg','update successed');
                redirect('order');
        }
        else{
                $this->session->set_flashdata('error_msg','update failed');
                redirect('order');
        }
    }
}