<?php 

require "dbconnect.php";

$sql = "SELECT * FROM products ORDER BY hits DESC";
$results = $mysqli->query($sql);
$output = [];
for($i=0; $i<10; $i++){
    $row = $results->fetch_assoc();
    $record = array();
    $record['service_name'] = $row["name"];
    $record['service_url'] = $row["url"];
    $record['hits'] = $row["hits"];
    array_push($output, $record);
}

echo json_encode($output);

?>