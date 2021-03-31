<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h3>Input Data</h3>
        <br>
    </div>

    <?php
    include "koneksi.php";
    $id = $_GET['id'];
    $query_mysql = mysqli_query($koneksi,"SELECT * FROM produk WHERE id='$id'")or die(mysql_error());
    $nomor = 1;
    while($data = mysqli_fetch_array($query_mysql)){
    ?>
    

    <form action="update.php" method="post"> 
        <div class="container">
            <label class="control-label col-sm-2" for="nama_produk">Nama Produk</label>
            <div class="col-sm-10" name="nama_produk">
                <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                <input type="text" class="form-control" name="nama_produk" value="<?php echo $data['nama_produk'] ?>">
            </div>
        </br>    
    </div>
        <div class="container">
            <label class="control-label col-sm-2" for="keterangan">Keterangan</label>
            <div class="col-sm-10" name="keterangan">
                <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                <input type="text" class="form-control" name="keterangan" value="<?php echo $data['keterangan'] ?>">
            </div>
        </br>
    </div>
        <div class="container">
            <label class="control-label col-sm-2" for="harga">Harga</label>
            <div class="col-sm-10" name="harga">
                <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                <input type="text" class="form-control" name="harga" value="<?php echo $data['harga'] ?>">
            </div>
        </br>
    </div>
    <div class="container">
            <label class="control-label col-sm-2" for="jumlah">Jumlah</label>
            <div class="col-sm-10" name="jumlah">
                <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                <input type="text" class="form-control" name="jumlah" value="<?php echo $data['jumlah'] ?>">
            </div>
        </br>
    </div>
        <div class="container">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a class="btn btn-danger" href="index.php">Batal</a>
        </div>
    <?php } ?>
    </form>
</body>
</html>