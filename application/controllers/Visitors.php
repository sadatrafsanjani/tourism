<?php

class Visitors extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('visitor');
    }

    function index(){

        $data['title'] = "Home";
        $this->load->view('home',$data);
    }
    
    function services($start=0){

        $this->load->library('pagination');
        $config['base_url'] = base_url().'visitors/services';
        $config['total_rows'] = $this->visitor->get_service_count();
        $config['per_page'] = 6;
        $config['full_tag_open'] = '<ul class="pagination pagination-lg">';
        $config['full_tag_close'] = '</ul>';
        $config['prev_link'] = '&laquo;';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['next_link'] = '&raquo;';
        $this->pagination->initialize($config);
        $data['pages'] = $this->pagination->create_links();
        $data['title'] = "Services";
        $data['services'] = $this->visitor->get_services(6,$start);
        $this->load->view('services',$data);
    }
    
    function details($id) {
        $data['title'] = "Details";
        $data['service'] = $this->visitor->get_service($id);
        $this->load->view('details', $data);
    }
    
    function contact(){
        
        $data['title'] = "Contact";
        $data['success'] = 0;
        $this->load->view('contact',$data);
    }
    
    function send(){
        
        if(!is_null($_POST)){
            
            $data = [
                'name'=>$_POST['name'],
                'phone'=>$_POST['phone'],
                'email'=>$_POST['email'],
                'message'=>$_POST['message']
            ];
            
            $this->visitor->save_message($data);
        }
        
        redirect(base_url().'visitors');
    }
}
