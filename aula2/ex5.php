<?php
    //Gerador de tabela
    $linhas = 0;
    $colunas = 0;
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['linhas']) && isset($_POST['colunas'])){
            $linhas = $_POST['linhas'];
            $colunas = $_POST['colunas'];

        }
    }
?>

<!DOCTYPE>
<html>
    <head></head>
    <body>
        <form method="post">
            <label>Numero Linhas: </label>
            <input type="number" name="linhas" required/>
            <br/>
            <label>Numero Colunas: </label>
            <input type="number" name="colunas" required/>
            <br/>
            <button type="submit">Enviar</button>
        </form>
        <?php
            echo "<table>";
            for($i=0; $i<$linhas; $i++){
                echo "<tr>";
                for($j=0; $j<$colunas; $j++){
                    echo "<th>Coluna</th>";
                }
                echo "</tr>";
            }
            echo "</table>";
        ?>
    </body>
</html>