<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('userModel');
    }

    public function index() {
        $this->load->view('login.php');
    }

    function auth() {
        $username = $this->input->post('username', TRUE);
        $password = md5($this->input->post('password', TRUE));
        $validate = $this->userModel->validate($username, $password);
        if ($validate->num_rows() > 0) {
            $data = $validate->row_array();
            $id = $data['id'];
            $email = $data['email'];
            $username = $data['username'];
            $role = $data['role'];
            $sesdata = array(
                'username' => $username,
                'email' => $email,
                'role' => $role,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($sesdata);
            // access login for admin
            if ($role === 'admin') {
                redirect('dashboard');
            } else if ($role === 'approval') {
                redirect('dashboardApproval');
            }  
        } else {
            echo $this->session->set_flashdata('msg', 'Username or Password is Wrong');
            redirect('login');
        }
    }

    function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }

}
