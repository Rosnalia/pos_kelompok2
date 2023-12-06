 <!-- general form elements -->
 <div class="card card-primary">
 	<div class="card-header">
 		<h3 class="card-title">Edit Transaksi Penjualan</h3>
 	</div>
 	<!-- /.card-header -->
 	<!-- form start -->
 	<?php foreach ($tr_penjualan as $trpen) : ?>
 		<form action="<?php echo base_url() . 'transaksi/update/' . $trpen->idTrPenjualan; ?>" method="post" enctype="multipart/form-data">
 			<div class="card-body">
			 	<div class="form-group">
					<label>ID Transaksi Penjualan</label>
					<input type="text" class="form-control" name="idTrPenjualan" placeholder="ID Transaksi Penjualan">
				</div>
				<div class="form-group">
					<label>ID Barang</label>
					<input type="text" class="form-control" name="idBarang" placeholder="ID Barang">
				</div>
				<div class="form-group">
					<label>ID Penjualan</label>
					<input type="text" class="form-control" name="idPenjualan" placeholder="ID Penjualan">
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
 	<?php endforeach; ?>
 </div>
 <!-- /.card -->