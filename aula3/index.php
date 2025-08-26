<?php
    //Criação de Função com Parametros
    function saudacao($periodo, $nome){
        return "Bom $periodo, $nome!";
    }

    //Criação de Função com Tipagem
    function saudacaoTipagem(string $periodo, string $nome){
        return "Boa $periodo, $nome!";
    }

    //Criação de Função com Paramentros sem Valor
    function saudacaoSValor(string $periodo, string $nome = "Maria Clara"){
        return "Boa $periodo, $nome!";
    }

    //Chamando Função
    echo saudacao("Dia", "Gustavo");
    echo "<br/>";
    echo saudacaoTipagem("Tarde", "Eduardo");
    echo "<br/>";
    echo saudacaoSValor("Noite");
    echo "<br/><br/>";

    //Função com Array
    $array = [1,2,3];
    function soma(int $n1, int $n2, int $n3){
        return $n1 + $n2 + $n3;
    }
    echo soma($array[0],$array[1],$array[2])." ou ". soma(...$array);
    echo "<br/>";

    //Espelhamento
    function somaEspelhamento(...$array){
        if(count($array)== 0){
            return "Array Vazio!";
        }
        return array_sum($array);
    }
    echo somaEspelhamento(4,5,6);
    echo "<br/><br/>";

    //Criação de Função Booleana
    function palindrome(string $palavra){
        $palavra = strtolower($palavra);
        $palavra = preg_replace('/[^a-z]/','',$palavra);
        return $palavra === strrev($palavra);
    }
    $palavra = "Pau";
    $resultado = palindrome($palavra);
    echo $resultado ? "$palavra é palindrome" : "$palavra não é palidrome";
    echo "<br/><br/>";
?>

<?php
    //Manipulando Arquivos
    //Lendo Arquivo
    $conteudo = file_get_contents("mensagem.txt");
    echo $conteudo;
    echo "<br/>";

    //Escrever no Arquivo
    $linha = date("y-m-d H:i:s"). " - Acesso Registrado\n";
    file_put_contents("logs.txt", $linha, FILE_APPEND);
    echo "Acesso Registrado!";
    echo "<br/><br/>";

    //Arquivo CSV
    $caminho = __DIR__ . "/clientes.csv";

    if(!file_exists($caminho)){
        echo "Arquivo Inexistente!";
    }

    //Lendo CSV
    $handle = fopen($caminho, "r"); //handle é Ponteiro, Sempre na Próxima Linha

    if($handle){
        $cabecalho = fgetcsv($handle, 0, ',', '"', '\\'); //$handle -> Arquivo / 0 -> Quantidade de Caracteres (Sem Limite) / ',' -> Separador / '"' -> Tipo de valor (Texto) / '\\' -> Separador de Linhas

        while (($dados = fgetcsv($handle, 0, ',', '"', '\\')) !== false){
            echo "Nome: $dados[0] - Email: $dados[1] - Idade: $dados[2]<br/>";
        }

        //Fechando CSV
        fclose($handle);
    }
?>