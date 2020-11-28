<?php

//konfigurasi database
$host		= 'localhost';
$user		= 'root';
$password	= '';
$database	= 'blog';


//perintah php untuk akses ke database
try{
	$koneksi = new mysqli($host, $user, $password, $database);

}
catch (mysqli_sql_exception $e ) 
{
	echo "koneksi gagal" . $e->getMessage();	
}



//EOF