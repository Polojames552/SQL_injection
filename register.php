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
  ?>
  <h1 class="page-title">
    Register
  </h1>
  <div class="form-link-holder">
  <?php
  if(isset($_SESSION['flash_message'])) {
    $message = $_SESSION['flash_message'];
    unset($_SESSION['flash_message']);
    echo $message;
  }
  ?>
  </div>
  <form action="adduser.php" class="login-form form" method="post">
    <input type="name" class="input" name="name" id="name" placeholder="Name" required>
    <input type="text" class="input" name="email" id="email" placeholder="Email" required>
    <input type="password" class="input" name="password" id="password" placeholder="Password" required>
    <input type="submit" value="Register" class="send-btn btn">
    <div class="form-link-holder">
      Already have an account?
      <a href="index">Signin</a>
    </div>
  </form>
</body>
</html>