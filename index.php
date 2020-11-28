<?php

	include 'config/koneksi.php';

?>


<!DOCTYPE html>
<html>
<head>
	<title>Web Berita</title>
	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   

    <!-- Bootstrap -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery/jquery.min.js">
    </script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
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
		      <li class="nav-item active">
		        <a class="nav-link" href="#">Beranda <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="pages/olahraga.php">Olahraga</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="pages/otomotif.php">Otomotif</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="pages/politik.php">Politik</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Travelling</a>
		      </li>
				      
		    </ul>
		  </div>
		</nav>

		<!-- End Navbar -->


		<br>
		<div class="row">
			<div class="col-md-8">

				<!-- Mulai Carousel / Slideshow -->

				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					  <ol class="carousel-indicators">
					    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					  </ol>
					  <div class="carousel-inner">
					    <div class="carousel-item active">
					      <img class="d-block w-100" src="images/img1.jpeg" alt="First slide">
					    </div>
					    <div class="carousel-item">
					      <img class="d-block w-100" src="images/img2.jpg" alt="Second slide">
					    </div>
					    <div class="carousel-item">
					      <img class="d-block w-100" src="images/img3.jpeg" alt="Third slide">
					    </div>
					  </div>
					  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					    <span class="carousel-control-next-icon" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					  </a>
					  <br>
				</div>

				<!-- End Slideshow -->

				<!-- Breadcrumb  -->

				<nav aria-label="breadcrumb" style="background-color: #ffffff ; ">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active" aria-current="page"><a href="#">Beranda</a></li>
						<li class="breadcrumb-item"><?php echo date('l, d-m-y'); ?></li>
					</ol>
				</nav>

				<!-- End Breadcrumb -->
				
				<!-- Content Utama -->

				<div class="berita">

					<?php 

						$beritas 	= mysqli_query($koneksi, 'SELECT * FROM berita where berita_jenis_id=5');
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
						echo $penulis['nama'];

					?>
					 - 
					<?php echo $berita['waktu_terbit'] ?>
						
					</h6><br>
					 <img src="images/<?php echo $berita['gambar'] ?>"  width="100%"><br><br>

					<p align="justify"> <?php echo $berita['isi']; ?></p>
					<hr>

					


					
				</div>
			</div>

			
			<!-- End Content Utama -->
			
			<!-- Sidebar -->

			<div class="col-md-4">
				<div class="berita2">
					<div class="isiBerita">

						<img src="images/logo.png" width="100%"><br><br>

						<h4>PDIP Kecewa NasDem Capreskan Anies: Kasihan Pak Jokowi</h4><br>
						<img src="images/img1.jpeg" width="100%"><br><br>

						<h6><b style="color:#0099CC; ">Read</b> | 467 words | June 2019</h6><br>
						<p align="justify">PDIP menyayangkan sikap Partai NasDem yang menyatakan siap mencalonkan..</p>
						<a href="pages/politik.php"><button type="button" class="btn btn-outline-info">Read More</button></a> <br><br>

						<img src="images/logo.png" width="100%"><br><br>

						<h4>Menyempurnakan Makro Pariwisata Kita</h4><br>
						<img src="images/img5.jpeg" width="100%"><br><br>

						<h6><b style="color:#0099CC; ">Read</b> | 467 words | June 2019</h6><br>
						<p align="justify">Pariwisata Indonesia mengalami pertumbuhan yang apik</p>
						<a href="pages/travelling.php"><button type="button" class="btn btn-outline-info">Read More</button></a><br><br>


						
		
		</div>
				
		</div>
		

	</div>
	<?php } ?>
	<!-- End Sidebar -->
	
	</div>
	<br><br><br>

			<!-- Mulai Footer -->
		<footer class="page-footer font-small stylish" style="background-color: #0099CC; color: #ffffff; ">

		  <!-- Footer Links -->
		  <div class="container text-center text-md-left">

		    <!-- Grid row -->
		    <div class="row">

		      <!-- Grid column -->
		      <div class="col-md-4 mx-auto">

		        <!-- Content -->
		        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Contact Us</h5>
		        <p>Berita Satu Plaza, Lantai 11 Kav. 35-36, Jl. Jend. Gatot Subroto, Jakarta Selatan, Jakarta 12950 Telp: +62 21 2995 7500 Fax: +62 21 5277975 BeritaSatu Media Holdings </p>

		      </div>
		      <!-- Grid column -->

		      <hr class="clearfix w-100 d-md-none">

		      <!-- Grid column -->
		      <div class="col-md-2 mx-auto">

		        <!-- Links -->
		        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Berita</h5>

		        <ul class="list-unstyled">
		          <li>
		            Olahraga
		          </li>
		          <li>
		           Otomotif
		          </li>
		          <li>
		            Travelling
		          </li>
		          <li>
		            Politik
		          </li>
		        </ul>

		      </div>
		      <!-- Grid column -->

		      <hr class="clearfix w-100 d-md-none">

		      <!-- Grid column -->
		     

		      <hr class="clearfix w-100 d-md-none">

		      <!-- Grid column -->
		      <div class="col-md-2 mx-auto">

		        <!-- Links -->
		        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Email</h5>

		        <ul class="list-unstyled">
		          <li>
		           beritasatu@gmail.com
		          </li>
		         
		        </ul>

		      </div>
		      <!-- Grid column -->

		    </div>
		    <!-- Grid row -->

		  </div>
		  <!-- Footer Links -->


		  <hr>

		  <!-- Copyright -->
		  <div class="footer-copyright text-center py-3">© 2019 Copyright: BeritaSatu.com
		   
		  </div>
		  <!-- Copyright -->

		</footer>
		<!-- End Footer -->


</div>


</body>
</html>