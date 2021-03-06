<!DOCTYPE html>
<html lang="en">

<?php
	include '../../config/koneksi.php';
?>

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
            
            <h1 class="mt-4">Tambah Data Jenis Berita</h1>
              <br>

              <!-- Untuk membuat border kotak pada content  -->
            	<div class="card">	

            	<!-- Untuk membuat border kotak pada content  -->
				<div class="card-body">

				 <!-- Mulai Form -->
					<form action="add.php" method="post">
						<div class="form-group row">
							<label for="inputJudul" class="col-sm-2 col-form-label">Jenis Berita</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="judul" placeholder="Jenis Berita" required="required">
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
