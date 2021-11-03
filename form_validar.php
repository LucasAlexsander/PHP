<!DOCTYPE html>
<html>
    <head>
    <style>
        .error {color: red;}
        table, tr {
            border: 1px, solid, black;

        }
        th {
            text-align: center;
        }
    </style>
    </head>

    <body>
        <?php
        $nameErr = $emailErr = $websiteErr = "";
        $name = $email = $website = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
                $nameErr = "Nome Obrigatório!";
            } else {
                $name = test_input($_POST["name"]);
                if (!preg_match("/^[a-zA-Z -' ]*$/", $name)) {
                    $nameErr = "Somente letras e espaços em branco!";
                }
            }

            if (empty($_POST["email"])) {
                $emailErr = "E-mail Obrigatório!";
            } else {
                $email = test_input($_POST["email"]);
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "E-mail Inválido!";
                }
            }

            if (empty($_POST["website"])) {
                $websiteErr = "URL Obrigatório!";
            } else {
                $website = test_input($_POST["website"]);
                if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
                    $websiteErr = "URL Inválida!";
                }
            }
        }
        function test_input ($data) {
            $data = trim ($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>
        <h2>Formulário Validado</h2>
        <p><span class="error">Campo Obrigatório</span></p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            Nome: <input type="text" name="name"><span class="error">*<?php echo $nameErr;?></span>
            <br><br>
            E-mail: <input type="text" name="email"><span class="error">* <?php echo $emailErr;?></span>
            <br><br>
            Website: <input type="text" name="website"><span class="error">*<?php echo $websiteErr;?></span>
            <br><br>
            <input type="submit" value="Enviar" name="submit">
            <br><br>
        </form>
        <table>
            <tr>
                <th>Seus Inputs</th>
            </tr>
            <tr>
                <td>Nome: </td>
                <td><?php echo $name;?></td>
            </tr>
            <tr>
                <td>E-mail:</td>
                <td><?php echo $email;?></td>
            </tr>
            <tr>
                <td>Website: </td>
                <td><?php echo $website;?></td>
            </tr>
        </table>
    </body>
</html>