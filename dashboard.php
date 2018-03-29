<?php include("dbo.php") ?>

<div class="row tile_count">

  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <?php 
        $sql = mysqli_query($koneksi, "SELECT * FROM pos_guru") or die ("Error query ".mysqli_error());
        $jml_guru = mysqli_num_rows($sql);
    ?>
    <div class="tile-stats">
      <div class="icon"><i class="fa fa-user"></i></div>
      <div class="count"><?php echo $jml_guru ?></div>
      <h3>Total Guru</h3>
    </div>
  </div>

  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <?php 
        $sql = mysqli_query($koneksi, "SELECT * FROM pos_siswa") or die ("Error query ".mysqli_error());
        $jml_siswa = mysqli_num_rows($sql);
    ?>
    <div class="tile-stats">
      <div class="icon"><i class="fa fa-users"></i></div>
      <div class="count"><?php echo $jml_siswa ?></div>
      <h3>Total Siswa</h3>
    </div>
  </div>

    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <?php 
        /*$sql = mysqli_query($koneksi, "SELECT * FROM pos_siswa") or die ("Error query ".mysqli_error());
        $jml_siswa = mysqli_num_rows($sql);*/
    ?>
    <div class="tile-stats">
      <div class="icon"><i class="fa fa-user"></i></div>
      <div class="count">554</div>
      <h3>Total Pemesanan</h3>
    </div>
  </div>

    <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Selamat Datang Admin !</h2>
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
    
                  <div class="bs-example" data-example-id="simple-jumbotron">
                    <div class="jumbotron">
                      <h2>Halo !</h2>
                      <span>HIGURU merupakan aplikasi pembelajaran diluar sekolah yang dilakukan oleh pemberi jasa di luar jam kegiatan belajar mengajar</span>
                    </div>
                  </div>
                </div>
              </div>
    </div>
  </div>