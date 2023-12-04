 <!-- general form elements -->
 <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Barang</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
								<div class="form-group">
                    <label>ID Barang</label>
                    <input type="string" class="form-control" id="" placeholder="ID Barang">
                  </div>
                  <div class="form-group">
                    <label>ID Kategori</label>
                    <input type="text" class="form-control" id="" placeholder="ID Kategori">
                  </div>
                  <div class="form-group">
                    <label>Nama Barang</label>
                	<input type="text" class="form-control" id="" placeholder="Nama Barang">
                  </div>
                  <div class="form-group">
                    <label>Harga Beli</label>
                	<input type="text" class="form-control" id="" placeholder="Harga Beli">
				  				</div>
				  				<div class="form-group">
                    <label>Harga Jual</label>
                    <input type="text" class="form-control" id="" placeholder="Harga Jual">
                  </div>
				  				<div class="form-group">
                    <label>Stock</label>
                    <input type="text" class="form-control" id="" placeholder="stock">
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
