<div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flashdata'); ?>"></div>
<div class="card">
	<div class="card-header">
		<h3 class="card-title">User</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<table id="example1" class="table table-bordered table-striped">
			<div class="pull-right">
				<a href="<?= base_url('user/tambah_user') ?>" class="btn btn-success"><i class="fa fa-plus"></i>
					Tambah Data
				</a>
			</div>
	</div>
	<thead>
		<tr>
			<th>ID User</th>
			<th>Nama Lengkap</th>
			<th>Level User</th>
			<th>Status</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
	<tbody>
		<?php foreach ($user as $usr) : ?>
			<tr>
				<td><?php echo $usr->idUser; ?></td>
				<td><?php echo $usr->namaUser; ?></td>
				<td><?php echo $usr->levelUser; ?></td>
				<td><?php echo $usr->status; ?></td>
				<td>
					<a href='<?php echo base_url('user/edit_user/' . $usr->idUser) ?>' class='btn btn-warning btn-sm'><i class='fas fa-edit'></i></a>
					<a href='#hapus' data-toggle="modal" class='btn btn-danger btn-sm'><i class='fas fa-trash'></i></a>
				</td>

			</tr>
		<?php endforeach; ?>
	</tbody>
	</table>
</div>
</div>
