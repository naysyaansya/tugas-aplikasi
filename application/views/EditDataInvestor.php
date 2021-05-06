<div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Form Tambah Data</h3>
            </div>
            <div class="box-body">
              <form action="<?php echo base_url() ?>index.php/Welcome/UpdateInvestor" method="POST">
                <?php 
                foreach ($getIdDataInvestor as $tampilkan) { ?>
                  <input type="hidden" name="id_investor" value="<?php echo $tampilkan->id_investor ?>">
                
               <input class="form-control input-lg" type="text" placeholder="nama" name="nama" value="<?php echo $tampilkan->nama ?>">
              <br>
               <input class="form-control input-lg" type="text" placeholder="alamat" name="alamat" value="<?php echo $tampilkan->alamat ?>">
              <br>
              <input class="form-control input-lg" type="text" placeholder="keterangan" name="keterangan" value="<?php echo $tampilkan->keterangan ?>">
              <?php } 

               ?>
             <button class="btn btn-primary" type="submit"> Simpan </button>
           </form>
            </div>
            <!-- /.box-body -->
          </div>