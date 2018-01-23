<?php  
include('koneksi.php');
session_start();
    $dx = $_GET['id'];
    $_SESSION['kategori']=$dx;
//echo $dx;
header( 'Location:kategori.php');
?>