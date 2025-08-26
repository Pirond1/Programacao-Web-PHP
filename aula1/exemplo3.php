<?php
    // Somando valores do Formulário HTML
?>

<!DOCTYPE>
<html>
    <head></head>
    <body>
        <form>
            <label>Valor 1</label>
            <input type="input" name="n1"/>
            <br/>
            <label>Valor 2</label>
            <input type="input" name="n2"/>
            <br/>
            <button type="submit">Somar</button>
        </form>
    </body>
</html>

<?php
    //Somar Valores do Formulário
    if(isset($_GET['n1']) && isset($_GET['n2'])){
        $soma = $_GET['n1'] + $_GET['n2'];
        echo "Resultado: " . $soma;  
    }
?>