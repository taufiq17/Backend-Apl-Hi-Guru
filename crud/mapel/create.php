<?php 
    include("../../dbo.php"); 

    $id_mapel = $_POST['id_mapel'];
    $id_gm = $_POST['id_gm'];
    $mapel = $_POST['mapel'];
    $tingkat = $_POST['tingkat'];

    $sql = mysqli_query($koneksi, "INSERT INTO pos_mapel VALUES ('$id_mapel', '$id_gm', '$mapel', '$tingkat')" ) 
            or die("Query failed with error: ".mysqli_error($sql));

    if ($sql) {
            header("location:../../index.php?page=mapel&insert=success");    
    }
?>