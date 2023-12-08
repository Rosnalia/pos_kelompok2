<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan_pembelian extends CI_Controller
{

	public function index()
	{
		$data['lap_pembelian'] = $this->Model_lap_pembelian->get_lap_pembelian()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('laporan/pembelian', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_lap_pembelian()
	{
		$data['lap_pembelian'] = $this->Model_lap_pembelian->get_lap_pembelian()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('laporan/lap_pembelian_input', $data);
		$this->load->view('templates/footer');
	}

	public function insert_lap_pembelian()
	{
		$idPembelian	= $this->input->post('idPembelian');
		$idSupplier		= $this->input->post('idSupplier');
		$idUser			= $this->input->post('idUser');
		$noFaktur		= $this->input->post('noFaktur');
		$tglPembelian	= $this->input->post('tglPembelian');
		$total			= $this->input->post('total');
		$tglInput		= $this->input->post('tglInput');


		$data = array(

			'idPembelian'	=> $idPembelian,
			'idSupplier'	=> $idSupplier,
			'idUser'		=> $idUser,
			'noFaktur'		=> $noFaktur,
			'tglPembelian'	=> $tglPembelian,
			'total'			=> $total,
		);
		$this->Model_lap_pembelian->insert_lap_pembelian($data);
		redirect('lap_pembelian');
	}

	public function edit_lap_pembelian($id)
	{
		$where	= array('idPembelian' => $id);
		$data['lap_pembelian'] = $this->Model_lap_pembelian->edit_lap_pembelian($where, 'ms_pembelian')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('laporan/pembelian', $data);
		$this->load->view('templates/footer');
	}

	public function update($id)
	{
		$idPembelian	= $this->input->post('idPembelian');
		$idSupplier		= $this->input->post('idSupplier');
		$idUser			= $this->input->post('idUser');
		$noFaktur		= $this->input->post('noFaktur');
		$tglPembelian	= $this->input->post('tglPembelian');
		$total			= $this->input->post('total');
		$tglInput		= $this->input->post('tglInput');


		$data = array(

			'idPembelian'	=> $idPembelian,
			'idSupplier'	=> $idSupplier,
			'idUser'		=> $idUser,
			'noFaktur'		=> $noFaktur,
			'tglPembelian'	=> $tglPembelian,
			'total'			=> $total,
		);
		$this->Model_lap_pembelian->update($data, 'ms_pembelian', $id, 'idPembelian');
		redirect('lap_pembelian');
	}

	public function hapus_lap_pembelian($id)
	{
		$where = array('idPembelian' => $id);
		$this->Model_lap_pembelian->hapus($where, 'ms_pembelian');
		$this->session->set_flashdata(
			'success',
			'<div class="alert alert-success alert-dismissible fade show" id="berhasil" role="alert">
			<strong>Data berhasil dihapus</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
	  	</div>'
		);

		redirect('lap_pembelian');
	}
}
