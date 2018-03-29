<?php 
    include("../../dbo.php"); 

   $id_mapel = $_POST['id_mapel'];
    $id_gm = $_POST['id_gm'];
    $mapel = $_POST['mapel'];
    $tingkat = $_POST['tingkat'];
    
    $sql = mysqli_query($koneksi, "update pos_mapel set id_mapel='$id_mapel', id_gm='$id_gm', mapel='$mapel', tingkat='$tingkat' where id_mapel='$id_mapel' " ) 
            or die("Query failed with error: ".mysqli_error($sql));
    if ($sql) {
            header("location:../../index.php?page=mapel&update=success");	
    }
?>

