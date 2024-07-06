<?php

include("konek.php");
$id=$_GET['id'];
$hapus = mysqli_query($konek, "delete from mobil where id_mobil='$id'");
if ($hapus){
    header("Location: index.php?x=mobil");
}