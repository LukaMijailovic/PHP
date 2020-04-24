<?php
include_once '../config/connect.php';
$id = $_GET['id'];
$sql= "DELETE FROM product where id=$id";
// echo $sql;
if ($conn->query($sql) === TRUE) {
  header("location: ../webpagina/admin.php");
}else {
      }
 ?>
