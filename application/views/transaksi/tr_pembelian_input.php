 <!-- general form elements -->
 <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Transaksi Pembelian</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">ID Transaksi Pembelian</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="ID Transaksi Pembelian">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">ID Barang</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="ID Barang">
                  </div>
									<div class="form-group">
                    <label for="exampleInputEmail1">ID Pembelian</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="ID Pembelian">
                  </div>
				  				<div class="form-group">
                    <label for="exampleInputEmail1">Jumlah</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Jumlah">
                  </div>
				  				<div class="form-group">
                    <label for="exampleInputEmail1">Harga</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Harga">
                  </div>
				  				<div class="form-group">
                    <label for="exampleInputEmail1">Sub Total</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Sub Total">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="box-footer">
									<button type="submit" name="submit" class="btn btn-primary ">Simpan</button>
									<a href="<?php echo base_url() ?>barang" class="btn btn-default ">Cancel</a>
								</div>
              </form>
            </div>
            <!-- /.card -->
