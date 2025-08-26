<?php
    // Crie uma página chamada conversor.php que receba um valor em reais. Implemente uma função converterDolar($valor) que faça a conversão para dólares (considere: 1 USD = 5,42 BRL).
    // Exiba o resultado concatenado, por exemplo: R$ 50,00 equivalem a US$ 10,00.
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