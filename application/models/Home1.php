<?php
defined('BASEPATH')OR exit('No direct script access allowed');


class Home1 extends CI_Model {

    public function qurry(){
       // $q = $this->db->query('select * from table2');
       $q = $this->db->where('empno',1)->get('table3');
        return $q->result_array();
        // return $q->raw();


    }
    
    
       
    
}







// class Home1 extends CI_Model {

//     public function sum(){
//         $a = 10;
//         $b = 20;
//         $sum = $a + $b;
//         return $sum;
//     }
//     public function sub(){
//         $a = 20;
//         $b = 10;
//         $sub = $a - $b;
//         return $sub;
//     }
// }


?>