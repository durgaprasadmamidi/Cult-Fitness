<?php require "dbconnect.php"?>

<?php
     $sql = "SELECT * FROM users";
     $result = $mysqli->query($sql);
     $users2 = array();
     while($row = $result->fetch_assoc()){
        $users2[] = $row["FirstName"];
     }
     echo json_encode($users2);
?>