<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_pembelian extends CI_Controller {

    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->load->model('*');
    // }

	public function index()
	{
        //$data['title'] =  'Transaksi';

		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('transaksi/transaksi_pembelian');
        $this->load->view('templates/footer');
	}
}
