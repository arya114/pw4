<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Tanggal Pinjam : <?=date("d-m-Y")?></p><br>
    <form action="" method="post" enctype="multipart/form-data">    

        <label for="">Tanggal Kembali : </label><br>
        <input type="date" name="kembalikan"><br><br>
        
        <label for="">Nama Peminjam : </label><br>
        <input type="text" name="nama"><br><br>

        <label for="">Buku : </label><br>
        <input type="file" name="gambar"><br><br>
        
        <input type="hidden" name="pinjam" value=<?= date("d-m-Y")?>>
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php 

    require 'config.php';

    if(isset($_POST['submit'])){
        $kembali = $_POST['kembalikan'];
        $pinjam = $_POST['pinjam'];
        $nama = $_POST['nama'];
        
        $gambar = $_FILES['gambar']['name'];
        $x = explode('.', $gambar);
        $ekstensi = strtolower(end($x));

        $gambar_baru = "$nama.$ekstensi";
        $tmp = $_FILES['gambar']['tmp_name'];

        if(move_uploaded_file($tmp, 'gambar/'.$gambar_baru)){
            $query = "INSERT INTO perpus (pinjam, kembali, nama) VALUES ('$pinjam','$kembali','$gambar_baru')";
            $result = $db->query($query);

            if($result){
                header("Location:index.php");
            }else{
                echo "gagal kirim";
            }
        }
        
    }
?>