<?php echo $this->session->flashdata('success'); ?>
<div class="card">
	<div class="card-header">
		<h3 class="card-title">Laporan Pembelian</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<table id="example1" class="table table-bordered table-striped">
			<div class="pull-right">
				<a href="<?= base_url('laporan/tambah_lap_pembelian') ?>" class="btn btn-success"><i class="fa fa-plus"></i>
					Tambah Data
				</a>
			</div>
			<thead>
				<tr>
					<th>ID Pembelian</th>
					<th>ID Supplier</th>
					<th>ID User</th>
					<th>No Faktur</th>
					<th>Tanggal Pembelian</th>
					<th>Tanggal Input</th>
					<th>Total</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($lap_pembelian as $lappem) : ?>
					<tr>
						<td><?php echo $lappem->idPembelian; ?></td>
						<td><?php echo $lappem->IdSupplier; ?></td>
						<td><?php echo $lappem->idUser; ?></td>
						<td><?php echo $lappem->noFaktur; ?></td>
						<td><?php echo $lappem->tglPembelian; ?></td>
						<td><?php echo $lappem->tglInput; ?></td>
						<td><?php echo $lappem->Total; ?></td>
						<td>
							<a href='<?php echo base_url('laporan/edit_pembelian/' . $lappem->idPembelian) ?>' class='btn btn-warning btn-sm'><i class='fas fa-edit'></i></a>
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
				<a href="<?php echo base_url('laporan/hapus_pembelian/' . $lappem->idPembelian) ?>" class="btn btn-danger">Hapus</a>
			</div>
		</div>
	</div>
</div>
