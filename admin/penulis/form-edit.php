<?php

	include '../../config/koneksi.php';

	$id 		= $_GET['id'];
	$penulis	= mysqli_query($koneksi, "SELECT * FROM penulis where id='$id'");
	$row 		= mysqli_fetch_array($penulis);

	?>


<!DOCTYPE html>
<html lang="en">

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

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Admin Panel BeritaSatu </div>
      <div class="list-group list-group-flush">
        <a href="../index.php" class="list-group-item list-group-item-action bg-light">Dashboard</a>
        <a href="../berita/index.php" class="list-group-item list-group-item-action bg-light">Berita</a>
        <a href="../berita-jenis/index.php" class="list-group-item list-group-item-action bg-light">Berita Jenis</a>
        <a href="../penulis/index.php" class="list-group-item list-group-item-action bg-light">Penulis</a>
        <a href="../login/logout.php" class="list-group-item list-group-item-action bg-light">Log Out</a>

      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Menu</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          
        </div>
      </nav>

      <div class="container-fluid">
        <div class="row">
          <div class="col-md">
            
            <h1 class="mt-4">Edit Data Penulis</h1>
              <br>

              <!-- Untuk membuat border kotak pada content  -->
            	<div class="card">	

            	<!-- Untuk membuat border kotak pada content  -->
				<div class="card-body">

				 <!-- Mulai Form -->
					<form action="edit.php" method="post">
						<input type="hidden" value="<?php echo $row['id']; ?>" name="id">
						<div class="form-group row">
							<label for="inputName" class="col-sm-2 col-form-label">Nama Penulis</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" value="<?php echo $row['nama']; ?>" name="nama" required="required">
							</div>
						</div>

						<div class="form-group row">
							<label for="inputTelepon" class="col-sm-2 col-form-label">Telepon</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" value="<?php echo $row['telepon']; ?>" name="telepon" required="required">
							</div>
						</div>

						<!-- Pembuatan input type textarea -->
						<div class="form-group row">
							<label for="inputAlamat" class="col-sm-2 col-form-label">Alamat</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" value="<?php echo $row['alamat']; ?>" name="alamat" required="required">
							</div>
						</div>
						<!-- End Textarea -->

						<div class="form-group row">
							<label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" value="<?php echo $row['email']; ?>" name="email" required="required">
							</div>
						</div>

						<center>
						<button class="btn btn-primary">Submit</button>
					</center>
					</form>
					<!-- End Form  -->

				</div>
			</div>
              </tbody>
            </table>
            </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  
  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>