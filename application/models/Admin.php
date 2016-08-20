<?php

class Admin extends CI_Model{
    
    function __construct() {
        parent::__construct();
    }
    
    function login($data) {
        $query = $this->db->get_where('employees', $data);
        return $query->first_row('array');
    }
    
    function get_message_count(){
        $this->db->select('messageId')->from('messages');
        $query = $this->db->get();
        return $query->num_rows();
    }
    
    function get_customer_count(){
        $this->db->select('customerId')->from('customers');
        $query = $this->db->get();
        return $query->num_rows();
    }
    
    function get_transaction_count(){
        $this->db->select('transactionId')->from('transactions');
        $query = $this->db->get();
        return $query->num_rows();
    }
    
    function get_visit_count(){
        $this->db->select('visitId')->from('visits');
        $query = $this->db->get();
        return $query->num_rows();
    }
    
    function get_messages($num=20,$start=0){
        $query = $this->db->get('messages',$num,$start);
        return $query->result_array();
    }
    
    function get_customers($num=20,$start=0){
        $query = $this->db->get('customers',$num,$start);
        return $query->result_array();
    }
    
    function get_transactions($num=20,$start=0){
        $query = $this->db->get('transactions',$num,$start);
        return $query->result_array();
    }
    
    function get_visits($num=20,$start=0){
        $query = $this->db->get('visits',$num,$start);
        return $query->result_array();
    }
    
    function get_customer_details($id){
        $query = $this->db->get_where('customers',array('customerId'=>$id));
        return $query->first_row('array');
    }
    
    function insert_visit($data){
        $this->db->insert('visits',$data);
        return $this->db->insert_id();
    }
    
    function insert_employee($data){
        $this->db->insert('employees',$data);
        return $this->db->insert_id();
    }
    
    function insert_cost($data){
        $this->db->insert('costs',$data);
        return $this->db->insert_id();
    }
    
    function update_cost($id,$data){
        $this->db->where('costId',$id);
        $this->db->delete('customers',$data);   
    }
    
    function delete_message($id){
        $this->db->where('messageId',$id);
        $this->db->delete('messages');
    }
    
    function delete_customer($id){
        $this->db->where('customerId',$id);
        $this->db->delete('customers');
    }
    
    function delete_transaction($id){
        $this->db->where('transactionId',$id);
        $this->db->delete('transactions');
    }
    
    function delete_visit($id){
        $this->db->where('visitId',$id);
        $this->db->delete('visits');
    }
    
    function update_visit($id,$data){
        $this->db->where('visitId',$id);
        $this->db->update('messages',$data);
    }
    
    function set_state_on($id){
        $this->db->where('visitId',$id);
        $this->db->update('visits', ['active'=>1]);
    }
    
    function set_state_off($id){
        $this->db->where('visitId',$id);
        $this->db->update('visits', ['active'=>0]);
    }
}
