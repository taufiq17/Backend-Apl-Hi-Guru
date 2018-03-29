<?php
    include '../../dbo.php';
    $id=$_GET["id"];
    $query = "delete from pos_gurumapel where id_gm='$id'";
    $result = mysqli_query($koneksi, $query) or die("Query failed with error: ".mysqli_error($query));
    if ($result) {
        header("location:../../index.php?page=gurumapel&delete=success");	
    }
?>

