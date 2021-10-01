<?php
if (isset($_POST['submit'])) {
   $supplier_nama = $_POST['supplier_nama'];
    $supplier_alamat = $_POST['supplier_alamat'];
    $supplier_no_telp = $_POST['supplier_no_telp'];
    $supplier_email = $_POST['supplier_email'];

    class supplier
    {
        public $supplier_nama;
        public $supplier_alamat;
        public $supplier_no_telp;
        public $supplier_email;

        public function __construct($supplier_nama, $supplier_alamat, $supplier_no_telp, $supplier_email)
        {
            $this->supplier_nama = $supplier_nama;
            $this->supplier_alamat = $supplier_alamat;
            $this->supplier_no_telp = $supplier_no_telp;
            $this->supplier_email = $supplier_email;
        }
    }

    $data = new supplier($supplier_nama, $supplier_alamat, $supplier_no_telp, $supplier_email);
}
?>
<link rel="stylesheet" href="style4.css" />

<nav class="navbar navbar-default">
            <div class="container-fluid">

            </div>

            <li><a href="beranda.php">Beranda</a></li>
            <li><a href="mohon.php">Pemohonan</a></li>
            <li><a href="lanjut.php">Supplier</a></li>
            <li><a href="masuk.php">Barang Masuk</a></li>
            <li><a href="keluar.php">Barang Keluar</a></li>
        </nav>
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
    

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">

    <fieldset>
        <legend>Hasil Data Supplier</legend>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Nama Supplier</td>
                    <td> : </td>
                    <td><?php echo $data->supplier_nama; ?></td>
                </tr>
                <tr>
                    <td>Alamat Supplier</td>
                    <td> : </td>
                    <td><?php echo $data->supplier_alamat; ?></td>
                </tr>
                <tr>
                    <td>No Telp Supplier</td>
                    <td> : </td>
                    <td><?php echo $data->supplier_no_telp; ?></td>
                </tr>
                <tr>
                    <td>Email Supplier</td>
                    <td> : </td>
                    <td><?php echo $data->supplier_email; ?></td>
                </tr>
            </table>
</div>
</div>
</div>
        </form>