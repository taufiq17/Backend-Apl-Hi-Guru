<?php 
    include("../../dbo.php"); 

    $id_gm = $_POST['id_gm'];
    $id_guru = $_POST['id_guru'];
    $id_mapel = $_POST['id_mapel'];
    $foto = $_POST['foto'];
    $tarif/jam =$_POST['tarif/jam'];

    $sql = mysqli_query($koneksi, "INSERT INTO pos_gurumapel VALUES ('$id_gm', '$id_guru', '$id_mapel', '$foto','$tarif/jam')" ) 
            or die("Query failed with error: ".mysqli_error($sql));

    if ($sql) {
            header("location:../../index.php?page=gurumapel&insert=success");    
    }
?>