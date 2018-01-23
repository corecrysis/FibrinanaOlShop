<?php
session_start();
include_once('../koneksi.php');
//$coba=$_POST[$aku];

if ( isset($_POST['submit_log']) ) {
	$sth = $dbh->prepare( "SELECT * FROM tb_login WHERE m_user_name=? and m_pass=? " );
   
    $aku = $_POST['password'];
    $coba = MD5("darwinjancuk" . $aku);
    //$result1 =  $_POST['status'];
	//$result2 =  $_POST['a_status'];
	$sth->execute( array( $_POST['username'], $coba ) );
   
	$result = $sth->fetch( PDO::FETCH_OBJ );
  
   

    
  //  $result1 =  ;
//	$result2 =  ;
	
	if ( $result ) {
       if($result->m_id_user==1)
           
        {
            $_SESSION['id_admin'] = $result->m_id_user;
            header( 'Location:../g4j4h_duduk/index.php');
        }
        else {
		
		$_SESSION['id_member'] = $result->m_id_user;
		 echo "<script type='text/javascript'>alert('Anda berhasil Melakukan Login.');document.location='../g4j4h_duduk/index.php'</script>";
		
		}
	} else 
		echo "<script type='text/javascript'>alert('Anda Gagal Login, Isikan Username dan Password dengan benar');document.location='index.html'</script>";
        
}
?>