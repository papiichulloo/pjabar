<?php
    session_start();
    include "../../koneksi.php";
    if(empty($_SESSION['login']) and $_SESSION['level'] != 'masyarakat'){
        header('location: ../login.php');
    }
    $id_lokasi = $_POST['id_lokasi'];
    $suhu_tubuh = $_POST['suhu_tubuh'];
    $nik = $_SESSION['nik'];
    $tanggal_perjalanan = date('Y-m-d');
    $waktu_perjalanan = date('H:i:s');

    $sql = mysqli_query($koneksi, "INSERT INTO history_perjalanan VALUES(NULL, '".$tanggal_perjalanan."', '".$waktu_perjalanan."', '".$suhu_tubuh."', '".$nik."', '".$id_lokasi."')");

    if($sql){
     // echo "berhasil input catatan";
 ?>
<!-- awal modal -->
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.css">
    <div class="modal fade" id="suksesInput" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
            <h1 class="modal-title fs-5 text-light" id="exampleModalLabel">Berhasil!</h1>
            </div>
            <div class="modal-body">
            Catatan Perjalanan Berhasil Disimpan.
            </div>
            <div class="modal-footer">
                <a href="input_perjalanan.php" class="btn btn-outline-success">Menuju Input Perjalanan</a>
            </div>
        </div>
        </div>
    </div>
    <script src="../../bootstrap/js/bootstrap.bundle.js"></script>
    <script>
        var myModal = new bootstrap.Modal(document.getElementById('suksesInput'), {})
        myModal.show()
    </script>
<!-- akhir modal -->
<?php
    }else{
       // echo "gagal input catatan";
?>
<!-- awal modal -->
<link rel="stylesheet" href="../../bootstrap/css/bootstrap.css">
    <div class="modal fade" id="suksesInput" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger">
            <h1 class="modal-title fs-5 text-light" id="exampleModalLabel">Gagal!</h1>
            </div>
            <div class="modal-body">
            Catatan Perjalanan Gagal Disimpan.
            </div>
            <div class="modal-footer">
                <a href="input_perjalanan.php" class="btn btn-outline-danger">Menuju Input Perjalanan</a>
            </div>
        </div>
        </div>
    </div>
    <script src="../../bootstrap/js/bootstrap.bundle.js"></script>
    <script>
        var myModal = new bootstrap.Modal(document.getElementById('suksesInput'), {})
        myModal.show()
    </script>
<!-- akhir modal -->
<?php
    }
?>