<?php 

session_start(); 
$db = new PDO('mysql:host=localhost;dbname=inject_db','root','');
include "config.php";

if (isset($_POST['email']) && isset($_POST['password'])){

    $email = $_POST['email'];
    $pass = $_POST['password'];

        $sql2 = $db->query("select * FROM users_tbl WHERE email='$email' AND pass='{$pass}'");
        $sql = "select * FROM users_tbl WHERE email='$email' AND pass='$pass'";

        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);


        if($sql2->rowCount() > 0){
             $_SESSION['email'] = $row['email'];
             $_SESSION['password'] = $row['pass'];
             
            header("Location: home.php");
        }else{
            $_SESSION['flash_message'] = "Access Denied!";
            header("Location: index.php");
        }
 
}else{
    header("Location: index.php");
    exit();

}
?>