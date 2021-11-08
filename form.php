<!DOCTYPE html>
<html>
    <body>
        Welcome <?php echo $_POST["name"]; ?><br>
        Seu e-mail é: <?php echo $_POST["email"]; ?><br>
        Sua idade é: <?php echo $_POST["age"]; ?> anos
        <hr>
        <br>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

                Name: <input type="text" name="name" required><br><br>
                E-mail: <input type="text" name="email" required><br><br>
                Website: <input type="text" name="website" required><br><br>
                Comentário: <textarea name="comentario" rows="10" cols="30"></textarea><br><br>
                Gênero: <input type="radio" name="gender" value="Feminino">Feminino
                <input type="radio" name="gender" value="Masculino">Masculino
                <input type="radio" name="gedner" value="Outro">Outro
                <br>
                <input type="submit" value="Enviar">
        </form>
        <?php
        $name = $_POST["name"];
        $email = $_POST["email"];
        echo $name;
        echo "<br>";
        echo $email;
        echo "<br>";
        ?>

    </body>
</html>