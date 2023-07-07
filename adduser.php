<?php
    session_start(); 
    $db = new PDO('mysql:host=localhost;dbname=inject_db','root','');
    include "config.php";

    if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['name'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = $db->query("select * from users_tbl where email='$email'");

        if($sql->rowCount() > 0){
            // echo "Error someone owns <b>'$email'</b>, please input other email!";
            $_SESSION['flash_message'] = "Error someone owns <b>'$email'</b>, please input other email!";
            header("Location: register.php?");
            ?>
                <a href="register.php">Go back!</a>
            <?php
        }else{
            $reg = $db->query("insert into users_tbl (name, email, pass) values('$name','$email','$password')");
            echo "Successful Registration";
            ?>
                <a href="index.php">Go back!</a>
            <?php
        }
    }
?>