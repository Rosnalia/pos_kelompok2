<!-- /.card -->
</section>
<!-- right col -->
</div>
<!-- /.row (main row) -->
</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
	<div class="float-right d-none d-sm-inline-block mb-3">
		<b>Copyright &copy; 2023 <a>Kelompok 2 - Proyek TI</a>.</b>
	</div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
	<!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<!-- <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script> -->
<script src="<?= base_url('assets/template') ?>/plugins/jquery/jquery.min.js"></script>

<!-- <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script> -->

<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/template') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- SweetAlert2 -->
<script src="<?= base_url('assets/template') ?>/plugins/sweetalert2/sweetalert2.min.js"></script>

<!-- Select2 -->
<script src="<?= base_url('assets/template') ?>/plugins/select2/js/select2.full.min.js"></script>

<!-- DataTables  & Plugins -->
<script src="<?= base_url('assets/template') ?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/template') ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/template') ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('assets/template') ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/template') ?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url('assets/template') ?>/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/template') ?>/plugins/jszip/jszip.min.js"></script>
<script src="<?= base_url('assets/template') ?>/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url('assets/template') ?>/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url('assets/template') ?>/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url('assets/template') ?>/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url('assets/template') ?>/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/template') ?>/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->

<!-- <script src="</dist/js/demo.js"></script> -->
<!-- Page specific script -->
<script>
	$(function() {
		$("#example1").DataTable({
			"responsive": true,
			"lengthChange": false,
			"autoWidth": false,

		}).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
		$('#example2').DataTable({
			"paging": true,
			"lengthChange": false,
			"searching": false,
			"ordering": true,
			"info": true,
			"autoWidth": false,
			"responsive": true,
		});

		//Initialize Select2 Elements
		$('.select2').select2()

		//Initialize Select2 Elements
		$('.select2bs4').select2({
			theme: 'bootstrap4'
		})
	});
</script>

<script>
	const flashData = $('.flash-data').data('flashdata');
	if (flashData) {
		Swal.fire({
			title: 'Berhasil ',
			text: flashData + ' Data',
			type: 'success'
		})
	}

	$('.btn-hps').on('click', function(e) {
		e.preventDefault();
		const href = $(this).attr('href');

		Swal.fire({
			title: 'Apakah Anda Yakin Akan menghapus data?',
			showCancelButton: true,
			confirmButtonColor: '#dc3741',
			cancelButtonColor: '#6e7881',
			confirmButtonText: 'Hapus',
			cancelButtonText: 'Batal'
		}).then((result) => {
			if (result.value == true) {
				document.location.href = href;
			}
		})
	});
</script>

</body>

</html>
