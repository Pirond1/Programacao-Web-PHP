<?php
    //2. Upload de imagem -> Crie uma página com formulário que permita enviar uma imagem. Após o upload, mostre o nome do arquivo e exiba a imagem enviada.
    $nomeArquivo = "";

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['arquivo'])) {
        if($_FILES['arquivo']['error'] === UPLOAD_ERR_OK){
            $nomeArquivo = basename($_FILES['arquivo']['name']);
            $destino = "uploads/".$nomeArquivo;
            move_uploaded_file($_FILES['arquivo']['tmp_name'], $destino);
        }
    }
?>

<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <form method="post" enctype="multipart/form-data">
            <input type="file" name="arquivo" />
            <button type="submit">Enviar</button>
        </form>
        <?php
            if($nomeArquivo != "" && file_exists($destino)){
                echo "<h2>Imagem Enviada</h2>";
                echo "<img src='". $destino."'";
            }
        ?>
    </body>
</html>