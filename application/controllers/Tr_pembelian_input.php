<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tr_pembelian_input extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('transaksi/tr_pembelian_input');
        $this->load->view('templates/footer');
	}
}
