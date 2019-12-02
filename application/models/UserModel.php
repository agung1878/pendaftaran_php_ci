<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserModel
 *
 * @author Chazzy666
 */
class UserModel extends CI_Model {

    //put your code here
    function validate($username, $password) {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $result = $this->db->get('t_user_admin');
        return $result;
    }

}
