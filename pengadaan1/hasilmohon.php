<?php
if (isset($_POST['submit'])) {
   $kode_barang = $_POST['kode_barang'];
    $pemohonan_jml = $_POST['pemohonan_jml'];
    $pemohonan_tgl_buat = $_POST['pemohonan_tgl_buat'];
    $pemohonan_tgl_deadline = $_POST['pemohonan_tgl_deadline'];

    class pemohonan
    {
        public $kode_barang;
        public $pemohonan_jml;
        public $pemohonan_tgl_buat;
        public $pemohonan_tgl_deadline;

        public function __construct($kode_barang, $pemohonan_jml, $pemohonan_tgl_buat, $pemohonan_tgl_deadline)
        {
            $this->kode_barang = $kode_barang;
            $this->pemohonan_jml = $pemohonan_jml;
            $this->pemohonan_tgl_buat = $pemohonan_tgl_buat;
            $this->pemohonan_tgl_deadline = $pemohonan_tgl_deadline;
        }
    }

    class mohon extends pemohonan
    {
        public function status()
        {
            if ($this->pemohonan_tgl_deadline <= 5) {
                $status = "TIDAK DITERIMA";

            } else if ($this->pemohonan_tgl_deadline >= 5) {
                $status = "DITERIMA";

            }return $status;
        }

        public function lanjut()
        {
            if ($this->pemohonan_tgl_deadline <= 5) {
                echo "<br>";
                echo "Maaf Pengajuan Pemohonan Anda Tidak Diterima. <br>";
                echo "Silahkan Coba Lagi Nanti!!!";
                echo "<p><a href=utama.php>KLIK</a></p>";

            } else if ($this->pemohonan_tgl_deadline >= 5) {
                echo "Pengajuan Pemohonan Anda Diterima.<br>";
                echo "Silahkan Masuk Ke Tahap Selanjutnya";
                echo "<p><a href=lanjut.php>LANJUT</a></p>";
                echo "<br>";

            }return "";
        }
    }
    $data = new mohon($kode_barang, $pemohonan_jml, $pemohonan_tgl_buat, $pemohonan_tgl_deadline);
}
?>
<link rel="stylesheet" href="style4.css" />

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
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">

    <fieldset>
        <legend>Hasil</legend>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Nama Barang</td>
                    <td> : </td>
                    <td><?php echo $data->kode_barang; ?></td>
                </tr>
                <tr>
                    <td>Jumlah Barang</td>
                    <td> : </td>
                    <td><?php echo $data->pemohonan_jml; ?></td>
                </tr>
                <tr>
                    <td>Tanggal Pemohonan</td>
                    <td> : </td>
                    <td><?php echo $data->pemohonan_tgl_buat; ?></td>
                </tr>
                <tr>
                    <td>Pemohonan Tanggal Deadline</td>
                    <td> : </td>
                    <td><?php echo $data->pemohonan_tgl_deadline; ?></td>
                </tr>
                <tr>
                    <td>Status Pemohonan</td>
                    <td> : </td>
                    <td><?php echo $data->status(); ?></td>
                </tr>
                <tr>
                    <td><br><?php echo $data->LANJUT(); ?></td>
                </tr>
            </table>
</div>
</div>
</div>
        </form>