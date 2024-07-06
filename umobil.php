<?php

include("konek.php");

$nopol = $_POST['txtNopol'];
$merek = $_POST["txtMerek"];
$thn = $_POST["txtTahun"];
$harga = $_POST["txtHarga"];
$kode = $_POST['kode'];

$simpan = mysqli_query($konek, "update mobil set nopol='$nopol', merek='$merek', thn='$thn', harga='$harga' where id_mobil='$kode'");
if ($simpan){
    header("Location: index.php?x=mobil");
}