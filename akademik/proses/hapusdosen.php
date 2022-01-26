<?php

include "koneksi.php";

$id = $_GET['id'];
$delete = $db->query("DELETE FROM `dosen` WHERE `dosen`.`id` = $id");
// $delete = true;
if ($delete) {
    header("location:../admin/home.php");

} else {
    header("location:../admin/home.php");

}