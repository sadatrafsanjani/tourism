<?php

class Customers extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('customer');
    }

    function profile() {

        if (!$this->permission()) {
            redirect(base_url() . 'visitors');
        }

        $data['title'] = "Profile";
        $this->load->view('profile', $data);
    }

    function login() {

        $data['error'] = 0;

        if (!is_null($_POST)) {
            $data = [
                'username' => $_POST['username'],
                'password' => sha1($_POST['password'])
            ];
            $customer = $this->customer->login($data);

            if (!$customer) {
                $data['error'] = 1;
            } else {
                $this->session->set_userdata('customerId', $customer['customerId']);
                redirect(base_url() . 'customers/profile');
            }
        }

        redirect(base_url() . 'visitors');
    }

    function logout() {

        if (!$this->permission()) {
            redirect(base_url() . 'visitors');
        }

        $this->session->sess_destroy();
        redirect(base_url() . 'visitors');
    }

    function booking($id) {

        $data['title'] = "Booking";
        $data['packages'] = $this->customer->get_package($id);
        $this->load->view('booking', $data);
    }

    function signup() {

        if ($this->permission()) {
            redirect(base_url() . 'visitors');
        }

        if (!is_null($_POST)) {

            $data = [
                'username' => $_POST['username'],
                'password' => sha1($_POST['password']),
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'phone' => $_POST['phone'],
                'address' => $_POST['address'],
            ];

            $customerId = $this->customer->create_customer($data);
            $this->session->set_userdata('customerId', $customerId);
            redirect(base_url() . 'customers/profile');
        }
    }

    function transaction() {

        if (!is_null($_POST)) {

            $data = [
                'customerId' => $_SESSION['customerId'],
                'bank' => $_POST['bank'],
                'account_number' => $_POST['number']
            ];

            $data['transactionId'] = $this->customer->make_transaction($data);
        }

        $data['title'] = "Transaction";
        $this->load->view('transaction', $data);
    }

    function permission() {
        $customer = $this->session->userdata('customerId');
        if (isset($customer) && !empty($customer)) {
            return true;
        }
    }

}
