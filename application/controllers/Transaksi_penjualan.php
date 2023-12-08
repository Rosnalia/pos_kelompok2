<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi_penjualan extends CI_Controller
{

	public function index()
	{
		$data['penjualan'] = $this->Model_penjualan->get_penjualan()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('transaksi/transaksi_penjualan', $data);
		$this->load->view('templates/footer');
	}


	public function tambah_penjualan()
	{
		$data['penjualan'] = $this->Model_penjualan->get_penjualan()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('transaksi/tr_penjualan_input', $data);
		$this->load->view('templates/footer');
	}

	public function insert_penjualan()
	{
		$idTrpenjualan	= $this->input->post('idTrPenjualan');
		$idBarang		= $this->input->post('idBarang');
		$idpenjualan	= $this->input->post('idPenjualan');
		$namaBarang		= $this->input->post('namaBarang');
		$jumlah			= $this->input->post('jumlah');
		$harga			= $this->input->post('harga');
		$subTotal		= $this->input->post('subTotal');


		$data = array(

			'idTrpenjualan'	=> $idTrPenjualan,
			'idBarangt'		=> $idBarang,
			'idPenjualan'	=> $idPenjualan,
			'namaBarang'	=> $namaBarang,
			'jumlah'		=> $jumlah,
			'harga'			=> $harga,
			'subTotal'		=> $subTotal,
		);
		$this->Model_penjualan->insert_penjualan($data);
		redirect('penjualan');
	}

	public function edit_penjualan($id)
	{
		$where	= array('idTrPenjualan' => $id);
		$data['penjualan'] = $this->Model_penjualan->edit_penjualan($where, 'tr_penjualan')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('transaksi/transaksi_penjualan', $data);
		$this->load->view('templates/footer');
	}

	public function update($id)
	{
		$idTrpenjualan	= $this->input->post('idTrPenjualan');
		$idBarang		= $this->input->post('idBarang');
		$idpenjualan	= $this->input->post('idPenjualan');
		$namaBarang		= $this->input->post('namaBarang');
		$jumlah			= $this->input->post('jumlah');
		$harga			= $this->input->post('harga');
		$subTotal		= $this->input->post('subTotal');


		$data = array(

			'idTrpenjualan'	=> $idTrPenjualan,
			'idBarangt'		=> $idBarang,
			'idpenjualan'	=> $idPenjualan,
			'namaBarang'	=> $namaBarang,
			'jumlah'		=> $jumlah,
			'harga'			=> $harga,
			'subTotal'		=> $subTotal,
		);

		$this->Model_penjualan->update($data, 'tr_penjualan', $id, 'idTrPenjualan');
		redirect('penjualan');
	}

	public function hapus_penjualan($id)
	{
		$where = array('idTrpenjualan' => $id);
		$this->Model_penjualan->hapus($where, 'tr_penjualan');
		$this->session->set_flashdata(
			'success',
			'<div class="alert alert-success alert-dismissible fade show" id="berhasil" role="alert">
			<strong>Data berhasil dihapus</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
	  	</div>'
		);

		redirect('penjualan');
	}
}
