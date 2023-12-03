<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Terima extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('transaksi/terima');
        $this->load->view('templates/footer');
	}
}
