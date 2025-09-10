<?php
    //Encontrar o Arquivo
    require_once "produto.php";

    //Capturar Informações
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];

    //Passar Informações para Model
    $produto = new Produto($nome, $preco);

    $produto->salvar();
?>