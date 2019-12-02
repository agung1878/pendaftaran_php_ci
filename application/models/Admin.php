<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Admin
 *
 * @author Chazzy666
 */
class Admin extends CI_Model {

    //put your code here
    //fungsi cek session logged in
    function is_logged_in() {
        return $this->session->userdata('id');
    }

    //fungsi cek level
    function is_role() {
        return $this->session->userdata('role');
    }

    //fungsi check login
    function check_login($table, $field1, $field2) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($field1);
        $this->db->where($field2);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return FALSE;
        } else {
            return $query->result();
        }
    }

}
