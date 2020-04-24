
<?php
include_once '../config/connect.php';
$product_id = 0;
if(isset($_POST['submit']))
{

     $name = $_POST['name'];
     $description = $_POST['description'];
     $price = $_POST['price'];
     $color = $_POST['color'];

     $sql = "INSERT INTO product (name, description, price, color) VALUES ('$name','$description','$price', '$color')";

     if (mysqli_query($conn, $sql)) {
       $product_id = $conn->insert_id;
     } else {

     }
}

    if (!empty($_FILES['image'])) {
      $tmpName = $_FILES['image']['tmp_name'];
      $fileName = $_FILES['image']['name'];

      $sql = "INSERT INTO product_image (product_id, image) VALUES ('$product_id','uploads/$fileName')";
      mysqli_query($conn, $sql);
       echo $sql;
      if (move_uploaded_file($tmpName, "../assets/uploads/".$fileName)) {
        header("location:../index.php");
      }

}
?>
