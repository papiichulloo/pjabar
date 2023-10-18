<?php
    $preUrl = explode("/", $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    $url    = (isset($_SERVER['HTTPS'])?"https":"http")."://".$preUrl[0]."/".$preUrl[1]."/";
    define("base_url", $url);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url; ?>bootstrap/css/bootstrap.css"> 
   <style>
    @media(max-width: 1080px) {
        #gambar{
            order:1;
        }
        #deskripsi{
            order:2;
        }
    }
   </style>
</head>
<body>  
 <!--Awal Navbar -->
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
                <a class="nav-link px-4 active" aria-current="page" href="#">Beranda</a>
                </li>
                <li class="nav-item">
                <a class="nav-link px-4" href="#">Dasbor Publik</a>
                </li>
                <li class="nav-item">
                <a class="nav-link px-4" href="#">Tentang PERJALANANKU</a>
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
                <button class="btn btn-outline-success ms-4 px-5" onclick="location.href='login.php'">Masuk</button>
            </div>
        </div>
    </nav>
<!--Akhir Navbar-->


</body>
</html>