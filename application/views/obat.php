<div id="page-wrapper">
        <div class="graphs">
	   <div class="content_bottom">
     <div class="col-md-12 span_3">
          <div class="bs-example1" data-example-id="contextual-table">
            <form class="form-horizontal" action="<?php echo base_url(). 'Admin/tambah_aksiobat'; ?>" method="post">
              <div class="form-group">
                  <label for="focusedinput" class="col-sm-12 control-label"><center><h1>Obat</h1></center></label>                
                </div>
                <div class="form-group">
                  <label for="focusedinput" class="col-sm-2 control-label">Nama Obat</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control1" name="nm_obat">
                  </div>                  
                </div>
                <div class="form-group">
                  <label for="focusedinput" class="col-sm-2 control-label">Kegunaan</label>
                  <div class="col-sm-8">
                    <textarea name="kegunaan" class="col-sm-12" cols="40" rows="5"></textarea>
                  </div>                  
                </div>
                <div class="form-group">
                      <label for="exampleInputFile" class="col-sm-2 control-label">File input</label><br/>
                        <div class="col-sm-8">
                          <input type="file" name="gambar_obat">
                      <p class="help-block">file max 10MB</p>
      </div>                
      <form>
      <div style="text-align: left;">
      <div class="col-sm-8 col-sm-offset-2">
        <button class="btn-success btn" value="tambahobat">Submit</button>
        <button class="btn-inverse btn">Cancel</button>
        <button class="btn-inverse btn">Reset</button>
      </div>
   </div>
    </form></div>
      
              </form>
              <br/>
              <br/>
            <table class="table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Kegunaan</th>
                  <th>Gambar</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($lemari as $u) { 
                  ?>
                  <tr>
                  <th scope="row"><?php echo $no++ ?></th>
                  <td><?php echo $u->nm_obat ?></td>
                  <td><?php echo $u->kegunaan ?></td>
                  <td><?php echo $u->gambar_obat ?></td>
                  <td><?php echo anchor('Admin/hapus_obat/'.$u->id_obat,'<button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>'); ?>&nbsp;<?php echo anchor('Admin/edit_obat/'.$u->id_obat,'<button type="button" class="btn btn-danger"><i class="fa fa-pencil"></i></button>'); ?>
  &nbsp;</td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
           </div>

       </div>
        <div class="clearfix"> </div>
        </div>