<?php
    //3. Formulário simples Crie uma página em PHP chamada cadastro.php com um formulário que receba os seguintes dados: Nome completo e Idade
    //Ao enviar os dados (via método POST), o PHP deve imprimir uma mensagem concatenando as informações, como nos exemplos abaixo:
    //Se o usuário digitar Maria Oliveira e idade 25 ? Maria Oliveira tem 25 anos.
    //Se o usuário digitar João da Silva e idade 40 ? João da Silva tem 40 anos.

    $mensagem = "";

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['nome']) && isset($_POST['idade'])){
            $nome = trim($_POST['nome']);
            $idade = $_POST['idade'];
            $mensagem = "$nome tem $idade anos.";
        }
    }
?>

<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <form method="post">
            <label>Nome: </label>
            <input type="text" name="nome" required/>
            <br/>
            <label>Idade: </label>
            <input type="number" name="idade" required/>
            <br/>
            <button type="submit">Enviar</button>
        </form>
        <?php
            echo $mensagem;
        ?>
    </body>
</html>