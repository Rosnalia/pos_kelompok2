<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_penjualan extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('transaksi/transaksi_penjualan');
        $this->load->view('templates/footer');
	}
}
