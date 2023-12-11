 <!-- general form elements -->
 <div class="card card-primary">
 	<div class="card-header">
 		<h3 class="card-title">Tambah Laporan Pembelian</h3>
 	</div>
 	<!-- /.card-header -->
 	<!-- form start -->
 	<form action="<?php echo base_url() . 'laporan/insert_pembelian'; ?>" method="post" enctype="multipart/form-data">
 		<div class="card-body">
 			<div class="form-group">
 				<label>ID Pembelian</label>
 				<input type="text" class="form-control" name="idPembelian" placeholder="ID Pembelian">
 			</div>
 			<div class="form-group">
 				<label>ID Supplier</label>
 				<input type="text" class="form-control" name="idSupplier" placeholder="ID Supplier">
 			</div>
 			<div class="form-group">
 				<label>ID User</label>
 				<input type="text" class="form-control" name="idUser" placeholder="ID User">
 			</div>
 			<div class="form-group">
 				<label>No Faktur</label>
 				<input type="text" class="form-control" name="noFaktur" placeholder="No Faktur">
 			</div>
 			<div class="form-group">
 				<label>Tanggal Pembelian</label>
 				<input type="text" class="form-control" name="tglPembelian" placeholder="Tanggal Pembelian">
 			</div>
 			<div class="form-group">
 				<label>Tanggal Input</label>
 				<input type="text" class="form-control" name="tglInput" placeholder="Tanggal Input">
 			</div>
 			<div class="form-group">
 				<label>Total</label>
 				<input type="text" class="form-control" name="total" placeholder="Total">
 			</div>
 			<!-- /.card-body -->

 			<div class="box-footer">
 				<button type="submit" name="submit" class="btn btn-primary ">Simpan</button>
 				<a href="<?php echo base_url() ?>laporan_pembelian" class="btn btn-default ">Cancel</a>
 			</div>
 	</form>
 </div>
 <!-- /.card -->
