 <!-- general form elements -->
 <div class="card card-primary">
 	<div class="card-header">
 		<h3 class="card-title">Tambah User</h3>
 	</div>
 	<!-- /.card-header -->
 	<!-- form start -->
 	<form action="<?php echo base_url() . 'user/insert_user'; ?>" method="post" enctype="multipart/form-data">
 		<div class="card-body">
 			<div class="form-group">
 				<label>ID User</label>
 				<input type="text" class="form-control" name="idUser" placeholder="ID User">
 			</div>
 			<div class="form-group">
 				<label>Nama Lengkap</label>
 				<input type="text" class="form-control" name="namaUser" placeholder="Nama Lengkap">
 			</div>
 			<div class="form-group">
 				<label>Level User</label>
 				<select class="form-control select2" style="width: 100%;" name="levelUser">
 					<option selected disabled>Pilih Level User</option>
 					<option value="Superadmin">Superadmin</option>
 					<option value="Administrator">Administrator</option>
 				</select>
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
 				<a href="<?php echo base_url() ?>user" class="btn btn-default ">Cancel</a>
 			</div>
 	</form>
 </div>
 <!-- /.card -->
