<?php

/**
 * Standaard functie definitie
 * @param string Dit noem je een parameter (die staat tussen haakjes)
 * @return array Dit is de waarde die je functie doorgeef
 */
function setFormData(){
include '../config/connect.php';


    if(isset($_POST['field_firstname']) && $_POST['field_firstname'] != ''){
        $firstName = ($_POST['field_firstname']);
    }else{
        echo "Voornaam is verplicht";
    }

    if(isset($_POST['field_middlename']) && $_POST['field_middlename'] != ''){
        $middleName = ($_POST['field_middlename']);
    } else {
      $middleName = "";
    }

    if(isset($_POST['field_lastname']) && $_POST['field_lastname'] != ''){
        $lastName = ($_POST['field_lastname']);
    }else{
        echo "Achternaam is verplicht";
    }

    if(isset($_POST['gender']) && $_POST['gender'] != ''){
        $gender = ($_POST['gender']);
    }

    if(isset($_POST['field_street']) && $_POST['field_street'] != ''){
        $street = ($_POST['field_street']);
    }else{
        echo "Straat naam is verplicht";
    }

    if(isset($_POST['field_housenumber']) && $_POST['field_housenumber'] != ''){
        $housenumber = ($_POST['field_housenumber']);
    }else{
        echo "Huisnummer is verplicht";
    }

    if(isset($_POST['field_housenumber_addon']) && $_POST['field_housenumber_addon'] != ''){
        $housenumber_addon = ($_POST['field_housenumber_addon']);
    } else {
      $housenumber_addon = "" ;
    }

    if(isset($_POST['field_zipcode']) && $_POST['field_zipcode'] != ''){
        $zipcode = ($_POST['field_zipcode']);
    }else{
        echo "Postcode is verplicht";
    }

    if(isset($_POST['field_city']) && $_POST['field_city'] != ''){
        $city = ($_POST['field_city']);
    }else{
        echo "Stad is verplicht";
    }

    if(isset($_POST['field_phone']) && $_POST['field_phone'] != ''){
        $phone = ($_POST['field_phone']);
    }else{
        echo "Telefoonnummer is verplicht";
    }

    if(isset($_POST['field_email']) && $_POST['field_email'] != ''){
        $email = ($_POST['field_email']);
    }else{
        echo "E-mailadres is verplicht";
    }

    if(isset($_POST['field_password']) && $_POST['field_password'] != ''){
        $password = ($_POST['field_password']);
    }else{
        echo "Wachtwoord is verplicht";
    }

    if(isset($_POST['field_newsletter']) && $_POST['field_newsletter'] != ''){
        $newsletter = 1;
    } else {
      $newsletter = 0;
    }



    $query1 = $conn->prepare('INSERT INTO customer (gender,firstname,middleName,lastName,street,houseNumber,houseNumber_addon,zipCode,city,phone,email,password,newsletter_subscription)
    VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)');
    if ($query1 === false) {
        echo mysqli_error($conn)." - ";
      //  exit(LINE);
    }
    $query1->bind_param('sssssissssssi',$gender,$firstName,$middleName,$lastName,$street,$housenumber,$housenumber_addon,$zipcode,$city,$phone,$email,$password,$newsletter);
    if ($query1->execute() === false) {
        echo mysqli_error($conn)." - ";
//               exit(LINE);
    } else {
        echo "Gebruiker toegevoegd";
        $query1->close();
    }
}

?>
