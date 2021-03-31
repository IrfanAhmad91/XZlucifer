<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <title>Document</title>
</head>
<body>
    <script type="text/javascript">
            function deleteconfig(){
            var tujuan=$(this).attr('id');
            var hapusin=confirm("Apakah Anda yakin ingin menghapus data ini?");
                if(hapusin==true){
                    window.location.href=tujuan;
                }   
                else{
                    alert("Data Batal dihapus");
                }
                    return hapusin;
            }
        </script>
    <h3>Tabel Produk</h3>
    <br/>

    <a class="btn btn-primary" href="input.php">+ Tambah data baru</a>

    <table border="2" class="table">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Keterangan</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Opsi</th>
            </tr>
        

            <?php
            include 'koneksi.php';
            $query_mysql = mysqli_query($koneksi,"SELECT * FROM produk")or die(mysql_error());
            $nomor = 1;
            while($data = mysqli_fetch_array($query_mysql)){
            ?>    
        
            <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo $data['nama_produk']; ?></td>
                <td><?php echo $data['keterangan']; ?></td>
                <td><?php echo $data['harga']; ?></td>
                <td><?php echo $data['jumlah']; ?></td>
                <td>
                    <a class="btn btn-success" href="edit.php?id=<?php echo $data['id']; ?>">Edit</a>
                    <a class="btn btn-danger" href="hapus.php?id=<?php echo $data['id']; ?>" onclick="return deleteconfig()" role="button">Hapus</a>
            </tr>
        <?php } ?>
    </table>
    </thead>
</body>
</html>
