<?php
    include ("../config/connect.php");
    include ("../src/product_toevoegen.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="shortcut icon" href="../webpagina/trav6.png">
    <title>Add Product</title>
</head>
<body>
  <style media="screen">

    .form-group{
      padding-top: 30px;
    }

    h2{
      margin-left: 500px;
      margin-top: 50px;
    }

  </style>
  <h2>Add a new Product</h2>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-6">
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
            </div>
        </div>
    </div>
</body>
</html>
