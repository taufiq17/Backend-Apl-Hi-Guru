<?php
    include 'dbo.php';
    error_reporting(0);
    if($_GET["form-guru"]=="add"){
?>
<div class="row">
  <div class="col-md-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Form Tambah Data Guru</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Settings 1</a>
              </li>
              <li><a href="#">Settings 2</a>
              </li>
            </ul>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <br />
        <form class="form-horizontal form-label-left input_mask" method="POST" action="crud/guru/create.php">
           <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="id_admin" placeholder="ID ADMIN">
            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
          </div>

           <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="id_guru" placeholder="ID GURU">
            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="nik_guru" " placeholder="NIK">
            <span class="fa fa-lock form-control-feedback left" aria-hidden="true"></span>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="nama_guru" placeholder="NAMA">
            <span class="fa fa-users form-control-feedback left" aria-hidden="true"></span>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="alamat_guru" placeholder="ALAMAT">
            <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true"></span>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="pendidikan_guru" placeholder="PENDIDIKAN">
            <span class="fa fa-mortar-board form-control-feedback left" aria-hidden="true"></span>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="jurusan_guru" placeholder="JURUSAN">
            <span class="fa fa-book form-control-feedback left" aria-hidden="true"></span>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="asal_pt" placeholder="ASAL PERGURUAN TINGGI">                     
            <span class="fa fa-institution form-control-feedback left" aria-hidden="true"></span>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="keterangan" placeholder="KETERANGAN">
            <span class="fa fa-tags form-control-feedback left" aria-hidden="true"></span>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="sta_rekom" placeholder="STATUS REKOMENDASI">
            <span class="fa fa-star form-control-feedback left" aria-hidden="true"></span>
          </div>
         <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <center>
              <input type="submit" name="simpan" class="btn btn-success" value="SIMPAN">
              <input type="reset" name="batal" class="btn btn-danger" value="BATAL">
            </center>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>
<?php } ?>

<?php
    if($_GET["form-guru"]=="edit"){
     $id=$_GET["id"];
    $sql = mysqli_query($koneksi, "select * from pos_guru where id_guru='$id' ") 
            or die("Error Query : ".mysqli_error($sql));
    if($row = mysqli_fetch_array($sql)){
?>
<div class="row">
  <div class="col-md-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Form Tambah Data Guru</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Settings 1</a>
              </li>
              <li><a href="#">Settings 2</a>
              </li>
            </ul>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <br />
        <form class="form-horizontal form-label-left input_mask" method="POST" action="crud/guru/update.php">
           <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="id_guru" placeholder="ID GURU" value="<?php echo $row['id_guru']?>">
            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
          </div>

           <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="id_admin" placeholder="ID ADMIN" value="<?php echo $row['id_admin']?>" >
            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="nik_guru" " placeholder="NIK" value="<?php echo $row['nik_guru']?>" >
            <span class="fa fa-lock form-control-feedback left" aria-hidden="true"></span>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="nama_guru" placeholder="NAMA" value="<?php echo $row['nama_guru']?>" >
            <span class="fa fa-users form-control-feedback left" aria-hidden="true"></span>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="alamat_guru" placeholder="ALAMAT" value="<?php echo $row['alamat_guru']?>">
            <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true"></span>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="pendidikan_guru" placeholder="PENDIDIKAN" value="<?php echo $row['pendidikan_guru']?>">
            <span class="fa fa-mortar-board form-control-feedback left" aria-hidden="true"></span>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="jurusan_guru" placeholder="JURUSAN" value="<?php echo $row['jurusan_guru']?>">
            <span class="fa fa-book form-control-feedback left" aria-hidden="true"></span>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="asal_pt" placeholder="ASAL PERGURUAN TINGGI" value="<?php echo $row['asal_pt']?>">                     
            <span class="fa fa-institution form-control-feedback left" aria-hidden="true"></span>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="keterangan" placeholder="KETERANGAN" value="<?php echo $row['keterangan']?>">
            <span class="fa fa-tags form-control-feedback left" aria-hidden="true"></span>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="sta_rekom" placeholder="STATUS REKOMENDASI" value="<?php echo $row['sta_rekom']?>" >
            <span class="fa fa-star form-control-feedback left" aria-hidden="true"></span>
          </div>
         <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <center>
              <input type="submit" name="simpan" class="btn btn-primary" value="SIMPAN">
              <input type="reset" name="batal" class="btn btn-danger" value="BATAL">
            </center>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>
<?php } } ?>


