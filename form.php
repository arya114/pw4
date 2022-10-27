<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HIJUB SHOP</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <header>
        <h2>HIJUB SHOP</h2>
    </header>
    
    <div class="form-class">
        <h3>Tambah Produk</h3>
        <form action="add.php" method="post" enctype="multipart/form-data">
            
            <label for="">Nama Produk</label><br>
            <input type="text" name="nama" class="form-text"><br>
            
            <label for="">Harga</label><br>
            <input type="text" name="harga" class="form-text"><br>

            <label for="">Date </label><br>
            <input type="date" name="date"><br><br>

            <label for="">Produk : </label><br>
            <input type="file" name="produk"><br><br>
            
            <input type="submit" name="submit" value="Kirim" class="btn-submit">
        
        </form>
    </div>

</body>
</html>

<?php 

