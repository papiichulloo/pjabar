<?php
    session_start();
    include "koneksi.php";
    $username = $_POST['username'];
    $password = md5($_POST['password']);


    $sql = mysqli_query($koneksi, "SELECT * FROM pengguna WHERE username = '".$username."' and password = '".$password."'");
    $cek = mysqli_num_rows($sql);
    if($cek > 0){
        $data = mysqli_fetch_array($sql);
        $_SESSION['login'] = "sudah login";
        $_SESSION['nama_lengkap'] = $data['nama_lengkap'];
        $_SESSION['level'] = $data['level'];
        $_SESSION['nik'] = $data['nik'];
        header("location: admin/beranda.php");
    }else{
        echo "username atau password salah";
    }
?>