<!-- form add siswa -->
<?php if($_GET["form-siswa"]=="add"){ ?>
<div class="row">
  <div class="col-md-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Form Tambah Data Siswa</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Settings 1</a>
              </li>
              <li><a href="#">Settings 2</a>
              </li>
            </ul>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <br />
        <form class="form-horizontal form-label-left input_mask" method="POST" action="crud/siswa/create.php">
           <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="id_admin" placeholder="ID ADMIN">
            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
          </div>

           <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="id_siswa" placeholder="ID SISWA">
            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="nik_siswa" " placeholder="NIK_SISWA">
            <span class="fa fa-lock form-control-feedback left" aria-hidden="true"></span>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="nama_siswa" placeholder="NAMA">
            <span class="fa fa-users form-control-feedback left" aria-hidden="true"></span>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="alamat_siswa" placeholder="ALAMAT">
            <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true"></span>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="nomor_telepon_siswa" placeholder="NO. TELP">
            <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="email" class="form-control has-feedback-left" name="email_siswa" placeholder="E-MAIL">
            <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
          </div>
         <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <center>
              <input type="submit" name="simpan" class="btn btn-success" value="SIMPAN">
              <input type="reset" name="batal" class="btn btn-danger" value="BATAL">
            </center>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>
</div>

<?php } ?>



<!-- form edit siswa -->
<?php if($_GET["form-siswa"]=="edit"){ 
  $id=$_GET["id"];
    $sql = mysqli_query($koneksi, "select * from pos_siswa where id_siswa='$id' ") 
            or die("Error Query : ".mysqli_error($sql));
    if($row = mysqli_fetch_array($sql)){
?>
<div class="row">
  <div class="col-md-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Form Update Data Siswa</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Settings 1</a>
              </li>
              <li><a href="#">Settings 2</a>
              </li>
            </ul>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <br />
        <form class="form-horizontal form-label-left input_mask" method="POST" action="crud/siswa/create.php">
           <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="id_siswa" placeholder="ID SISWA" value="<?php echo $row['id_siswa']?>">
            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
          </div>

           <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="id_admin" placeholder="ID ADMIN" value="<?php echo $row['id_admin']?>" >
            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="nik_siswa" " placeholder="NIK" value="<?php echo $row['nik_siswa']?>" >
            <span class="fa fa-lock form-control-feedback left" aria-hidden="true"></span>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="nama_siswa" placeholder="NAMA" value="<?php echo $row['nama_siswa']?>" >
            <span class="fa fa-users form-control-feedback left" aria-hidden="true"></span>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="alamat_siswa" placeholder="ALAMAT" value="<?php echo $row['alamat_siswa']?>">
            <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true"></span>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="nomor_telepon_siswa" placeholder="NO TELP" value="<?php echo $row['nomor_telepon_siswa']?>">
            <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="email_siswa" placeholder="E-MAIL" value="<?php echo $row['email_siswa']?>">
            <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
          </div>
         <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <center>
              <input type="submit" name="simpan" class="btn btn-primary" value="SIMPAN">
              <input type="reset" name="batal" class="btn btn-danger" value="BATAL">
            </center>
            </div>
          </div>

        </form>
      </div>
    </div>
    </div>
  </div>
</div>


<?php } } ?>


<!-- form add MAPEL -->
<?php
    if($_GET["form-mapel"]=="add"){
?>
<div class="row">
  <div class="col-md-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Form Tambah Data Mata Pelajaran</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Settings 1</a>
              </li>
              <li><a href="#">Settings 2</a>
              </li>
            </ul>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <br />
        <form class="form-horizontal form-label-left input_mask" method="POST" action="crud/mapel/create.php">
           <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="id_mapel" placeholder="ID MAPEL" autofocus>
            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
          </div>

           <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="id_gm" placeholder="ID GURU MAPEL">
            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="mapel" " placeholder="MATA PELAJARAN">
            <span class="fa fa-book form-control-feedback left" aria-hidden="true"></span>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="tingkat" placeholder="TINGKAT">
            <span class="fa fa-institution form-control-feedback left" aria-hidden="true"></span>
          </div>
         <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <center>
              <input type="submit" name="simpan" class="btn btn-success" value="SIMPAN">
              <input type="reset" name="batal" class="btn btn-danger" value="BATAL">
            </center>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>
</div>

<?php } ?>

