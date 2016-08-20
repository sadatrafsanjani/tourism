<?php

class Visitor extends CI_Model{
    
    function __construct() {
        parent::__construct();
    }
    
    function get_service_count(){
        $this->db->select('visitId')->from('visits');
        $query = $this->db->get();
        return $query->num_rows();
    }
    
    function get_services($num=20,$start=0){
        $query = $this->db->get_where('visits',array('active'=>1),$num,$start);
        return $query->result_array();
    }
    
    function get_service($id){
        $query = $this->db->get_where('visits',array('visitId'=>$id));
        return $query->first_row('array');
    }
    
    function insert_service($data){
        $this->db->insert('visits',$data);
        return $this->db->insert_id();
    }
    
    function update_service($id,$data){
        $this->db->where('visitId',$id);
        $this->db->update('visits',$data);
    }
    
    function delete_service($id){
        $this->db->where('visitId',$id);
        $this->db->update('visits');
    }
    
    function save_message($data){
        
        $this->db->insert('messages',$data);
    }
}
