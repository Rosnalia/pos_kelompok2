<?php echo $this->session->flashdata('success'); ?>
<div class="card">
	<div class="card-header">
		<h3 class="card-title">Laporan Penjualan</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<table id="example1" class="table table-bordered table-striped">
			<div class="pull-right">
				<a href="<?= base_url('laporan/tambah_lappenjualan') ?>" class="btn btn-success">
					Tambah Data
				</a>
			</div>
			<thead>
				<tr>
					<th>ID Penjualan</th>
					<th>ID User</th>
					<th>Tanggal Penjualan</th>
					<th>Tanggal Input</th>
					<th>Total</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($lappenjualan as $lappen) : ?>
					<tr>
						<td><?php echo $lappen->idPenjualan; ?></td>
						<td><?php echo $lappen->idUser; ?></td>
						<td><?php echo $lappen->tglPenjualan; ?></td>
						<td><?php echo $lappen->tglInput; ?></td>
						<td><?php echo $lappen->total; ?></td>
						<td>
							<a href='<?php echo base_url('laporan/edit_lappenjualan/' . $lappen->idPenjualan) ?>' class='btn btn-warning btn-sm'><i class='fas fa-edit'></i></a>
							<a href='#hapus' data-toggle="modal" class='btn btn-danger btn-sm'><i class='fas fa-trash'></i></a>
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
				<a href="<?php echo base_url('laporan/hapus_lappenjualan/' . $lappen->idPenjualan) ?>" class="btn btn-danger">Hapus</a>
			</div>
		</div>
	</div>
</div>
