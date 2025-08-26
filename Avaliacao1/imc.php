<?php
    $mensagem = "";

    function calcularImc($peso, $altura){
        $imc = $peso / ($altura * $altura);
        return $imc;
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['peso']) && isset($_POST['altura'])){
            $peso = $_POST['peso'];
            $altura = $_POST['altura'];
            $imc = calcularImc($peso, $altura);
            if($imc < 18.5){
                $mensagemImc = "Baixo";
            }elseif($imc>=18.5 && $imc<=24.9){
                $mensagemImc = "Normal";
            }elseif($imc>=25 && $imc<=29.9){
                $mensagemImc = "Sobrepeso";
            }else{
                $mensagemImc = "Obesidade";
            }
            $mensagem = "O IMC é $mensagemImc!";
        }
    }
?>

<!DOCTYPE html>
<html>
    <header></header>
    <body>
        <form method="post">
            <label>Informe o Peso: </label>
            <input type="number" name="peso" required/>
            <br/>
            <label>Informe a Altura: </label>
            <input type="number" name="altura" required/>
            <br/>
            <button type="submit">Calcular</button>
        </form>
        <?php echo $mensagem ?>
    </body>
</html>