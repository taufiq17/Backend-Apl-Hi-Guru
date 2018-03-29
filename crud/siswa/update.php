<?php 
    include("../../dbo.php"); 

    $id_siswa = $_POST['id_siswa'];
    $id_admin = $_POST['id_admin'];
    $nik_siswa = $_POST['nik_siswa'];
    $nama_siswa = $_POST['nama_siswa'];
    $alamat_siswa = $_POST['alamat_guru'];
    $nomor_telepon_siswa= $_POST['nomor_telepon_siswa'];
    $email_siswa= $_POST['email_siswa'];
    
    $sql = mysqli_query($query, "update pos_siswa set id_admin='$id_admin', nik_siswa='$nik_siswa', nama_siswa='$nama_siswa',alamat_siswa='$alamat_siswa',nomor_telepon_siswa='$nomor_telepon_siswa', email_siswa='$email_siswa' where id_siswa='$id_siswa' " ) 
            or die("Query failed with error: ".mysqli_error($sql));
    if ($sql) {
            header("location:../../index.php?page=siswa&update=success");	
    }
?>

