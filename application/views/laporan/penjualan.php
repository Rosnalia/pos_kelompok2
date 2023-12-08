<div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flashdata'); ?>"></div>
<div class="card">
	<div class="card-header">
		<h3 class="card-title">Laporan Penjualan</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<table id="example1" class="table table-bordered table-striped">
			<div class="pull-right">
				<a href="<?= base_url('laporan/tambah_penjualan') ?>" class="btn btn-success">
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
				<?php foreach ($lap_penjualan as $lappen) : ?>
					<tr>
						<td><?php echo $lappen->idPenjualan; ?></td>
						<td><?php echo $lappen->idUser; ?></td>
						<td><?php echo $lappen->tglPenjualan; ?></td>
						<td><?php echo $lappen->tglInput; ?></td>
						<td><?php echo $lappen->total; ?></td>
						<td>
							<a href='<?php echo base_url('laporan/edit_penjualan/' . $lappen->idPenjualan) ?>' class='btn btn-warning btn-sm'><i class='fas fa-edit'></i></a>
							<a href='<?php echo base_url('laporan/hapus_penjualan/' . $lappen->idPenjualan) ?>' class='btn btn-danger btn-sm'><i class='fas fa-trash'></i></a>
						</td>

					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>
