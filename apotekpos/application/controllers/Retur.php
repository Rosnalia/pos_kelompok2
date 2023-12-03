<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Retur extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('transaksi/retur');
        $this->load->view('templates/footer');
	}
}
