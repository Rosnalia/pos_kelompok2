<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_input extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('master_data/barang_input');
        $this->load->view('templates/footer');
	}
}
