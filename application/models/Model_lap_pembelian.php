<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Model_lap_pembelian extends CI_Model
{

	public function get_lap_pembelian()
	{
		$this->db->select('*');
		$this->db->from('ms_pembelian');
		return $this->db->get();
	}

	public function insert_lap_pembelian($data)
	{
		$this->db->insert('ms_pembelian', $data);
	}
	public function edit_lap_pembelian($where, $table)
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
