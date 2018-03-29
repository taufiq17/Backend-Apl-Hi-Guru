 <?php
 include 'dbo.php';
    error_reporting(0);
if ($_GET['page']=="guru") { ?>

 <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Data Guru </h2> 
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
          <a class="btn btn-success" href="index.php?form-guru=add"><i class="fa fa-plus"></i> Tambah Data</a>
          <table id="datatable" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>NO</th>
                <th>ID</th>
                <th>NIK</th>
                <th>NAMA</th>
                <th>ALAMAT</th>
                <th>PENDIDIKAN</th>
                <th>JURUSAN</th>
                <th>ASAL PT</th>
                <th>KET</th>
                <th>STA REKOM</th>
                <th width="11%">AKSI</th>
              </tr>
            </thead>
            <tbody>
              <?php
                  $i = 1;
                  $sql = mysqli_query($koneksi, "select * from pos_guru order by id_guru asc");
                  while($data = mysqli_fetch_array($sql)){        
              ?>
              <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $data['id_guru']?></td>
                <td><?php echo $data['nik_guru']?></td>
                <td><?php echo $data['nama_guru']?></td>
                <td><?php echo $data['alamat_guru']?></td>
                <td><?php echo $data['pendidikan_guru']?></td>
                <td><?php echo $data['jurusan_guru']?></td>
                <td><?php echo $data['asal_pt']?></td>
                <td><?php echo $data['keterangan']?></td>
                <td><?php echo $data['sta_rekom']?></td>
                <td>
                  <a class="btn btn-primary" href="index.php?form-guru=edit&id=<?php echo $data['id_guru']?>"><i class="fa fa-edit"></i></a>
                  <a class="btn btn-danger" href="crud/guru/delete.php?id=<?php echo $data['id_guru']?>"><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php $i++; }?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
<?php } ?>

 <?php
if ($_GET['page']=="siswa") { ?>
 <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Data Siswa </h2> 
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
          <a class="btn btn-success" href="index.php?form-siswa=add"><i class="fa fa-plus"></i> Tambah Data</a>
          <table id="datatable" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>NO</th>
                <th>ID</th>
                <th>NIK</th>
                <th>NAMA</th>
                <th>ALAMAT</th>
                <th>NO.TELP</th>
                <th>EMAIL</th>
                <th width="11%">AKSI</th>
              </tr>
            </thead>
            <tbody>
              <?php
                  $i = 1;
                  $sql = mysqli_query($koneksi, "select * from pos_siswa order by id_siswa asc");
                  while($data = mysqli_fetch_array($sql)){        
              ?>
              <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $data['id_siswa']?></td>
                <td><?php echo $data['nik_siswa']?></td>
                <td><?php echo $data['nama_siswa']?></td>
                <td><?php echo $data['alamat_siswa']?></td>
                <td><?php echo $data['nomor_telepon_siswa']?></td>
                <td><?php echo $data['email_siswa']?></td>
                <td>
                  <a class="btn btn-primary" href="index.php?form-siswa=edit&id=<?php echo $data['id_siswa']?>"><i class="fa fa-edit"></i></a>
                  <a class="btn btn-danger" href="crud/siswa/delete.php?id=<?php echo $data['id_siswa']?>"><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php $i++; }?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
<?php } ?>

 <?php
