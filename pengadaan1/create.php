<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="style3.css" />

    <title>AplikasiPengadaan Barang</title>
<body>
<div class = "row">
<div class = "panel panel-primary">
    <div class = "panel-heading">
    <h3 class = "panel-title">Tambah Data Pemohonan</h3>
</div>
    <div class = "panel-body">
        <form method = "post" action = "hasilmohon.php">
        <input type="hidden" name="aksi" value="create">
            <table>
        <tr>
            <td width = "160px">nama Barang</td>
            <td>
            <input type = "text" name = "kode_barang" class = "form-control" required>
        </td>
        </tr>
        <tr>
                    <td>jumlah Barang</td>
                    <td>
                        <input type = "number" name = "pemohonan_jml" class = "form-control" required>
        </td>
        </tr>
        <tr>
                    <td>Tanggal Pemohonan</td>
                    <td>
                        <input type = "date" name = "pemohonan_tgl" class = "form-control" required>
        </td>
        </tr>
        <tr>
                    <td>Tanggal Pemohonan Deadline</td>
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