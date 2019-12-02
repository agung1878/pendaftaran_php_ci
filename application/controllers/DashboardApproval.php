<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DashboardApproval
 *
 * @author Chazzy666
 */
class DashboardApproval extends CI_Controller {

    //put your code here
    public function index() {

        if ($this->session->userdata('role') === 'approval') {
            $this->load->view('approval/dashboard.php');
        } else {
            echo "Access Denied";
        }
    }

}
