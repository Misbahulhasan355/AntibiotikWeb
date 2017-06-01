<div id="page-wrapper">
        <div class="graphs">
     <div class="content_bottom">
     <div class="col-md-12 span_3">
          <div class="bs-example1" data-example-id="contextual-table">
            <?php foreach($tips as $u){ ?>
           <form class="form-horizontal" action="<?php echo base_url(). 'User/update_tips_user'; ?>" method="post">
              <div class="form-group">
                  <label for="focusedinput" class="col-sm-12 control-label"><center><h1>Tips</h1></center></label>                
                </div>
                <div class="form-group">
                  <label for="focusedinput" class="col-sm-2 control-label">Judul</label>
                  <div class="col-sm-8">
                    <input type="hidden" name="id_tips" value="<?php echo $u->id_tips ?>">
                    <input type="text" class="form-control1" name="judul" value="<?php echo $u->judul ?>">
                  </div>                  
                </div>
                <div class="form-group">
                  <label for="focusedinput" class="col-sm-2 control-label">Deskripsi</label>
                  <div class="col-sm-8">
                    <textarea name="deskripsi" class="col-sm-12" cols="40" rows="5"><?php echo $u->deskripsi ?></textarea>
                  </div>                  
                </div>
                <div class="form-group">
                  <label for="focusedinput" class="col-sm-2 control-label">Waktu</label>
                  <div class="col-sm-8">
                    <input type="date" class="form-control1" name="waktu" value=""><br/><?php echo $u->waktu ?>
                  </div>                  
                </div>
                <div class="form-group">
                  <label for="focusedinput" class="col-sm-2 control-label">Link</label>
                  <div class="col-sm-8">
                     <input type="text" class="form-control1" name="link" value="<?php echo $u->link ?>">
                  </div>                  
                </div>
                <div class="form-group">
                      <label for="exampleInputFile" class="col-sm-2 control-label">File input</label><br/>
                        <div class="col-sm-8">
                          <input type="file" name="gambar" value=""><?php echo $u->gambar ?>
                      <p class="help-block">file max 10MB</p>
      </div>                
      <form>
      <div style="text-align: left;">
      <div class="col-sm-8 col-sm-offset-2">
        <button class="btn-success btn" value="update_tips">Submit</button>
         <a href="<?php echo base_url('User/tips_user');?>"><button class="btn-inverse btn">Cancel</button></a>
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