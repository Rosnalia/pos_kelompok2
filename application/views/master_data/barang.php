<div class="card">
    <div class="card-header">
        <h3 class="card-title">Barang</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
		<table id="example1" class="table table-bordered table-striped">
		<div class="pull-right">
			<?php
				echo anchor('barang_input', 'Tambah data', array('class' => 'btn btn-success'))
			?>
		</div>
            <!-- <button type="submit" class="btn btn-primary btn-block col-1 float-right">+</button> -->
            <thead>
                <tr>
					<th>ID Barang</th>
					<th>ID Kategori</th>
					<th>Nama Barang</th>
					<th>Harga Beli</th>
					<th>Harga Jual</th>
					<th>Stock</th>
					<th>Aksi</th>
                </tr>
            </thead>
			<?php $no = 1;
			foreach($barang as $brg) {
            	echo "<tbody>
					<tr>
						<td>".$no++."</td>
						<td>".$brg->idKategori."</td>
						<td>".$brg->namaBarang."</td>
						<td>".$brg->hargaBeli."</td>
						<td>".$brg->hargaJual."</td>
						<td>".$brg->stock."</td>
						<td>
							<a href=''class='btn btn-warning btn-sm'><i class='fas fa-edit'></i></a>
							<a href=''class='btn btn-danger btn-sm' ><i class='fas fa-trash'></i></a>
						</td>
					</tr>
                
            	</tbody>";

			}
			?>
        </table>
    </div>
</div>
    