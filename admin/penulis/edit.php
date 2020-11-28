<?php 

/**
 * EDIT DATA PENULIS
 */

	include '../../config/koneksi.php';

	require_once '../../log/log.php';

	//create log
	tulis_log ("edit_penulis");

	//menyimpan data kedalam variabel
	$id 			= $_POST['id'];
	$nama			= $_POST['nama'];
	$telepon		= $_POST['telepon'];
	$alamat			= $_POST['alamat'];
	$email			= $_POST['email'];

	//query sql untuk insert data
	$query = "UPDATE penulis SET nama='$nama' , telepon='$telepon', alamat='$alamat', email='$email' where id ='$id'";

	mysqli_query($koneksi, $query);

	//mengalihkan ke halaman index.php
	header("location: index.php");


	//EOF