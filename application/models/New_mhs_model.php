<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class New_mhs_model extends CI_Model {

    // Fungsi untuk menampilkan semua data siswa
    public function view() {
        return $this->db->get('t_new_mhs')->result();
    }

    // Fungsi untuk menampilkan data siswa berdasarkan NIS nya
    public function view_by($id) {
        $this->db->where('id_new_mhs', $id);
        return $this->db->get('t_new_mhs')->row();
    }

    // Fungsi untuk validasi form tambah dan ubah
    public function validation($mode) {
        $this->load->library('form_validation'); // Load library form_validation untuk proses validasinya
        // Tambahkan if apakah $mode save atau update
        // Karena ketika update, NIS tidak harus divalidasi
        // Jadi NIS di validasi hanya ketika menambah data siswa saja
        if ($mode == "save")
        $this->form_validation->set_rules('input_id', 'ID', 'required');
        $this->form_validation->set_rules('input_nama', 'Nama', 'required');
        $this->form_validation->set_rules('input_jeniskelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('input_telp', 'Telp', 'required');
        $this->form_validation->set_rules('input_email', 'Email', 'required');
        $this->form_validation->set_rules('input_tgl_lahir', 'Tgl Lahir', 'required');
        $this->form_validation->set_rules('input_nama_org_tua', 'Nama Org Tua', 'required');
        $this->form_validation->set_rules('input_asal_sekolah', 'Asal Skolah', 'required');
        $this->form_validation->set_rules('input_alamat', 'Alamat', 'required');

        if ($this->form_validation->run()) // Jika validasi benar
            return TRUE; // Maka kembalikan hasilnya dengan TRUE
        else // Jika ada data yang tidak sesuai validasi
            return FALSE; // Maka kembalikan hasilnya dengan FALSE
    }

    // Fungsi untuk melakukan simpan data ke tabel siswa
    public function save() {

        $config['upload_path'] = './images/ijazah/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '2048';
        $config['overwrite'] = TRUE;

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('input_ijazah')) {
            $imageIjazah = $this->upload->data();
        }
        
        $config2['upload_path'] = './images/skhun/';
        $config2['allowed_types'] = 'jpg|png|jpeg';
        $config2['max_size'] = '2048';
        $config2['overwrite'] = TRUE;

        $this->upload->initialize($config2);
        if ($this->upload->do_upload('input_skhun')) {
            $imageSkhun = $this->upload->data();
        }
        
        $config3['upload_path'] = './images/ktp/';
        $config3['allowed_types'] = 'jpg|png|jpeg';
        $config3['max_size'] = '2048';
        $config3['overwrite'] = TRUE;

        $this->upload->initialize($config3);
        if ($this->upload->do_upload('input_ktp')) {
            $imageKtp = $this->upload->data();
        }
        
        $config4['upload_path'] = './images/foto/';
        $config4['allowed_types'] = 'jpg|png|jpeg';
        $config4['max_size'] = '2048';
        $config4['overwrite'] = TRUE;

        $this->upload->initialize($config4);
        if ($this->upload->do_upload('input_foto')) {
            $imageFoto = $this->upload->data();
        }
        
        $data = array(
            "id_new_mhs" => $this->input->post('input_id'),
            "nama" => $this->input->post('input_nama'),
            "jenis_kelamin" => $this->input->post('input_jeniskelamin'),
            "no_tlp" => $this->input->post('input_telp'),
            "alamat" => $this->input->post('input_alamat'),
            "email" => $this->input->post('input_email'),
            "tgl_lahir" => $this->input->post('input_tgl_lahir'),
            "nama_org_tua" => $this->input->post('input_nama_org_tua'),
            "asal_sekolah" => $this->input->post('input_asal_sekolah'),
            "ijazah" => $imageIjazah['file_name'],
            "skhun" => $imageSkhun['file_name'],
            "ktp" => $imageKtp['file_name'],
            "foto" => $imageFoto['file_name']
        );

        $this->db->insert('t_new_mhs', $data); // Untuk mengeksekusi perintah insert data
    }
    
    public function saveApprovalStatus() {

        $status = FALSE;
        
        $data = array(
            "id_approval" => $this->input->post('input_id_approval'),
            "id_new_mhs" => $this->input->post('input_id'),
            "status" => $status
        );

        $this->db->insert('t_approval', $data); // Untuk mengeksekusi perintah insert data
    }

    // Fungsi untuk melakukan ubah data siswa berdasarkan NIS siswa
    public function edit($id) {
        $config['upload_path'] = './images/ijazah/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '2048';
        $config['overwrite'] = TRUE;

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('input_ijazah')) {
            $imageIjazah = $this->upload->data();
        }
        
        $config2['upload_path'] = './images/skhun/';
        $config2['allowed_types'] = 'jpg|png|jpeg';
        $config2['max_size'] = '2048';
        $config2['overwrite'] = TRUE;

        $this->upload->initialize($config2);
        if ($this->upload->do_upload('input_skhun')) {
            $imageSkhun = $this->upload->data();
        }
        
        $config3['upload_path'] = './images/ktp/';
        $config3['allowed_types'] = 'jpg|png|jpeg';
        $config3['max_size'] = '2048';
        $config3['overwrite'] = TRUE;

        $this->upload->initialize($config3);
        if ($this->upload->do_upload('input_ktp')) {
            $imageKtp = $this->upload->data();
        }
        
        $config4['upload_path'] = './images/foto/';
        $config4['allowed_types'] = 'jpg|png|jpeg';
        $config4['max_size'] = '2048';
        $config4['overwrite'] = TRUE;

        $this->upload->initialize($config4);
        if ($this->upload->do_upload('input_foto')) {
            $imageFoto = $this->upload->data();
        }
        
        $data = array(
            "nama" => $this->input->post('input_nama'),
            "jenis_kelamin" => $this->input->post('input_jeniskelamin'),
            "no_tlp" => $this->input->post('input_telp'),
            "alamat" => $this->input->post('input_alamat'),
            "email" => $this->input->post('input_email'),
            "tgl_lahir" => $this->input->post('input_tgl_lahir'),
            "nama_org_tua" => $this->input->post('input_nama_org_tua'),
            "asal_sekolah" => $this->input->post('input_asal_sekolah'),
            "ijazah" => $imageIjazah['file_name'],
            "skhun" => $imageSkhun['file_name'],
            "ktp" => $imageKtp['file_name'],
            "foto" => $imageKtp['file_name']
        );

        $this->db->where('id_new_mhs', $id);
        $this->db->update('t_new_mhs', $data); // Untuk mengeksekusi perintah update data
    }

    // Fungsi untuk melakukan menghapus data siswa berdasarkan NIS siswa
    public function delete($id) {
        $this->db->where('id_new_mhs', $id);
        $this->db->delete('t_new_mhs'); // Untuk mengeksekusi perintah delete data
    }
}
