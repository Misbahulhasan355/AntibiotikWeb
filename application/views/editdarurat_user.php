<div id="page-wrapper">
        <div class="graphs">
     <div class="content_bottom">
     <div class="col-md-12 span_3">
          <div class="bs-example1" data-example-id="contextual-table">
            <?php foreach($darurat as $u){ ?>
           <form class="form-horizontal" action="<?php echo base_url(). 'User/update_darurat'; ?>" method="post">
              <div class="form-group">
                  <label for="focusedinput" class="col-sm-12 control-label"><center><h1>Darurat</h1></center></label>                
                </div>
                <div class="form-group">
                  <label for="focusedinput" class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-8">
                    <input type="hidden" name="id_dar" value="<?php echo $u->id_dar ?>">
                    <input type="text" class="form-control1" name="nm_dar" value="<?php echo $u->nm_dar ?>">
                  </div>                  
                </div>
                <div class="form-group">
                  <label for="focusedinput" class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-8">
                     <textarea name="almt_dar" class="col-sm-12" cols="40" rows="5"><?php echo $u->almt_dar ?></textarea>
                  </div>                  
                </div>
                <div class="form-group">
                  <label for="focusedinput" class="col-sm-2 control-label">Telepon</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control1" name="telp_dar" value="<?php echo $u->telp_dar ?>">
                  </div>                  
                </div>
                <div class="form-group">
                      <label for="focusedinput" class="col-sm-2 control-label">Jam Kerja</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control1" name="jam_kerja" value="<?php echo $u->jam_kerja ?>">
                  </div>
                  <br/>
                  <br/>   
      <form>
      <div style="text-align: left;">
      <div class="col-sm-8 col-sm-offset-2">
        <button class="btn-success btn" value="update_darurat">Submit</button>
         <a href="<?php echo base_url('User/darurat_user');?>"><button class="btn-inverse btn">Cancel</button></a>
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