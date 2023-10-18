<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css"> 
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
                    <a class="nav-link px-4 active" aria-current="page" href="../index.php">Beranda</a>
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
                    <button class="btn btn-outline-success ms-4 px-5" onclick="location.href='../login.php'">Masuk</button>
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
                            <h3>REGISTRASI</h3>
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col-lg-12">
                            <input type="text" name="nik" id="" class="form-control" placeholder="NIK">
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col-lg-12">
                            <input type="text" name="nama_lengkap" id="" class="form-control" placeholder="Nama Lengkap">
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col-lg-12">
                            <input type="text" name="username" id="" class="form-control" placeholder="Username">
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col-lg-12">
                            <input type="password" name="password" id="" class="form-control" placeholder="Password">
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col-lg-12">
                            <textarea  name="alamat" id="" class="form-control" placeholder="Alamat"></textarea>
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col-lg-12">
                            <input type="text" name="tempat_lahir" id="" class="form-control" placeholder="Tempat Lahir">
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col-lg-12">
                            <input type="date" name="tgl_lahir" id="" class="form-control" placeholder="Tanggal Lahir">
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col-lg-12">
                        <select name="jk" id="" class="form-control">
                            <option value="L">Laki-Laki</option>
                            <option value="P">Perempuan</option>
                        </select><br>
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col-lg-12">
                            <input type="submit" value="Daftar" class="form-control btn btn-primary">
                          
                        </div>
                    </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
<!-- awal footer -->
<footer>
      <div class="container">
        <div class="row custom-footer">
          <div class="col-md-8">
            <a href="#" class="nav-link pe-2 footer-link">© 2023 Pusat Data dan Teknologi Informasi. Kementerian Kesehatan Republik Indonesia</a>
          </div>
          <div
            class="col-md-4 custom-footer text-center"
            style="display: flex; justify-content: flex-end"
          >
            <a href="#" class="nav-link pe-2 footer-link">Peta Situs</a>
            <a href="#" class="nav-link pe-2 footer-link">Kebijakan Privasi</a>
            <a href="#" class="nav-link footer-link">Syarat Penggunaan</a>
          </div>
        </div>
      </div>
    </footer>
<!-- awal footer -->
</body>
</html>

