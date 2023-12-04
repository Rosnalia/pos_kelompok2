<div class="card">
    <div class="card-header">
        <h3 class="card-title">User</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
		<div class="pull-right">
			<?php
				echo anchor('user_input', 'Tambah data', array('class' => 'btn btn-success'))
			?>
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
				<a href="<?php echo base_url('user/hapus_user/' . $usr->iduUser) ?>" class="btn btn-danger">Hapus</a>
			</div>
		</div>
	</div>
</div>
