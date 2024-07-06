<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <?php
    include("konek.php");
    $cari = mysqli_query($konek, "select * from mobil, sewa where mobil.id_mobil=sewa.id_mobil") or die (mysqli_error());

    ?>
    <table class="table table-hover">
        <thead>
            <tr>
                <th >No.</th>
                <th>No polisi</th>
                <th >Merek</th>
                <th >Nama Peminjam</th>
                <th >Tujuan Peminjam</th>
                <th>Tgl mulai Order</th>
                <th>Tgl Selesai Order</th>
                <th>Lama Sewa</th>
                <th>Total</th>
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
                    <td><?php echo $data['nopol'];?></td>
                    <td><?php echo $data['merek'];?> </td>
                    <td><?php echo $data['nama_sewa'];?> </td>
                    <td><?php echo $data['tujuan'];?></td>
                    <td><?php echo $data['tgl_sewa'];?></td>
                    <td><?php echo $data['tgl_kembali'];?></td>
                    <td><?php echo $data['lama'];?></td>
                    <td><?php echo $data['harga_total'];?></td>
                    <td>
                        <a href="?x=horder&id=<?php echo $data['id_sewa'];?>" class="btn btn-danger">Hapus</a>
                        <a href="?x=eorder&id=<?php echo $data['id_sewa'];?>" class="btn btn-warning">Ubah</a>
                    </td>
                </tr>
            <?php
                $no++;
            }
            ?>


        </tbody>
    </table>
    <a href="?x=torder" class="btn btn-primary">Tambah Order</a>
    
</body>
</html>