<div id="page-wrapper">
        <div class="graphs">
     <div class="content_bottom">
     <div class="col-md-12 span_3">
          <div class="bs-example1" data-example-id="contextual-table">
            <?php foreach($lemari as $u){ ?>
           <form class="form-horizontal" action="<?php echo base_url(). 'Admin/update_obat'; ?>" method="post">
              <div class="form-group">
                  <label for="focusedinput" class="col-sm-12 control-label"><center><h1>Obat</h1></center></label>                
                </div>
                <div class="form-group">
                  <label for="focusedinput" class="col-sm-2 control-label">Nama Obat</label>
                  <div class="col-sm-8">
                    <input type="hidden" name="id_obat" value="<?php echo $u->id_obat ?>">
                    <input type="text" class="form-control1" name="nm_obat" value="<?php echo $u->nm_obat ?>">
                  </div>                  
                </div>
                <div class="form-group">
                  <label for="focusedinput" class="col-sm-2 control-label">Kegunaan</label>
                  <div class="col-sm-8">
                     <textarea name="kegunaan" class="col-sm-12" cols="40" rows="5"><?php echo $u->kegunaan ?></textarea>
                  </div>                  
                </div>
                <div class="form-group">
                      <label for="exampleInputFile" class="col-sm-2 control-label">File input</label><br/>
                        <div class="col-sm-8">
                          <input type="file" name="gambar_obat" value=""><?php echo $u->gambar_obat ?>
                      <p class="help-block">file max 10MB</p>
      </div>                
      <form>
      <div style="text-align: left;">
      <div class="col-sm-8 col-sm-offset-2">
        <button class="btn-success btn" value="update_obat">Submit</button>
        <button class="btn-inverse btn">Cancel</button>
        <button class="btn-inverse btn">Reset</button>
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