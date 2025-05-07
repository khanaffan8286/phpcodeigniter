<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Helpersuses extends CI_Controller{
    public function index(){
       

        $array1 = array("name"=> "affan", "age"=>"34");
        $array2 = array("name"=>"umair","age"=>"23");

        $this->load->helper('test');


        /// you can print this in easy way by using helper we deifine thing in the helper for easy use 

        // echo "<pre>";
        // print_r($array1);

        clean($array1);
        clean($array2);
    }
}


?>