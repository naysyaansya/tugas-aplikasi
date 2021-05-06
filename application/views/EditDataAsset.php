<div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Form Tambah Data</h3>
            </div>
            <div class="box-body">
              <form action="<?php echo base_url() ?>index.php/Welcome/UpdateAsset" method="POST">
                <?php 
                foreach ($getIdDataAsset as $tampilkan) { ?>
                  <input type="hidden" name="id_asset" value="<?php echo $tampilkan->id_asset ?>">
                
               <input class="form-control input-lg" type="text" placeholder="nama barang" name="nama_barang" value="<?php echo $tampilkan->nama_barang ?>">
              <br>
               <input class="form-control input-lg" type="text" placeholder="jumlah" name="jumlah" value="<?php echo $tampilkan->jumlah ?>">
              <br>
              <input class="form-control input-lg" type="text" placeholder="kondisi" name="kondisi" value="<?php echo $tampilkan->kondisi ?>">
              <br>
              <input class="form-control input-lg" type="text" placeholder="keterangan" name="keterangan" value="<?php echo $tampilkan->keterangan ?>">
              <?php } 

               ?>
             <button class="btn btn-primary" type="submit"> Simpan </button>
           </form>
            </div>
            <!-- /.box-body -->
          </div>