<?php
include '../config/connect.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../assets/css/shop-homepage.css">
  </head>
  <body>
    <nav class="top">
        <div class="container">
            <!-- <a class="drops-link" href="#">Drops by Luka</a> -->
              <img src="../assets/img/drops.png" height="50" width= "100">
              <div class="nav-links" id="navbarResponsive">
              <a class="nav-link" href="../index.php">New Arrivals</a>
              <a class="nav-link" href="../view/login.php">Login</a>
              <a class="nav-link" href="product_toevoegen.php">Add Product</a>
            </div>
        </div>
    </nav>
    <div class="line"></div>
    <?php
    $id = $_GET['id'];
    $sql = "SELECT name,description,price,image,product.id FROM product INNER JOIN product_image ON product.id = product_image.product_id WHERE product.id = $id";

    if ($conn->query($sql) === TRUE) {
          } else {
          }

        $result = $conn->query($sql);
        if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
          echo "<div class='products3'>";
          echo    "<img class='productimage' src='../assets/". $row["image"]."' alt='media'>";
          echo    "<div class='text1'>";
          echo    "<div class='name1'>" .$row["name"]. "</div>";
          echo    "<div class='price1'>"."$".$row["price"]."</div>";
          echo    "<div class='description1'>".$row["description"]."</div>";
          echo    "<button class='button1'>Add to Cart</button>";
          echo "</div>";
          echo "</div>";
        }
      }
        ?>
  </body>
</html>
