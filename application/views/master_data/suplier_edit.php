 <!-- general form elements -->
 <div class="card card-primary">
 	<div class="card-header">
 		<h3 class="card-title">Edit Suplier</h3>
 	</div>
 	<!-- /.card-header -->
 	<!-- form start -->
 	<?php foreach ($suplier as $sup) : ?>
 		<form action="<?php echo base_url() . 'suplier/update/' . $sup->idSupplier; ?>" method="post" enctype="multipart/form-data">
 			<div class="card-body">
 				<div class="form-group">
 					<label>Nama Suplier</label>
 					<input type="text" class="form-control" name="namaSupplier" placeholder="Nama Suplier" value="<?php echo $sup->namaSupplier ?>">
 				</div>
 				<div class="form-group">
 					<label>Alamat</label>
 					<input type="text" class="form-control" name="alamat" placeholder="Alamat" value="<?php echo $sup->alamat ?>">
 				</div>
 				<div class="form-group">
 					<label>Sales</label>
 					<input type="text" class="form-control" name="sales" placeholder="Sales" value="<?php echo $sup->sales ?>">
 				</div>
 				<div class="form-group">
 					<label>Nomor HP</label>
 					<input type="text" class="form-control" name="noHp" placeholder="Nomor HP" value="<?php echo $sup->noHp ?>">
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
 					<a href="<?php echo base_url() ?>suplier" class="btn btn-default ">Cancel</a>
 				</div>
 		</form>
 	<?php endforeach; ?>
 </div>
 <!-- /.card -->
