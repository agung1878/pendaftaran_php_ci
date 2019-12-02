<?php

/**
 * 
 */
class Auth extends CI_Model {

    function validate($username, $password) {
        $this->db->where('username', $email);
        $this->db->where('password', $password);
        $result = $this->db->get('t_user_admin');
        return $result;
    }

}
