<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login</title>
    <style>
      

      body::before {
        content: "";
        background-image: url('bg-login.jpg'); /* Ganti path/to/your/background-image.jpg dengan path gambar Anda */
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0.6; /* Mengatur transparansi gambar */
        z-index: -1; /* Menempatkan elemen ini di belakang konten lain */
      }

      .card {
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        background-color: rgba(255, 255, 255, 0.8); /* Membuat background card sedikit transparan */
        z-index: 1;
      }

      .card-header {
        background-color: #007bff;
        color: white;
        font-size: 1.25rem;
        text-align: center;
      }

      .btn-primary {
        width: 100%;
        margin-top: 15px;
      }
    </style>

       
    
  </head>
  <body>
    <div class= "container mt-3">
        <div class = "row">
            <div class="col ">
             <div class="card w-50 mx-auto">
                <h5 class="card-header">Halaman Login</h5>
                <div class="card-body">
                    <form action="masuk.php" method="post">
                        <div class="form-group">
                            <label>Username </label>
                            <input type="text" class="form-control" name="txtUsername"> 
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="txtPassword">
                        </div>

                    <button type="submit" class="btn btn-primary">Masuk</button>
                    </form>
                    
                </div>
                </div>
            </div>
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