 <!-- general form elements -->
 <div class="card card-primary">
 	<div class="card-header">
 		<h3 class="card-title">Edit Kategori</h3>
 	</div>
 	<!-- /.card-header -->
 	<!-- form start -->
 	<?php foreach ($kategori as $ktg) : ?>
 		<form action="<?php echo base_url() . 'kategori/update/' . $ktg->idKategori; ?>" method="post" enctype="multipart/form-data">
 			<div class="card-body">
 				<div class="form-group">
 					<label>ID Kategori</label>
 					<input type="text" class="form-control" name="namaKategori" placeholder="ID Kategori" value="<?php echo $sup->namaSupplier ?>">
 				</div>
 				<div class="form-group">
 					<label>Kategori</label>
 					<input type="text" class="form-control" name="kategori" placeholder="Kategori" value="<?php echo $sup->alamat ?>">
 				</div>
 				<div class="form-group">
 					<label>Status</label>
 					<select class="form-control select2" style="width: 100%;" name="status">
 						<option value="Aktif" <?php echo $sup->status == 'Aktif' ? 'selected' : '' ?>>Aktif</option>
 						<option value="Tidak Aktif" <?php echo $sup->status == 'Tidak Aktif' ? 'selected' : '' ?>>Tidak Aktif</option>
 					</select>
 				</div>
 				<!-- /.card-body -->

 				<div class="box-footer">
 					<button type="submit" name="submit" class="btn btn-primary ">Simpan</button>
 					<a href="<?php echo base_url() ?>barang" class="btn btn-default ">Cancel</a>
 				</div>
 		</form>
 	<?php endforeach; ?>
 </div>
 <!-- /.card -->
