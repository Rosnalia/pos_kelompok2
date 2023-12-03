 <!-- general form elements -->
 <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Suplier</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">ID Suplier</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="ID Suplier">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Suplier</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Nama Suplier">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label>
                	<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Alamat">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Sales</label>
                	<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Sales">
				  			</div>
				  			<div class="form-group">
                    <label for="exampleInputEmail1">Nomor HP</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Nomor HP">
                </div>
				  			<div class="form-group">
                  <label>Status</label>
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Aktif</option>
                    <option>Tidak Aktif</option>
                  </select>
                	</div>
                <!-- /.card-body -->

                <div class="box-footer">
									<button type="submit" name="submit" class="btn btn-primary ">Simpan</button>
									<a href="<?php echo base_url() ?>barang" class="btn btn-default ">Cancel</a>
								</div>
              </form>
            </div>
            <!-- /.card -->
