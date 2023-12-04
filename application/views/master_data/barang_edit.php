 <!-- general form elements -->
 <div class="card card-primary">
 	<div class="card-header">
 		<h3 class="card-title">Edit Barang</h3>
 	</div>
 	<!-- /.card-header -->
 	<!-- form start -->
 	<?php foreach ($barang as $brg) : ?>
 		<form action="<?php echo base_url() . 'barang/update/' . $brg->idBarang; ?>" method="post" enctype="multipart/form-data">
 			<div class="card-body">
 				<div class="form-group">
 					<label>ID Barang</label>
 					<input type="text" class="form-control" name="idBarang" placeholder="ID Barang" value="<?php echo $brg->idBarang ?>">
 				</div>
 				<div class="form-group">
 					<label>ID Kategori</label>
 					<input type="text" class="form-control" name="idKategori" placeholder="ID Kategori" value="<?php echo $brg->idKategori ?>">
 				</div>
 				<div class="form-group">
 					<label>Nama Barang</label>
 					<input type="text" class="form-control" name="namaBarang" placeholder="Nama Barang" value="<?php echo $brg->namaBarang ?>">
 				</div>
 				<div class="form-group">
 					<label>Harga Beli</label>
 					<input type="text" class="form-control" name="hargaBeli" placeholder="Harga Beli" value="<?php echo $brg->hargaBeli ?>">
 				</div>
 				<div class="form-group">
 					<label>Harga Jual</label>
 					<input type="text" class="form-control" name="hargaJual" placeholder="Harga Jual" value="<?php echo $brg->hargaJual ?>">
 				</div>
 				<div class="form-group">
 					<label>Stock</label>
 					<input type="text" class="form-control" name="stock" placeholder="Stock" value="<?php echo $brg->stock ?>">
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