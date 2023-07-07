<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    session_start();
    if($_SESSION['email']){
    ?>
   
   <body class="container">
    <h1 class="page-title">
    Login Successfully!
    </h1>

    <div class="form-link-holder">
        
    <?php
    echo "<b>Welcome! </b>".$_SESSION['email'];
    ?>
    </div>

    <div class="form-link-holder">
      <a class="btn btn-danger" id="but" href="logout.php">Logout</a>
    </div>
  
    <?php
    }
    else{
    header("Location: index.php");
    }
?>
</body>
</html>