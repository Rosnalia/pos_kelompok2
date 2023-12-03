<?php

class Main_model extends CI_Model
{
    private $users = "users";
    private $supplier = "supplier";
    private $kategori = "kategori";
    private $barang = "barang";
    private $transaksi_pembelian = "transaksi pembelian";
    private $transaksi_penjualan = "transaksi penjualan";
    private $laporan_pembelian = "laporan pembelian";
	private $laporan_penjualan = "laporan penjualan";


    public function login($username){
        $this->db->where('username', $username);
		return $this->db->get($this->users)->row();
    }

    public function getSupplier(){
		  return $this->db->get($this->ms_supplier)->result();
    }

    public function getBarang(){
      $this->db->select('*');
      $this->db->from($this->pembelianProduct);
      $this->db->join($this->product, 'pembelian.id_produk = produk.id_produk');
      $this->db->join($this->golongan, 'produk.id_golongan = golongan_obat.id_golongan');
      $this->db->join($this->satuan, 'produk.id_satuan = satuan_obat.id_satuan');
      return $this->db->get()->result();
    }

    public function isLogin(){
        return $this->session->userdata('user')!=null;
    }

    public function updateLastLogin($user_id){
        $sql = "UPDATE {$this->users} SET last_login=now() WHERE user_id={$user_id}";
        $this->db->query($sql);
    }

}