<!-- form edit MAPEL -->
<?php if($_GET["form-mapel"]=="edit"){ 
  $id=$_GET["id"];
    $sql = mysqli_query($koneksi, "select * from pos_mapel where id_mapel='$id' ") 
            or die("Error Query : ".mysqli_error($sql));
    if($row = mysqli_fetch_array($sql)){
?>
<div class="row">
  <div class="col-md-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Form Update Data Mata Pelajaran</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Settings 1</a>
              </li>
              <li><a href="#">Settings 2</a>
              </li>
            </ul>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <br />
        <form class="form-horizontal form-label-left input_mask" method="POST" action="crud/mapel/update.php">
           <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="id_mapel" placeholder="ID MAPEL" value="<?php echo $row['id_mapel']?>" readonly>
            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
          </div>

           <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="id_gm" placeholder="ID GURU MAPEL" value="<?php echo $row['id_gm']?>" >
            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="mapel" " placeholder="MATA PELAJARAN" value="<?php echo $row['mapel']?>" >
            <span class="fa fa-book form-control-feedback left" aria-hidden="true"></span>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="tingkat" placeholder="TINGKAT" value="<?php echo $row['tingkat']?>" >
            <span class="fa fa-institution form-control-feedback left" aria-hidden="true"></span>
          </div>
         <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <center>
              <input type="submit" name="simpan" class="btn btn-primary" value="SIMPAN">
              <input type="reset" name="batal" class="btn btn-danger" value="BATAL">
            </center>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>
</div>

<?php } } ?>

<!-- form add pemesanan -->
<?php if($_GET["form-pemesanan"]=="add"){ ?>
<div class="row">
  <div class="col-md-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Form Tambah Data Pemesanan</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Settings 1</a>
              </li>
              <li><a href="#">Settings 2</a>
              </li>
            </ul>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <br />
        <form class="form-horizontal form-label-left input_mask" method="POST" action="crud/pemesanan/create.php">
           <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="id_pm" placeholder="ID PEMESANAN" autofocus>
            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
          </div>

           <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="id_siswa" placeholder="ID SISWA">
            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="id_gm" " placeholder="ID GURU MAPEL">
            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="tanggal_pm" placeholder="TANGGAL PEMESANAN">
            <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="total_sesi" placeholder="TOTAL SESI">
            <span class="fa fa-reorder form-control-feedback left" aria-hidden="true"></span>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="jam" placeholder="JAM">
            <span class="fa fa-spinner form-control-feedback left" aria-hidden="true"></span>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="tanggal_mulai" placeholder="TGL MULAI">
            <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
          </div>
           <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="tanggal_akhir" placeholder="TANGGAL AKHIR">
            <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="status_pm" placeholder="STATUS PEMESANAN">
            <span class="fa fa-check-square-o form-control-feedback left" aria-hidden="true"></span>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="lokasi_les" placeholder="LOKASI LES">
            <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true"></span>
          </div>
         <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <center>
              <input type="submit" name="simpan" class="btn btn-success" value="SIMPAN">
              <input type="reset" name="batal" class="btn btn-danger" value="BATAL">
            </center>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>
</div>

<?php } ?>



