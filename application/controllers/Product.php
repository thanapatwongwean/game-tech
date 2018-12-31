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

        $this->form_validation->set_rules('name','name','required|is_unique[product.name]');
        $this->form_validation->set_rules('price','price','required|greater_than[0]');
        $this->form_validation->set_rules('quantity','quantity','required|greater_than_equal_to[0]');
        $this->form_validation->set_rules('type','type','required');
        $this->form_validation->set_rules('description','description','required');
        $this->form_validation->set_message('required', 'The %s field is require');
        $this->form_validation->set_message('is_unique', 'The %s is already taken');
        $this->form_validation->set_message('greater_than', 'price must greater than 0');
        $this->form_validation->set_message('greater_than_equal_to', 'quantity must greater than equal to 0');

        $submit_data['name'] = $this->input->post('name', TRUE);
        $submit_data['price'] = $this->input->post('price', TRUE);
        $submit_data['fullname'] = $this->input->post('fullname', TRUE);
        $submit_data['quantity'] = $this->input->post('quantity', TRUE);
        $submit_data['type'] = $this->input->post('type', TRUE);
        $submit_data['description'] = $this->input->post('description', TRUE);

        if($this->form_validation->run()){

            $config['upload_path']          = 'public/images/uploads';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 512;
            $config['overwrite'] = TRUE;

            $this->load->library('upload',$config);
            $image = 0;
            if($this->upload->do_upload('image') == false){

                $this->session->set_flashdata('error_validation','file is cannot upload or file is null');
                $image = '';

            }else{
                $uploadData = $this->upload->data();
                $image = $uploadData['file_name'];
            }

                $data = array(

                    'name' => $submit_data['name'],
                    'price' => $submit_data['price'],
                    'quantity' =>$submit_data['quantity'],
                    'type' =>$submit_data['type'],
                    'description' =>$submit_data['description'],
                    'image' => $image
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
        $this->form_validation->set_rules('price','price','required|greater_than[0]');
        $this->form_validation->set_rules('quantity','quantity','greater_than_equal_to[0]');
        $this->form_validation->set_rules('type','type','required');
        $this->form_validation->set_rules('description','description','required');
        $this->form_validation->set_message('required', 'The %s field is require');
        $this->form_validation->set_message('greater_than', 'price must greater than 0');
        $this->form_validation->set_message('greater_than_equal_to', 'quantity must greater than equal to 0');

        $submit_data['name'] = $this->input->post('name', TRUE);
        $submit_data['price'] = $this->input->post('price', TRUE);
        $submit_data['fullname'] = $this->input->post('fullname', TRUE);
        $submit_data['quantity'] = $this->input->post('quantity', TRUE);
        $submit_data['type'] = $this->input->post('type', TRUE);
        $submit_data['description'] = $this->input->post('description', TRUE);


        if($this->form_validation->run()){

            $config['upload_path']          = 'public/images/uploads';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 512;
            $config['file_name'] = $_FILES['image']['name'];
            $config['overwrite'] = TRUE;

            $this->load->library('upload',$config);
            $image = 0;
			
            if($this->upload->do_upload('image') == false){

                    $this->session->set_flashdata('error_validation','file is cannot upload or file is null');
                    $image = '';


            }else{
                $uploadData = $this->upload->data();
                $image = $uploadData['file_name'];
            }
            $data = array(
                'name' => $submit_data['name'],
                'price' => $submit_data['price'],
                'quantity' =>$submit_data['quantity'],
                'type' =>$submit_data['type'],
                'description' =>$submit_data['description'],
                'image' => $image
            );


            if($this->product_model->updateData($id,$data)){
                $this->session->set_flashdata('msg','update successed');
                redirect('product');
            }
            else{
                $this->session->set_flashdata('error_msg','update failed');
                redirect('product');
            }
        }
        $this->session->set_flashdata('error',validation_errors());
        $data = $this->product_model->getProduct($id);
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