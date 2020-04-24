<?php
    include "../config/connect.php";


    if(isset($_POST['username'])){
      $email = $_POST['username'];
      $password = $_POST['password'];

      $sql="SELECT * FROM users WHERE email ='".$email."'AND password='".$password."' LIMIT 1";

      $result=mysqli_query($conn, $sql);

      if(mysqli_num_rows($result)==1){
        header('Location:../webpagina/userindex.php');
        exit();
        }else {
          echo "Your filled in Username and Password don't match!";
          exit();
        }
      }
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../assets/css/style.css">
  </head>
  <body>

<!------ Include the above in your HEAD tag ---------->

<body>
  <style >
  body {
    margin: 0;
    padding: 0;
    background-color: white;
    height: 100vh;
    color: black;
  }
  #login .container #login-row #login-column #login-box {
    margin-top: 120px;
    max-width: 600px;
    height: 320px;
    border: 2px solid #9C9C9C;
    background-color: #EAEAEA;
  }
  #login .container #login-row #login-column #login-box #login-form {
    padding: 20px;
  }
  #login .container #login-row #login-column #login-box #login-form #register-link {
    margin-top: -100px;
  }

  </style>
    <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="#" method="post">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="email" class="text-info">E-mail</label><br>
                                <input type="text" name="email" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>
                            <div id="register-link" class="text-right">
                                <br>
                                <br>
                                <a href="register.php" class="text-info">Register here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

  </body>
</html>
