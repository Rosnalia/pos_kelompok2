<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->load->model('*');
    // }

	public function index()
	{
        //$data['title'] =  'Master_data';

		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('master_data/user');
        $this->load->view('templates/footer');
	}
}
