<html>
<body>
<?php require "dbconnect.php"?>
<?php 

$query = "SELECT * FROM users";
echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">First Name</font> </td> 
          <td> <font face="Arial">Last Name</font> </td> 
          <td> <font face="Arial">E mail</font> </td> 
          <td> <font face="Arial">Home Phone</font> </td> 
          <td> <font face="Arial">Cell Phone</font> </td> 
      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["FirstName"];
        $field2name = $row["LastName"];
        $field3name = $row["Email"];
        $field4name = $row["HomePhone"];
        $field5name = $row["CellPhone"]; 

        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                  <td>'.$field5name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>
</body>
</html>



