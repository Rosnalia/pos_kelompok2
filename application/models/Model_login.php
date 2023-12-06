<?php

class Model_login extends CI_Model {

	public function cek_login() {
		$namaUser = set_value('namaUser');
		$password = set_value('password');

		$result = $this->db->where('namaUser', $namaUser)
							->where('password', $password)
							->limit(1)
							->get('user');
		if($result->num_rows() > 0) {
			return $result->row();
		} else {
			return array();
		}
	}
}