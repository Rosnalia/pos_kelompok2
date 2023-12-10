<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Model_barang extends CI_Model
{

	public function get_barang()
	{
		$this->db->select('*');
		$this->db->from('ms_barang');
		$this->db->join('ms_kategori', 'ms_barang.idKategori=ms_kategori.idKategori');
		return $this->db->get();
	}

	public function get_barang_by_id($id)
	{
		$this->db->select('*');
		$this->db->from('ms_barang');
		$this->db->where('idBarang', $id);
		return $this->db->get()->row();
	}

	public function insert_barang($data)
	{
		$this->db->insert('ms_barang', $data);
	}
	public function edit_barang($where, $table)
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
