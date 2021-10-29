<!DOCTYPE html>
<html>
    <head>
        <style>
            .erro{
                color: red;
            }
        </style>
    </head>

    <body>
    <?php
    $name = $email = $comment = $gender = $website = "";
    $nameErr = $emailErr = $genderErr = $websiteErr = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Campo Obrigatório";
        } else {
            $name = test_input($_POST["name"]);
        }

        if (empty($_POST["email"])) {
            $emailErr = "Campo Obrigatório";
        } else {
            $email = test_input($_POST["email"]);
        }

        if (empty($_POST["website"])) {
            $website = "";
        } else {
            $website = test_input($_POST["website"]);
        }

        if (empty($_POST["comment"])) {
            $comment = "";
        } else {
            $comment = test_input($_POST["comment"]);
        }

        if (empty($_POST["gender"])) {
            $genderErr = "Campo Obrigatório";
        } else {
            $gender = test_input($_POST["gender"]);
        }
    }
    
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    <h2>Formulário Obrigatório</h2>
    <p><span class="erro">* campo Obrigatório</span></p>
    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
    Nome: <input type="text" name="name"> <span class="erro">* <?php echo $nameErr ?></span><br><br>
    E-mail: <input type="text" name="email"> <span class="erro">* <?php echo $emailErr ?></span><br><br>
    Website: <input type="text" name="website"> <span class="erro"> <?php echo $websiteErr ?></span><br><br>
    Comentário: <textarea name="comment"cols="40" rows="5"></textarea><br><br>
    Gênero:
    <input type="radio" name="gender" value="feminino">Feminino
    <input type="radio" name="gender" value="masculino">Masculino
    <input type="radio" name="gender" value="outro">Outro <span class="erro">* <?php echo $genderErr?></span>
    <br><br>
    <input type="submit" value="Enviar">
    </form>

    <?php
    echo "<h2>Seu input</h2>";
    echo "Nome: ", $name;
    echo "<br>";
    echo "E-mail: ", $email;
    echo "<br>";
    echo "Website: ", $website;
    echo "<br>";
    echo "Comentário: ", $comment;
    echo "<br>";
    echo "Gênero: ", $gender;
    echo "<br>";

    ?>
    </body>
</html>