<?php
include('../koneksi.php');

session_start();
       if (!isset($_SESSION['id_admin'])){
     header( 'Location:../login/index.html');
 } else {
$_SESSION['idfolder1'] = $_POST['id1'];
$tes = $_SESSION['idfolder1'];
$query3= "SELECT * FROM tb_category where p_id_category = '$tes'";
           $result3 = $dbh->query($query3)->fetch();
$tes1 = $result3['c_nama_kategori'];
$query = "DELETE FROM tb_category WHERE p_id_category = '$tes'";

if($dbh->exec($query))
{
   
    echo "<script type='text/javascript'>alert('Anda berhasil menghapus Season.');document.location='settings.php'</script>";
}
else
    echo "<script type='text/javascript'>document.location='settings.php'</script>";
       }
?>