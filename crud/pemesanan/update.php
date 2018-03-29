<?php 
    include("../../dbo.php"); 

    $id_pm= $_POST['id_pm'];
    $id_siswa= $_POST['id_siswa'];
    $id_gm= $_POST['id_gm'];
    $tanggal_pm= $_POST['tanggal_pm'];
    $total_sesi= $_POST['total_sesi'];
    $jam= $_POST['jam'];
    $tanggal_mulai= $_POST['tanggal_mulai'];
    $tanggal_akhir= $_POST['tanggal_akhir'];
    $status_pm= $_POST['status_pm'];
    $lokasi_les= $_POST['lokasi_les'];
    
    $sql = mysqli_query($koneksi, "update pos_pemesanan set id_siswa='$id_siswa', id_gm='$id_gm', tanggal_pm='$tanggal_pm', total_sesi='$total_sesi', jam='$jam', tanggal_mulai='$tanggal_mulai', tanggal_akhir='$tanggal_akhir', status_pm='$status_pm', lokasi_les='$lokasi_les' where id_pm='$id_pm' " ) 
            or die("Query failed with error: ".mysqli_error($sql));
    if ($sql) {
            header("location:../../index.php?page=pemesanan&update=success");	
    }
?>

