<?php

/**
 * TAMBAH DATA PENULIS
 */
	

	include '../../config/koneksi.php';
	require_once '../../log/log.php';

	//create log
	tulis_log ("insert_penulis");

	//menyimpan data ke dalam variabel
	$nama 			 = $_POST['nama'];
	$telepon		 = $_POST['telepon'];
	$alamat 		 = $_POST['alamat'];
	$email	 		 = $_POST['email'];


	//query SQL untuk insert data
	$query = "INSERT INTO penulis SET
		 		nama	= '$nama', 
		 		telepon	= '$telepon',
		 		alamat	= '$alamat',
		 		email  	= '$email'";

	mysqli_query($koneksi, $query);
	
	//mengalihkan ke halaman index.php
	header("location:index.php");




//EOF