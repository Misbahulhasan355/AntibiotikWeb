<div id="page-wrapper">
        <div class="graphs">
     <div class="content_bottom">
     <div class="col-md-12 span_3">
          <div class="bs-example1" data-example-id="contextual-table">
            <form class="form-horizontal" action="<?php echo base_url(). 'User/tambah_aksidarurat'; ?>" method="post">
              <div class="form-group">
                  <label for="focusedinput" class="col-sm-12 control-label"><center><h1>Darurat</h1></center></label>                
                </div>
                <div class="form-group">
                  <label for="focusedinput" class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control1" name="nm_dar">
                  </div>                  
                </div>
                <div class="form-group">
                  <label for="focusedinput" class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-8">
                    <textarea name="almt_dar" class="col-sm-12" cols="40" rows="5"></textarea>
                  </div>                  
                </div>
                <div class="form-group">
                  <label for="focusedinput" class="col-sm-2 control-label">Telepon</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control1" name="telp_dar">
                  </div>                  
                </div>
                
                <div class="form-group">
                      <label for="focusedinput" class="col-sm-2 control-label">Jam kerja</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control1" name="jam_kerja">
                  </div>
                  <br/>
                  <br/> 
      <form>
      <div style="text-align: left;">
      <div class="col-sm-8 col-sm-offset-2">
        <button class="btn-success btn" value="tambahdarurat">Submit</button>
      </div>
   </div>
    </form></div>
      
              </form>
            <table class="table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Telepon</th>
                  <th>Jam kerja</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($darurat as $u){
                  ?>
                <tr>
                  <th scope="row"><?php echo $no++ ?></th>
                  <td><?php echo $u->nm_dar ?></td>
                  <td><?php echo $u->almt_dar ?></td>
                  <td><?php echo $u->telp_dar ?></td>
                  <td><?php echo $u->jam_kerja ?></td>
                 <td><?php echo anchor('User/edit_darurat/'.$u->id_dar,'<button type="button" class="btn btn-danger"><i class="fa fa-pencil"></i></button>'); ?>
  &nbsp;</td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
           </div>

       </div>
        <div class="clearfix"> </div>
        </div>