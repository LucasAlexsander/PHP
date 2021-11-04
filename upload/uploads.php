<!DOCTYPE html>
<html>
<body>
    <?php
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        //Checando se a imagem é uma imagem real ou falsa
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if ($check !== false) {
                echo "Arquivo é uma imagem - ". $check["mime"];
                $uploadOk = 1;
            } else {
                echo "Arquivo não é uma imagem!<br>";
                $uploadOk = 0;
            }
        }
        //Checando se a imagem existe
        if (file_exists($target_file)) {
            echo "Desculpe, a imagem não existe.<br>";
            $uploadOk = 0;
        }
        //Checando o tamanho do arquivo
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            echo "Desculpe, a imagem é muito grande.<br>";
            $uploadOk = 0;
        }
        //Permitir certos formatos de arquivos
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpge" && $imageFileType != "gif") {
            echo "Desculpe, somente JPG, PNG, JPGE, GIF são aceitos.";
            $uploadOk = 0;
        }
        //Checando se o uplaodOk é 0 por um erro
        /*if ($uploadOk == 0) {
            echo "Desculpe, seu arquivo não foi carrgado.";
        //Se tudo estiver certo, tente carregar o arquivo
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "O arquivo ". htmlspecialchars(basename ($_FILES["fileToUpload"]["name"])). " foi enviado para o carregamneto.";  
            } else {
                echo "Desculpe, erro no carregamento do arquivo.";
            }
        }*/
    ?>
</body>
</html>