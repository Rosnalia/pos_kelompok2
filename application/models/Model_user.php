<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Model_user extends CI_Model
{

	public function get_user()
	{
		$this->db->select('*');
		$this->db->from('ms_user');
		return $this->db->get();
	}

	public function insert_user($data)
	{
		$this->db->insert('ms_user', $data);
	}
	public function edit_user($where, $table)
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
