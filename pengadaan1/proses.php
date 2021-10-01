<?php
include '../database.php';
$mohon = new Pemohonan();

if (isset($_POST['save'])) {
    $aksi = $_POST['aksi'];
    $pemohonan_id = @$_POST['pemohonan_id'];
    $kode_barang = $_POST['kode_barang'];
    $pemohonan_jml = $_POST['pemohonan_jml'];
    $pemohonan_tgl = $_POST['pemohonan_tgl'];
    $pemohonan_tgl_deadline = $_POST['pemohonan_tgl_deadline'];

    if ($aksi == "create") {
        $mohon->create($kode_barang, $pemohonan_jml, $pemohonan_tgl, $pemohonan_tgl_deadline);
        header("location:index.php");
    } elseif ($aksi == "update") {
        $mohon->update($pemohonan_id,$kode_barang, $pemohonan_jml, $pemohonan_tgl, $pemohonan_tgl_deadline);
        header("location:index.php");
    } elseif ($aksi == "delete") {
        $mohon>delete($pemohonan_id);
        header("location:index.php");
    }

}