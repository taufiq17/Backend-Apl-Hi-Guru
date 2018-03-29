<?php
    include('dbo.php');

    $id_admin = $_POST['id_admin'];
    $password_admin = md5($_POST['password_admin']);
    $execute = mysqli_query($koneksi, "select * from pos_admin where id_admin='$id_admin' and password_admin='$password_admin'");
    $result = mysqli_num_rows($execute);
    $data = mysqli_fetch_array($execute);
    if ($result==0){
        echo"javascript:history.back(-1);";
        header("location:login.php?user=wrong");
    }else{
        session_start(); //memulai session
        
        $_SESSION['adminid'] = $data['id_admin'];
        $_SESSION['adminname'] = $data['nama_admin'];
        $_SESSION['adminlevel'] = $data['level_user'];
        header("location:index.php?page=dashboard");
    }
?>

