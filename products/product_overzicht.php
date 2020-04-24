<?php
include '../config/connect.php';
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="description" content="">
     <meta name="author" content="">
     <title>Shop by Luka</title>
     <!-- Bootstrap core CSS -->
     <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
     <!-- Custom styles for this template -->
     <link href="../assets/css/shop-homepage.css" rel="stylesheet">
 </head>
 <body>
   <h2>Producten Overzicht</h2>

     <!-- Page Content -->
     <div class="products2">
       <?php
       $sql = "SELECT product.id, name, image FROM product INNER JOIN product_image ON product.id = product_image.product_id";
       $result = $conn->query($sql);

       if ($result->num_rows > 0) {
       // output data of each row
       while($row = $result->fetch_assoc()) {
           echo "<div class='product'>"."<h4>".$row["name"]."</div>";
           echo  "<img class='productpicture' src='../assets/". $row["image"]."' alt='media'><br>";
           echo "<a href='product_verwijderen.php?id=".$row['id']."' class='link'>Delete</a>";
           echo "<div class='streepje'></div>";
           echo "<a href='product_wijzigen.php?id=".$row['id']."' class='link'>Edit</a><br>";

       }
       } else {
       echo "0 results";
       }
        ?>
       </div>
     </div>
         </div>
     </div>
     </div>
     <script src="vendor/jquery/jquery.min.js"></script>
     <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 </body>

 </html>
