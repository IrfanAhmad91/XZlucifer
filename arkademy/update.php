<?php 

    include 'koneksi.php';
    $id = $_POST['id'];
    $nama_produk = $_POST['nama_produk'];
    $keterangan = $_POST['keterangan'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];

    mysqli_query($koneksi, "UPDATE produk SET nama_produk='$nama_produk', keterangan='$keterangan', harga='$harga', jumlah='$jumlah' WHERE id='$id'");

    if ('mysqli_query'){
        echo "<SCRIPT>alert('Data Berhasil diupdate');window.location='index.php'</SCRIPT>";
        }

?>