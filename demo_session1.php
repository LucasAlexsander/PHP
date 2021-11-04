<?php
//Começando a sessão
session_start();
?>
<!DOCTYPE html>
<html>
    <body>
        <?php
        //Colocando as variáveis
        $_SESSION["favcor"] = "black";
        $_SESSION["favanimal"] = "dog";
        echo "Variáveis da sessão configuradas."
        ?>
    </body>
</html>