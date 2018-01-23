<?php

//mulai proses tambah data
//cek dahulu, jika tombol tambah di klik
if( isset($_POST['submit_reg']) ){
    //inlcude atau memasukkan file koneksi ke database
    include('../koneksi.php');
    //jika tombol tambah benar di klik maka lanjut prosesnya

    //$cust_id   = $_POST['cui'];
    $m_user_name   = $_POST['username'];
    $m_pass=$_POST['password'];
    $m_conpass=$_POST['m_password'];
    $m_nama   = $_POST['nama'];
    $m_email   = $_POST['email'];
    $m_nrp   = $_POST['nrp'];
    $m_ttl   = $_POST['tgl'];
    $m_alamatsby   = $_POST['alamatsby'];
    $m_jurusan   = $_POST['jurusan'];
    $m_angkatan   = $_POST['angkatan'];
    
    

        

    

    
    $sthandler = $dbh->prepare("SELECT m_email FROM b_member WHERE m_email = $m_email");
//$sthandler->bindParam($m_email, $username);
$sthandler->execute();
    //$city_id   = $_POST['cid'];
    if(empty($m_email) || empty($m_pass) ){
       
    echo "<script type='text/javascript'>alert('Semua kolom wajib Anda isi!');document.location='index.html'</script>";
        
    }
        if($m_pass != $m_conpass){
           
    echo "<script type='text/javascript'>alert('Invalid Password! Password yang Anda masukkan tidak sesuai dengan yang terdaftar.');document.location='index.html'</script>";     
    } 
    if (!filter_var($m_email, FILTER_VALIDATE_EMAIL)){
        
     echo "<script type='text/javascript'>alert('masukkan email yang valid');document.location='index.html'</script>";    
   
    }
    if (strlen($m_pass) <= 6 ){
      
        echo "<script type='text/javascript'>alert('Maaf, demi keamanan akun Anda, password yang disarankan minimal 6 digit.');document.location='index.html'</script>"; 
    
}
    if ( strlen($m_pass) >= 18){
        
        echo "<script type='text/javascript'>alert('Maaf, demi keamanan akun Anda, password yang disarankan maksimal 18 digit.');document.location='index.html'</script>"; 
    
}
     $query = $dbh->prepare( "SELECT m_email
			 FROM b_member
			 WHERE m_email = ?" );
$query->bindValue( 1, $m_email );
$query->execute();

if( $query->rowCount() > 0 ) { # If rows are found for query
    
    echo "<script type='text/javascript'>alert('Maaf, alamat email ini sudah terdaftar!');document.location='index.html'</script>"; 
    //echo "Email found!";
}

   
    if(!isset($error)){
//no error
$sthandler = $dbh->prepare("SELECT m_email FROM b_member WHERE m_email = $m_email");
//$sthandler->bindParam($m_email, $username);
$sthandler->execute();
 
if($sthandler->rowCount() > 0){
    echo "<script type='text/javascript'>alert('Maaf, alamat email ini sudah terdaftar!');document.location='index.html'</script>";
   
} else {
   
    $m_pas = md5("darwinjancuk" . $m_pass);
    $user_activation_hash = sha1(uniqid(mt_rand(), true));
    $id_random = rand( 99999,239028302);
    $table = 'b_member'; // ubah ke nama tabel
    $field = '`m_email`, `m_pass`, `m_name`, `m_user_name`, `m_nrp`, `m_ttl`, `m_alamatsby`, `m_jurusan`, `m_angkatan`'; // kolomnya, kalo > 1 pisahkan pakai koma
    $val = '?,?,?,?,?,?,?,?,?'; // ini sesuai jumlah kolomnya, pakai koma
    $array = array( $m_email, $m_pas, $m_nama, $m_user_name, $m_nrp, $m_ttl, $m_alamatsby, $m_jurusan, $m_angkatan
        ); // sesuai jumlah kolom juga
    
    $sth = $dbh->prepare( "INSERT INTO $table ($field) VALUES ($val)" );
    $xx=$sth->execute( $array );

    

       
    echo "<script type='text/javascript'>alert('Pendaftaran Berhasil!');document.location='index.html'</script>";
        

    
   // jika query input sukses
   
}
    
   }
}
?>