<?php

class Super extends CI_Controller{
    
    function __construct() {
        parent::__construct();
    }
    
    function index(){
        
        $data['title'] = "Administrator";
        $this->load->view('admin/login',$data);
    }
}
