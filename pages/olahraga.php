<?php
	include '../config/koneksi.php';
?>


<!DOCTYPE html>
<html>
<head>
	<title>Web Berita</title>
	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   

    <!-- Bootstrap -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../js/jquery/jquery.min.js">
    </script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
</head>
<body><br><br>
	<div class="container">
		<div class="card">
			<div class="card-body">
				Selamat Datang di Website BeritaSatu, Selamat Membaca !
			</div>	
		</div>
		
		<!-- NavBar -->

		<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #0099CC; ">
		  <a class="navbar-brand" href="#">Berita Satu</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarNavDropdown">
		    <ul class="navbar-nav">
		      <li class="nav-item">
		        <a class="nav-link" href="../index.php">Beranda <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item active">
		        <a class="nav-link" href="#">Olahraga</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="otomotif.php">Otomotif</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="politik.php">Politik</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="travelling.php">Travelling</a>
		      </li>
				      
		    </ul>
		  </div>
		</nav>

		<!-- End Navbar -->


		<br>
		<div class="row">
			<div class="col-md-8">

				<!-- Breadcrumb  -->

				<nav aria-label="breadcrumb" style="background-color: #ffffff ; ">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="../index.php">Berita</a></li>
						<li class="breadcrumb-item">Olahraga , <?php echo date('l, d-m-y'); ?></li>
					</ol>
				</nav>

				<!-- End Breadcrumb -->
				
				<!-- Content Utama -->

				<div class="berita">
					<?php 

						$beritas 	= mysqli_query($koneksi, 'SELECT * FROM berita where berita_jenis_id=3');
						foreach ($beritas as $berita ) {
							# code...
						
						

						?>

					<h2 style="color: #0099CC; "><?php echo $berita['judul'] ?></h2>

					<h6 style="color: #bdbdbd ;"> <?php 

						//mengambil data dari id penulis
						$idd 	= $berita['id'];

						//queri mencari nama penulis
						$query 	= "SELECT * FROM penulis where id = '$idd'";

						//data penulis
						$data 	= mysqli_query($koneksi, $query);

						//fetch array
						$penulis = mysqli_fetch_array($data);

						//tampilkan nama penulis
						echo "Havid Zaeni"

					?>
					 - 
					<?php echo $berita['waktu_terbit'] ?>
						
					</h6><br>
					 <img src="../images/<?php echo $berita['gambar'] ?>"  width="100%"><br><br>

					<p align="justify"> <?php echo $berita['isi']; ?></p>
					<hr>
					
				</div>
			</div>
			
			<?php } ?>

			<!-- End Content Utama -->
			
			<!-- Sidebar -->

			<div class="col-md-4">
				<div class="berita2">
					<div class="isiBerita">

						
						<img src="../images/logo.png" width="100%"><br><br>

						<h4>PDIP Kecewa NasDem Capreskan Anies: Kasihan Pak Jokowi</h4><br>
						<img src="../images/img1.jpeg" width="100%"><br><br>

						<h6><b style="color:#0099CC; ">Read</b> | 467 words | June 2019</h6><br>
						<p align="justify">PDIP menyayangkan sikap Partai NasDem yang menyatakan siap mencalonkan..</p>
						<a href="politik.php"><button type="button" class="btn btn-outline-info">Read More</button></a> <br><br>

						<img src="../images/logo.png" width="100%"><br><br>

						<h4>Menyempurnakan Makro Pariwisata Kita</h4><br>
						<img src="../images/img5.jpeg" width="100%"><br><br>

						<h6><b style="color:#0099CC; ">Read</b> | 467 words | June 2019</h6><br>
						<p align="justify">Pariwisata Indonesia mengalami pertumbuhan yang apik</p>
						<a href="travelling.php"><button type="button" class="btn btn-outline-info">Read More</button></a><br><br>
						


						
		
		</div>
				
		</div>
		

	</div>

	<!-- End Sidebar -->
	
	</div>
	<br><br><br>

			<!-- Mulai Footer -->
				<?php
					include 'footer.php';

				?>
		<!-- End Footer -->


</div>


</body>
</html>