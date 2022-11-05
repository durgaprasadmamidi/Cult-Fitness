
<!doctype html>
<html>

    <head>
        
        <title>Cult Fitness</title>
    </head>
    <body>
        Hello, <?php echo " Login Successfull"?>
        <br/>
        Current website Users are:
        <br/>
        <?php
            $userfile = fopen("Files/credentials.txt", "r");
            while(($line=fgets($userfile))!==false){
                    $user = explode(",", $line);
                    echo $user[0];
                    echo "<br/>";
                }
            fclose($userfile);    
        ?>
        
        <a class="modal fade" href="logout.php">Logout</a>
        
</body>
</html>