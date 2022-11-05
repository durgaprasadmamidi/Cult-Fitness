<?php
    parse_str($_SERVER['QUERY_STRING']);
    $result = $mysqli->query("SELECT * FROM products where id =3;");
    $prod = $result -> fetch_assoc();
    $hits = $prod["hits"] + 1;
    $mysqli->query("UPDATE products SET hits = ".$hits." WHERE id = 3;");    
    $mysqli->close();
?>
<?php
    if(isset($_COOKIE["lastids"])){
        if(explode(",",$_COOKIE["lastids"])[0]!=$prod["id"]){
            setcookie("lastids",'3'.",".$_COOKIE["lastids"],time() + (86400 * 30));    
        }
        
    }
    else{
        setcookie("lastids", '3', time() + (86400 * 30));
    }
?>


<!doctype html>
<html>

    <head>
        
        <title>Cult Fitness</title>
    </head>
    
    <body> 
        <h1> This is page for Cardio - 1
        </h1>
    </body>
</html>