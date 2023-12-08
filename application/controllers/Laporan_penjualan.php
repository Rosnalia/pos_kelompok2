<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan_penjualan extends CI_Controller
{

	public function index()
	{
		$data['lappenjualan'] = $this->Model_lap_penjualan->get_lappenjualan()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('laporan/penjualan', $data);
		$this->load->view('templates/footer');
	}


	public function tambah_lappenjualan()
	{
		$data['lappenjualan'] = $this->Model_lap_penjualan->get_lappenjualan()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('laporan/lap_penjualan_input', $data);
		$this->load->view('templates/footer');
	}

	public function insert_lappenjualan()
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
		$this->Model_lap_penjualan->insert_lappenjualan($data);
		redirect('lappenjualan');
	}

	public function edit_lappenjualan($id)
	{
		$where	= array('idPenjualan' => $id);
		$data['lappenjualan'] = $this->Model_lap_penjualan->edit_lappenjualan($where, 'ms_penjualan')->result();
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
		redirect('lappenjualan');
	}

	public function hapus_lappenjualan($id)
	{
		$where = array('idPenjualan' => $id);
		$this->Model_lap_penjualan->hapus($where, 'ms_penjualan');
		$this->session->set_flashdata(
			'success',
			'<div class="alert alert-success alert-dismissible fade show" id="berhasil" role="alert">
			<strong>Data berhasil dihapus</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
	  	</div>'
		);

		redirect('lappenjualan');
	}
}
