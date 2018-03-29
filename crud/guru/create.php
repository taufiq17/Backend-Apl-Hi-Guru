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

    $sql = mysqli_query($koneksi, "INSERT INTO pos_guru VALUES ('$id_guru', '$id_admin', '$nik_guru', '$nama_guru', '$alamat_guru', '$pendidikan_guru', '$jurusan_guru', '$asal_pt', '$keterangan', '$sta_rekom')" ) 
            or die("Query failed with error: ".mysqli_error($sql));
    if ($sql) {
            header("location:../../index.php?page=guru&insert=success");	
    }
?>