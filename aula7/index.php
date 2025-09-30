<?php
    //
    require_once __DIR__ . '/vendor/autoload.php';

    //Chamar a Classe
    use App\teste;
    use App\Controllers\CategoriaController;

    //Simulando um DataBase
    session_start();
    if(!isset($_SESSION['categorias'])){
        $_SESSION['categorias'] = [['id' => 1, 'nome' => 'Eletronicos'],['id' => 2, 'nome' => 'Livros']];
    }

    //Variavel basedir
    $basedir = "/programacao-web-php/aula7";

    //Pegar URL Crua (Sem Tratamento)
    $uri = $_SERVER["REQUEST_URI"] ?? "/";

    //Tratamento QUERY STRING (ex: ?parametro=valor)
    $uri = strtok($uri, "?");

    //Remover Prefixo (/Programacao-Web-PHP) da URI
    if(str_starts_with($uri, $basedir)){
        //Remover String da URI
        $uri = substr($uri, strlen($basedir));
    }

    //Remover Barra Final
    $uri = rtrim($uri, '/');

    //Método da Requisição
    $metodo = $_SERVER['REQUEST_METHOD'];

    //Criação de Roda das Views
    if($metodo == 'GET'){
        //Rotas de Categoria
        if($uri === "/categorias"){
            echo (new CategoriaController())->index();
            exit;
        }

        if($uri === "/categorias/criar"){
            echo (new CategoriaController())->criar();
            exit;
        }

        if($uri === "/categorias/ver"){
            $id = (int)($_GET['id'] ?? 0); 
            echo (new CategoriaController())->ver($id);
            exit;
        }
    }
?> 