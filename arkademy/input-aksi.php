<?php

    include "koneksi.php";
    $nama_produk = $_POST['nama_produk'];
    $keterangan = $_POST['keterangan'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];

    mysqli_query($koneksi, "INSERT INTO produk VALUES ('', '$nama_produk','$keterangan','$harga','$jumlah')");

    if ('mysqli_query'){
        echo "<script>alert('Data Berhasil Simpan Yeayyy');window.location='index.php'</script>";
    }
?>