<?php 
    include("../../dbo.php"); 

    $id_guru = $_POST['id_guru'];
    $id_admin = $_POST['id_admin'];
    $nik_guru = $_POST['nik_guru'];
    $nama_guru = $_POST['nama_guru'];
    $alamat_guru = $_POST['alamat_guru'];
    $pendidikan_guru = $_POST['pendidikan_guru'];
    $jurusan_guru = $_POST['jurusan_guru'];
    $asal_pt = $_POST['asal_pt'];
    $keterangan = $_POST['keterangan'];
    $sta_rekom = $_POST['sta_rekom'];
    
    $sql = mysqli_query($koneksi, "update pos_guru set id_admin='$id_admin', nik_guru='$nik_guru', nama_guru='$nama_guru', alamat_guru='$alamat_guru', pendidikan_guru='$pendidikan_guru', jurusan_guru='$jurusan_guru', asal_pt='$asal_pt', keterangan='$keterangan', sta_rekom='$sta_rekom' where id_guru='$id_guru' " ) 
            or die("Query failed with error: ".mysqli_error($sql));
    if ($sql) {
            header("location:../../index.php?page=guru&update=success");	
    }
?>

