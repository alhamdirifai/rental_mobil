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
    
             <div class="card">
                <h5 class="card-header">Ubah data admin</h5>
                <div class="card-body">
                    <form action="?x=uadmin" method="post">
                        <?php
                            include("konek.php");
                            $id = $_GET['id'];
                            $cari = mysqli_query($konek, "select * from admin where id_admin='$id'") or die(mysqli_error());
                            $data = mysqli_fetch_array($cari);
                        ?>
                        <input type="hidden" name="kode" value="<?php echo $data['id_admin']; ?>">
                        <div class="form-group">
                            <label>nama lengkap </label>
                            <input type="text" class="form-control" name="txtNama" value="<?php echo $data['nama_admin'];?>"> 
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select name="kelamin" class="form-control">
                                <option value="<?php echo $data['jenkel_admin'];?>"><?php echo $data['jenkel_admin'];?></option>
                                <!--<option value="Laki-Laki"></option>-->
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Username </label>
                            <input type="text" class="form-control" name="txtUsername" value = "<?php echo $data['Username'];?>"> 
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="txtPassword" value = "<?php echo $data['Password'];?>">
                        </div>

                        <div class="form-group">
                            <label>Level</label>
                            <select name="level" class="form-control">

                                <option value="<?php echo $data['level'];?>"><?php echo $data['level'];?></option>
                                <option value="Admin">Admin</option>
                                <option value="Super">Super</option>
                            </select>
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