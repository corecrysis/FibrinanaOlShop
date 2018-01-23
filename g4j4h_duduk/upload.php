<?php
include('../koneksi.php');
session_start();
$ds          = DIRECTORY_SEPARATOR;  //1
 
$storeFolder = 'uploads';   //2
 
if (!empty($_FILES)) {
    $ax =  $_SESSION['ax'];
    $tempFile = $_FILES['file']['tmp_name'];  
    $nama_gambar = $_FILES['file']['name'];//3             
    
        $rand_text = rand(99999,239028302);
		$rand_gambar= $rand_text.$nama_gambar;
    $targetPath =  $storeFolder . $ds;  //4
     
    $targetFile =  $targetPath.$rand_gambar ;  //5
  //  move_uploaded_file($tempFile,$targetFile);
// $imageFileType = pathinfo($targetFile,PATHINFO_EXTENSION);
//		$check = getimagesize($tempFile);
//	    if($check !== false) {
//	        $uploadOk = 1;
//	    } else {
//	        $uploadOk = 0;
//	    }
//	    if ($_FILES['file']['size'] > 15000000000000) {
//            echo "<script type='text/javascript'>alert('Sorry, your file is too large. size upload must less than 100 KB');document.location='upl_produk.php'</script>";
//		   // echo "Sorry, your file is too large.";
//		    $uploadOk = 0;
//		}
//		// Allow certain file formats
//		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "PNG" && $imageFileType != "JPG" && $imageFileType != "JPEG"
//		 ) {
//            echo "<script type='text/javascript'>alert('Sorry, only JPG, JPEG, & PNG files are allowed.');document.location='upl_produk.php '</script>";
//		   // echo "Sorry, only JPG, JPEG, & PNG files are allowed.";
//		    $uploadOk = 0;
//		}
//		if ($uploadOk == 1){
    //move_uploaded_file($tempFile,$targetFile); //6
     if(move_uploaded_file($tempFile,$targetFile)){
        //insert file information into db table
        
                
			// upload berhasil
		//unlink($lokasi);
                
                
                $table = 'tb_prod_gallery'; // ubah ke nama tabel
        $field = '`p_tmp_pict`,`g_id_gallery`'; // kolomnya, kalo > 1 pisahkan pakai koma
        $val = '?,?'; // ini sesuai jumlah kolomnya, pakai koma
        $array = array($targetFile , $ax   ); // sesuai jumlah kolom juga
 
        $sth = $dbh->prepare( "INSERT INTO $table ($field) VALUES ($val)" );
        $query1 = $sth->execute( $array );
        
       
        

if(($query1))
{
   // echo 'sukses';
    echo "<script type='text/javascript'>alert('Anda berhasil mengunggah foto.');document.location='upl_produk.php'</script>";
}
else{
    //echo 'gagal';
    echo "<script type='text/javascript'>alert('upload failed, please check your internet connection or image files titt');document.location='upl_produk.php'</script>";
    //echo '<a href="indiv_edit.php">Kembali</a>';
}	/*editProfileSemua($_POST['y_name'],$_POST['y_alamathome'],$_POST['y_kdposhome'],$_POST['y_tplahir'],$_POST['y_ttl'],$_POST['y_phone'],$_POST['y_idline'],$_POST['y_email'],$_POST['y_asalsch'],$_POST['y_alamatsch'],$_POST['y_kdpos'],$_POST['y_phonesch'],$_POST['y_class'],$_POST['y_ta'],$_POST['y_pembina'],$_POST['y_phonebina'],$_POST['y_idlinebina'],$_POST['y_emailbina'],$new_location);*/
			
			} else {
		// upload gagal
                echo "<script type='text/javascript'>alert('upload failed, please check your internet connection or image files');document.location='upl_produk.php'</script>";
				//echo 'upload failed, please check your internet connection or image files';
			}
//            }else{
//            echo "<script type='text/javascript'>alert('Format foto yang di upload tidak sesuai!');document.location='upl_produk.php'</script>";
//			//echo "Format foto yang di upload tidak sesuai!";
//		}
}

?>