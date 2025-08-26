<?php
    //Calculadora simples
    $mensagem = "";
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['n1']) && isset($_POST['n2']) && isset($_POST['operacao'])){
            $num1 = $_POST['n1'];
            $num2 = $_POST['n2'];
            $operacao = $_POST['operacao'];

            if($operacao == "+"){
                $conta = $num1 + $num2;
                $mensagem = "Soma Calculada: $conta";
            }elseif($operacao == "-"){
                $conta = $num1 - $num2;
                $mensagem = "Subtração Calculada: $conta";
            }elseif($operacao == "*"){
                $conta = $num1 * $num2;
                $mensagem = "Multiplicação Calculada: $conta";
            }elseif($operacao == "/"){
                $conta = $num1 / $num2;
                $mensagem = "Divisão Calculada: $conta";
            }else{
                $mensagem = "Operação Incorreta!";
            }
        }
    }
?>

<!DOCTYPE>
<html>
    <head></head>
    <body>
        <form method="post">
            <label>Numero 1: </label>
            <input type="number" name="n1" required/>
            <br/>
            <label>Numero 2: </label>
            <input type="number" name="n2" required/>
            <br/>
            <label>Operação (+, -, *, /): </label>
            <input type="text" name="operacao" required/>
            <br/>
            <button type="submit">Enviar</button>
        </form>
        <?php
            echo $mensagem;
        ?>
    </body>
</html>