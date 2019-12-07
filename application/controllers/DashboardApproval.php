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

    public function __construct() {
        parent::__construct();

        $this->load->model('approval_model'); // Load SiswaModel ke controller ini
    }

    public function index() {

        $data['pendaftar'] = $this->approval_model->tampil_jumlah_pendaftar();
        $data['waiting'] = $this->approval_model->tampil_jumlah_waiting();
        $data['accepted'] = $this->approval_model->tampil_jumlah_accepted();
        $data['rejected'] = $this->approval_model->tampil_jumlah_rejected();
        
        if ($this->session->userdata('role') === 'approval') {
            $this->load->view('approval/dashboard.php', $data);
        } else {
            echo "Access Denied";
        }
    }

}
