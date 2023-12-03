<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suplier extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('master_data/suplier');
        $this->load->view('templates/footer');
	}
}
