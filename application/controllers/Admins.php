<?php

class Admins extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('admin');
    }

    function index() {

        if (!$this->permission()) {
            redirect(base_url() . 'super');
        }

        $data['title'] = "Home";
        $data['total_message'] = $this->admin->get_message_count();
        $data['total_customer'] = $this->admin->get_customer_count();
        $data['total_transaction'] = $this->admin->get_transaction_count();
        $data['total_visit'] = $this->admin->get_visit_count();
        $this->load->view('admin/home', $data);
    }

    function messages($start = 0) {

        if (!$this->permission()) {
            redirect(base_url() . 'super');
        }

        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'admins/messages';
        $config['total_rows'] = $this->admin->get_message_count();
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
        $data['title'] = "Messages";
        $data['messages'] = $this->admin->get_messages(6, $start);
        $this->load->view('admin/messages', $data);
    }

    function customers($start = 0) {

        if (!$this->permission()) {
            redirect(base_url() . 'super');
        }

        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'admins/customers';
        $config['total_rows'] = $this->admin->get_customer_count();
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
        $data['title'] = "Customer";
        $data['customers'] = $this->admin->get_customers(6, $start);
        $this->load->view('admin/customers', $data);
    }

    function transactions($start=0) {

        if (!$this->permission()) {
            redirect(base_url() . 'super');
        }

        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'admins/transactions';
        $config['total_rows'] = $this->admin->get_transaction_count();
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
        $data['title'] = "Transaction";
        $data['transactions'] = $this->admin->get_transactions(6, $start);
        $this->load->view('admin/transactions', $data);
    }

    function visits($start=0) {

        if (!$this->permission()) {
            redirect(base_url() . 'super');
        }

        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'admins/visits';
        $config['total_rows'] = $this->admin->get_visit_count();
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
        $data['title'] = "Visit";
        $data['visits'] = $this->admin->get_visits(6, $start);
        $this->load->view('admin/visits', $data);
    }

    function settings() {

        if (!$this->permission()) {
            redirect(base_url() . 'super');
        }
        $data['title'] = "Settings";
        $this->load->view('admin/settings', $data);
    }

    function profile() {

        if (!$this->permission()) {
            redirect(base_url() . 'super');
        }

        $data['title'] = "Profile";
        $this->load->view('admin/profile', $data);
    }

    function activate($id) {

        if (!$this->permission()) {
            redirect(base_url() . 'super');
        }

        $this->admin->set_state_on($id);
        redirect(base_url() . 'admins/visits');
    }

    function inactivate($id) {

        if (!$this->permission()) {
            redirect(base_url() . 'super');
        }

        $this->admin->set_state_off($id);
        redirect(base_url() . 'admins/visits');
    }

    function customer_details($id) {

        if (!$this->permission()) {
            redirect(base_url() . 'super');
        }

        $data['title'] = "Deatils";
        $data['details'] = $this->admin->get_customer_details($id);
        $this->load->view('admin/details', $data);
    }

    function remove_message($id) {

        if (!$this->permission()) {
            redirect(base_url() . 'super');
        }

        $this->admin->delete_message($id);
        redirect(base_url() . 'admins/messages');
    }

    function remove_customer($id) {

        if (!$this->permission()) {
            redirect(base_url() . 'super');
        }

        $this->admin->delete_customer($id);
        redirect(base_url() . 'admins/customers');
    }

    function remove_transaction($id) {

        if (!$this->permission()) {
            redirect(base_url() . 'super');
        }

        $this->admin->delete_transaction($id);
        redirect(base_url() . 'admins/transactions');
    }

    function remove_visit($id) {

        if (!$this->permission()) {
            redirect(base_url() . 'super');
        }

        $this->admin->delete_visit($id);
        redirect(base_url() . 'admins/visits');
    }

    function login() {

        $data['error'] = 0;

        if (!is_null($_POST)) {
            $data = [
                'username' => $_POST['username'],
                'password' => sha1($_POST['password'])
            ];

            $admin = $this->admin->login($data);

            if (!$admin) {
                $data['error'] = 1;
            } else {
                $this->session->set_userdata('employeeId', $admin['employeeId']);
                $this->session->set_userdata('employeeName', $admin['username']);
                redirect(base_url() . 'admins');
            }
        }
        redirect(base_url() . 'super');
    }

    function logout() {

        if (!$this->permission()) {
            redirect(base_url() . 'super');
        }

        $this->session->sess_destroy();
        redirect(base_url() . 'super');
    }

    function permission() {
        $admin = $this->session->userdata('employeeId');
        if (isset($admin) && !empty($admin)) {
            return true;
        }
    }
}
