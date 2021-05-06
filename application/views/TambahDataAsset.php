<div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Form Tambah Data</h3>
            </div>
            <div class="box-body">
              <form action="<?php echo base_url() ?>index.php/Welcome/SimpanAsset" method="post">
              <input class="form-control input-lg" type="text" placeholder="id asset" name="id_asset">
              <br>
               <input class="form-control input-lg" type="text" placeholder="nama barang" name="nama_barang">
              <br>
               <input class="form-control input-lg" type="text" placeholder="jumlah" name="jumlah">
              <br>
               <input class="form-control input-lg" type="text" placeholder="kondisi" name="kondisi">
              <br>
               <input class="form-control input-lg" type="text" placeholder="keterangan" name="keterangan">
              <br>
             <button class="btn btn-primary" type="submit"> Simpan </button>
           </form>
            </div>
            <!-- /.box-body -->
          </div>