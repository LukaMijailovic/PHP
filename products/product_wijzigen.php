<?php
include '../config/connect.php';
include '../src/product_wijzigen.php';
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../assets/css/shop-homepage.css">
  </head>
  <body>
    <form method="post" action="#" enctype="multipart/form-data">
        <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Product name" required /><br>
            <input type="text" name="description" class="form-control" placeholder="Description" /><br>
            <input type="text" name="price" class="form-control" placeholder="Price" required /><br>
            <input type="text" name="color" class="form-control" placeholder="Color" required /><br>
            <input type="file" name="image" class="form-control" placeholder="Picture" required /><br>


            
        </div>
        <div class="form-group">
        </div>
        <input type="submit" name="submit" class="btn btn-info" value="Submit Product" />
    </form>
  </body>
</html>
