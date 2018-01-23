<?php
include('../koneksi.php');
session_start();
       

           if(isset($_POST['submit'])){
              // $tes = $_SESSION['id_admin'];

$p_prod         = $_POST['p_prod'];
$p_desc         = $_POST['p_desc'];
$p_category         = $_POST['category'];

//$date2 = new DateTime("now", new DateTimeZone('Asia/Jakarta'));
//$p_timest= $date2->format('Y-m-d H:i:s');
//echo $p_timest;
    //$r_author_data = $result['m_name'];           
           
$table = 'tb_gallery'; // ubah ke nama tabel
        $field = '`g_nama_produk`,`g_deskripsi`,`g_category`'; // kolomnya, kalo > 1 pisahkan pakai koma
        $val = '?,?,?'; // ini sesuai jumlah kolomnya, pakai koma
        $array = array( $p_prod, $p_desc, $p_category ); // sesuai jumlah kolom juga
 
        $sth = $dbh->prepare( "INSERT INTO $table ($field) VALUES ($val)" );
        $input = $sth->execute( $array );

  header( 'Location:prod_gallery.php');
   // echo "<script type='text/javascript'>alert('Anda berhasil Membuat artikel.');document.location='setting.php</script>";
//$foldername = $_POST["foldername"]; 


//echo "<script type='text/javascript'>alert('Anda berhasil membuat folder.');document.location='admin.html'</script>";
       
       }
?>