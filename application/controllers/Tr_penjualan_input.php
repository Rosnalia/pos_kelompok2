<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tr_penjualan_input extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('transaksi/tr_penjualan_input');
        $this->load->view('templates/footer');
	}
}
