<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Product extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(['form','url']);


    }

    public function index(){

        $this->load->model('product_model');
        $data = $this->product_model->getAll();
        $this->load->view('header');
        $this->load->view('product',$data);
        $this->load->view('footer');



    }

    public  function insert(){
        $this->load->model('product_model');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name','name','require');
        $this->form_validation->set_rules('price','price','require');
        $this->form_validation->set_rules('quantity','quantity','require');
        $this->form_validation->set_rules('type','type','require');
        $this->form_validation->set_rules('description','description','require');
        if($this->form_validation->run() ==  false){
            $this->session->set_flashdata('error',validation_errors());
            $this->load->view('header');
            $this->load->view('insert_product');
            $this->load->view('footer');
        }
        else{
            $submit_data = $this->input->post(NULL,TRUE);
            $data = array(
                'name' => $submit_data['name'],
                'price' => $submit_data['price'],
                'quantity' =>$submit_data['quantity'],
                'type' =>$submit_data['type'],
                'description' =>$submit_data['description']
            );
            if($this->product_model->insert_product($data)){
                $this->session->set_flashdata('msg','insert successed');
            }
            else{
                $this->session->set_flashdata('error','insert failed');
                }
        }
    }

    public function update($id){
        $this->load->model('product_model');
        $this->load->library('form_validation');
        $data = $this->product_model->getData($id);
        $this->form_validation->set_rules('name','name','require');
        $this->form_validation->set_rules('price','price','require');
        $this->form_validation->set_rules('quantity','quantity','require');
        $this->form_validation->set_rules('type','type','require');
        $this->form_validation->set_rules('description','description','require');

        if($this->form_validation->run() ==  false){
            $this->session->set_flashdata('error',validation_errors());
            $this->load->view('header');
            $this->load->view('update_product',$data);
            $this->load->view('footer');
        }
        else{
            $submit_data = $this->input->post(NULL,TRUE);
            $data = array(
                    'name' => $submit_data['name'],
                    'price' => $submit_data['price'],
                    'quantity' =>$submit_data['quantity'],
                    'type' =>$submit_data['type'],
                    'description' =>$submit_data['description']
            );
            if($this->product_model->update($id,$data)){
                $this->session->set_flashdata('msg','update successed');
                redirect('product');
            }
            else{
                $this->session->set_flashdata('error','update failed');
                redirect('product');
            }
        }
    }

    public function delete($id){
        $this->load->model('product_model');
        if($this->product_model->deleteData($id)){
            $this->session->set_flashdata('msg','delete successed');
            redirect('product');
        }
        else{
            $this->session->set_flashdata('error','delete failed');
            redirect('product');
        }

    }
}