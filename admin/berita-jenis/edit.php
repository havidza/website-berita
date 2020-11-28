<?php 
	
/**
 * EDIT DATA BERITA JENIS
 */

	include '../../config/koneksi.php';
	require_once '../../log/log.php';

	//create log
	tulis_log ("edit berita-jenis");

	//menyimpan data kedalam variabel
	$id 	= $_POST['id'];
	$judul	= $_POST['judul'];

	//query SQL untuk insert data
	$query = "UPDATE berita_jenis SET judul='$judul' where id ='$id'";

	mysqli_query($koneksi, $query);

	//mengalihkan ke halaman index.php
	header("location: index.php");


	//EOF