<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>admin</title>
  </head>
  <body>
    <?php
        include("konek.php");
        $cari = mysqli_query($konek, "select * from admin") or die (mysqli_error());

    ?>
        <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Admin</th>
            <th scope="col">Jenis kelamin</th>
            <th scope="col">Level</th>
            <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
                while($data = mysqli_fetch_array($cari)){
            ?>
                <tr>
                    <th scope="row"><?php echo $no; ?></th>
                    <td><?php echo $data['nama_admin'];?></td>
                    <td><?php echo $data['jenkel_admin'];?> </td>
                    <td><?php echo $data['level'];?></td>
                    <td>
                        <a href="?x=hadmin&id=<?php echo $data['id_admin'];?>" class="btn btn-danger">Hapus</a>
                        <a href="?x=eadmin&id=<?php echo $data['id_admin'];?>" class="btn btn-warning">Ubah</a>
                    </td>
                </tr>
            <?php
                $no++;
            }
            ?>


        </tbody>
        </table>
        <a href="?x=tadmin" class="btn btn-primary">Tambah</a>
    
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