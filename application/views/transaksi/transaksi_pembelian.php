<?php echo $this->session->flashdata('success'); ?>
<div class="card">
	<div class="card-header">
		<h3 class="card-title">Transaksi Pembelian</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<table id="example1" class="table table-bordered table-striped">
			<div class="pull-right">
				<a href="<?= base_url('transaksi_pembelian/tambah_pembelian') ?>" class="btn btn-success"><i class="fa fa-plus"></i>
					Tambah Data
				</a>
			</div>
			<thead>
				<tr>
					<th>ID Transaksi Pembelian</th>
					<th>ID Barang</th>
					<th>ID Pembelian</th>
					<th>Nama Barang</th>
					<th>Jumlah</th>
					<th>Harga</th>
					<th>Sub Total</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($pembelian as $trpem) : ?>
					<tr>
						<td><?php echo $trpem->idTrPembelian; ?></td>
						<td><?php echo $trpem->idBarang; ?></td>
						<td><?php echo $trpem->idPembelian; ?></td>
						<td><?php echo $trpem->namaBarang; ?></td>
						<td><?php echo $trpem->jumlah; ?></td>
						<td><?php echo $trpem->harga; ?></td>
						<td><?php echo $trpem->subTotal; ?></td>
						<td>
							<a href='<?php echo base_url('transaksi/edit_pembelian/' . $trpem->idTrPembelian) ?>' class='btn btn-warning btn-sm'><i class='fas fa-edit'></i></a>
							<a href='<?php echo base_url('transaksi/hapus_tr_pembelian/' . $trpem->idTrPembelian) ?>' class='btn btn-danger btn-sm btn-hps'><i class='fas fa-trash'></i></a>
						</td>

					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>

<!-- Modal Hapus -->

<div class="modal" tabindex="-1" role="dialog" id="hapus">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<h5>Apakah anda yakin ingin menghapus data ini?</h5>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
				<a href="" class="btn btn-danger">Hapus</a>
			</div>
		</div>
	</div>
</div>
