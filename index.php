<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>rental mobil</title>
    <style>
      .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
  </head>

  <body>
    <?php
    include("konek.php");
    session_start();
      if (isset($_SESSION['username'])){
        header("Location:login.php");
      }
    ?>

    <div class="container">
        <div class= "row">
            <div class="cool-md">
              <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <div class="container-fluid">
                    <a class="navbar-brand" href="#">Rental mobil</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="?x=beranda">Beranda</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="?x=order">Order</a>
                        </li>
                        <li class="nav-item dropdown">
                        <li class="nav-item">
                          <a class="nav-link" href="?x=mobil">Mobil</a>
                        </li>
                        <li class="nav-item dropdown">
                        <li class="nav-item">
                          <a class="nav-link" href="?x=admin">Admin</a>
                        </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Laporan
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="?x=rmobil">Mobil</a></li>
                            <li><a class="dropdown-item" href="?x=rorder">order</a></li>
                      
                          </ul>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="?x=keluar">Keluar</a>
                        </li>
                      </ul>
                      
                    </div>
                  
                </nav>
            </div>
        </div>
        <div class="row mt-3">
          <div class="col-md-4">

              <h4>Mobil Ready</h4>
              <ul class="list-group list-group-flush">
                <?php
                  $cari = mysqli_query($konek, "select * from mobil where s_mobil='AKTIF'");
                  while($data=mysqli_fetch_array($cari)){
                ?>
                <li class="list-group-item"><?php echo $data['merek'] . " - " . $data["nopol"] ;?></li>
                <?php
                }
                ?>
              </ul>
          </div>

          <div class="col-md-8 ">
            <?php include("kontrol.php"); ?>
          </div>
        </div>

        
        </div>

        <div class="footer">
          <div class="col-md-12 bg-light">
              <p class="text-center font-weight-bold">Rental Mobil &copy;2024</p>
          </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>