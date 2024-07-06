<?php

include("konek.php");
$nopol = $_POST['txtNopol'];
$merek = $_POST["txtMerek"];
$thn = $_POST["txtTahun"];
$harga = $_POST["txtHarga"];

$simpan = mysqli_query($konek, "insert into mobil(nopol,merek,thn,harga,s_mobil) values ('$nopol', '$merek', '$thn', '$harga', 'AKTIF')");
if ($simpan){
    header("Location: index.php?x=mobil");
}