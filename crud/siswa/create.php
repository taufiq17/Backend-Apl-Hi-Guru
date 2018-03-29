<?php 
    include("../../dbo.php"); 

    $id_siswa = $_POST['id_siswa'];
    $id_admin = $_POST['id_admin'];
    $nik_siswa = $_POST['nik_siswa'];
    $nama_siswa = $_POST['nama_siswa'];
    $alamat_siswa = $_POST['alamat_siswa'];
    $nomor_telepon_siswa = $_POST['nomor_telepon_siswa'];
    $email_siswa = $_POST['email_siswa'];

    $sql = mysqli_query($koneksi, "INSERT INTO pos_siswa VALUES ('$id_siswa', '$id_admin', '$nik_siswa', '$nama_siswa', '$alamat_siswa', '$nomor_telepon_siswa', '$email_siswa')" ) 
            or die("Query failed with error: ".mysqli_error($sql));

    if ($sql) {
            header("location:../../index.php?page=siswa&insert=success");    
    }
?>