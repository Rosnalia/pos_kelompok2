 <!-- general form elements -->
 <div class="card card-primary">
 	<div class="card-header">
 		<h3 class="card-title">Tambah Penjualan</h3>
 	</div>
 	<!-- /.card-header -->
 	<!-- form start -->
 	<form action="<?php echo base_url() . 'transaksi/insert_tr_penjualan'; ?>" method="post" enctype="multipart/form-data">
 		<div class="card-body">
 			<div class="form-group">
 				<label>Tanggal Penjualan</label>
 				<input id="datepicker" class="form-control" name="tglPenjualan">
 			</div>
 			<div class="form-group">
 				<div class="form-row">
 					<div class="col-4">
 						<label for="">Nama Barang</label>
 						<select id="barang" class="form-control select2" style="width: 100%;" name="idBarang[]">
 							<option>Pilih Barang...</option>
 							<?php foreach ($barang as $brg) : ?>
 								<option value="<?php echo $brg->idBarang ?>"><?php echo $brg->namaBarang ?></option>
 							<?php endforeach; ?>
 						</select>
 					</div>
 					<div class="col-3">
 						<label for="">Jumlah</label>
 						<input id="jumlah" type="text" class="form-control" name="jumlah[]">
 					</div>
 					<div class="col-2">
 						<label for="">Harga Barang</label>
 						<div class="input-group">
 							<div class="input-group-prepend">
 								<span class="input-group-text">Rp</span>
 							</div>
 							<input id="harga" readonly type="text" class="form-control" name="harga[]">
 						</div>
 					</div>
 					<div class="col-2">
 						<label for="">Sub Total</label>
 						<div class="input-group">
 							<div class="input-group-prepend">
 								<span class="input-group-text">Rp</span>
 							</div>
 							<input id="subTotal" readonly type="text" class="form-control" name="subTotal[]">
 						</div>
 					</div>
 					<div class="col-1 text-right">
 						<br>
 						<!-- <button id="DeleteRow" class="btn btn-danger mt-2" type="button"><i class="fa fa-minus" aria-hidden="true"></i></button> -->
 						<button id="rowAdder" class="btn btn-success mt-2" type="button"><i class="fa fa-plus" aria-hidden="true"></i></button>
 					</div>
 				</div>
 			</div>
 			<div id="newinput">
 			</div>
 			<div class="form-group">
 				<label>Total</label>
 				<div class="input-group">
 					<div class="input-group-prepend">
 						<span class="input-group-text">Rp</span>
 					</div>
 					<input disabled type="text" class="form-control" name="hargaBeli">
 				</div>
 			</div>
 			<div class="box-footer">
 				<button type="submit" name="submit" class="btn btn-primary ">Simpan</button>
 				<a href="<?php echo base_url() ?>transaksi_penjualan" class="btn btn-default ">Cancel</a>
 			</div>
 		</div>
 	</form>
 </div>
 <!-- /.card -->

 <script src="<?= base_url('assets/template') ?>/plugins/jquery/jquery.min.js"></script>

 <!-- datepicker -->
 <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
 <script>
 	$('#datepicker').datepicker({
 		uiLibrary: 'bootstrap4'
 	});
 </script>

 <script>
 	function updateTotal() {
 		let total = 0;
 		$('[id^="subTotal"]').each(function() {
 			total += parseFloat($(this).val()) || 0;
 		});
 		$('[name="hargaBeli"]').val(total);
 	}
 </script>

 <script>
 	$(document).ready(function() {
 		$('#barang').change(function() {
 			var idBarang = $(this).val();
 			fetch(`<?php echo base_url() ?>transaksi_penjualan/get_data_barang/${idBarang}`).then(response => response.json())
 				.then(data => {
 					$('#harga').val(data.harga);
 				});
 			$('#jumlah').val('');
 			$('#subTotal').val('');
 			updateTotal();
 		});

 		$("[id^='jumlah']").on("keyup", function() {
 			let y = this.id.replace(/\D/g, '');
 			let jumlah = $(`#jumlah${y}`).val();
 			let harga = $(`#harga${y}`).val();
 			let subtotal = jumlah * harga;
 			$(`#subTotal${y}`).val(subtotal);
 			updateTotal();
 		});
 		$('#newinput').on("keyup", "[id^='jumlah']", function() {
 			let y = this.id.replace(/\D/g, '');
 			let jumlah = $(`#jumlah${y}`).val();
 			let harga = $(`#harga${y}`).val();
 			let subtotal = jumlah * harga;
 			$(`#subTotal${y}`).val(subtotal);
 			updateTotal();
 		});
 	});
 </script>

 <script type="text/javascript">
 	let y = 0;
 	$("#rowAdder").click(function() {
 		y++;
 		newRowAdd =
 			`<div id="row" class="form-row mt-3">
 					<div class="col-4">
 						<select id="barang${y}" class="form-control select2" style="width: 100%;" name="idBarang[]">
						 	<option>Pilih Barang...</option>
 							<?php foreach ($barang as $brg) : ?>
 								<option value="<?php echo $brg->idBarang ?>"><?php echo $brg->namaBarang ?></option>
 							<?php endforeach; ?>
 						</select>
 					</div>
 					<div class="col-3">
 						<input id="jumlah${y}" type="text" class="form-control" name="jumlah[]">
 					</div>
 					<div class="col-2">
 						<div class="input-group">
 							<div class="input-group-prepend">
 								<span class="input-group-text">Rp</span>
 							</div>
 							<input id="harga${y}" readonly type="text" class="form-control" name="harga[]">
 						</div>
 					</div>
 					<div class="col-2">
 						<div class="input-group">
 							<div class="input-group-prepend">
 								<span class="input-group-text">Rp</span>
 							</div>
 							<input id="subTotal${y}" readonly type="text" class="form-control" name="subTotal[]">
 						</div>
 					</div>
 					<div class="col-1 text-right">
 						<button id="DeleteRow" class="btn btn-danger" type="button"><i class="fa fa-minus" aria-hidden="true"></i></button>
 					</div>
 				</div>`

 		$('#newinput').append(newRowAdd);
 		let select2 = $("<script>").text(`
		$(function() {
		$('.select2').select2()

		$('.select2bs4').select2({
			theme: 'bootstrap4'
		})
		})`);
 		$("script:last-of-type").after(select2);

 		let getharga = $("<script>").text(`$(document).ready(function() {
 		$('#barang${y}').change(function() {
 			var idBarang = $(this).val();
 			fetch('<?php echo base_url() ?>transaksi_penjualan/get_data_barang/'+idBarang).then(response => response.json())
 				.then(data => {
 					$('#harga${y}').val(data.harga);
 				});
 			$('#jumlah${y}').val('');
 			$('#subTotal${y}').val('');
 			updateTotal();
 		});
 		});`);
 		$("script:last-of-type").after(getharga);
 	});
 	$("body").on("click", "#DeleteRow", function() {
 		$(this).parents("#row").remove();
 		updateTotal();
 	})
 </script>
 <script>
 	updateTotal();
 </script>
