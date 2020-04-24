<?php
include_once '../config/connect.php';
if(isset($_POST['submit']))
{
     $firstName = $_POST['field_firstname'];
     $middleName = $_POST['field_infixname'];
     $lastName = $_POST['field_lastname'];
     $birthDate = $_POST['field_birthdate'];
     $email = $_POST['field_email'];
     $password = $_POST['field_password'];

     $sql = "INSERT INTO users (firstName, middleName, lastName, birthDate, email, passWord) VALUES ('$firstName','$middleName','$lastName', '$birthDate','$email','$password')";

     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>
