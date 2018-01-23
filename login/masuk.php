<?php
session_start(); 
include_once('koneksi.php');
//$coba=$_POST[$aku];

if ( isset($_POST['submit_log']) ) {
	$sth = $dbh->prepare( "SELECT * FROM r_member WHERE r_user_name=? and r_pass=? " );
   
    $aku = $_POST['password'];
    $coba = MD5("robotika" . $aku);
    //$result1 =  $_POST['status'];
	//$result2 =  $_POST['a_status'];
	$sth->execute( array( $_POST['username'], $coba ) );
   
	$result = $sth->fetch( PDO::FETCH_OBJ );
  
   

    
  //  $result1 =  ;
//	$result2 =  ;
	
	if ( $result ) {
       if($result->r_id_member==1)
           
        {
            $_SESSION['id_admin'] = $result->r_id_member;
            header( 'Location:../../g4j4h_duduk/admin_panel.php');
        }
        else {
		
		$_SESSION['id_member'] = $result->r_id_member;
		 echo "<script type='text/javascript'>alert('Anda berhasil Melakukan Login.');document.location='../../f_member_log/member_panel.php'</script>";
		
		}
	} else 
		echo "<script type='text/javascript'>alert('Anda Gagal Login, Isikan Username dan Password dengan benar');document.location='index.html'</script>";
        
}
?>