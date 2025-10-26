<?php
    //
    require_once __DIR__ . '/vendor/autoload.php';

    //Chamar a Classe
    use App\Controllers\CategoriaController;
    use App\Controllers\ProdutoController;

    //Simulando um DataBase
    session_start();
    if(!isset($_SESSION['categorias'])){
        $_SESSION['categorias'] = [['id' => 1, 'nome' => 'Eletronicos'],['id' => 2, 'nome' => 'Livros']];
    }
    if(!isset($_SESSION['produtos'])){
        $_SESSION['produtos'] = [['id' => 1, 'nome' => 'Computador'],['id' => 2, 'nome' => 'Tablet']];
    }

    //Variavel basedir
    $basedir = "/Programacao-Web-PHP/avaliacao";

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

        if($uri === "/produtos"){
            echo (new ProdutoController())->index();
            exit;
        }

        if($uri === "/produtos/criar"){
            echo (new ProdutoController())->criar();
            exit;
        }

        if($uri === "/produtos/ver"){
            $id = (int)($_GET['id'] ?? 0); 
            echo (new ProdutoController())->ver($id);
            exit;
        }
    }

    if($uri === '/api/categorias' && $metodo == 'GET'){
        echo (new CategoriaController())->list();
        exit;
    }

    if($uri === '/api/categorias' && $metodo == 'POST'){
        echo (new CategoriaController())->create();
        header('location: /Programacao-Web-PHP/avaliacao/categorias');
        exit;
    }

    if($uri === '/api/categorias/deletar' && $metodo == 'POST'){
        $id = (int)($_POST['id'] ?? 0);
        echo (new CategoriaController())->delete($id);
        header('location: /Programacao-Web-PHP/avaliacao/categorias');
        exit;
    }

    if($uri === '/api/categorias/atualizar' && $metodo == 'POST'){
        echo (new CategoriaController())->update();
        header('location: /Programacao-Web-PHP/avaliacao/categorias');
        exit;
    }


    if($uri === '/api/produtos' && $metodo == 'GET'){
        echo (new ProdutoController())->list();
        exit;
    }

    if($uri === '/api/produtos' && $metodo == 'POST'){
        echo (new ProdutoController())->create();
        header('location: /Programacao-Web-PHP/avaliacao/produtos');
        exit;
    }

    if($uri === '/api/produtos/deletar' && $metodo == 'POST'){
        $id = (int)($_POST['id'] ?? 0);
        echo (new ProdutoController())->delete($id);
        header('location: /Programacao-Web-PHP/avaliacao/produtos');
        exit;
    }

    if($uri === '/api/produtos/atualizar' && $metodo == 'POST'){
        echo (new ProdutoController())->update();
        header('location: /Programacao-Web-PHP/avaliacao/produtos');
        exit;
    }
?> 