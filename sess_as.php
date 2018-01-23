<?php  
include('koneksi.php');
session_start();
    $dx = $_GET['id'];
    $_SESSION['loop']=$dx;
//echo $dx;
header( 'Location:single.php');
?>