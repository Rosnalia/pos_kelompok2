<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Suplier extends CI_Controller
{

	public function index()
	{
		$data['suplier'] = $this->Model_suplier->get_suplier()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('master_data/suplier', $data);
		$this->load->view('templates/footer');
	}


	public function tambah_suplier()
	{
		$data['suplier'] = $this->Model_suplier->get_suplier()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('master_data/suplier_input', $data);
		$this->load->view('templates/footer');
	}

	public function insert_suplier()
	{
		$namaSupplier	= $this->input->post('namaSupplier');
		$alamat			= $this->input->post('alamat');
		$sales			= $this->input->post('sales');
		$noHp			= $this->input->post('noHp');
		$status			= $this->input->post('status');


		$data = array(

			'namaSupplier'	=> $namaSupplier,
			'alamat'		=> $alamat,
			'sales'			=> $sales,
			'noHp'			=> $noHp,
			'status'		=> $status,
		);
		$this->Model_suplier->insert_suplier($data);
		redirect('suplier');
	}

	public function edit_suplier($id)
	{
		$where	= array('idSupplier' => $id);
		$data['suplier'] = $this->Model_suplier->edit_suplier($where, 'ms_supplier')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('master_data/suplier_edit', $data);
		$this->load->view('templates/footer');
	}

	public function update($id)
	{
		$namaSupplier	= $this->input->post('namaSupplier');
		$alamat			= $this->input->post('alamat');
		$sales			= $this->input->post('sales');
		$noHp			= $this->input->post('noHp');
		$status			= $this->input->post('status');


		$data = array(

			'namaSupplier'	=> $namaSupplier,
			'alamat'		=> $alamat,
			'sales'			=> $sales,
			'noHp'			=> $noHp,
			'status'		=> $status,
		);

		$this->Model_suplier->update($data, 'ms_supplier', $id, 'idSupplier');
		redirect('suplier');
	}

	public function hapus_suplier($id)
	{
		$where = array('idSupplier' => $id);
		$this->Model_suplier->hapus($where, 'ms_supplier');
		$this->session->set_flashdata(
			'success',
			'<div class="alert alert-success alert-dismissible fade show" id="berhasil" role="alert">
			<strong>Data berhasil dihapus</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
	  	</div>'
		);

		redirect('suplier');
	}
}
