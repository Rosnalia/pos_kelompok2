<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		//$this->load->view('templates/header');
		$this->load->view('login');
        //$this->load->view('templates/footer');
	}

	public function login() {
		$this->form_validation->set_rules('username', 'Username', 'required', ['required' => 'Username Wajib diisi']);
		$this->form_validation->set_rules('password', 'Password', 'required', ['required' => 'Password Wajib diisi']);
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('login');
		} else {
			$auth = $this->model_login->cek_login();
			if($auth == FALSE) {
				$this->session->set_flashdata('pesan', 'div class="alert alert-danger alert-dismissible fade show" role="alert">
				Username atau password yang anda masukkan salah!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('login');
			} else {
				$this->session->set_userdata('namaUser', $auth->username);
				$this->session->set_userdata('role_id', $auth->role_id);

				switch($auth->role_id) {
					case 1 : redirect('master_data/dashboard');
								break;
					case 2 : redirect('dashboard');
								break;
					default : break;
				}
			}
		}
	}

	public function logout() {
		$this->session->sess_destroy();
		rediect('login');
	}
}
