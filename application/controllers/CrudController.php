<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CrudController extends CI_Controller{
    public function index(){
    
        // $this->load->library('form_validation');   it will be loaded automatically in autoload.php file
        $this->load->view('insert');
        // $this->load->helper('form');
        $this->form_validation->set_error_delimiters('<div class="error red">', '</div>');
        
    }
    public function data(){
        $this->form_validation->set_rules('name', 'Name', 'required');
        if($this->form_validation->run()){

        }
        else{
            $this->load->view('insert');
        }
    }
}