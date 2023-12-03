<?php 

class Model_pembelian extends CI_Model {
	public function GetDataPembelian() {
		return $this->db->query("SELECT ms_pembelian.*, ms_supplier.namaSupplier FROM ms_pembelian, ms_supplier 
		WHERE ms_pembelian.idSupplier=ms_supplier.idSupplier ORDER BY ms_pembelian.tglPembelian DESC");
	}

	public function GetDataDetailPembelian($idPembelian) {
		$query = $this->db->query("SELECT ms_pembelian.*, ms_supplier.namaSupplier FROM ms_pembelian, ms_supplier
		WHERE ms_pembelian.idSupplier=ms_supplier.idSupplier AND idPembelian='*.$idPembelian.*'");
		$arr = array('idPembelian', 'idUser', 'idSupplier', 'namaSupplier', 'tglPembelian', 'total', 'tglInput');
	}

	public function CreateDataPembelian() {
		$post = $this->input->post() {
			$data = array()
		}
	}
}
