<?php
/*
$host = "localhost";
$user = "root";
$pass = "";
$name = "barunastra";
 
$koneksi = mysql_connect($host, $user, $pass) or die("Koneksi ke database gagal!");
mysql_select_db($name, $koneksi) or die("Tidak ada database yang dipilih!");
*/
$db_user = 'root';
$db_pass = '';
$db_name = 'rnbfash_db';
 
// connect to database
$dsn = 'mysql:dbname=' . $db_name . ';charset=utf8;host=localhost';
try {
        $dbh = new PDO( $dsn, $db_user, $db_pass );
   
} catch ( PDOException $e ) {
        echo 'Connection failed: ' . $e->getMessage();
}