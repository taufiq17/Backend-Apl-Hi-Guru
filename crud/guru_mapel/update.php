<?php 
    include("../../dbo.php"); 

   $id_gm = $_POST['id_gm'];
    $id_gm = $_POST['id_guru'];
    $id_mapel = $_POST['id_mapel'];
    $foto = $_POST['foto'];
    $tarif/jam = $_POST['tarif/jam'];
    
    
    $sql = mysqli_query($koneksi, "update pos_gurumapel set id_gm='$id_gm', id_guru='$id_guru', id_mapel='$id_mapel', foto='$foto' , tarif/jam='$tarif/jam' where id_gm='$id_gm' " ) 
            or die("Query failed with error: ".mysqli_error($sql));
    if ($sql) {
            header("location:../../index.php?page=gurumapel&update=success");	
    }
?>