if ($_GET['page']=="mapel") { ?>
 <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Data Mata Pelajaran</h2> 
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
          <a class="btn btn-success" href="index.php?form-mapel=add"><i class="fa fa-plus"></i> Tambah Data</a>
          <table id="datatable" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>NO</th>
                <th>ID MAPEL</th>
                <th>ID GURU MAPEL</th>
                <th>MATA PELAJARAN</th>
                <th>TINGKAT</th>
                <th width="11%">AKSI</th>
              </tr>
            </thead>
            <tbody>
              <?php
                  $i = 1;
                  $sql = mysqli_query($koneksi, "select * from pos_mapel order by id_mapel asc");
                  while($data = mysqli_fetch_array($sql)){        
              ?>
              <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $data['id_mapel']?></td>
                <td><?php echo $data['id_gm']?></td>
                <td><?php echo $data['mapel']?></td>
                <td><?php echo $data['tingkat']?></td>
                <td>
                  <a class="btn btn-primary" href="index.php?form-mapel=edit&id=<?php echo $data['id_mapel']?>"><i class="fa fa-edit"></i></a>
                  <a class="btn btn-danger" href="crud/mapel/delete.php?id=<?php echo $data['id_mapel']?>"><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php $i++; }?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
<?php } ?>

 <?php
if ($_GET['page']=="pemesanan") { ?>
 <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Daftar Pemesanan</h2> 
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
          <a class="btn btn-success" href="index.php?form-pemesanan=add"><i class="fa fa-plus"></i> Tambah Data</a>
          <table id="datatable" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>NO</th>
                <th>ID PEMESANAN</th>
                <th>ID SISWA</th>
                <th>ID GURU MAPEL</th>
                <th>TGL PEMESANAN</th>
                <th>TOTAL SESI</th>
                <th>JAM</th>
                <th>TGL MULAI</th>
                <th>TGL AKHIR</th>
                <th>STATUS PEMESANAN</th>
                <th>LOKASI LES</th>
                <th width="11%">AKSI</th>
              </tr>
            </thead>
            <tbody>
              <?php
                  $i = 1;
                  $sql = mysqli_query($koneksi, "select * from pos_pemesanan order by id_pm asc");
                  while($data = mysqli_fetch_array($sql)){        
              ?>
              <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $data['id_pm']?></td>
                <td><?php echo $data['id_siswa']?></td>
                <td><?php echo $data['id_gm']?></td>
                <td><?php echo $data['tanggal_pm']?></td>
                <td><?php echo $data['total_sesi']?></td>
                <td><?php echo $data['jam']?></td>
                <td><?php echo $data['tanggal_mulai']?></td>
                <td><?php echo $data['tanggal_akhir']?></td>
                <td><?php echo $data['status_pm']?></td>
                <td><?php echo $data['lokasi_les']?></td>
                <td>
                  <a class="btn btn-primary" href="index.php?form-pemesanan=edit&id=<?php echo $data['id_pm']?>"><i class="fa fa-edit"></i></a>
                  <a class="btn btn-danger" href="crud/pemesanan/delete.php?id=<?php echo $data['id_pm']?>"><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php $i++; }?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
<?php } ?>


 <?php
if ($_GET['page']=="gurumapel") { ?>
 <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Data Guru Mapel</h2> 
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
          <a class="btn btn-success" href="index.php?form-gurumapel=add"><i class="fa fa-plus"></i> Tambah Data</a>
          <table id="datatable" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>NO</th>
                <th>ID GURU MAPEL</th>
                <th>ID GURU</th>
                <th>ID MAPEL</th>
                <th>FOTO</th>
                <th>TARIF/JAM</th>
                <th width="11%">AKSI</th>
              </tr>
            </thead>
            <tbody>
              <?php
                  $i = 1;
                  $sql = mysqli_query($koneksi, "select * from pos_gurumapel order by id_gm asc");
                  while($data = mysqli_fetch_array($sql)){        
              ?>
              <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $data['id_gm']?></td>
                <td><?php echo $data['id_guru']?></td>
                <td><?php echo $data['id_mapel']?></td>
                <td><?php echo $data['foto']?></td>
                <td><?php echo $data['tarif/jam']?></td>
                <td>
                  <a class="btn btn-primary" href="index.php?form-gurumapel=edit&id=<?php echo $data['id_gm']?>"><i class="fa fa-edit"></i></a>
                  <a class="btn btn-danger" href="crud/gurumapel/delete.php?id=<?php echo $data['id_gm']?>"><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>
              <?php $i++; }?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
<?php } ?>