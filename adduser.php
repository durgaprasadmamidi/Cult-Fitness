<?php require "dbconnect.php"?>
<?php 

    $sql = "INSERT INTO users (firstname,lastname,email,homephone,cellphone) VALUES ('".$_POST["firstname"]."', '".$_POST["lastname"]."', '".$_POST["email"]."', '".$_POST["homephone"]."', '".$_POST["cellphone"]."')";
    $mysqli->query($sql);
    $mysqli->close();
    header("location: index.php");
    
?>