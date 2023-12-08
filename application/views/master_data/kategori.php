<div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flashdata'); ?>"></div>
<div class="card">
	<div class="card-header">
		<h3 class="card-title">Kategori</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<table id="example1" class="table table-bordered table-striped">
			<div class="pull-right">
				<a href="<?= base_url('kategori/tambah_kategori') ?>" class="btn btn-success"><i class="fa fa-plus"></i>
					Tambah Data
				</a>
			</div>
			<thead>
				<tr>
					<th>ID Kategori</th>
					<th>Kategori</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($kategori as $ktg) : ?>
					<tr>
						<td><?php echo $ktg->idKategori; ?></td>
						<td><?php echo $ktg->kategori; ?></td>
						<td>
							<a href='<?php echo base_url('kategori/edit_kategori/' . $ktg->idkategori) ?>' class='btn btn-warning btn-sm'><i class='fas fa-edit'></i></a>
							<a href='<?php echo base_url('kategori/hapus_kategori/' . $ktg->idKategori) ?>' data-toggle="modal" class='btn btn-danger btn-sm btn-hps'><i class='fas fa-trash'></i></a>
							<a href='<?php echo base_url('kategori/edit_kategori/' . $ktg->idKategori) ?>' class='btn btn-warning btn-sm'><i class='fas fa-edit'></i></a>
							<a href='#hapus' data-toggle="modal" class='btn btn-danger btn-sm'><i class='fas fa-trash'></i></a>
						</td>

					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>
