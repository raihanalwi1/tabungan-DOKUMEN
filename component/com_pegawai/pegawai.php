<?php 
include '../../config/conn.php';
$aksi = "component/com_pegawai/pegawai_aksi.php";
if ($_GET['aksi']==''){?>
        <div class="col" role="main">
          <div class="">
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title" style="text-transform: capitalize;">
                    <h2 >Data <?php echo $_GET['module'];?> <small></small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <a  class="btn btn-success btn-sm" data-toggle="modal" data-target="#modalAdd"><i class="glyphicon glyphicon-plus"></i>Tambah</a>
                  <div class="divider-dashed"></div>
                  <div class="x_content">
                    
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th width="50">No</th>
                          <th>ID Pegawai</th>
                          <th>Nama</th>
                          <th>Alamat</th>
                          <th>Level</th>
                          <th width="50">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php 
                          $no = 0;
                          $query=mysqli_query($conn,"SELECT * FROM pegawai ORDER BY id_pegawai asc");
                          while($row=mysqli_fetch_array($query)){
                          $no++;
                      ?>
                        <tr>
                          <td><?php echo $no;?></td>
                          <td><?php echo $row['id_pegawai'];?></td>
                          <td><?php echo $row['nama'];?></td>
                          <td><?php echo $row['alamat'];?></td>
                          <td><?php echo $row['level'];?></td>
                          <td><a  class='open_modal btn  btn-default btn-xs' href="?module=<?php echo $_GET['module'];?>&aksi=edit&id=<?php echo encrypt($row[id_pegawai]);?>"><i class="glyphicon glyphicon-edit"></i> Edit</a> </td>
                        </tr>
                      <?php } ?>  
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div><br>

<!-- Modal -->
<div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Tambah Data</h4>
      </div>
      <div class="modal-body">
      <!-- start form for validation -->
      <form action="?module=<?php echo $_GET['module'];?>&aksi=simpan"  enctype="multipart/form-data" method="POST">
        <?php
          $query = "SELECT max(id_pegawai) as maxID FROM pegawai ";
          $hasil = mysqli_query($conn,$query);
          $data = @mysqli_fetch_array($hasil);
          $idMax = $data['maxID'];

          $noUrut = (int) substr($idMax, 1, 9);
          $noUrut++;
          $char = "P";
          $newID = $char.sprintf("%04s", $noUrut); 
        ?>
                      <label for="id">ID Pegawai * :</label>
                      <input type="text"  class="form-control" disabled value="<?php echo $newID;?>"  />
                      <input type="hidden"  class="form-control" name="id" value="<?php echo $newID;?>"  />

                      <label for="nama">Nama * :</label>
                      <input type="text"  class="form-control" name="nama" autocomplete="off" required />

                      <label for="alamat">Alamat * :</label>
                      <textarea class="form-control" name="alamat" autocomplete="off" requerid  > </textarea>

                      <label for="telephone">Telephone:</label>
                      <input type="text"  class="form-control" name="telephone" autocomplete="off"   />   

                      <label for="username">Username * :</label>
                      <input type="text"  class="form-control" name="username" autocomplete="off"  required />

                      <label for="password">Password * :</label>
                      <input type="password"  class="form-control" name="password" autocomplete="off"  required />

                      <label for="heard">Level *:</label>
                        <select id="heard" class="form-control" required name="level">
                            <option value="">- Pilih Level -</option>
                            <option value="1">User</option>
                            <option value="2">Admin</option>
                        </select>

                      <label>Status *:</label>
                      <select id="heard" class="form-control" required autocomplete="off"  name="status">
                            <option value="">- Pilih Status -</option>
                            <option value="Y">Aktif</option>
                            <option value="T">Tidak Aktif</option>
                      </select>
                      <br>
                      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-success btn-sm">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>


<?php  } elseif ($_GET['aksi'] == 'edit') {

  $idd= $_GET[id];
  $id = decrypt($idd);
  $query=mysqli_query($conn,"SELECT * FROM pegawai WHERE id_pegawai='$id'");
  $r=mysqli_fetch_array($query);

?>

        <div class="col" role="main">
          <div class="">
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title" style="text-transform: capitalize;">
                    <h2 >Edit Data <?php echo $_GET['module'];?></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <form action="?module=pegawai&aksi=simpan_edit"  enctype="multipart/form-data" method="POST">
                    <div class="row">

                      <div class="col-md-6">
                      <label for="id">ID Pegawai :</label>
                      <input type="text"  class="form-control" disabled value="<?php echo $r['id_pegawai'];?>"  />
                      <input type="hidden"  class="form-control" name="id" value="<?php echo $r['id_pegawai'];?>"  />

                      <label for="nama">Nama :</label>
                      <input type="text"  class="form-control" name="nama"  value="<?php echo $r['nama'];?>" />

                      <label for="alamat">Alamat :</label>
                      <textarea class="form-control" name="alamat" requerid  ><?php echo $r['alamat'];?> </textarea>

                      <label for="telephone">Telephone :</label>
                      <input type="text"  class="form-control" name="telephone" value="<?php echo $r['no_telp'];?>"  />   
                      </div>

                      <div class="col-md-6">
                      <label for="username">Username :</label>
                      <input type="text"  class="form-control"  value="<?php echo $r['username'];?>" disabled />
                      <input type="hidden"  class="form-control" name="username" value="<?php echo $r['username'];?>" />

                      <label for="password">Password :</label>
                      <input type="password"  class="form-control"  value="<?php echo $r['password'];?>" disabled  />

                      <label for="password">Ganti Password :</label>
                      <input type="password"  class="form-control" name="password"    />
                      <p>*) Kosongkan apabila password tidak diganti</p>

                      <label for="heard">Level :</label>
                        <select id="heard" class="form-control" required name="level">
                            <?php if ($r[level] == 'user'){?>
                            <option value='user' selected >User</option>
                            <option value='admin' >Admin</option>
                            <?php }else{?>
                            <option value='user'  >User</option>
                            <option value='admin' selected>Admin</option>
                            <?php }?>
                        </select>

                      <label>Status :</label>
                      <select id="heard" class="form-control" required name="status">
                            <?php if ($r[status] == 'Y'){?>
                            <option value=Y selected >Aktif</option>
                            <option value=N >Tidak Aktif</option>
                             <?php }else{?>
                            <option value=Y  >Aktif</option>
                            <option value=N selected >Tidak Aktif</option>
                             <?php }?>
                      </select>
                      </div>

                    </div>
                    <div class="ln_solid"></div>
                      <div class="form-group">
                        <button type="button" class="btn btn-default btn-sm" onclick=self.history.back()>Batal</button>
                        <button type="submit" class="btn btn-success btn-sm">Simpan</button><br>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    
