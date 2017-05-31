<div id="page-wrapper">
        <div class="graphs">
	   <div class="content_bottom">
     <div class="col-md-12 span_3">
          <div class="bs-example1" data-example-id="contextual-table">
            <label for="focusedinput" class="col-sm-12 control-label"><center><h1>Dokterku</h1></center></label>
            <center><a href="<?php echo base_url('Admin/json_dokterku'); ?>" style="color:black;"><button type="button" class="btn btn-danger"><i class="fa fa-file nav_icon"></i>Json file</a></button></center> 
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
                  <td><?php echo anchor('Admin/hapus_dokterku/'.$u->id_dok,'<button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>'); ?>&nbsp;<?php echo anchor('Admin/edit_dokterku/'.$u->id_dok,'<button type="button" class="btn btn-danger"><i class="fa fa-pencil"></i></button>'); ?>
  &nbsp;</td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
            <br/>
            <br/>
            <label for="focusedinput" class="col-sm-12 control-label"><center><h1>Tips</h1></center></label>
            <center><a href="<?php echo base_url('Admin/json_tips'); ?>" style="color:black;"><button type="button" class="btn btn-danger"><i class="fa fa-file nav_icon"></i>Json file</a></button></center>
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
                  <td><?php echo anchor('Admin/hapus_tips/'.$u->id_tips,'<button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>'); ?>&nbsp;<?php echo anchor('Admin/edit_tips/'.$u->id_tips,'<button type="button" class="btn btn-danger"><i class="fa fa-pencil"></i></button>'); ?>
  &nbsp;</td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
            <br/>
            <br/>
            <label for="focusedinput" class="col-sm-12 control-label"><center><h1>Quote</h1></center></label>
            <center><a href="<?php echo base_url('Admin/json_quote'); ?>" style="color:black;"><button type="button" class="btn btn-danger"><i class="fa fa-file nav_icon"></i>Json file</a></button></center> 
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
            <br/>
            <br/>
            <label for="focusedinput" class="col-sm-12 control-label"><center><h1>Obat</h1></center></label>
            <center><a href="<?php echo base_url('Admin/json_obat'); ?>" style="color:black;"><button type="button" class="btn btn-danger"><i class="fa fa-file nav_icon"></i>Json file</a></button></center> 
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
            <br/>
            <br/>
            <label for="focusedinput" class="col-sm-12 control-label"><center><h1>Darurat</h1></center></label>
            <center><a href="<?php echo base_url('Admin/json_darurat'); ?>" style="color:black;"><button type="button" class="btn btn-danger"><i class="fa fa-file nav_icon"></i>Json file</a></button></center> 
            <br/>
            <br/>
            <table class="table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Telepon</th>
                  <th>Jam kerja</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($darurat as $u){
                  ?>
                <tr>
                  <th scope="row"><?php echo $no++ ?></th>
                  <td><?php echo $u->nm_dar ?></td>
                  <td><?php echo $u->almt_dar ?></td>
                  <td><?php echo $u->telp_dar ?></td>
                  <td><?php echo $u->jam_kerja ?></td>
                 <td><?php echo anchor('Admin/hapus_darurat/'.$u->id_dar,'<button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>'); ?>&nbsp;<?php echo anchor('Admin/edit_darurat/'.$u->id_dar,'<button type="button" class="btn btn-danger"><i class="fa fa-pencil"></i></button>'); ?>
  &nbsp;</td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
           </div>

       </div>
        <div class="clearfix"> </div>
        </div>
        