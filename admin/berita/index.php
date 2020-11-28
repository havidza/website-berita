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
        <a href="#" class="list-group-item list-group-item-action bg-light">Berita</a>
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
    
      <!-- Content Utama -->

      <div class="container-fluid">
        <div class="row">
          <div class="col-md">
            
            <h1 class="mt-4">Berita</h1>
              <br>
            <a href="form-add.php">
              <button type="button" class="btn btn-success"> + Tambah Data </button><br><br>
            </a>
              
             <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Judul</th>
                  <th scope="col">Gambar</th>
                  <th scope="col">Waktu Terbit</th>
                  <th scope="col">Isi Berita</th>
                  <th scope="col">Headline</th>
                  <th scope="col">Nama Penulis</th>
                  <th scope="col">Actions</th>
                  
                </tr>

              </thead>
              <tbody>

                <?php

                  $beritas = mysqli_query($koneksi, 'SELECT * FROM berita');
                  // $sql ='SELECT berita.judul,gambar,waktu_terbit,isi,headline,berita_jenis.judul,penulis.nama from berita inner join berita_jenis on berita.id = berita_jenis.id inner join penulis on berita.id=penulis.id';
                  $no = 1;

                  foreach ($beritas as $berita) {

                ?>

                  <td><?php echo $no++ ?></td>
                  <td><?php echo $berita['judul'] ?></td>
                  <td><img src="../../images/<?php echo $berita['gambar'] ?>" width='180' height='150'></td>
                  <td><?php echo $berita['waktu_terbit'] ?></td>
                  <td><?php echo $berita['isi'] ?></td>
                  <td><?php echo $berita['headline'] ?></td>
                  <td> <?php 

                        //mengambil data dari id $berita ['id']

                        $iddd     = $berita['id'];

                          //query mencari nama penulis
                           $query = "select * from penulis where id = '$iddd'";
                            
                          // data produk jenis
                          $data = mysqli_query($koneksi, $query);

                          // fetch array
                          $penulis = mysqli_fetch_array($data);

                          // tampilkan nama penulis
                          echo $penulis['nama'];
                  ?>
                    

                  </td>
                  <td><a href='<?php echo 'form-edit.php?id=' . $berita['id'] ?>' >

                       <button type='button' class='btn btn-info'>Edit</button>
                        <a href='<?php echo 'delete.php?id='. $berita['id'] ?>'>
                       <button type='button' class='btn btn-danger'>Hapus</button>
                      </a>
      
                
              </tbody>
              <?php } ?>
            </table>
            </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
    <!-- End Content Utama -->
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
