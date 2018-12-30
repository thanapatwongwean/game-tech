<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Product extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(['form','url']);


    }

    public function index(){

        if(($this->session->logged_in) && ($this->session->username == 'admin')) {
            $this->load->model('product_model');
            $data['product'] = $this->product_model->getAll();
            $this->load->view('header');
            $this->load->view('product', $data);
            //$this->load->view('test_view',$data);
            $this->load->view('footer');
        }
        else{
            redirect('/');
        }



    }

    public  function insert(){
        $this->load->model('product_model');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name','name','required');
        $this->form_validation->set_rules('price','price','required');
        $this->form_validation->set_rules('quantity','quantity','required');
        $this->form_validation->set_rules('type','type','required');
        $this->form_validation->set_rules('description','description','required');
        $this->form_validation->set_message('required', 'The %s field is require');
        $submit_data['name'] = $this->input->post('name', TRUE);
        $submit_data['price'] = $this->input->post('price', TRUE);
        $submit_data['fullname'] = $this->input->post('fullname', TRUE);
        $submit_data['quantity'] = $this->input->post('quantity', TRUE);
        $submit_data['type'] = $this->input->post('type', TRUE);
        $submit_data['description'] = $this->input->post('description', TRUE);

        if($this->form_validation->run()){
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

        $this->session->set_flashdata('error',validation_errors());
        $this->load->view('header');
        $this->load->view('insert_product');
        $this->load->view('footer');
    }

    public function update($id){
        $this->load->model('product_model');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('name','name','required');
        $this->form_validation->set_rules('price','price','required');
        $this->form_validation->set_rules('quantity','quantity','required');
        $this->form_validation->set_rules('type','type','required');
        $this->form_validation->set_rules('description','description','required');
        $this->form_validation->set_message('required', 'The %s field is require');
        $submit_data['name'] = $this->input->post('name', TRUE);
        $submit_data['price'] = $this->input->post('price', TRUE);
        $submit_data['fullname'] = $this->input->post('fullname', TRUE);
        $submit_data['quantity'] = $this->input->post('quantity', TRUE);
        $submit_data['type'] = $this->input->post('type', TRUE);
        $submit_data['description'] = $this->input->post('description', TRUE);

        if($this->form_validation->run()){

            $data = array(
                'name' => $submit_data['name'],
                'price' => $submit_data['price'],
                'quantity' =>$submit_data['quantity'],
                'type' =>$submit_data['type'],
                'description' =>$submit_data['description']
            );
            if($this->product_model->updateData($id,$data)){
                $this->session->set_flashdata('msg','update successed');
                redirect('product');
            }
            else{
                $this->session->set_flashdata('error','update failed');
                redirect('product');
            }
        }
        $this->session->set_flashdata('error',validation_errors());
        $data = $this->product_model->getData($id);
        $this->load->view('header');
        $this->load->view('update_product',$data);
        $this->load->view('footer');
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