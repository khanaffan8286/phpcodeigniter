<?php
defined('BASEPATH')OR exit('No direct script access allowed');


class HomeController extends CI_Controller {
    public function index() {
    $this->load->model('Home1');
    $data = $this->Home1->qurry();

    // echo "<pre>";

    // foreach ($data as $value){
    //     echo $value['name'] . "<br>";
    // }

    foreach ($data as $value){
        echo "<br>".$value['name'];
    }



    // $this->load->library('database');
    // $data['sum'] = $this->Home1->sum();
    // $data['sub'] = $this->Home1->sub();
    // $this->load->view('homepage',$data);

        // echo "Hello World! <br>";
        // $data['name'] = $name;
        // // Load the view file located at application/views/home.php
        // $arr ['hello'] = "Hello World!";
        // $arr ['title'] = ['home', 'home page'];
        // $this->load->view('homepage',  $arr);
    }
}
?>