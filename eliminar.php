<?php
include("include/db.php");
$id=(int)$_GET["id"];
$sql="DELETE FROM `personas`.`personas` WHERE  `id`=$id;";
DB::query($sql);
header('location: index.php');
?>