<?php
    namespace App\Controllers;

    use App\Views\Render;

    class ProdutoController{
        //Funções de Views
        public function index(): string{
            $title = "Produtos";
            $produtos = $_SESSION['produtos'];
            return (new Render())->render('produtos/index', compact('title', "produtos"));
        }

        public function criar(): string{
            $title = "Criar Produtos";
            return (new Render())->render('produtos/criar', compact('title'));
        }

        public function ver(int $id): string{
            $title = "Ver Produtos";
            $produto = array_values(array_filter($_SESSION['produtos'], fn($item)=>$item['id'] == $id))[0] ?? NULL;
            return (new Render())->render('produtos/ver', compact('title', 'produto'));
        }

        //Funções de APIs
        public function list(){
            //Retornar JSON
            header('Content-Type: application/json; charset=utf-8');
            return json_encode($_SESSION['produtos']);
        }

        public function create(){
            if(isset($_POST['nome'])){
                //AutoIncremento 
                $id = count(array_column($_SESSION['produtos'], 'id')) +1;
                //Adicionando Nova Categoria
                $_SESSION['produtos'][] = ['id' => $id, 'nome' => $_POST['nome']];
            }
        }

        public function delete(int $id){
            foreach($_SESSION['produtos'] as $key => $item){
                if($item['id'] == $id){
                    //Remover Valor de Variável
                    unset($_SESSION['produtos'][$key]);
                    break;
                }               
            }
        }
    }
?>