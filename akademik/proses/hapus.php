<?php

include "koneksi.php";

$id = $_GET['id'];
$delete = $db->query("DELETE FROM `mahasiswa` WHERE `mahasiswa`.`id` = $id");
// $delete = true;
if ($delete) {
    header("location:../admin/home.php");

} else {
    header("location:../admin/home.php");

}