<?php require "dbconnect.php"?>

<?php
     $sql = "SELECT * FROM users";
     $result = $mysqli->query($sql);
     $users2 = array();
    //  $row = $result->fetch_assoc();
    // $users = $row["FirstName"];
     while($row = $result->fetch_assoc()){
        $users2[] = $row["FirstName"];
        //$users = $users.",".$row["FirstName"];
     }
     echo json_encode($users2);
?>