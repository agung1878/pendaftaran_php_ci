<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ApprovalController
 *
 * @author Chazzy666
 */
class ApprovalController extends CI_Controller {

    //put your code here

    public function __construct() {
        parent::__construct();

        $this->load->model('approval_model'); // Load SiswaModel ke controller ini
    }

    public function index() {

        $data['t_approval'] = $this->approval_model->tampil_data_by_status_wating();

        if ($this->session->userdata('role') === 'approval') {
            $this->load->view('approval/list_approval', $data);
        } else {
            echo "Access Denied";
        }
    }
    
    public function accepted() {
        $data['t_approval'] = $this->approval_model->tampil_data_by_status_accepted();

        if ($this->session->userdata('role') === 'approval') {
            $this->load->view('approval/list_accepted', $data);
        } else {
            echo "Access Denied";
        }
    }

    public function rejected() {
        $data['t_approval'] = $this->approval_model->tampil_data_by_status_rejected();

        if ($this->session->userdata('role') === 'approval') {
            $this->load->view('approval/list_accepted', $data);
        } else {
            echo "Access Denied";
        }
    }

    public function accept($id_approval) {
        $this->approval_model->accept($id_approval); // Panggil fungsi delete() yang ada di SiswaModel.php
        echo $this->session->set_flashdata('msg', 'Calon mahasiswa berhasil di setujui.');
        redirect('approvalController');
    }

    public function reject($id_approval) {
        $this->approval_model->reject($id_approval); // Panggil fungsi delete() yang ada di SiswaModel.php
        echo $this->session->set_flashdata('msg', 'Calon mahasiswa telah di reject.');
        redirect('approvalController');
    }

    public function detail($id) {
        $data['t_approval'] = $this->approval_model->tampil_data_by_id($id);
        $this->load->view('approval/detail', $data);
    }

    public function modalDetail($id) {
        $data['t_approval'] = $this->approval_model->tampil_data_by_id($id);
        echo json_encode($data);
    }

}
