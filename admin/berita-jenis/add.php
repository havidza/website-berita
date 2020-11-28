<?php

/**
 * TAMBAH DATA BERITA JENIS
 */

	include '../../config/koneksi.php';

	require_once '../../log/log.php';

	//create log
	tulis_log ("add berita-jenis");

	//menyimpan data ke dalam variabel
	$judul		 = $_POST['judul'];

	//query SQL untuk insert data
	$query = "INSERT INTO berita_jenis SET 
				judul	= '$judul'";

	mysqli_query($koneksi, $query);

	//mengalihkan ke halaman index.php
	header("location: index.php");


	//EOF