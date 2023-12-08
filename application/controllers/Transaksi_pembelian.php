<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi_pembelian extends CI_Controller
{

	public function index()
	{
		$data['pembelian'] = $this->Model_pembelian->get_pembelian()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('transaksi/transaksi_pembelian', $data);
		$this->load->view('templates/footer');
	}


	public function tambah_pembelian()
	{
		$data['pembelian'] = $this->Model_pembelian->get_pembelian()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('transaksi/tr_pembelian_input', $data); 
		$this->load->view('templates/footer');
	}

	public function insert_pembelian()
	{
		$idTrPembelian	= $this->input->post('idTrPembelian');
		$idBarang		= $this->input->post('idBarang');
		$idPembelian	= $this->input->post('idPembelian');
		$namaBarang		= $this->input->post('namaBarang');
		$jumlah			= $this->input->post('jumlah');
		$harga			= $this->input->post('harga');
		$subTotal		= $this->input->post('subTotal');


		$data = array(

			'idTrPembelian'	=> $idTrPembelian,
			'idBarang'		=> $idBarang,
			'idPembelian'	=> $idPembelian,
			'namaBarang'	=> $namaBarang,
			'jumlah'		=> $jumlah,
			'harga'			=> $harga,
			'subTotal'		=> $subTotal,
		);
		$this->Model_pembelian->insert_pembelian($data);
		redirect('pembelian');
	}

	public function edit_pembelian($id)
	{
		$where	= array('idTrPembelian' => $id);
		$data['pembelian'] = $this->Model_pembelian->edit_pembelian($where, 'tr_pembelian')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('transaksi/tr_pembelian_edit', $data);
		$this->load->view('templates/footer');
	}

	public function update($id)
	{
		$idTrPembelian	= $this->input->post('idTrPembelian');
		$idBarang		= $this->input->post('idBarang');
		$idPembelian	= $this->input->post('idPembelian');
		$namaBarang		= $this->input->post('namaBarang');
		$jumlah			= $this->input->post('jumlah');
		$harga			= $this->input->post('harga');
		$subTotal		= $this->input->post('subTotal');


		$data = array(

			'idTrPembelian'	=> $idTrPembelian,
			'idBarang'		=> $idBarang,
			'idPembelian'	=> $idPembelian,
			'namaBarang'	=> $namaBarang,
			'jumlah'		=> $jumlah,
			'harga'			=> $harga,
			'subTotal'		=> $subTotal,
		);

		$this->Model_pembelian->update($data, 'tr_pembelian', $id, 'idTrPembelian');
		redirect('pembelian');
	}

	public function hapus_pembelian($id)
	{
		$where = array('idTrPembelian' => $id);
		$this->Model_pembelian->hapus($where, 'tr_pembelian');
		$this->session->set_flashdata(
			'success',
			'<div class="alert alert-success alert-dismissible fade show" id="berhasil" role="alert">
			<strong>Data berhasil dihapus</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
	  	</div>'
		);

		redirect('pembelian');
	}
}
