<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Model_pembelian extends CI_Model
{

	public function get_pembelian()
	{
		$this->db->select('*');
		$this->db->from('tr_pembelian');
		return $this->db->get();
	}

	public function insert_pembelian($data)
	{
		$this->db->insert('tr_pembelian', $data);
	}
	public function edit_pembelian($where, $table)
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
