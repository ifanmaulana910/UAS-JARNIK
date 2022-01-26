<?php

include "koneksi.php";

$nama = $_POST["nama"];
$nim = $_POST["nim"];
$prodi = $_POST["prodi"];
$alamat = $_POST["alamat"];

$input = mysqli_query($db, "INSERT INTO `mahasiswa` (`id`, `nim`, `nama`, `prod`, `alamat`) VALUES (NULL, '$nim', '$nama', '$prodi', '$alamat')");

if ($input) {
    header("location:../admin/home.php");

}