<!DOCTYPE html>
<html>
    <head>

    </head>

    <body>
        
    <?php
        $name = $email = $website = $comment = $gender = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = test_input($_POST["name"]);
            $email = test_input($_POST["email"]);
            $website = test_input($_POST["website"]);
            $comment = test_input($_POST["comment"]);
            $gender = test_input($_POST["gender"]);
        }

        function test_input ($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }
    ?>

    <h1>Validação Formulário</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Nome: <input type="text" name="name"><br><br>
        E-mail: <input type="text" name="email"><br><br>
        Website: <input type="text" name="website"><br><br>
        Comentário: <textarea name="comment" cols="30" rows="10"></textarea><br><br>
        Gênero:
        <input type="radio" name="gender" value="Feminino">Feminino
        <input type="radio" name="gender" value="Masculino">Masculino
        <input type="radio" name="gender" value="Outro">Outro
        <br><br>
        <input type="submit" value="Enviar">
    </form>

    <?php 
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
    ?>

    </body>
</html>

