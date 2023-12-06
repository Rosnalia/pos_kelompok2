 <!-- general form elements -->
 <div class="card card-primary">
 	<div class="card-header">
 		<h3 class="card-title">Tambah Kategori</h3>
 	</div>
 	<!-- /.card-header -->
 	<!-- form start -->
 	<form action="<?php echo base_url() . 'kategori/insert_kategori'; ?>" method="post" enctype="multipart/form-data">
	 	<div class="card-body">
			<div class="form-group">
				<label>ID Kategori</label>
				<input type="text" class="form-control" name="idKategori" placeholder="ID Kategori">
			</div>
			<div class="form-group">
				<label>Kategori</label>
				<input type="text" class="form-control" name="kategori" placeholder="Kategori">
			</div>
 		<!-- /.card-body -->

 			<div class="box-footer">
 				<button type="submit" name="submit" class="btn btn-primary ">Simpan</button>
 				<a href="<?php echo base_url() ?>barang" class="btn btn-default ">Cancel</a>
 			</div>
 	</form>
 </div>
 <!-- /.card -->
