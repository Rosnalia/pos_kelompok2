<div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flashdata'); ?>"></div>
<div class="card">
	<div class="card-header">
		<h3 class="card-title">Barang</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<table id="example1" class="table table-bordered table-striped">
			<div class="pull-right">
				<a href="<?= base_url('barang/tambah_barang') ?>" class="btn btn-success"><i class="fa fa-plus"></i>
					Tambah Data
				</a>
			</div>
			<!-- <button type="submit" class="btn btn-primary btn-block col-1 float-right">+</button> -->
			<thead>
				<tr>
					<th>ID Barang</th>
					<th>Kategori</th>
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
						<td><?php echo $brg->kategori; ?></td>
						<td><?php echo $brg->namaBarang; ?></td>
						<td><?php echo $brg->hargaBeli; ?></td>
						<td><?php echo $brg->hargaJual; ?></td>
						<td><?php echo $brg->stock; ?></td>
						<td>
							<a href='<?php echo base_url('barang/edit_barang/' . $brg->idBarang) ?>' class='btn btn-warning btn-sm'><i class='fas fa-edit'></i></a>
							<a href='<?php echo base_url('barang/hapus_barang/' . $brg->idBarang) ?>' class='btn btn-danger btn-sm btn-hps'><i class='fas fa-trash'></i></a>
						</td>

					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>
