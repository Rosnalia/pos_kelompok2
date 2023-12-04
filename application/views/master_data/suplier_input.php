 <!-- general form elements -->
 <div class="card card-primary">
 	<div class="card-header">
 		<h3 class="card-title">Tambah Suplier</h3>
 	</div>
 	<!-- /.card-header -->
 	<!-- form start -->
 	<form action="<?php echo base_url() . 'suplier/insert_suplier'; ?>" method="post" enctype="multipart/form-data">
 		<div class="card-body">
 			<div class="form-group">
 				<label>Nama Suplier</label>
 				<input type="text" class="form-control" name="namaSupplier" placeholder="Nama Suplier">
 			</div>
 			<div class="form-group">
 				<label>Alamat</label>
 				<input type="text" class="form-control" name="alamat" placeholder="Alamat">
 			</div>
 			<div class="form-group">
 				<label>Sales</label>
 				<input type="text" class="form-control" name="sales" placeholder="Sales">
 			</div>
 			<div class="form-group">
 				<label>Nomor HP</label>
 				<input type="text" class="form-control" name="noHp" placeholder="Nomor HP">
 			</div>
 			<div class="form-group">
 				<label>Status</label>
 				<select class="form-control select2" style="width: 100%;" name="status">
 					<option selected disabled>Pilih Status</option>
 					<option value="Aktif">Aktif</option>
 					<option value="Tidak Aktif">Tidak Aktif</option>
 				</select>
 			</div>
 			<!-- /.card-body -->

 			<div class="box-footer">
 				<button type="submit" name="submit" class="btn btn-primary ">Simpan</button>
 				<a href="<?php echo base_url() ?>barang" class="btn btn-default ">Cancel</a>
 			</div>
 	</form>
 </div>
 <!-- /.card -->