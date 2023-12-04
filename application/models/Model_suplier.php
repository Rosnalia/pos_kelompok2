<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Model_suplier extends CI_Model
{

	public function get_suplier()
	{
		$this->db->select('*');
		$this->db->from('ms_supplier');
		return $this->db->get();
	}

	public function insert_suplier($data)
	{
		$this->db->insert('ms_supplier', $data);
	}
	public function edit_suplier($where, $table)
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
