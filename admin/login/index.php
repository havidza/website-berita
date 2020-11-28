<!DOCTYPE html>
<html>
<head>
	
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin Panel BeritaSatu</title>

  <!-- Bootstrap core CSS -->
  <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../../css/simple-sidebar.css" rel="stylesheet">

  <!-- Bootstrap core JavaScript -->
  <script src="../../js/jquery/jquery.min.js"></script>
  <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</head>
<body>

	<!-- Mengecek username dan password -->

		<?php
			if(isset($_GET['pesan'])){
				if($_GET['pesan'] == "gagal"){
					echo "<script>
						eval(\"parent.location='index.php '\");
						alert ('Login gagal');
						</script>";


				}else if($_GET['pesan'] == "logout"){
					echo "Anda telah berhasil logout";
				}else if($_GET['pesan'] == "belum_login"){
					echo "<script>
						eval(\"parent.location='index.php '\");
						alert ('Anda harus login terlebih dahulu');
						</script>";
				}
	}

		?>

		<!-- End  -->

m
		<div class="container">

              <!-- Untuk membuat border kotak pada content  -->
              <br><br><br>
            <div class="card" style="width: 80%;">	

            	<!-- Untuk membuat border kotak pada content  -->
				<div class="card-body">

						 <!-- Mulai Form -->
					<form action="cek_login.php" method="post">
						<div class="form-group row">
							<label for="inputUsername" class="col-sm-2 col-form-label">Username</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="username" placeholder="Username">
							</div>
						</div>

						<div class="form-group row">
							<label for="inputUsername" class="col-sm-2 col-form-label">Password</label>
							<div class="col-sm-5">
								<input type="password" class="form-control" name="password" placeholder="Username">
							</div>
						</div>
						
						<input type="submit" class="btn btn-primary">

					</form>
            

				</div>
			</div>
		</div>
	
</body>
</html>