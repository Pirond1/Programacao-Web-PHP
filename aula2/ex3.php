<?php
    //Lista de frutas
    $mensagem = "";
    $fruta = [];

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['fruta1']) && isset($_POST['fruta2']) && isset($_POST['fruta3'])){
            $fruta = [$_POST['fruta1'], $_POST['fruta2'], $_POST['fruta3']];
        }
    }
?>

<!DOCTYPE>
<html>
    <head></head>
    <body>
        <form method="post">
            <label>Numero 1: </label>
            <input type="text" name="fruta1" required/>
            <br/>
            <label>Numero 2: </label>
            <input type="text" name="fruta2" required/>
            <br/>
            <label>Numero 3: </label>
            <input type="text" name="fruta3" required/>
            <br/>
            <button type="submit">Enviar</button>
        </form>
        <?php
            echo "Frutas: <br/>";
            foreach($fruta as $n){
                echo "$n <br/>";
            }
        ?>
    </body>
</html>