<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Model_penjualan extends CI_Model
{

	public function get_transaksi_penjualan()
	{
		$this->db->select('*');
		$this->db->from('tr_penjualan');
		return $this->db->get();
	}

	public function insert_transaksi_penjualan($data)
	{
		$this->db->insert('tr_penjualan', $data);
	}
	public function edit_transaksi_penjualan($where, $table)
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
