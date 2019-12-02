<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function __construct() {
        parent::__construct();

        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect('login');
        }
    }

    public function index() {

        if ($this->session->userdata('role') === 'admin') {
            $this->load->view('admin/index.php');
        } else {
            echo "Access Denied";
        }
    }

    function approval() {
        //Allowing akses to staff only
        if ($this->session->userdata('role') === 'approval') {
            $this->load->view('');
        } else {
            echo "Access Denied";
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }

}
