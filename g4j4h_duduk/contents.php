<?php
include('../koneksi.php');
session_start();
       if (!isset($_SESSION['id_admin'])){
     header( 'Location:login.html');
 } else {
$jut = $_SESSION['id_admin'];
$query = "SELECT * FROM tb_login where m_id_user='$jut'";
           $result = $dbh->query($query)->fetch();
           $news = $_POST['r_news_data'];
           $judul = $_POST['p_judul'];
?>

<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <title><?php echo $judul; ?></title>
</head>
<body>
<div style="width: 640px; font-family: Arial, Helvetica, sans-serif; font-size: 11px;">
  <?php echo $news; ?>
</div>
</body>
</html>
<?php  } ?>