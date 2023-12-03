 <!-- general form elements -->
 <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Laporan Pembelian</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">ID Pembelian</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="ID Pembelian">
                  </div>
									<div class="form-group">
                    <label for="exampleInputEmail1">ID Suplier</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="ID Suplier">
                  </div>
									<div class="form-group">
                    <label for="exampleInputEmail1">ID User</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="ID User">
                  </div>
				  				<div class="form-group">
                    <label for="exampleInputEmail1">No Faktur</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="No Faktur">
                  </div>
									<!-- Date and time -->
									<di class="form-group">
                  <label>Tanggal Pembelian</label>
                    <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime"/>
                        <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
									<di class="form-group">
                  <label>Tanggal Input</label>
                    <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime"/>
                        <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                <!-- /.form group -->
				  				<div class="form-group">
                    <label for="exampleInputEmail1">Total</label>
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
