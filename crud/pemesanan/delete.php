<?php
    include '../../dbo.php';
    $id=$_GET["id"];
    $query = "delete from pos_pemesanan where id_pm='$id'";
    $result = mysqli_query($koneksi, $query) or die("Query failed with error: ".mysqli_error($query));
    if ($result) {
        header("location:../../index.php?page=pemesnan&delete=success");	
    }
?>

