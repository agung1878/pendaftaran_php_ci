<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Approval_model
 *
 * @author Chazzy666
 */
class Approval_model extends CI_Model{
    //put your code here
    
    public function tampil_data() {
        $this->db->select('*');
        $this->db->from('t_approval');
        $this->db->join('t_new_mhs', 't_new_mhs.id_new_mhs = t_approval.id_new_mhs');
        $this->db->order_by("t_approval.id_approval desc");
        $query = $this->db->get()->result();
        return $query;
    }
    
     public function tampil_data_by_id($id) {
       $this->db->select('*');
        $this->db->from('t_approval');
        $this->db->join('t_new_mhs', 't_new_mhs.id_new_mhs = t_approval.id_new_mhs');
        $this->db->where('id_approval', $id);
        $this->db->order_by("t_approval.id_approval desc");
        $query = $this->db->get()->result();
        return $query;
    }
    
    public function accept($id_approval) {
        
        $data = array(
            "status" => TRUE
        );

        $this->db->where('id_approval', $id_approval);
        $this->db->update('t_approval', $data); // Untuk mengeksekusi perintah update data
    }
}
