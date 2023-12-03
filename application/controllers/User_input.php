<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_input extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('master_data/user_input');
        $this->load->view('templates/footer');
	}
}
