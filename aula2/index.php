<?php
    //Declarando Variáveis
    $nome = "Gustavo";
    $idade = "19";
    $cidade = "Presidente Prudente";

    //Exibindo Variáveis
    echo "$nome tem $idade anos e mora em $cidade". "<br/><br/>";
?>

<?php
    //Manipulação de String
    $frase = "O Palmeiras NÃO TEM Mundial!";

    //Mostrando Frase
    echo "Frase: ". $frase. "<br/>";
    //Contar Palavras
    echo "Qtd Palavras: ". str_word_count($frase). "<br/>";

    //Transformando Maiúscula
    echo "Maiuscula: ". strtoupper($frase). "<br/>";

    //Transgormando em Minuscula
    echo "Minuscula: ". strtolower($frase). "<br/><br/>";
?>

<?php
    //Operações Aritiméticas
    $numero1 = 10;
    $numero2 = 5;

    echo "Soma: ". $numero1 + $numero2. "<br/>"; //Soma
    echo "Subtração: ". $numero1 - $numero2. "<br/>"; //Subtração
    echo "Multiplicação: ". $numero1 * $numero2. "<br/>"; //Multiplicação
    echo "Divisão: ". $numero1 / $numero2. "<br/><br/>"; //Divisão
?>

<?php
    //Estruturas de Condição (if/else)
    $numero = 7;

    echo "Valor Informado: ". $numero. "<br/>";
    if($numero%2 === 0){ // === -> VALOR e TIPO Exato / == -> Apenas VALOR Exato
        echo "Valor Informado é PAR!<br/>";
    }else{
        echo "Valor Informado é IMPAR!<br/>";
    }

    //Condição Ternária
    echo "A Pessoa é ";
    echo ($idade >= 18) ? "Maior de Idade!" : "Menor de Idade!";
    echo "<br/>";

    $variavelbool = false;
    echo "A Variável Booleana ";
    echo ($variavelbool) ? "Possui Valor!": "Não Possui Valor!";
    echo "<br/><br/>";
?>

<?php
    //Manipulação de Array
    $nomes = ["Gustavo", "Luca", "Fabrin"];

    //Adicionar Valor
    $nomes[] = "Luis";
    array_push($nomes, "Pedro");

    //Remover Valor
    unset($nomes[2]);

    //Reorganizar
    $nomes = array_values($nomes);

    //Exibir Array Completo
    print_r($nomes);
    echo "<br/>";

    //Exibir Array Específico
    echo "Valor 1: ". $nomes[1]. "<br/>";

    //Ordenar Array (Crescente)
    sort($nomes);
    echo "Ordenado Crescente: ";
    print_r($nomes);
    echo "<br/>";

    //Ordenar Array (Decrescente)
    rsort($nomes);
    echo "Ordenado Decrescente: ";
    print_r($nomes);
    echo "<br/><br/>";
?>

<?php
    //Estrutura de Repetição
    //For
    echo "Repetição For: <br/>";
    for($i=0; $i<10; $i++){
        echo "Valor: ". $i. "<br/>";
    }
    echo "<br/>";

    //ForEach
    echo "Repetição ForEach: <br/>";
    foreach($nomes as $n){
        echo "Nomes: ". $n. "<br/>";
    }
    echo "<br/>";

    //Array_Map
    echo "Repetição Array_Map: <br/>";
    $novos_nomes = array_map(function($n) {
        return "Olá $n";
    }, $nomes);
    print_r($novos_nomes);
    echo "<br/>";
?>

<?php
    //Filtrar Dados Array
    $nomes_filtrados = array_filter($nomes, function($n){
        return strtolower($n) === "gustavo";
    });
    echo "Nome Filtrado: ";
    print_r($nomes_filtrados);
?>
