
<?php

class Model_barang extends CI_Model {

	// public function get_data($table) 
	// {
	// 	return $this->db->get($table);
	// }

	public function get_data() {
        $query = $this->db->get('ms_barang');
        return $query->result();
    }
}
