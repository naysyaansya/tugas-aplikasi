<div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Form Tambah Data</h3>
            </div>
            <div class="box-body">
              <form action="<?php echo base_url() ?>index.php/Welcome/SimpanInvestor" method="post">
              <input class="form-control input-lg" type="text" placeholder="id investor" name="id_investor">
              <br>
               <input class="form-control input-lg" type="text" placeholder="nama" name="nama">
              <br>
               <input class="form-control input-lg" type="text" placeholder="alamat" name="alamat">
              <br>
              <input class="form-control input-lg" type="text" placeholder="keterangan" name="keterangan">
              <br>
             <button class="btn btn-primary" type="submit"> Simpan </button>
           </form>
            </div>
            <!-- /.box-body -->
          </div>