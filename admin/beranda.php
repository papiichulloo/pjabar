<?php
    session_start();
    if(empty($_SESSION['login'])){
        header('location: ../login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css"> 
</head>
<body>
    <nav class="navbar navbar-expand-lg shadow bg-body-tertiary">
        <div class="container-fluid container">
            <a class="navbar-brand" href="#">
                <img src="images/logo.png" alt="">
                <img src="../images/logo.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-grow-1" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto flex-nowrap">
                <li class="nav-item">
                <a class="nav-link px-4 active" aria-current="page" href="beranda.php">Beranda</a>
                </li>
                <li class="nav-item">
                <a class="nav-link px-4" href="catatan/input_perjalanan.php">Buat Catatan Perjalanan</a>
                </li>
                <li class="nav-item">
                <a class="nav-link px-4" href="lokasi/lokasi.php">Lokasi</a>
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
                <button class="btn btn-outline-success ms-4 px-5" onclick="location.href='../logout.php'">Keluar</button>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-12">
                <div class="card text-bg-info border-0">
                    <div class="card-body">
                    Selamat Datang <?= $_SESSION['nama_lengkap'];?>, silahkan gunakan aplikasi ini dengan memilih menu yang tersedia.
                    </div>
                </div>
            </div>
        </div>
   

    <div class="row mt-4">
        <div class="col-lg-6">
             Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas libero facilis inventore impedit, quos omnis voluptatem adipisci esse cumque veritatis alias fugit eligendi vitae iure tempore tempora minus maiores ab!
        </div>
        <div class="col-lg-6">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4 fs-1 my-auto text-center">
                                 <i class="bi bi-pin-map"></i>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h6 class="card-title">Jumlah Perjalanan</h6>
                                    <p class="card-text">12</p>
                                    <p class="card-text"><small class="text-body-secondary"></small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="col-lg-6">
                <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4 fs-1 my-auto text-center">
                                <i class="bi bi-geo-alt"></i>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h6 class="card-title">Jumlah Lokasi</h6>
                                    <p class="card-text">12</p>
                                    <p class="card-text"><small class="text-body-secondary"></small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
            <div class="col-lg-6">
                <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4 fs-1 my-auto text-center">
                               <i class="bi bi-people"></i>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h6 class="card-title">Jumlah Pengguna</h6>
                                    <p class="card-text">12</p>
                                    <p class="card-text"><small class="text-body-secondary"></small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </div>
    </div>
</body>
</html>
