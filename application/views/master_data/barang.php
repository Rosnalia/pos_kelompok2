<div class="card">
    <div class="card-header">
        <h3 class="card-title">Barang</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
		<table id="example1" class="table table-bordered table-striped">
		<div class="pull-right">
			<?php
				echo anchor('barang_input', 'Tambah data', array('class' => 'btn btn-success'))
			?>
		</div>
            <!-- <button type="submit" class="btn btn-primary btn-block col-1 float-right">+</button> -->
            <thead>
                <tr>
					<th>ID Barang</th>
					<th>ID Kategori</th>
					<th>Nama Barang</th>
					<th>Harga Beli</th>
					<th>Harga Jual</th>
					<th>Stock</th>
					<th>Aksi</th>
                </tr>
            </thead>
			<tbody>
				<?php foreach ($barang as $brg) : ?>
					<tr>
						<td><?php echo $brg->idBarang; ?></td>
						<td><?php echo $brg->idKategori; ?></td>
						<td><?php echo $brg->namaBarang; ?></td>
						<td><?php echo $brg->hargaBeli; ?></td>
						<td><?php echo $brg->hargaJual; ?></td>
						<td><?php echo $brg->stock; ?></td>
						<td>
							<a href='<?php echo base_url('barang/edit_barang/' . $brg->idBarang) ?>' class='btn btn-warning btn-sm'><i class='fas fa-edit'></i></a>
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
				<a href="<?php echo base_url('barang/hapus_barang/' . $brg->idBarang) ?>" class="btn btn-danger">Hapus</a>
			</div>
		</div>
	</div>
</div>