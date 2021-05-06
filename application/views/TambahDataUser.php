<div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Form Tambah Data</h3>
            </div>
            <div class="box-body">
              <form action="<?php echo base_url() ?>index.php/Welcome/SimpanUser" method="post">
               <input class="form-control input-lg" type="text" placeholder="nama" name="nama">
              <br>
               <input class="form-control input-lg" type="text" placeholder="username" name="username">
              <br>
              <input class="form-control input-lg" type="text" placeholder="password" name="password">
              <br>
             <button class="btn btn-primary" type="submit"> Simpan </button>
           </form>
            </div>
            <!-- /.box-body -->
          </div>