<?php 

require 'config.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $hapus = mysqli_query($mysqli, "DELETE FROM hijab WHERE id='$id'");

    if($hapus){
        header("Location:hasil.php");
    }
}