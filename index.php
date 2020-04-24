<?php
  include_once "config/connect.php";
  // include_once "assets/css/shop-homepage.css";
 ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="webpagina/trav6.png">
    <title>Drops by Luka</title>

    <!-- Bootstrap core CSS -->
    <!-- <link href="webpagina/avendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- Custom styles for this template -->
    <link href="assets/css/shop-homepage.css" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->
    <nav class="top">
        <div class="container">
            <!-- <a class="drops-link" href="#">Drops by Luka</a> -->
              <img src="assets/img/drops.png" height="50" width= "100">
              <div class="nav-links" id="navbarResponsive">
              <a class="nav-link" href="#">New Arrivals</a>
              <!-- <a class="nav-link" href="view/userlogin.php">User Login</a> -->
              <a class="nav-link" href="view/adminlogin.php">Admin Login</a>
            </div>
        </div>
    </nav>
            <div class="line"></div>
    <div class="Shoes">
      Shoes
    </div>
    <!-- Page Content -->
    <?php
        $sql = "SELECT product.id, name,price,image FROM product INNER JOIN product_image ON product.id = product_image.product_id";

               $result = $conn->query($sql);
               if ($result->num_rows > 0) {

               while($row = $result->fetch_assoc()) {

                 echo "<div class='products1'>";
                 echo    "<img class='picture' src='assets/". $row["image"]."' alt='media'>";
                 echo    "<div class='name'>" .$row["name"]. "</div>";
                 echo    "<div class='price'>"."$".$row["price"]."</div>";
                 echo   "<a href='products/product.php?id=".$row['id']."'class='button'>Add to Cart</a><br>";
                 echo "</div>";
               }
           }
        ?>
    </div>
        </div>
    </div>
    </div>
    <!-- <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->

</body>

</html>
