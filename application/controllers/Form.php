<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller{
    public function index(){
        $this->load->helper('form');
      
        $this->load->view('form');
    }

    public function my_func(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('form');
        } else {
            // Form validation passed, process the data
            echo "Form submitted successfully!";
        }
    }

    
}