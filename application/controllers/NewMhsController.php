<?php

/**
 * 
 */
class NewMhsController extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('New_mhs_model'); // Load SiswaModel ke controller ini
    }

    public function index() {
        $data['model'] = $this->New_mhs_model->view();
        
         if ($this->session->userdata('role') === 'admin') {
            $this->load->view('admin/list', $data);
        } else {
            echo "Access Denied";
        }
    }

    public function tambah() {
        if ($this->input->post('submit')) { // Jika user mengklik tombol submit yang ada di form
            if ($this->New_mhs_model->validation("save")) { // Jika validasi sukses atau hasil validasi adalah TRUE
                $this->New_mhs_model->save(); // Panggil fungsi save() yang ada di SiswaModel.php
                $this->New_mhs_model->saveApprovalStatus(); // Panggil fungsi save() yang ada di SiswaModel.php
                redirect('newMhsController');
            }
        }

        $this->load->view('admin/form');
    }

    public function ubah($id) {
        if ($this->input->post('submit')) { // Jika user mengklik tombol submit yang ada di form
            if ($this->New_mhs_model->validation("update")) { // Jika validasi sukses atau hasil validasi adalah TRUE
                $this->New_mhs_model->edit($id); // Panggil fungsi edit() yang ada di SiswaModel.php
                redirect('newMhsController');
            }
        }

        $data['t_new_mhs'] = $this->New_mhs_model->view_by($id);
        $this->load->view('admin/form_ubah', $data);
    }

    public function hapus($id) {
        $this->New_mhs_model->delete($id); // Panggil fungsi delete() yang ada di SiswaModel.php
        redirect('newMhsController');
    }

}
