
<?php
     ob_start();
    session_start();
     if (!empty($_POST["Username"]) && !empty($_POST["Password"])){
          $userfile = fopen("Files/credentials.txt", "r");
            while(($line=fgets($userfile))!==false){
                    $line = rtrim($line,"\r\n");
                    $user = explode(",", $line);
                    if ($_POST["Username"]==$user[0]  && $_POST["Password"]==$user[1]){
                        $_SESSION["user"] = $_POST["Username"];
                        fclose($userfile);
                        //header("location: secure.php");
                        header("location: secure.php");
                        exit;
                    }
                }
                header("Location:index.php?error=login");

     }
    else
    {
        header("Location:index.php?error=login");

    }
?>