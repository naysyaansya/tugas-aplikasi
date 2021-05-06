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
	<h2> Klik dibawah sini untuk menambah data user </h2>
	<a href="<?php echo base_url() ?>index.php/Welcome/TambahDataUser"><button class="btn btn-primary btn-lg"> Tambah Data </button></a>
<br>
<br>
<div class="box-body no-padding">
	<table class="table table-condensed">
		<tr>
			<th>ID User</th>
			<th>Nama</th>
			<th>Username</th>
			<th>Password</th>
		</tr>
		<?php
		foreach ($data_user as $tampilkan) {
			echo "<tr>";
			echo "<td>$tampilkan->id_user</td>";
			echo "<td>$tampilkan->nama</td>";
			echo "<td>$tampilkan->username</td>";
			echo "<td>$tampilkan->password</td>";
			echo "<td><a href='EditDataUser/$tampilkan->id_user'><button class='btn btn-primary btn-xs'>Edit</button></a><button class='btn-danger btn-xs' type='button' onClick='hapus($tampilkan->id_user)'>Hapus</button></td>";
			echo "</tr>";
		}
		?>
	</table>
</div>

<div class="modal modal-danger fade" id="modal-danger">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Danger Modal</h4>
                <form action="<?php echo base_url() ?>index.php/Welcome/hapusDataUser" method="POST" id="fromHapus">
                	<input type="hidden" name="id_user" value="">
                	<div class="modal-body">
                		<p>Apakah Anda Ingin Menghapus Data?</p>
                	</div>
                	<div class= "modal-footer"> 
                		<button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Tutup</button>
                		<button type="submit" class="btn btn-outline">Iya</button>
                	</div>
                </form>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>


<script type="text/javascript">
	function hapus(id) {
		$('#fromHapus')[0].reset();
		$.ajax({
			url:"<?php echo base_url('index.php/Welcome/getIdUser') ?>/"+id,
			type: "GET",
			dataType: "JSON",
			success: function(data){
				$('[name="id_user"]').val(data.id_user);
				$('#modal-danger').modal('show');
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