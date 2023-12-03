 <!-- general form elements -->
 <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Kategori</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
								<div class="form-group">
                    <label for="exampleInputPassword1">ID Kategori</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Kategori">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kategori</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="ID Kategori">
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
