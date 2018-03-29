<?php
    include '../../dbo.php';
    $id=$_GET["id"];
    $query = "delete from pos_guru where id_guru='$id'";
    $result = mysqli_query($koneksi, $query) or die("Query failed with error: ".mysqli_error($query));
    if ($result) {
        header("location:../../index.php?page=guru&delete=success");	
    }
?>

