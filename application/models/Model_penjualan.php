<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Model_barang extends CI_Model {

	public function get_data()
	{
		return $this->db->get();
	}

	public function get_data() {
        $query = $this->db->get('*');
        return $query->result();
    }
}