<?php } elseif ($_GET['aksi'] == 'simpan_edit'){
  $module = $_GET['module'];
  $password   = md5($_POST[password]);
  if (empty($_POST['password'])) {
      mysqli_query($conn,"UPDATE pegawai SET nama = '$_POST[nama]',
                                    alamat = '$_POST[alamat]',
                                    no_telp = '$_POST[telephone]',
                                    username = '$_POST[username]',
                                    level = '$_POST[level]',
                                    status = '$_POST[status]' 
                                    WHERE id_pegawai = '$_POST[id]'");

    }else{
      mysqli_query($conn,"UPDATE pegawai SET nama = '$_POST[nama]',
                                    alamat = '$_POST[alamat]',
                                    no_telp = '$_POST[telephone]',
                                    username = '$_POST[username]',
                                    password = '$password',
                                    level = '$_POST[level]',
                                    status = '$_POST[status]' 
                                    WHERE id_pegawai = '$_POST[id]'");  
    }  
      echo "<script language='javascript'>document.location='?module=".$module."';</script>";

} elseif ($_GET['aksi'] == 'simpan'){
    $module = $_GET['module']; 
    $password = md5($_POST[password]);  
    mysqli_query($conn,"INSERT INTO pegawai(id_pegawai,
                                  nama,
                                  alamat,
                                  no_telp,
                                  username,
                                  password,
                                  level,
                                  status) VALUES('$_POST[id]',
                                                 '$_POST[nama]',
                                                 '$_POST[alamat]',
                                                 '$_POST[telephone]',
                                                 '$_POST[username]',
                                                 '$password',
                                                 '$_POST[level]',
                                                 '$_POST[status]')");

    echo "<script language='javascript'>document.location='?module=".$module."';</script>";

} elseif ($_GET['aksi'] == 'hapus'){
    $module = $_GET['module'];  
    $idd= $_GET[id];
    $id = decrypt($idd);
    $query=mysqli_query($conn,"Delete FROM pegawai WHERE id_pegawai='$id'");
    echo "<script language='javascript'>document.location='?module=".$module."';</script>";
}
?>

<div class="modal fade" id="modal_delete">
  <div class="modal-dialog">
    <div class="modal-content" style="margin-top:100px;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" style="text-align:center;">Apakah anda yakin menghapus data ini ?</h4>
      </div>                
      <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
        <a href="#" class="btn btn-danger btn-sm" id="delete_link">Hapus</a>
        <button type="button" class="btn btn-success btn-sm" data-dismiss="modal">Batal</button>
      </div>
    </div>
  </div>
</div>


