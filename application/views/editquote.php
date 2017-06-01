<div id="page-wrapper">
        <div class="graphs">
     <div class="content_bottom">
     <div class="col-md-12 span_3">
          <div class="bs-example1" data-example-id="contextual-table">
            <?php foreach($quote as $u){ ?>
           <form class="form-horizontal" action="<?php echo base_url(). 'Admin/update_quote'; ?>" method="post">
              <div class="form-group">
                  <label for="focusedinput" class="col-sm-12 control-label"><center><h1>Quote</h1></center></label>                
                </div>
                <div class="form-group">
                  <label for="focusedinput" class="col-sm-2 control-label">Isi</label>
                  <div class="col-sm-8">
                     <input type="hidden" name="id_quote" value="<?php echo $u->id_quote ?>">
                     <textarea name="nm_quote" class="col-sm-12" cols="40" rows="5"><?php echo $u->nm_quote ?></textarea>
                  </div>                  
                </div>
                <div class="form-group">
      <form>
      <div style="text-align: left;">
      <div class="col-sm-8 col-sm-offset-2">
        <button class="btn-success btn" value="update_quote">Submit</button><a href="<?php echo base_url('Admin/quote');?>"><button class="btn-inverse btn">Cancel</button></a>
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