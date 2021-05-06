  <link rel="stylesheet" href="<?php echo base_url() ?>asset/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/bower_components/Ionicons/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
  	folder instead of downloading all of them to reduce the load. -->
  	<link rel="stylesheet" href="<?php echo base_url() ?>asset/dist/css/skins/_all-skins.min.css">

  	<div>
  		<h2> Klik dibawah sini untuk menambah data asset </h2>
  		<a href="<?php echo base_url() ?>index.php/Welcome/TambahDataAsset"><button class="btn btn-primary btn-lg"> Tambah Data </button></a>
  		<br>
  		<br>
  		<div class="box-body no-padding">
  			<table class="table table-condensed">
  				<tr>
  					<th>ID Asset</th>
  					<th>Nama Barang</th>
  					<th>Jumlah</th>
  					<th>Kondisi</th>
  					<th>Keterangan</th>
  					<th>Aksi</th>
  				</tr>
  				<?php
  				foreach ($data_asset as $tampilkan) {
  					echo "<tr>";
  					echo "<td>$tampilkan->id_asset</td>";
  					echo "<td>$tampilkan->nama_barang</td>";
  					echo "<td>$tampilkan->jumlah</td>";
  					echo "<td>$tampilkan->kondisi</td>";
  					echo "<td>$tampilkan->keterangan</td>";
  					echo "<td><a href='EditDataAsset/$tampilkan->id_asset'><button class='btn btn-primary btn-xs'>Edit</button></a><button class='btn btn-danger btn-xs' type='button' onClick='hapus($tampilkan->id_asset)'>Hapus</button></td>";
  					echo "</tr>";
  				}
  				?>
  			</table>
  		</div>
  	</div>
  	<div class="modal modal-danger fade" id="modal-danger">
  		<div class="modal-dialog">
  			<div class="modal-content">
  				<div class="modal-header">
  					<button type="button button" class="close" data-dismiss="modal" aria-label="close">
  						<span aria-hidden="true"></span></button>
  						<h4 class="modal-tittle">Peringatan</h4>
  					</div>
  					<form action="<?php echo base_url() ?>index.php/Welcome/hapusDataAsset" method="POST" id="fromHapus">
  						<input type="hidden" name="id_asset" value="">
  						<div class="modal-body">
  							<p>Apakah Anda Ingin Menghapus Data Ini?</p>
  						</div>
  						<div class="modal-footer">
  							<button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Batal</button>
  							<button type="submit" class="btn btn-outline">Ya</button>
  						</div>
  					</form>
  				</div>
  			</div>
  		</div>
  		<script type="text/javascript">
  			function hapus(id) {
  				$('#fromHapus')[0].reset();
  				$.ajax({
  					url :"<?php echo base_url('index.php/Welcome/getIdAsset') ?>/"+id,
  					type :"GET",
  					dataType :"JSON",
  					success:function(data) {
  						$('[name="id_asset"]').val(data.id_asset);
  						$('#modal-danger').modal('show');
  					},
            error: function(jqXHR, textStatus, errorThrown){
                alert('Gagal Ambil Data Ajax');
            }

  				});
  			}
  		</script>
  		<script src="<?php echo base_url() ?>asset/bower_components/jquery/dist/jquery.min.js"></script>
  		<!-- Bootstrap 3.3.7 -->
  		<script src="<?php echo base_url() ?>asset/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  		<!-- FastClick -->
  		<script src="<?php echo base_url() ?>asset/bower_components/fastclick/lib/fastclick.js"></script>
  		<!-- AdminLTE App -->
  		<script src="<?php echo base_url() ?>asset/dist/js/adminlte.min.js"></script>
  		<!-- Sparkline -->
  		<script src="<?php echo base_url() ?>asset/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
  		<!-- jvectormap  -->
  		<script src="<?php echo base_url() ?>asset/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  		<script src="<?php echo base_url() ?>asset/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  		<!-- SlimScroll -->
  		<script src="<?php echo base_url() ?>asset/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  		<!-- ChartJS -->
  		<script src="<?php echo base_url() ?>asset/bower_components/chart.js/Chart.js"></script>
  		<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  		<script src="<?php echo base_url() ?>asset/dist/js/pages/dashboard2.js"></script>
  		<!-- AdminLTE for demo purposes -->
  		<script src="<?php echo base_url() ?>asset/dist/js/demo.js"></script>
  		<!-- Modals -->
  		<script src="<?php echo base_url() ?>asset/bower_components/bootstrap/dist/jsbootstrap.min.6:19369"></script>