<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{

	public function index()
	{
		$data['barang'] = $this->Model_barang->get_barang()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('master_data/barang', $data);
		$this->load->view('templates/footer');
	}

 
	public function tambah_barang()
	{
		$data['barang'] = $this->Model_barang->get_barang()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('master_data/barang_input', $data);
		$this->load->view('templates/footer');
	}
 
	public function insert_barang()
	{
		$idBarang		= $this->input->post('idBarang');
		$idKategori		= $this->input->post('idKategori');
		$namaBarang		= $this->input->post('namaBarang');
		$hargaBeli		= $this->input->post('hargaBeli');
		$hargaJual		= $this->input->post('hargaJual');
		$stock			= $this->input->post('stock');


		$data = array(

			'idBarang'		=> $idBarang,
			'idKategori'	=> $idKategori,
			'namaBarang'	=> $namaBarang,
			'hargaBeli'		=> $hargaBeli,
			'hargaJual'		=> $hargaJual,
			'stock'			=> $stock,
		);
		$this->Model_barang->insert_barang($data);
		redirect('barang');
	}

	public function edit_barang($id)
	{
		$where	= array('idBarang' => $id);
		$data['barang'] = $this->Model_barang->edit_barang($where, 'ms_barang')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('master_data/barang_edit', $data);
		$this->load->view('templates/footer');
	}

	public function update($id)
	{
		$idBarang		= $this->input->post('idBarang');
		$idKategori		= $this->input->post('idKategori');
		$namaBarang		= $this->input->post('namaBarang');
		$hargaBeli		= $this->input->post('hargaBeli');
		$hargaJual		= $this->input->post('hargaJual');
		$stock			= $this->input->post('stock');


		$data = array(

			'idBarang'		=> $idBarang,
			'idKategori'	=> $idKategori,
			'namaBarang'	=> $namaBarang,
			'hargaBeli'		=> $hargaBeli,
			'hargaJual'		=> $hargaJual,
			'stock'			=> $stock,
		);

		$this->Model_barang->update($data, 'ms_barang', $id, 'idBarang');
		redirect('barang');
	}

	public function hapus_barang($id)
	{
		$where = array('idBarang' => $id);
		$this->Model_barang->hapus($where, 'ms_barang');
		$this->session->set_flashdata(
			'success',
			'<div class="alert alert-success alert-dismissible fade show" id="berhasil" role="alert">
			<strong>Data berhasil dihapus</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
	  	</div>'
		);

		redirect('barang');
	}
}
