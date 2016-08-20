<?php

class Customer extends CI_Model {

    function create_customer($data) {
        $this->db->insert('customers', $data);
        return $this->db->insert_id();
    }

    function login($data) {
        $query = $this->db->get_where('customers', $data);
        return $query->first_row('array');
    }

    function get_package($id) {
        $query = $this->db->get_where('costs', ['visitId' => $id]);
        return $query->result_array();
    }

    function make_transaction($data) {
        $this->db->insert('transactions', $data);
        return $this->db->insert_id();
    }

}
