<?php
    include "../koneksi.php";

    $nik = $_POST['nik'];
    $nama = $_POST['nama_lengkap'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $alamat = $_POST['alamat'];
    $tmpt_lahir = $_POST['tempat_lahir'];
    $tgl_lahir = $_POST['tgl_lahir']; 
    $jk = $_POST['jk'];

    //--- simpan ke tabel pengguna ---
    $sql = mysqli_query($koneksi, "insert into pengguna values('".$nik."','".$nama."','".$username."','".$password."','".$alamat."','".$tmpt_lahir."','".$tgl_lahir."','".$jk."', 'masyarakat')");
    if($sql){
        echo "berhasil input ke tabel pengguna";
    } else{
        echo "gagal input ke tabel pengguna";
    }
?>