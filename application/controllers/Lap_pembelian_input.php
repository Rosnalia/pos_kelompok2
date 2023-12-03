<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lap_pembelian_input extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('laporan/lap_pembelian_input');
        $this->load->view('templates/footer');
	}
}
