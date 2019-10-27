<?php

	/**
	 * 
	 */
	class Auth extends CI_Model
	{
		
		function check_auth($table, $where)
		{
			return $this->db->get_where($table, $where); 
		}
	}