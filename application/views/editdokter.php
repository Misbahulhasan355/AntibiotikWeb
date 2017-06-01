<div id="page-wrapper">
        <div class="graphs">
     <div class="content_bottom">
     <div class="col-md-12 span_3">
          <div class="bs-example1" data-example-id="contextual-table">
            <?php foreach($dokterku as $u){ ?>
           <form class="form-horizontal" action="<?php echo base_url(). 'Admin/update_dokterku'; ?>" method="post">
              <div class="form-group">
                  <label for="focusedinput" class="col-sm-12 control-label"><center><h1>Dokterku</h1></center></label>                
                </div>
                <div class="form-group">
                  <label for="focusedinput" class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-8">
                    <input type="hidden" name="id_dok" value="<?php echo $u->id_dok ?>">
                    <input type="text" class="form-control1" name="nm_dok" value="<?php echo $u->nm_dok ?>">
                  </div>                  
                </div>
                <div class="form-group">
                  <label for="focusedinput" class="col-sm-2 control-label">Spesialis</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control1" name="spesialis" value="<?php echo $u->spesialis ?>">
                  </div>                  
                </div>
                <div class="form-group">
                  <label for="focusedinput" class="col-sm-2 control-label">Telepon</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control1" name="telp_dok" value="<?php echo $u->telp_dok ?>">
                  </div>                  
                </div>
                <div class="form-group">
                  <label for="focusedinput" class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-8">
                     <textarea name="almt_dok" class="col-sm-12" cols="40" rows="5"><?php echo $u->almt_dok ?></textarea>
                  </div>                  
                </div>
                <div class="form-group">
                      <label for="exampleInputFile" class="col-sm-2 control-label">File input</label><br/>
                        <div class="col-sm-8">
                          <input type="file" name="gambar_dok" value=""><?php echo $u->gambar_dok ?>
                      <p class="help-block">file max 10MB</p>
      </div>                
      <form>
      <div style="text-align: left;">
      <div class="col-sm-8 col-sm-offset-2">
        <button class="btn-success btn" value="update_dokterku">Submit</button>
        <a href="<?php echo base_url('Admin/dokterku');?>"><button class="btn-inverse btn">Cancel</button></a>
      </div>
   </div>
    </form></div>
      
              </form>
              <?php } ?>
              <br/>
              <br/>
           </div>

       </div>
        <div class="clearfix"> </div>
        </div>
      </div>