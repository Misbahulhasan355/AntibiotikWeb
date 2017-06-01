<div id="page-wrapper">
        <div class="graphs">
	   <div class="content_bottom">
     <div class="col-md-12 span_3">
          <div class="bs-example1" data-example-id="contextual-table">
            <table class="table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($akun as $u){
                  ?>
                <tr>
                  <th scope="row"><?php echo $no++ ?></th>
                  <td><?php echo $u->username ?></td>
                  <td><?php echo $u->email ?></td>
                 <td><?php echo anchor('Admin/hapus_akun/'.$u->id_akun,'<button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>'); ?>&nbsp;</td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
           </div>

       </div>
        <div class="clearfix"> </div>
        </div>