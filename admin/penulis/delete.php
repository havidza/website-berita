<?php

/**
 * HAPUS DATA PENULIS
 */
	include '../../config/koneksi.php';

	require_once '../../log/log.php';

	//create log
	tulis_log ("delete_penulis");

	//menyimpan data id kedalam variabel
	$id	= $_GET['id'];

	//query SQL untuk insert data
	$query = "DELETE FROM penulis where id='$id'";

	mysqli_query($koneksi, $query);

	//mengalihkan ke halaman index.php
	header("location:index.php");


	//EOF