<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_model extends CI_Model {

	public function get_data()
    {
        $this->db->select('*');
    }

}