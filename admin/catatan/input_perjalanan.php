<?php
    session_start();
    include "../../koneksi.php";
    if(empty($_SESSION['login']) and $_SESSION['level'] != 'masyarakat'){
        header('location:../login.php');
    }
?>
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
<!--<a href="../beranda.php">Beranda</a>
<a href="catatan/input_perjalanan.php">Buat Catatan Perjalanan</a>
<a href="../lokasi/lokasi.php">Lokasi</a>
<a href="../../logout.php">Logout</a> <br>-->

<div class="container mt-4">
    <div class="row col-lg-8 text-center mx-auto">
        <div class="card text-center bg-primary-subtle">
            <div class="card-body">
                <h5 class="card-title">Formulir Catatan Perjalanan</h5>
                 <p class="card-text">Input Catatan Perjalanan</p>
                 <form action="aksi_perjalanan.php" method="post">
                <div class="row">
                    <div class="col-lg-10 mx-auto mt-3">
                     <label for="" class="">Pilih Lokasi</label>
                     <select name = "id_lokasi" class='form-control'>
                            <?php
                                $sql = mysqli_query($koneksi, "select * from lokasi");
                                while ($data = mysqli_fetch_array($sql)) {
                                echo "<option value='".$data['id_lokasi']."'>".$data['nama_lokasi']." | ".$data['alamat_lokasi']."</option>";
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 mx-auto mt-3">
                     <label for="" class="">Suhu Tubuh</label><br>
                     <input type="number" name="suhu_tubuh"><br>
                     <input type="submit" value="Simpan" class="mt-2 btn btn-success">
                </div>
            </div>
        </div>
    </div>
</div>
</form>
 


<table class="table table-bordered table-secondary mt-4">
    <thead>
        <th>NO</th>
        <th>LOKASI</th>
        <th>TANGGAL</th>
        <th>JAM</th>
        <th>SUHU</th>
    </thead>
    <tbody>
        <?php
        $no = 1;
            $sql = mysqli_query($koneksi, "select * from history_perjalanan hp
                                           inner join lokasi lk on hp.id_lokasi = lk.id_lokasi
                                           where hp.nik = '".$_SESSION['nik']."'");
             while ($data = mysqli_fetch_array($sql)) {
                echo "<tr>";
                echo "<td>".$no++."</td>";
                echo "<td>".$data['nama_lokasi']."</td>";
                echo "<td>".$data['tanggal_perjalanan']."</td>";
                echo "<td>".$data['waktu_perjalanan']."</td>";  
                echo "<td>".$data['suhu_tubuh']."</td>";
                echo "</tr>";           
            }
        ?>
    </tbody>
</table>