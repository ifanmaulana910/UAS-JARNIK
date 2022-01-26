<?php

include "koneksi.php";

$id = $_POST["id"];
$nama = $_POST["nama"];
$nim = $_POST["nim"];
$prodi = $_POST["prodi"];
$alamat = $_POST["alamat"];

$input = mysqli_query($db, "UPDATE `mahasiswa` SET `nim` = '$nim', `nama` = '$nama', `prod` = '$prodi', `alamat` = '$alamat' WHERE `mahasiswa`.`id` = $id;");

if ($input) {
    header("location:../admin/home.php");

}