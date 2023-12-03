<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembelian extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('laporan/pembelian');
        $this->load->view('templates/footer');
	}
}
