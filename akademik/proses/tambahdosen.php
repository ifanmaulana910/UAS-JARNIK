<?php

include "koneksi.php";

$nama = $_POST["nama"];
$nim = $_POST["nik"];
$prodi = $_POST["kejuruan"];
$alamat = $_POST["alamat"];

$input = mysqli_query($db, "INSERT INTO `dosen` (`id`, `nik`, `nama`, `kejuruan`, `alamat`) VALUES (NULL, '$nim', '$nama', '$prodi', '$alamat')");

if ($input) {
    header("location:../admin/home.php");

}