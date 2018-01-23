<?php
include('koneksi.php');
//session_start();
//       if (!isset($_SESSION['id_admin'])){
//     header( 'Location:../index.php');
// } else {

           if(isset($_POST['submit'])){
              // $tes = $_SESSION['id_admin'];
               $r_email   = $_POST['email'];
               $r_fname   = $_POST['fname'];
               $r_lname   = $_POST['lname'];
               $r_city   = $_POST['city'];
               $r_name = $r_fname." ".$r_lname;
$query = "SELECT * FROM tb_subs where a_email='$r_email'";
           $result = $dbh->query($query)->fetch();
   
    
           if($result==false){
$table = 'tb_subs'; // ubah ke nama tabel
        $field = '`a_name`,`a_place`,`a_email`'; // kolomnya, kalo > 1 pisahkan pakai koma
        $val = '?,?,?'; // ini sesuai jumlah kolomnya, pakai koma
        $array = array( $r_name, $r_city, $r_email        ); // sesuai jumlah kolom juga
 
        $sth = $dbh->prepare( "INSERT INTO $table ($field) VALUES ($val)" );
        $input = $sth->execute( $array );

   
    echo "<script type='text/javascript'>alert('Anda berhasil melakukan subscribe, silahkan cek email Anda.');document.location='index.php'</script>";
           }
               else {
                   echo "<script type='text/javascript'>alert('Anda sudah pernah melakukan subscribe.');document.location='index.php'</script>";
                   
               }
       }
       //}
?>