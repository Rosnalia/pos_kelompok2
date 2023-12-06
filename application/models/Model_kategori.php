<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Model_kategori extends CI_Model
{

	public function get_kategori()
	{
		$this->db->select('*');
		$this->db->from('ms_kategori');
		return $this->db->get();
	}

	public function insert_kategori($data)
	{
		$this->db->insert('ms_kategori', $data);
	}
	
	public function edit_kategori($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	public function update($data, $table, $id, $row)
	{
		$this->db->where($row, $id);
		return $this->db->update($table, $data);
	}


	public function hapus($where, $table)
	{
		$this->db->from($table);
		$this->db->where($where);
		$this->db->delete($table);
	}
}
