<?php
    $mensagem = "";

    function converterDolar($valor){
        return $valor/5.42;
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['real'])){
            $real = $_POST['real'];
            $dolar = converterDolar($real);
            $mensagem = "R$ ". number_format($real, 2, ",",""). " equivalem a US$ ". number_format($dolar, 2, ",","");
        }
    }
?>

<!DOCTYPE html>
<html>
    <header></header>
    <body>
        <form method="post">
            <label>Informe um Valor: </label>
            <input type="text" name="real" required/>
            <br/>
            <button type="submit">Converter</button>
        </form>
        <?php
            echo $mensagem;
        ?>
    </body>
</html>