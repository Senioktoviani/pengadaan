<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="style3.css" />

    <title>Aplikasi Pengadaan Barang</title>
<body>

<style>
      li {
  float: left;
}

a {
  display: block;
  padding: 8px;
  background-color: #dddddd;
}
    </style>
    
<nav class="navbar navbar-default">
            <div class="container-fluid">

            </div>

            <li><a href="beranda.php">Beranda</a></li>
            <li><a href="mohon.php">Pemohonan</a></li>
            <li><a href="lanjut.php">Supplier</a></li>
            <li><a href="masuk.php">Barang Masuk</a></li>
            <li><a href="keluar.php">Barang Keluar</a></li>
        </nav>
<div class = "row">
<div class = "panel panel-primary">
    <div class = "panel-heading">
    <h3 class = "panel-title">Pemohonan Pengadaan</h3>
</div>
    <div class = "panel-body">
        <form method = "post" action = "hasilmohon.php">
        <input type="hidden" name="aksi" value="create">
            <table>
        <tr>
            <td width = "160px">Nama Barang :</td>
            <td>
            <input type = "text" name = "kode_barang" class = "form-control" required>
        </td>
        </tr>
        <tr>
                    <td>Jumlah Barang : </td>
                    <td>
                        <input type = "number" name = "pemohonan_jml" class = "form-control" required>
        </td>
        </tr>
        <tr>
                    <td>Tanggal Pemohonan :</td>
                    <td>
                        <input type = "date" name = "pemohonan_tgl_buat" class = "form-control" required>
        </td>
        </tr>
        <tr>
                    <td>Tanggal Pemohonan Deadline :</td>
                    <td>
                        <input type = "date" name = "pemohonan_tgl_deadline" class = "form-control" required>
        </td>
        </tr>
        <tr>
        <tr>
                    <td><button><input type="submit" name="submit" value="Masuk"></button></td>
                        <td><button><input type="reset" name="reset" value="Hapus"></button></td>
                </tr>
        </tr>
        </table>
        </form>
        </div>
        </div>
        </div>
</body>
</html>