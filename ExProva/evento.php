<?php
    //Crie uma página evento.php com formulário para: Nome do participante, Evento e Ano. Cada envio deve ser salvo em um array associativo dentro de uma lista, por exemplo:
    //$participantes[] = ["nome" => "Carlos", "evento" => "Semana da Tecnologia", "ano" => 2025];
    // Exiba abaixo do formulário todos os inscritos já cadastrados: "O participante Carlos está inscrito no evento 'Semana da Tecnologia' de 2025".
    session_start();

    if(!isset($_SESSION['participante'])){
        $_SESSION['participante'] = [];
    };

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['nome']) && isset($_POST['evento']) && isset($_POST['ano'])){
            $nome = $_POST['nome'];
            $evento = $_POST['evento'];
            $ano = $_POST['ano'];

            $novo_participante = [
                "nome" => $nome,
                "evento" => $evento,
                "ano" => $ano,
            ];

            array_push($_SESSION['participante'], $novo_participante);
        }
    }
?>

<!DOCTYPE html>
<html>
    <header></header>
    <body>
        <form method="post">
            <label>Nome: </label>
            <input type="text" name="nome" required/>
            <br/>
            <label>Evento: </label>
            <input type="text" name="evento" required/>
            <br/>
            <label>Ano: </label>
            <input type="text" name="ano" required/>
            <br/>
            <button type="submit">Inscrever</button>
        </form>
        <h2>Participantes Cadastrados:</h2>
        <?php
            if($_SESSION['participante'] != null){
                foreach($_SESSION['participante'] as $p){
                    echo "O Participante ". $p['nome']. " está inscrito no evento '". $p['evento']. "' de ". $p['ano']."<br/>";
                }
            }
        ?>
    </body>
</html>