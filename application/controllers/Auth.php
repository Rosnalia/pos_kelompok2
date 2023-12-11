<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_login');
    }
	public function login() {
		$this->form_validation->set_rules('namaUser', 'Namauser', 'required', ['required' => 'Username Wajib diisi']);
		$this->form_validation->set_rules('password', 'Password', 'required', ['required' => 'password Wajib diisi']);
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('login');
		} else {
			$auth = $this->Model_login->cek_login();
			if($auth == FALSE) {
				$this->session->set_flashdata('pean', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				Username atau Password anda salah!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				</div>');
				redirect('auth/login');
			} else {
				$this->session->set_userdata('namaUser', $auth->namaUser);
				$this->session->set_userdata('levelUser', $auth->levelUser);

				switch($auth->levelUser) {
					case 1 : redirect('dashboard');
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
		redirect('login');
	}
}