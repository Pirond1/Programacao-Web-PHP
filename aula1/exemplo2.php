<?php
    // Manipulando valores do Formulário HTML
?>

<!DOCTYPE>
<html>
    <head></head>
    <body>
        <form>
            <label>Nome</label>
            <input type="input" name="nome"/>
            <button type="submit">Salvar</button>
        </form>
    </body>
</html>

<?php
    //Verificar valor do Formulário
    if(isset($_GET['nome'])){
        echo $_GET['nome'];
    }
?>