 <!-- general form elements -->
 <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah User</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">ID User</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="ID User">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Lengkap</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Nama Lengkap">
                  </div>
									<div class="form-group">
                  <label>Level User</label>
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Administrator</option>
                    <option>Super Admin</option>
                  </select>
                	</div>
				  				<div class="form-group">
                  <label>Status</label>
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Aktif</option>
                    <option>Tidak Aktif</option>
                  </select>
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
