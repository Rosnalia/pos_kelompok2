<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {
	public function __construct() 
	{
		parent::__construct();
		$this->load->model('model_barang');
	}

	public function index()
	{

		$data['barang'] = $this->model_barang->get_data('ms_barang');

		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('master_data/barang',$data);
        $this->load->view('templates/footer');
	}

}
