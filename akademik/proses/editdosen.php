<?php

include "koneksi.php";

$id = $_POST["id"];
$nama = $_POST["nama"];
$nim = $_POST["nik"];
$prodi = $_POST["kejuruan"];
$alamat = $_POST["alamat"];

$input = mysqli_query($db, "UPDATE `dosen` SET `nik` = '$nim', `nama` = '$nama', `kejuruan` = '$prodi', `alamat` = '$alamat' WHERE `dosen`.`id` = $id;");

if ($input) {
    header("location:../admin/home.php");

}