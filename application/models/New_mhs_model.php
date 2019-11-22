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
        $this->db->where('id', $id);
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
        $data = array(
            "id" => $this->input->post('input_id'),
            "nama" => $this->input->post('input_nama'),
            "jenis_kelamin" => $this->input->post('input_jeniskelamin'),
            "no_tlp" => $this->input->post('input_telp'),
            "alamat" => $this->input->post('input_alamat'),
            "email" => $this->input->post('input_email'),
            "tgl_lahir" => $this->input->post('input_tgl_lahir'),
            "nama_org_tua" => $this->input->post('input_nama_org_tua'),
            "asal_sekolah" => $this->input->post('input_asal_sekolah')
        );

        $this->db->insert('t_new_mhs', $data); // Untuk mengeksekusi perintah insert data
    }

    // Fungsi untuk melakukan ubah data siswa berdasarkan NIS siswa
    public function edit($id) {
        $data = array(
            "nama" => $this->input->post('input_nama'),
            "jenis_kelamin" => $this->input->post('input_jeniskelamin'),
            "no_tlp" => $this->input->post('input_telp'),
            "alamat" => $this->input->post('input_alamat'),
            "email" => $this->input->post('input_email'),
            "tgl_lahir" => $this->input->post('input_tgl_lahir'),
            "nama_org_tua" => $this->input->post('input_nama_org_tua'),
            "asal_sekolah" => $this->input->post('input_asal_sekolah')
        );

        $this->db->where('id', $id);
        $this->db->update('t_new_mhs', $data); // Untuk mengeksekusi perintah update data
    }

    // Fungsi untuk melakukan menghapus data siswa berdasarkan NIS siswa
    public function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('t_new_mhs'); // Untuk mengeksekusi perintah delete data
    }

}
