<?php

/**
 * DELETE DATA BERITA JENIS
 */


	include '../../config/koneksi.php';
	require_once '../../log/log.php';

	//create log
	tulis_log ("delete berita-jenis");

	//menyimpan data id kedalam variabel
	$id	= $_GET['id'];

	//query SQL untuk insert data
	$query = "DELETE FROM berita_jenis where id='$id'";
	mysqli_query($koneksi, $query);

	//mengalihkan ke halaman index.php
	header("location:index.php");


	//EOF