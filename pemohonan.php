<?php
class Pemohonan extends Database
{
    // Menampilkan Semua Data
    public function index()
    {

        $mohon = mysqli_query($this->koneksi, "select * from pemohonan_pengadaan");
        // var_dump($datadosen);
        return $mohon;
    }

    // Menambah Data
    public function create($barang_kode, $pemohonan_jml, $pemohonan_tgl_buat, $pemohonan_tgl_deadline
    
    
    )
    {
        mysqli_query(
            $this->koneksi,
            "insert into pemohonan_pengadaan values(null,'$barang_kode','$pemohonan_jml', '$pemohonan_tgl_buat', '$pemohonan_tgl_deadline')"
        );
    }
    // Menampilkan Data Berdasarkan ID
    public function show($pemohonan_id)
    {
        $mohon = mysqli_query(
            $this->koneksi,
            "select * from pemohonan_pengadaan where pemohonan_id='$pemohonan_id'"
        );
        return $mohon;
    }

    // Menampilkan data berdasarkan id
    public function edit($pemohonan_id)
    {
        $mohon = mysqli_query(
            $this->koneksi,
            "select * from pemohonan_pengadaan where pemohonan_id='$pemohonan_id'"
        );
        return $gaji;
    }
    // mengupdate data berdasarkan id
    public function update($pemohonan_id, $barang_kode, $pemohonan_jml, $pemohonan_tgl_buat, $pemohonan_tgl_deadline)
    {
        mysqli_query(
            $this->koneksi,
            "update pemohonan_pengadaan set pengadaan = '$pemohonan_tgl_deadline', barang_kode = '$barang_kode', 
            pemohonan_tgl_buat ='$pemohonan_tgl_buat',pemohonan_tgl_deadline='$pemohonan_tgl_deadline' 
            where pemohonan_id='$pemohonan_id'"
        );
    }

    // menghapus data berdasarkan id
    public function delete($pemohonan_id)
    {
        mysqli_query($this->koneksi, "delete from pemohonan where pemohonan_id='$pemohonan_id'");
    }
}