<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{

	public function index()
	{
		$data['kategori'] = $this->Model_kategori->get_kategori()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('master_data/kategori', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_kategori()
	{
		$data['kategori'] = $this->Model_kategori->get_kategori()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('master_data/kategori_input', $data);
		$this->load->view('templates/footer');
	}

	public function insert_kategori()
	{
		$idKategori			= $this->input->post('idKategori');
		$kategori			= $this->input->post('kategori');

		$data = array(

			'idKategori'	=> $idKategori,
			'kategori'		=> $kategori,
		);
		$this->Model_kategori->insert_kategori($data);
		redirect('kategori');
	}

	public function edit_kategori($id)
	{
		$where	= array('idKategori' => $id);
		$data['kategori'] = $this->Model_kategori->edit_kategori($where, 'ms_kategori')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('master_data/kategori_edit', $data);
		$this->load->view('templates/footer');
	}

	public function update($id)
	{
		$idKategori			= $this->input->post('idKategori');
		$kategori			= $this->input->post('kategori');

		$data = array(

			'idKategori'	=> $idKategori,
			'kategori'		=> $kategori,
		);

		$this->Model_kategori->update($data, 'ms_kategori', $id, 'idKategori');
		redirect('kategori');
	}

	public function hapus_kategori($id)
	{
		$where = array('idKategori' => $id);
		$this->Model_kategori->hapus($where, 'ms_kategori');
		$this->session->set_flashdata('flashdata', 'Menghapus');
		redirect('kategori');
	}
}
