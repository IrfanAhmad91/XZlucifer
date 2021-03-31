<?php

    $koneksi = mysqli_connect("localhost","root","","arkademy");

    // Cek Koneksi
    if (mysqli_connect_error()){
        echo "Koneksi Database GAGAL !!!" . mysqli_connect_error();
    }
?>    