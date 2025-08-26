<?php
    //Soma de números
    $mensagem = "";

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['n1']) && isset($_POST['n2']) && isset($_POST['n3'])){
            $num = [$_POST['n1'], $_POST['n2'], $_POST['n3']];
            $soma = 0;

            foreach($num as $n){
                $soma += $n;
                $mensagem = "Soma: $soma <br/>";
            }

            if($soma%2 === 0){
                $mensagem .= "Soma Par";
            }else{
                $mensagem .= "Soma Impar";
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
            <label>Numero 3: </label>
            <input type="number" name="n3" required/>
            <br/>
            <button type="submit">Enviar</button>
        </form>
        <?php
            echo $mensagem;
        ?>
    </body>
</html>