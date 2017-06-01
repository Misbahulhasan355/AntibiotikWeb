<div id="page-wrapper">
        <div class="graphs">
	   <div class="content_bottom">
     <div class="col-md-12 span_3">
          <div class="bs-example1" data-example-id="contextual-table">
           <form class="form-horizontal" action="<?php echo base_url(). 'User/tambah_aksidokterku'; ?>" method="post">
              <div class="form-group">
                  <label for="focusedinput" class="col-sm-12 control-label"><center><h1>Dokterku</h1></center></label>                
                </div>
                <div class="form-group">
                  <label for="focusedinput" class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control1" name="nm_dok">
                  </div>                  
                </div>
                <div class="form-group">
                  <label for="focusedinput" class="col-sm-2 control-label">Spesialis</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control1" name="spesialis">
                  </div>                  
                </div>
                <div class="form-group">
                  <label for="focusedinput" class="col-sm-2 control-label">Telepon</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control1" name="telp_dok">
                  </div>                  
                </div>
                <div class="form-group">
                  <label for="focusedinput" class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-8">
                    <textarea name="almt_dok" class="col-sm-12" cols="40" rows="5"></textarea>
                  </div>                  
                </div>
                <div class="form-group">
                      <label for="exampleInputFile" class="col-sm-2 control-label">File input</label><br/>
                        <div class="col-sm-8">
                          <input type="file" name="gambar_dok">
                      <p class="help-block">file max 10MB</p>
      </div>                
      <form>
      <div style="text-align: left;">
      <div class="col-sm-8 col-sm-offset-2">
        <button class="btn-success btn" value="tambahdokterku">Submit</button>
      </div>
   </div>
    </form></div>
      
              </form>
              <br/>
              <br/>
            <table class="table">
              <thead>
                <tr>
                  <th>Nomor</th>
                  <th>Nama</th>
                  <th>Spesialist</th>
                  <th>Telepon</th>
                  <th>Alamat</th>
                  <th>Gambar</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($dokterku as $u) {
                  ?>
                 <tr>
                  <th scope="row"><?php echo $no++ ?></th>
                  <td><?php echo $u->nm_dok ?></td>
                  <td><?php echo $u->spesialis ?></td>
                  <td><?php echo $u->telp_dok ?></td>
                  <td><?php echo $u->almt_dok ?></td>
                  <td><?php echo $u->gambar_dok ?></td>
                  <td><?php echo anchor('User/edit_dokterku_user/'.$u->id_dok,'<button type="button" class="btn btn-danger"><i class="fa fa-pencil"></i></button>'); ?>
  &nbsp;</td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
           </div>

       </div>
        <div class="clearfix"> </div>
        </div>
        