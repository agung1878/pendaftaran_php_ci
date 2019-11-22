<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Login extends CI_Controller
{
	function __construct(){
		parent::__construct();		
		$this->load->model('auth');
 
	}

	public function  index()
	{
		$this->load->view('login.php');
	}

	function action_auth(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
		);
		$cek = $this->auth->check_auth("t_user_admin", $where)->num_rows();
		if ($cek > 0) {
			
			$data_session = array(
				'nama' => $username,
				'status' => "login"
			);

			$this->session->set_userdata($data_session);
 
			redirect(base_url("dashboard"));
		} else{
			 $this->session->set_flashdata('message', 'Username tidak ditemukan');
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}

