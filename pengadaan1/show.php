<?php require_once "auth.php";?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulir Pemohonan</title>

    <link rel="stylesheet" href="" />
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">

            <div class="card">
                <div class="card-body text-center">
        <form action="hasilmohon.php" method="post">

<h1>Isi Formulir Tersebut</h1>

 <table>
                <tr>
                    <td>Nama Barang</td>
                    <td> : </td>
                    <td><input type="text" name="kode_barang" id=""></td>
                </tr>
                <tr>
                    <td>Jumlah Barang</td>
                    <td> : </td>
                    <td><input type="number" name="pemohonan_jml" id=""></td>
                </tr>
                <tr>
                    <td>Tanggal Pemohonan</td>
                    <td> : </td>
                    <td><input type="date" name="pemohonan_tgl" id="" max=100 min=0></td>
                </tr>
                <tr>
                    <td>Pemohonan Tanggal Deadline</td>
                    <td> : </td>
                    <td><input type="date" name="pemohonan_tgl_deadline" id=""></td>
                </tr>
                <tr>
                    <td></td><td></td>
                    <td><input type="submit" name="submit" value="Masuk">
                        <input type="reset" name="reset" value="Hapus"></td>
                </tr>
            </table>
                </div>
            </div>
        </div>

    </div>
</div>

</body>
</html>