<!-- form edit pemesanan -->
<?php if($_GET["form-pemesanan"]=="edit"){ 
  $id=$_GET["id"];
    $sql = mysqli_query($koneksi, "select * from pos_pemesanan where id_pm='$id' ") 
            or die("Error Query : ".mysqli_error($sql));
    if($row = mysqli_fetch_array($sql)){
?>
<div class="row">
  <div class="col-md-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Form Update Data Pemesanan</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Settings 1</a>
              </li>
              <li><a href="#">Settings 2</a>
              </li>
            </ul>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <br />
        <form class="form-horizontal form-label-left input_mask" method="POST" action="crud/pemesanan/update.php">
           <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="id_pm" placeholder="ID PEMESANAN" value="<?php echo $row['id_pm']?>" readonly>
            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
          </div>

           <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="id_siswa" placeholder="ID SISWA" value="<?php echo $row['id_siswa']?>" >
            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="id_gm" " placeholder="ID GURU MAPEL" value="<?php echo $row['id_gm']?>" >
            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="tanggal_pm" placeholder="TGL PEMESANAN" value="<?php echo $row['tanggal_pm']?>" >
            <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="total_sesi" placeholder="TOTAL SESI" value="<?php echo $row['total_sesi']?>">
            <span class="fa fa-reorder form-control-feedback left" aria-hidden="true"></span>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="jam" placeholder="JAM" value="<?php echo $row['jam']?>">
            <span class="fa fa-spinner form-control-feedback left" aria-hidden="true"></span>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="tanggal_mulai" placeholder="tgl MULAI" value="<?php echo $row['tanggal_mulai']?>">
            <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="tanggal_akhir" placeholder="TGL AKHIR" value="<?php echo $row['tanggal_akhir']?>">
            <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="status_pm" placeholder="STATUS PEMESANAN" value="<?php echo $row['status_pm']?>">
            <span class="fa fa-check-square-o form-control-feedback left" aria-hidden="true"></span>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="lokasi_les" placeholder="LOKASI LES" value="<?php echo $row['lokasi_les']?>">
            <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true"></span>
          </div>

         <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <center>
              <input type="submit" name="simpan" class="btn btn-primary" value="SIMPAN">
              <input type="reset" name="batal" class="btn btn-danger" value="BATAL">
            </center>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>
</div>

<?php } } ?>


<!-- Form Add Guru Mapel -->

<?php if($_GET["form-gurumapel"]=="add"){ ?>
<div class="row">
  <div class="col-md-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Form Tambah Data Guru Mapel</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Settings 1</a>
              </li>
              <li><a href="#">Settings 2</a>
              </li>
            </ul>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <br />
        <form class="form-horizontal form-label-left input_mask" method="POST" action="crud/gurumapel/create.php">
           <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="id_gm" placeholder="ID GURU MAPEL">
            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
          </div>

           <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="id_guru" placeholder="ID GURU">
            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="id_mapel " placeholder="ID MAPEL">
            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="foto" placeholder="FOTO">
            <span class="fa fa-camera form-control-feedback left" aria-hidden="true"></span>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="tarif/jam" placeholder="TARIF/JAM">
            <span class="fa fa-credit-card form-control-feedback left" aria-hidden="true"></span>
          </div>

         <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <center>
              <input type="submit" name="simpan" class="btn btn-success" value="SIMPAN">
              <input type="reset" name="batal" class="btn btn-danger" value="BATAL">
            </center>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>
</div>

<?php } ?>


<!-- form edit guru mapel -->
<?php if($_GET["form-gurumapel"]=="edit"){ 
  $id=$_GET["id"];
    $sql = mysqli_query($koneksi, "select * from pos_gurumapel where id_gm='$id' ") 
            or die("Error Query : ".mysqli_error($sql));
    if($row = mysqli_fetch_array($sql)){
?>
<div class="row">
  <div class="col-md-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Form Update Data Guru Mapel</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Settings 1</a>
              </li>
              <li><a href="#">Settings 2</a>
              </li>
            </ul>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <br />
        <form class="form-horizontal form-label-left input_mask" method="POST" action="crud/gurumapel/update.php">
           <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="id_gm" placeholder="ID GURU MAPEL" value="<?php echo $row['id_gm']?>">
            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
          </div>

           <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="id_guru" placeholder="ID GURU" value="<?php echo $row['id_guru']?>" >
            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="id_mapel" " placeholder="id_mapel" value="<?php echo $row['id_mapel']?>" >
            <span class="fa fa-lock form-control-feedback left" aria-hidden="true"></span>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="foto" placeholder="FOTO" value="<?php echo $row['foto']?>" >
            <span class="fa fa-camera form-control-feedback left" aria-hidden="true"></span>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" name="tarif/jam" placeholder="TARIF/JAM" value="<?php echo $row['tarif/jam']?>">
            <span class="fa fa-credit-card form-control-feedback left" aria-hidden="true"></span>
          </div>
         <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <center>
              <input type="submit" name="simpan" class="btn btn-primary" value="SIMPAN">
              <input type="reset" name="batal" class="btn btn-danger" value="BATAL">
            </center>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>
</div>

<?php } } ?>

