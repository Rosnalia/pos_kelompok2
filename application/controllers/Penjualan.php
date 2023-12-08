<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penjualan extends CI_Controller
{

	public function index()
	{
		$data['lap_penjualan'] = $this->Model_lap_penjualan->get_lap_penjualan()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('laporan/penjualan', $data);
		$this->load->view('templates/footer');
	}


	public function tambah_transaksi_penjualan()
	{
		$data['lap_penjualan'] = $this->Model_lap_penjualan->get_lap_penjualan()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('laporan/lap_penjualan_input', $data);
		$this->load->view('templates/footer');
	}

	public function insert_lap_penjualan()
	{
		$idPenjualan	= $this->input->post('idPenjualan');
		$idUser			= $this->input->post('idUser');
		$tglPenjualan	= $this->input->post('tglPenjualan');
		$total			= $this->input->post('total');
		$tglInput		= $this->input->post('tglInput');


		$data = array(

			'idPenjualan'	=> $idPenjualan,
			'idUser'		=> $idUser,
			'tglPenjualan'	=> $tglPenjualan,
			'total'			=> $total,
			'tglInput'		=> $tglInput,
		);
		$this->Model_lap_penjualan->insert_lap_penjualan($data);
		redirect('lap_penjualan');
	}

	public function edit_lap_penjualan($id)
	{
		$where	= array('idPenjualan' => $id);
		$data['lap_penjualan'] = $this->Model_lap_penjualan->edit_lap_penjualan($where, 'ms_penjualan')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('laporan/penjualan', $data);
		$this->load->view('templates/footer');
	}

	public function update($id)
	{
		$idPenjualan	= $this->input->post('idPenjualan');
		$idUser			= $this->input->post('idUser');
		$tglPenjualan	= $this->input->post('tglPenjualan');
		$total			= $this->input->post('total');
		$tglInput		= $this->input->post('tglInput');


		$data = array(

			'idPenjualan'	=> $idPenjualan,
			'idUser'		=> $idUser,
			'tglPenjualan'	=> $tglPenjualan,
			'total'			=> $total,
			'tglInput'		=> $tglInput,
		);
		$this->Model_lap_penjualan->update($data, 'ms_penjualan', $id, 'idPenjualan');
		redirect('lap_penjualan');
	}

	public function hapus_lap_penjualan($id)
	{
		$where = array('idPenjualan' => $id);
		$this->Model_lap_penjualan->hapus($where, 'ms_penjualan');
		$this->session->set_flashdata('flashdata', 'Menghapus');
		redirect('lap_penjualan');
	}
}
