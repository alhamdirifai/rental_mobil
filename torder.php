<!doctype html>
<html lang="en">
  <head>
    
  </head>
  <body>
    <?php
    include("konek.php");
    $cari = mysqli_query($konek, "select * from mobil");

    ?>
             <div class="card">
                <h5 class="card-header">Tambah data order</h5>
                <div class="card-body">
                    <form  method="post" action="?x=sorder">
                    
                        <div class="form-group">
                            <label>Nomor Polisi </label>
                            <select name="nopol" class="form-control">
                                <option value="">-- pilih --</option>
                                <?php
                                 while($data = mysqli_fetch_array($cari)){
                                    ?>
                                    <option value="<?php echo $data['id_mobil'];?>"><?php echo $data['nopol']. " - " . $data['merek'];?></option>
                                <?php
                                 }
                                ?>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label>Nomor KTP</label>
                            <input type="text" class="form-control" name="txtKTP"> 
                        </div>
                        <div class="form-group">
                            <label>Nama Peminjam</label>
                            <input type="text" class="form-control" name="txtNama">
                        </div>
                        <div class="form-group">
                            <label>Jenis kelamin</label>
                            <select name="jenkel" class="form-control">
                                <option value="">-- Pilih --</option>
                                <option value="Laki - Laki">Laki - laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Alamat Lengkap</label>
                            <input type="text" class="form-control" name="txtAlamat">
                        </div>
                        <div class="form-group">
                            <label>no.tlp</label>
                            <input type="text" class="form-control" name="txtTlp">
                        </div>
                        <div class="form-group">
                            <label>Tujuan</label>
                            <input type="text" class="form-control" name="txtTujuan">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Peminjam</label>
                            <input type="date" class="form-control" name="txtMulai">
                        </div>
                        <div class="form-group">
                            <label>Selesai Pinjam</label>
                            <input type="date" class="form-control" name="txtSelesai">
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