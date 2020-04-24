<?php
    include ("../config/connect.php");
    include ("../src/customers_register.php");

    if(!empty($_POST)){
        $sfd = setFormData();
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Registration</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-6">
                <form method="post">
                    <div class="form-group">

                      <h2 class="customers_name">Naam</h2>
                        <input type="text" name="field_firstname" id="fname"  class="form-control" placeholder="Voornaam" required /><br>
                        <input type="text" name="field_middlename" class="form-control" placeholder="Tussenvoegsel" /><br>
                        <input type="text" name="field_lastname" class="form-control" placeholder="Achternaam" required /><br>
                        <input type="radio" id="male" name="gender" value="male" required>
                        <label for="male">Male</label>
                        <input type="radio" id="female" name="gender" value="female">
                        <label for="female">Female</label>
                        <input type="radio" id="other" name="gender" value="other">
                        <label for="other">Other</label>
                        <input type="text" name="field_street" class="form-control" placeholder="Straat" required /><br>
                        <input type="text" name="field_housenumber" class="form-control" placeholder="Huisnummer" required /><br>
                        <input type="text" name="field_housenumber_addon" class="form-control" placeholder="Toegvoeging" /><br>
                        <input type="text" name="field_zipcode" class="form-control" placeholder="Postcode" required /><br>
                        <input type="text" name="field_city" class="form-control" placeholder="Stad" required /><br>
                        <input type="text" name="field_phone" class="form-control" placeholder="Telefoonnummer" required /><br>
                        <input type="text" name="field_email" class="form-control" placeholder="E-mailadres" required /><br>
                        <input type="text" name="field_password" class="form-control" placeholder="Wachtwoord" required /><br>
                        <input type="radio" id="subscribe" name="field_newsletter" value="subscribe">
                        <label for="subscribe">Subscribe</label>
                    </div>
                    <input type="submit" name="submit" class="btn btn-info" value="Registreren" />
                </form>
            </div>
        </div>
    </div>
</body>
</html>
