<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - PERJALANANKU Dashboard</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css"> 
</head>
<body class="bg-success">
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
                    <a class="nav-link px-4 active" aria-current="page" href="index.php">Beranda</a>
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


    <div class="container">
    <div class="row mt-5 pt-3">
        <div class="col-lg-6 m-auto">
            <div class="card border-0 shadow">
                <div class="card-body">

                    <form action="get_login.php" method="post">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h3>LOGIN</h3>
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col-lg-12">
                            <input type="text" name="username" id="" class="form-control" placeholder="Nama Pengguna">
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col-lg-12">
                            <input type="password" name="password" id="" class="form-control" placeholder="Kata Sandi">
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col-lg-12">
                            <input type="submit" value="Masuk" class="form-control btn btn-primary">
                            <p class="mt-3 text-center">Anda Belum Punya Akun, <a href="registrasi/pendaftaran.php">Klik Disini</a>Untuk Registrasi</p>
                        </div>
                    </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

