<?php echo $this->session->flashdata('success'); ?>
<div class="card">
	<div class="card-header">
		<h3 class="card-title">Suplier</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<table id="example1" class="table table-bordered table-striped">
			<div class="pull-right">
				<a href="<?= base_url('suplier/tambah_suplier') ?>" class="btn btn-success"><i class="fa fa-plus"></i>
					Tambah Data
				</a> 
			</div>
			<thead>
				<tr>
					<th>ID Suplier</th>
					<th>Nama Suplier</th>
					<th>Alamat</th>
					<th>Sales</th>
					<th>Nomor HP</th>
					<th>Status</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($suplier as $sup) : ?>
					<tr>
						<td><?php echo $sup->idSupplier; ?></td>
						<td><?php echo $sup->namaSupplier; ?></td>
						<td><?php echo $sup->alamat; ?></td>
						<td><?php echo $sup->sales; ?></td>
						<td><?php echo $sup->noHp; ?></td>
						<td><?php echo $sup->status; ?></td>
						<td>
							<a href='<?php echo base_url('suplier/edit_suplier/' . $sup->idSupplier) ?>' class='btn btn-warning btn-sm'><i class='fas fa-edit'></i></a>
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
				<a href="<?php echo base_url('suplier/hapus_suplier/' . $sup->idSupplier) ?>" class="btn btn-danger">Hapus</a>
			</div>
		</div>
	</div>
</div>
