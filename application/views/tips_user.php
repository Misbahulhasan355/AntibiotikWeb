<div id="page-wrapper">
        <div class="graphs">
     <div class="content_bottom">
     <div class="col-md-12 span_3">
          <div class="bs-example1" data-example-id="contextual-table">
             <form class="form-horizontal" action="<?php echo base_url(). 'User/tambah_aksitips'; ?>" method="post">
              <div class="form-group">
                  <label for="focusedinput" class="col-sm-12 control-label"><center><h1>Tips</h1></center></label>                
                </div>
                <div class="form-group">
                  <label for="focusedinput" class="col-sm-2 control-label">Judul</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control1" name="judul">
                  </div>                  
                </div>
                <div class="form-group">
                  <label for="focusedinput" class="col-sm-2 control-label">Deskripsi</label>
                  <div class="col-sm-8">
                     <textarea name="deskripsi" class="col-sm-12" cols="40" rows="5"></textarea>
                  </div>                  
                </div>
                <div class="form-group">
                  <label for="focusedinput" class="col-sm-2 control-label">Waktu</label>
                  <div class="col-sm-8">
                    <input type="date" class="form-control1" name="waktu">
                  </div>                  
                </div>
                <div class="form-group">
                  <label for="focusedinput" class="col-sm-2 control-label">Link</label>
                  <div class="col-sm-8">
                   <input type="text" class="form-control1" name="link">
                  </div>                  
                </div>
                <div class="form-group">
                      <label for="exampleInputFile" class="col-sm-2 control-label">File input</label><br/>
                        <div class="col-sm-8">
                          <input type="file" name="gambar">
                      <p class="help-block">file max 10MB</p>
      </div>                
      <form>
      <div style="text-align: left;">
      <div class="col-sm-8 col-sm-offset-2">
        <button class="btn-success btn" value="tambahtips">Submit</button>
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
                  <th>Judul</th>
                  <th>Deskripsi</th>
                  <th>Gambar</th>
                  <th>Waktu</th>
                  <th>link</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($tips as $u) {
                  ?>
                <tr>
                  <th scope="row"><?php echo $no++ ?></th>
                  <td><?php echo $u->judul ?></td>
                  <td><?php echo $u->deskripsi ?></td>
                  <td><?php echo $u->gambar ?></td>
                  <td><?php echo $u->waktu ?></td>
                  <td><?php echo $u->link ?></td>
                  <td><?php echo anchor('User/edit_tips/'.$u->id_tips,'<button type="button" class="btn btn-danger"><i class="fa fa-pencil"></i></button>'); ?>
  &nbsp;</td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
           </div>

       </div>
        <div class="clearfix"> </div>
        </div>