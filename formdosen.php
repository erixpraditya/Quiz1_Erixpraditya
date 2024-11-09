<?php
include("koneksi.php");

$nidn = $_POST['nidn'];
$namalengkap = $_POST['namalengkap'];
$rumpun = $_POST['rumpun'];
$tempatlahir = $_POST['tempatlahir'];
$tanggallahir = $_POST['tanggallahir'];
$email = $_POST['email'];

$simpan = "INSERT INTO dosen (nidn,namalengkap,rumpun,tempatlahir,tanggallahir,email) 
VALUES ('$nidn','$namalengkap','$rumpun','$tempatlahir','$tanggallahir','$email')";

mysqli_query($koneksi, $simpan);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Dosen</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div class="container">
    <div class="row mt-5">
        <div class="col-6 m-auto">
            <div class="card">
        <div class="card-header text-center">
            <h3>Form Dosen</h3>
        </div>
        <div class="card-body">
            
                <table class="table">
        <tbody>
            <tr>
            <th scope="row">NIDN </th>
                    <th>: <?=$nidn?></th>
            </tr>
            <tr>
            <th scope="row">Nama Lengkap</th>
                    <th>: <?=$namalengkap?></th>
            </tr>
            <tr>
            <th scope="row">Rumpun</th>
                    <th>: <?=$rumpun?></th>
            </tr>
            <tr>
            <th scope="row">Tempat Lahir</th>
                    <th>: <?=$tempatlahir?></th>
            </tr>
            <tr>
            <th scope="row">Tanggal Lahir</th>
                    <th>: <?=$tanggallahir?></th>
            </tr>
            <tr>
            <th scope="row">Email</th>
                    <th>: <?=$email?></th>
            </tr>
        </tbody>
        </table>        
            <a href="index.php" class="btn bg-danger text-white">Kembali</a>
            </div>
         </div>

        </div>
    </div>
</div>

    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>