

    <?php
    include_once '../config/connect.php';

    if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $id = $_GET['id'];
    $color = $_POST['color'];

    $sql = "UPDATE product SET name ='$name', description ='$description', price ='$price', color = '$color' WHERE id=$id";
    echo $sql;
    if (mysqli_query($conn, $sql)) {
      $id = $conn->update_id;
    } else {

    }

    }

    if (!empty($_FILES['image'])) {
      $tmpName = $_FILES['image']['tmp_name'];
      $fileName = $_FILES['image']['name'];

      $sql = "UPDATE product_image SET product_id = '$product_id', image = 'uploads/$fileName' WHERE id=$id";
      mysqli_query($conn, $sql);
       echo $sql;
      if (move_uploaded_file($tmpName, "../assets/uploads/".$fileName)) {
        header("location:../webpagina/admin.php");
      }

}
