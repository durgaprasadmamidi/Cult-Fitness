<?php require "dbconnect.php"?>

<?php
     $sql = "SELECT * FROM users";
     $result = $mysqli->query($sql);
     $row = $result->fetch_assoc();
    $users = $row["FirstName"];
     while($row = $result->fetch_assoc()){
         $users = $users.",".$row["FirstName"];
     }
     echo $users;
?>