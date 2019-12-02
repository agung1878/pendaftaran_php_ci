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
    
    public function tampil_data_by_status_wating() {
            
       $status = 'waiting';
            
       $this->db->select('*');
        $this->db->from('t_approval');
        $this->db->join('t_new_mhs', 't_new_mhs.id_new_mhs = t_approval.id_new_mhs');
        $this->db->where('status', $status);
        $this->db->order_by("t_approval.id_approval desc");
        $query = $this->db->get()->result();
        return $query;
    }
    
    public function tampil_data_by_status_accepted() {
            
       $status = 'accepted';
            
       $this->db->select('*');
        $this->db->from('t_approval');
        $this->db->join('t_new_mhs', 't_new_mhs.id_new_mhs = t_approval.id_new_mhs');
        $this->db->where('status', $status);
        $this->db->order_by("t_approval.id_approval desc");
        $query = $this->db->get()->result();
        return $query;
    }
    
    public function tampil_data_by_status_rejected() {
            
       $status = 'rejected';
            
       $this->db->select('*');
        $this->db->from('t_approval');
        $this->db->join('t_new_mhs', 't_new_mhs.id_new_mhs = t_approval.id_new_mhs');
        $this->db->where('status', $status);
        $this->db->order_by("t_approval.id_approval desc");
        $query = $this->db->get()->result();
        return $query;
    }
    
    public function accept($id_approval) {
        
        $data = array(
            "status" => 'accepted',
            "active" => true
        );

        $this->db->where('id_approval', $id_approval);
        $this->db->update('t_approval', $data); // Untuk mengeksekusi perintah update data
    }
    
    public function reject($id_approval) {
        
        $data = array(
            "status" => 'rejected',
            "active" => false
        );

        $this->db->where('id_approval', $id_approval);
        $this->db->update('t_approval', $data); // Untuk mengeksekusi perintah update data
    }
}
