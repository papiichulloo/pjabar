<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.css"> 
</head>
<body>
    <nav class="navbar navbar-expand-lg shadow bg-body-tertiary">
        <div class="container-fluid container">
            <a class="navbar-brand" href="#">
                <img src="images/logo.png" alt="">
                <img src="../../images/logo.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-grow-1" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto flex-nowrap">
                <li class="nav-item">
                <a class="nav-link px-4 active" aria-current="page" href="../beranda.php">Beranda</a>
                </li>
                <li class="nav-item">
                <a class="nav-link px-4" href="../catatan/input_perjalanan.php">Buat Catatan Perjalanan</a>
                </li>
                <li class="nav-item">
                <a class="nav-link px-4" href="../lokasi/lokasi.php">Lokasi</a>
                </li>
                <li class="nav-item">
            
                </li>
            <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
                </li>
                <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li> -->
            </ul>       
                <button class="btn btn-outline-success ms-4 px-5" onclick="location.href='../../logout.php'">Keluar</button>
            </div>
        </div>
    </nav>
</body>
</html>
DATA LOKASI
<?php
    session_start();
    if(empty($_SESSION['login'])){
        header('location:../login.php');
    }
    include "../../koneksi.php";
    include "form_lokasi.php";
?>
<table border="1">
    <tr>
        <th>No</th>
        <th>ID Lokasi</th>
        <th>Nama Lokasi</th>
        <th>Alamat Lokasi</th>
        <th>Aksi</th>
    </tr>
    <?php
        $no = 1;
        $sql = mysqli_query($koneksi, "SELECT * FROM lokasi");
        while($data = mysqli_fetch_array($sql)) {
            echo "<tr>";
            echo "<td>".$no++."</td>";
            echo "<td>".$data['id_lokasi']."</td>";
            echo "<td>".$data['nama_lokasi']."</td>";
            echo "<td>".$data['alamat_lokasi']."</td>";
            echo "<td><a href='aksi_lokasi.php?act=delete&id_lokasi=".$data['id_lokasi']."'>Hapus</a> <a href='form_edit_lokasi.php?id_lokasi=".$data['id_lokasi']."'>Edit</a></td>";
            echo "</tr>";
        }
    ?>
</table>