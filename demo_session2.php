<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <body>
        <?php
        $_SESSION["favcor"] = "Marelo";
        echo "Cor favorita: " . $_SESSION["favcor"]. "<br>";
        echo "Animal favorito: " . $_SESSION["favanimal"] . "<br><hr>";
        print_r($_SESSION);
        ?>
    </body> 
</html>