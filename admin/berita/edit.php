<?php
	
/**
 * EDIT DATA BERITA
 */

	include '../../config/koneksi.php';
	require_once '../../log/log.php';

	//create log
	tulis_log ("edit berita");


	//menyimpan data kedalam variabel
	$id 			= $_POST['id'];
	$judul			= $_POST['judul'];
	$gambar			= $_POST['gambar'];
	$waktu_terbit	= $_POST['waktu_terbit'];
	$isi 			= $_POST['isi'];
	$headline		= $_POST['headline'];
	$penulis		= $_POST['penulis'];
	$jenis 			= $_POST['jenis'];

	$query = "UPDATE berita SET
			judul			='$judul' ,
			gambar			='$gambar' ,
			waktu_terbit	='$waktu_terbit',
			isi				='$isi', 
			headline		='$headline',
			penulis_id		='$penulis',
			berita_jenis_id	='$jenis'
			where id='$id'";

	mysqli_query($koneksi, $query);

	//mengalihkan ke halaman index.php
	header("location:index.php");


	//EOF
	

