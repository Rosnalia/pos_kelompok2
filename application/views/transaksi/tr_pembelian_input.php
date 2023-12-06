 <!-- general form elements -->
 <div class="card card-primary">
 	<div class="card-header">
 		<h3 class="card-title">Tambah Pembelian</h3>
 	</div>
 	<!-- /.card-header -->
 	<!-- form start -->
 	<form action="<?php echo base_url() . 'transaksi/insert_pembelian'; ?>" method="post" enctype="multipart/form-data">
 		<div class="card-body">
 			<div class="form-group">
 				<label>ID Transaksi Pembelian</label>
 				<input type="text" class="form-control" name="idTrPembelian" placeholder="ID Transaksi Pembelian">
 			</div>
 			<div class="form-group">
 				<label>ID Barang</label>
 				<input type="text" class="form-control" name="idBarang" placeholder="ID Barang">
 			</div>
 			<div class="form-group">
 				<label>ID Pembelian</label>
 				<input type="text" class="form-control" name="idPembelian" placeholder="ID Pembelian">
 			</div>
 			<div class="form-group">
 				<label>Jumlah</label>
 				<input type="text" class="form-control" name="jumlah" placeholder="Jumlah">
 			</div>
 			<div class="form-group">
 				<label>Sub Total</label>
 				<input type="text" class="form-control" name="subTotal" placeholder="Sub Total">
 			</div>
 			<!-- /.card-body -->

 			<div class="box-footer">
 				<button type="submit" name="submit" class="btn btn-primary ">Simpan</button>
 				<a href="<?php echo base_url() ?>transaksi" class="btn btn-default ">Cancel</a>
 			</div>
 	</form>
 </div>
 <!-- /.card -->