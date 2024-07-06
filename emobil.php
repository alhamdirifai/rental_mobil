<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>
    <?php
    include("konek.php");
    $id = $_GET['id'];
    $cari = mysqli_query($konek, "select * from mobil where id_mobil='$id'");
    $data = mysqli_fetch_array($cari);
    ?>
    
        <div class="card">
            <h5 class="card-header">ubah data mobil</h5>
            <div class="card-body">
                <form action="?x=umobil" method="post">
                        <input type="hidden" name="kode" value="<?php echo $data['id_mobil'];?>">
                        <div class="form-group">
                            <label>Nomor Polisi </label>
                            <input type="text" class="form-control" name="txtNopol" value="<?php echo $data['nopol'];?>"> 
                        </div>
                        <div class="form-group">
                            <label>Merek Mobil </label>
                            <input type="text" class="form-control" name="txtMerek" value="<?php echo $data['merek'];?>">
                        </div>
                        
                        <div class="form-group">
                            <label>Tahun Keluaran </label>
                            <input type="text" class="form-control" name="txtTahun" value="<?php echo $data['thn'];?>"> 
                        </div>
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="text" class="form-control" name="txtHarga" value="<?php echo $data['harga'];?>">
                        </div>


                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
                    
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