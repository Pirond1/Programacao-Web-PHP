<?php
    // 1. Lista de nomes -> Crie um formulário para digitar um nome. Cada vez que o usuário enviar, o nome deve ser salvo em um arquivo nomes.txt. 
    // Depois mostre na página todos os nomes cadastrados até o momento.

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['nome'])){
            
            $nome = trim($_POST['nome'])."\n";
            
            file_put_contents("nomes.txt", $nome, FILE_APPEND);

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
            <button type="submit">Enviar</button>
        </form>
        <br/><br/>
        <h2>Nomes Cadastrados:</h2>
        <?php
            $arquivo = file("nomes.txt");
            foreach ($arquivo as $n){
                echo $n ."<br/>";
            }
        ?>
    </body>
</html>