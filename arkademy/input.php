<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
    <br/>
    <br/>

    <div class="container">
        <h3>Input Data</h3>
        <br>
    <form action="input-aksi.php" method="post">
    <form class="form-horizontal">
			<div class="container">
				<label class="control-label col-sm-2" for="nama_produk">Nama Produk</label>
				<div class="col-sm-10" name="nama_produk">
					<input type="text" class="form-control"  name="nama_produk">
				</div>
			</br>
		</div>
            <div class="container">
				<label class="control-label col-sm-2" for="keterangan">Keterangan</label>
				<div class="col-sm-10" name="keterangan">
					<input type="text" class="form-control" name="keterangan">
				</div>
			</br>
		</div>
            <div class="container">
				<label class="control-label col-sm-2" for="harga">Harga</label>
				<div class="col-sm-10" name="harga">
					<input type="text" class="form-control" name="harga">
				</div>
			</br>
        </div>
            <div class="container">
				<label class="control-label col-sm-2" for="jumlah">Jumlah</label>
				<div class="col-sm-10" name="jumlah">
					<input type="text" class="form-control" name="jumlah">
				</div>
            </br>    
        </div>
            <div class="container">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a class="btn btn-danger" href="index.php" role="button">Batal</a>
        </div>
    </form>
</body>
</html>