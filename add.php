<?php 

require 'config.php';

if(isset($_POST['submit'], )){
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $date = $_POST['date'];
    $produk = $_FILES['produk']['name'];
    $x = explode('.',$produk);
    $ekstensi = strtolower(end($x));

    $produk_baru = "$nama.$ekstensi";
    $tmp = $_FILES['produk']['tmp_name'];

    if (move_uploaded_file($tmp, 'image/'.$produk_baru)){
        $kirim = mysqli_query($mysqli,"INSERT INTO hijab (nama, harga, date, produk) VALUES ('$nama', '$harga', '$date', '$produk_baru')");
        if($kirim){
            header("Location:hasil.php");
        }else {
            echo "gagal mengirim";
        }
    }
}
