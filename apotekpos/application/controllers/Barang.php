<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('master_data/barang');
        $this->load->view('templates/footer');
	}
}
