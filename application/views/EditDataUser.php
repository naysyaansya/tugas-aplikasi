<div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Form Tambah Data</h3>
            </div>
            <div class="box-body">
              <form action="<?php echo base_url() ?>index.php/Welcome/UpdateUser" method="POST">
                <?php 
                foreach ($getIdDataUser as $tampilkan) { ?>
                  <input type="hidden" name="id_user" value="<?php echo $tampilkan->id_user ?>">
                
               <input class="form-control input-lg" type="text" placeholder="nama" name="nama" value="<?php echo $tampilkan->nama ?>">
              <br>
               <input class="form-control input-lg" type="text" placeholder="username" name="username" value="<?php echo $tampilkan->username ?>">
              <br>
              <input class="form-control input-lg" type="text" placeholder="password" name="password" value="<?php echo $tampilkan->password ?>">
              <br>
              <?php } 

               ?>
             <button class="btn btn-primary" type="submit"> Simpan </button>
           </form>
            </div>
            <!-- /.box-body -->
          </div>