<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Model_lap_penjualan extends CI_Model
{

	public function get_lap_penjualan()
	{
		$this->db->select('*');
		$this->db->from('ms_penjualan');
		return $this->db->get();
	}

	public function insert_lap_penjualan($data)
	{
		$this->db->insert('ms_penjualan', $data);
	}
	public function edit_lap_penjualan($where, $table)
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
