<?php
include('../koneksi.php');
session_start();
       

           if(isset($_POST['submit'])){
              // $tes = $_SESSION['id_admin'];

$p_nama_folder         = $_POST['foldername'];

//$date2 = new DateTime("now", new DateTimeZone('Asia/Jakarta'));
//$p_timest= $date2->format('Y-m-d H:i:s');
//echo $p_timest;
    //$r_author_data = $result['m_name'];           
           
$table = 'tb_category'; // ubah ke nama tabel
        $field = '`c_nama_kategori`'; // kolomnya, kalo > 1 pisahkan pakai koma
        $val = '?'; // ini sesuai jumlah kolomnya, pakai koma
        $array = array( $p_nama_folder ); // sesuai jumlah kolom juga
 
        $sth = $dbh->prepare( "INSERT INTO $table ($field) VALUES ($val)" );
        $input = $sth->execute( $array );
mkdir($p_nama_folder);
  header( 'Location:settings.php');
   // echo "<script type='text/javascript'>alert('Anda berhasil Membuat artikel.');document.location='setting.php</script>";
//$foldername = $_POST["foldername"]; 


//echo "<script type='text/javascript'>alert('Anda berhasil membuat folder.');document.location='admin.html'</script>";
       
       }
?>