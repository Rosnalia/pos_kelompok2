<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	public function index()
	{
		$data['user'] = $this->Model_user->get_user()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('master_data/user', $data);
		$this->load->view('templates/footer');
	}


	public function tambah_user()
	{
		$data['user'] = $this->Model_user->get_user()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('master_data/user_input', $data);
		$this->load->view('templates/footer');
	}

	public function insert_suplier()
	{
		$namaUser		= $this->input->post('namaUser');
		$levelUser		= $this->input->post('levelUser');
		$status			= $this->input->post('status');


		$data = array(

			'namaUser'		=> $namaUser,
			'levelUsert'	=> $levelUser,
			'status'		=> $status
		);
		$this->Model_user->insert_user($data);
		redirect('user');
	}

	public function edit_user($id)
	{
		$where	= array('idUser' => $id);
		$data['user'] = $this->Model_user->edit_user($where, 'ms_user')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('master_data/user_edit', $data);
		$this->load->view('templates/footer');
	}

	public function update($id)
	{
		$namaUser		= $this->input->post('namaUser');
		$levelUser		= $this->input->post('levelUser');
		$status			= $this->input->post('status');


		$data = array(

			'namaUser'		=> $namaUser,
			'levelUsert'	=> $levelUser,
			'status'		=> $status
		);

		$this->Model_user->update($data, 'ms_user', $id, 'idUser');
		redirect('user');
	}

	public function hapus_suplier($id)
	{
		$where = array('idUser' => $id);
		$this->Model_user->hapus($where, 'ms_user');
		$this->session->set_flashdata(
			'success',
			'<div class="alert alert-success alert-dismissible fade show" id="berhasil" role="alert">
			<strong>Data berhasil dihapus</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
	  	</div>'
		);

		redirect('user');
	}
}
