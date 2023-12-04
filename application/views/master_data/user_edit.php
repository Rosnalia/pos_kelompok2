 <!-- general form elements -->
 <div class="card card-primary">
 	<div class="card-header">
 		<h3 class="card-title">Edit User</h3>
 	</div>
 	<!-- /.card-header -->
 	<!-- form start -->
 	<?php foreach ($user as $usr) : ?>
 		<form action="<?php echo base_url() . 'user/update/' . $usr->idUser; ?>" method="post" enctype="multipart/form-data">
 			<div class="card-body">
 				<div class="form-group">
 					<label>Nama Lengkap</label>
 					<input type="text" class="form-control" name="namaUser" placeholder="Nama User" value="<?php echo $usr->namaUser ?>">
 				</div>
 				<div class="form-group">
 					<label>Level User</label>
 					<input type="text" class="form-control" name="levelUser" placeholder="Level User" value="<?php echo $usr->levelUser ?>">
 				</div>
 				<div class="form-group">
 					<label>Status</label>
 					<input type="text" class="form-control" name="status" placeholder="Status" value="<?php echo $usr->status ?>">
 				</div>
 				<!-- /.card-body -->

 				<div class="box-footer">
 					<button type="submit" name="submit" class="btn btn-primary ">Simpan</button>
 					<a href="<?php echo base_url() ?>user" class="btn btn-default ">Cancel</a>
 				</div>
 		</form>
 	<?php endforeach; ?>
 </div>
 <!-- /.card -->
