<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="container">
  <?php
  session_start();
 
   if(empty($_SESSION['email'])){
  ?>
  <h1 class="page-title">
    Welcome User!
  </h1>
 
  <div class="form-link-holder">
  <?php
  if(isset($_SESSION['flash_message'])){
    $message = $_SESSION['flash_message'];
    unset($_SESSION['flash_message']);
    echo $message;
  }
  ?>
  </div>

  <form action="login.php" class="login-form form" method="POST">
    <input type="text" class="input" name="email" id="email" placeholder="Email" required>
    <input type="password" class="input" name="password" id="password" placeholder="Password" required>
    <input type="submit" value="Login" class="send-btn btn" name="sub">
    <div class="form-link-holder">
      Don't you have an account?
      <a href="register">Signup</a>
    </div>
  </form>
  <?php

   }
   else{
     header("Location: home.php");
   }
  ?>
</body>

</html>