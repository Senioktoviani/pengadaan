<!DOCTYPE html>
<html lang="en">

<head>
<link rel="canonical" href="">

<title>Aplikasi Pengadaan barang</title>
</head>

<body>
    <?php
include '../database.php';
$mohon = new Pemohonan();
foreach ($mohon->edit($_GET['pemohonan_id']) as $data) {
    $pemohonan_id = $data['pemohonan_id'];
    $kode_barang = $data['kode_barang'];
    $pemohonan_jml = $data['pemohonan_jml'];
    $pemohonan_tgl_buat = $data['pemohonan_tgl_buat'];
    $pemohonan_tgl_deadline = $data['pemohonan_tgl_deadline'];
    
}
?>
<div class = "row">
<div class = "panel panel-primary">
    <div class = "panel-heading">
    <h3 class = "panel-title">Edit Data</h3>
</div>
    <div class = "panel-body">
        <form method = "post" action = "proses.php">
        <input type="hidden" name="aksi" value = "update">
        <input type="hidden" name="id" value="<?php echo $pemohonan_id ?>">
            <table>
        <tr>
            <td width = "160px">nama Barang</td>
            <td>
            <input type = "text" name = "kode_barang" class = "form-control"  value="<?php echo $kode_barang; ?>" required>
        </td>
        </tr>
        <tr>
                    <td>jumlah Barang</td>
                    <td>
                        <input type = "number" name = "pemohonan_jml" class = "form-control" value="<?php echo $pemohonan_jml; ?>" required>
        </td>
        </tr>
        <tr>
                    <td>tanggal Pemohonan/td>
                    <td>
                        <input type = "date" name = "pemohonan_tgl_buat" class = "form-control" value="<?php echo $pemohonan_tgl_buat; ?>" required>
        </td>
        </tr>
        <tr>
                    <td>pemohonan Tanggal Deadline</td>
                    <td>
                        <input type = "date" name = "pemohonan_tgl_deadline" class = "form-control" value="<?php echo $pemohonan_tgl_deadline; ?>" required>
        </td>
        </tr>
        <tr>
            <td>
                <input type = "submit" name = "save" class = "btn btn-primary" value="Simpan">
                <a class = "btn btn-danger" href = index.php>Kembali</a>
        </td>
        </tr>
        </table>
        </form>
        </div>
        </div>
        </div>
</body>

</html>