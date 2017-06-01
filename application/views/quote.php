<div id="page-wrapper">
        <div class="graphs">
	   <div class="content_bottom">
     <div class="col-md-12 span_3">
          <div class="bs-example1" data-example-id="contextual-table">
            <form class="form-horizontal" action="<?php echo base_url(). 'Admin/tambah_aksiquote'; ?>" method="post">
              <div class="form-group">
                  <label for="focusedinput" class="col-sm-12 control-label"><center><h1>Quote</h1></center></label>                
                </div>
                <div class="form-group">
                  <label for="focusedinput" class="col-sm-2 control-label">Isi</label>
                  <div class="col-sm-8">
                    <textarea name="nm_quote" class="col-sm-12" cols="40" rows="5"></textarea>
                  </div>                  
                </div>
                <div class="form-group">
      <form>
      <div style="text-align: left;">
      <div class="col-sm-8 col-sm-offset-2">
        <button class="btn-success btn" value="tambahquote">Submit</button>
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
                  <th>Isi</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($quote as $u) {
                  ?>
                 <tr>
                  <th scope="row"><?php echo $no++ ?></th>
                  <td><?php echo $u->nm_quote ?></td>
                  <td><?php echo anchor('Admin/hapus_quote/'.$u->id_quote,'<button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>'); ?>&nbsp;<?php echo anchor('Admin/edit_quote/'.$u->id_quote,'<button type="button" class="btn btn-danger"><i class="fa fa-pencil"></i></button>'); ?>
  &nbsp;</td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
           </div>

       </div>
        <div class="clearfix"> </div>
        </div>