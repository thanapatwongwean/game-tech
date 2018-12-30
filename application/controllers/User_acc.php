<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_acc extends CI_Controller{


    public function __construct()
    {
        parent::__construct();
        // Load [form,url] helper
        $this->load->helper(['form','url']);
    }

    public function index()
	{
        $this->load->model('user_model');
        $data = $this->user_model->getInfo($this->session->username);
		$this->load->view('header');
        $this->load->view('user_section_acc',$data);
        $this->load->view('footer');
		
	}

	public function set_password(){

        $this->load->model('user_model');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('oldpassword', 'oldpassword', "required|callback_checkOldPassword");
        $this->form_validation->set_rules('password', 'password', 'required|min_length[6]');
        $this->form_validation->set_rules('passwordConf', 'passwordConf', 'required|matches[password]');
        $this->form_validation->set_message('required', 'The %s field is require');
        $this->form_validation->set_message('min_length', 'Password is Greater than 6 letter');
        $this->form_validation->set_message('matches', 'Password Confirm or Old Password not match');

        if ($this->form_validation->run()) {
            //redirect('check');
            $password = $this->input->post('password', TRUE);
            $this->load->model('user_model');
            if ($this->user_model->changePassword($this->session->username,$password)) {
                $this->session->set_flashdata('msg','password is changed');
            }
            else{
                $this->session->set_flashdata('error_msg','failed request');
            }
        }
        else{
            $this->session->set_flashdata('error_validation',validation_errors());
        }
        redirect('user_acc');
    }
    public function checkOldpassword(){
        $password_before = $this->user_model->getPassword($this->session->username);
        $oldpassword = $this->input->post('oldpassword', TRUE);
        return password_verify($oldpassword,$password_before);
    }

    public function updateInfo(){

        $this->load->library('form_validation');

        $this->form_validation->set_rules('fullname', 'fullname', 'trim|required');
        $this->form_validation->set_rules('address', 'address', 'trim|required');
        $this->form_validation->set_rules('email', 'email', 'required|valid_email|is_unique[user.email]');
        $this->form_validation->set_message('required', 'The %s field is require');
        $this->form_validation->set_message('is_unique', 'The %s is already taken');

        $submit_data['fullname'] = $this->input->post('fullname', TRUE);
        $submit_data['address'] = $this->input->post('address', TRUE);
        $submit_data['phone'] = $this->input->post('phone', TRUE);
        $submit_data['email'] = $this->input->post('email', TRUE);

        if ($this->form_validation->run()) {
            $this->load->model('user_model');
            if ($this->user_model->updateInfo($this->session->username,$submit_data)) {

                $this->session->set_flashdata('msg','Information Updated');

            }
            else{
                $this->session->set_flashdata('error_msg','failed Update');
            }

        }
        else{
            $this->session->set_flashdata('error_validation',validation_errors());
        }
        redirect('user_acc');
    }

}