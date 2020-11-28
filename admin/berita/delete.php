<?php

/**
 * DELETE DATA BERITA
 */

	include '../../config/koneksi.php';
	require_once '../../log/log.php';

	//create log
	tulis_log ("Delete berita-jenis");


	//menyimpan data id kedalam variabel
	$id	= $_GET['id'];

	//query SQL untuk insert data
	$query = "DELETE FROM berita where id='$id'";
	mysqli_query($koneksi, $query);

	//mengalihkan ke halaman index.php
	header("location:index.php");


	//EOF