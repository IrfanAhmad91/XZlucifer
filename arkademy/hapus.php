<?php

    include 'koneksi.php';
    $id = $_GET['id'];
    mysqli_query($koneksi, "DELETE FROM produk WHERE id='$id'") or die (mysqli_error());

    header("Location:index.php?pesan=hapus");

?>