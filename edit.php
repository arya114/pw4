<?php 
    require 'config.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $result = mysqli_query($mysqli, "SELECT * FROM hijab WHERE id = '$id'");
        $row = mysqli_fetch_array($result);
    }

    if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];

        $update = mysqli_query($mysqli, "UPDATE hijab SET nama='$nama', harga='$harga' WHERE id='$id'");

        if($update){
            header("Location:hasil.php");
        }
    }
?>

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
        <h3>Edit Produk</h3>
        <form action="" method="post">
            
            <label for="">Nama</label><br>
            <input type="text" name="nama" class="form-text" value=<?=$row['nama'];?>><br>
            
            <label for="">Harga</label><br>
            <input type="text" name="harga" class="form-text" value=<?=$row['harga'];?>><br>
            
            <input type="submit" name="submit" value="Kirim" class="btn-submit">
        
        </form>
    </div>

</body>
</html>